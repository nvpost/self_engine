<?php
require __DIR__.'/func.php';
include_once(__DIR__.'/classes/DataCache.php');
//require_once __DIR__.'/classes/CategoryDataClass.php';
//require './classes/DataCache.php';



function checkCache($cacheName, $childCats = 0, $offset=0){
    // Название кеша - каталог с количеством
    $dataCache = new DataCache($cacheName);
    $getDataFromCache = $dataCache->initCacheData();
//    deb($cacheName, 1);
//    deb($childCats, 1);
//    deb($offset, 1);

    if ($getDataFromCache) {
        // Получаем кэшированные данные из кэша
        //echo "из cache";
        $cats = $dataCache->getCacheData();
    } else {
        // Исполняем этот код, если кеширование отключено или данные в кеше старые

        $cats = doCatsArray($childCats, $offset);
    //     Обновляем данные в кэше
        $dataCache->updateCacheData($cats);
    }
    //deb($cats);
    return $cats;
}

function doCatsArray($childCats, $offset){
    echo $childCats;
    global $db;
    global $rootCats;
    global $cat_limit;

    $cats = array();

    $cat_sql = "SELECT * FROM category 
                WHERE parent_id='".$childCats."'
                LIMIT ".(int)$offset.", ".$cat_limit;
    $cats_res = $db->query($cat_sql);



    while ($cat = $cats_res->fetch(PDO::FETCH_ASSOC))
    {
        //deb($cat);
        $cats[$cat['cat_id']]=$cat;
        $cats[$cat['cat_id']]['prods_count'] = addCountToCats($cat['cat_id']);

    }


        $rootCats = array_filter($cats, function($i) use($childCats){
            return $i['parent_id'] == (int)$childCats;
        });

        //$rootCats = addSecondCats($rootCats, $cats);
        //$rootCats = thirtCatArray($rootCats, $cats);
        //deb($rootCats);
    return $rootCats;

}

function addCountToCats($category_id){
    global $db;
    $prod_count = $db->query("SELECT * FROM products WHERE category_id = $category_id")->rowCount();
    return $prod_count;
}


function addSecondCats($rootCats, $cats){
    foreach ($rootCats as $k => $i) {
        $secondCats = array_filter($cats, function($i) use ($k, $rootCats){
            return $i['parent_id'] == $rootCats[$k]['cat_id'];
        });
        //deb($secondCats);
        $rootCats[$k]['childs'] = $secondCats;
    }
    return $rootCats;
}






function thirtCatArray($rootCats, $cats){
    foreach ($cats as $k => $i){
      foreach ($rootCats as $rk => $ri){
          foreach($ri['childs'] as $sk=>$si){
              if($si['cat_id']==$i['parent_id']){
                  $rootCats[$rk]['childs'][$sk]['childs'][$i['cat_id']] = $i;
              }
          }
      }
    }
    return $rootCats;
}

 // TODO пернести в функцию обработки категорий
function checkProdCache($cacheName, $childCats = 0){
    // Название кеша - каталог с количеством
    //deb($cacheName);
    $dataCache = new DataCache($cacheName);
    $getDataFromCache = $dataCache->initCacheData();

    if ($getDataFromCache) {
        // Получаем кэшированные данные из кэша
        //echo "из cache";
        $products = $dataCache->getCacheData();
        //deb($products);
    } else {
        // Исполняем этот код, если кеширование отключено или данные в кеше старые

        //echo "Новый список товаров";

        $products = doProdsArray($childCats);
        //     Обновляем данные в кэше
        $dataCache->updateCacheData($products);
    }
    //deb($cats);


    return $products;
}

function doProdsArray($parent_id){
    global $prod_limit;
    global $db;
    global $columns;

    $prod_fetch_start = microtime(true);


    //left join работает медлено, замена на получение из функции
    $sql = "SELECT * FROM products 
    WHERE category_id='".$parent_id."' Limit ".$prod_limit;

    $products_res = $db->query($sql);
    $products = $products_res->fetchAll(PDO::FETCH_ASSOC);
    foreach ($products as $k => $p){
        $products[$k]['src'] = getImgForShowcaseProduct($p['prod_id']);

    }

    //$prod_fetch_fin = microtime(true);
    //$prod_fetch_time = 't: '.round(microtime(true) - $prod_fetch_start, 4).'s.';
    //c_deb($prod_fetch_time);

    return $products;
}

function getImgForShowcaseProduct($pid){
    global $db;
    $img_res = $db->query("SELECT * FROM img WHERE prod_id=".$pid);
    $img = $img_res->fetch(PDO::FETCH_ASSOC);
    return $img['url'];
}


/*Меню для категорий, все блоки*/

function checkMenuCache($parent_id){
    global $db;
    $cacheName = 'menu'.$parent_id;
    $dataCache = new DataCache($cacheName);
    $getDataFromCache = $dataCache->initCacheData();

    if ($getDataFromCache) {
        // Получаем кэшированные данные из кэша
        //echo "из cache";
        $cat_res = $dataCache->getCacheData();
        //deb($products);
    } else {

        //     Обновляем данные в кэше

        $cat_res = doMenuLevel($parent_id);
        $cat_res = doSecondLevel($cat_res);

        $dataCache->updateCacheData($cat_res);
    }
    //deb($cats);
    return $cat_res;
}

function doMenuLevel($parent_id){
    global $db;
    $sql = "SELECT * FROM category WHERE parent_id=".$parent_id;

    $cat_res = $db->query($sql);

    $cat_res = $cat_res->fetchAll(PDO::FETCH_ASSOC);
    if(!$cat_res){
        //ошибка исправить
        //deb($db->errorInfo());
    }
    return $cat_res;
}

function doSecondLevel($cat_item){
    foreach ($cat_item as $k =>$rootItem){
        $sub_level_items = doMenuLevel($rootItem['cat_id']);
        foreach($sub_level_items as $sk => $sub_item){
            $count = addProductsCount($sub_item['cat_id']);
            $childCount = checkChildCats($sub_item['cat_id']);

            if($count==0&&$childCount==0){
                //c_deb("удаляем ". $sk);
                unset($sub_level_items[$sk]);
            }else{
                $sub_level_items[$sk]['prod_count'] = $count;
                $sub_level_items[$sk]['child_count'] = $childCount;
            }


        }
        $cat_item[$k]['sub_menu'] = $sub_level_items;
    }

    return $cat_item;
}

function addProductsCount($cat_id){
    global $db;
    $sql = "SELECT * FROM products WHERE category_id=".$cat_id;
    $prod_count = $db->query($sql)->rowCount();

    return $prod_count;
}
function checkChildCats($cat_id){
    global $db;
    $sql = "SELECT * FROM category WHERE parent_id=".$cat_id;
    $cats_count = $db->query($sql)->rowCount();

    return $cats_count;
}







$rootCats = checkCache('catsAndCounts', 0);
//deb($rootCats);
//контент
$menuTree = checkMenuCache(0);
//addImgToCats($id)


















