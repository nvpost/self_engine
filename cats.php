<?php
require './func.php';
include_once('./classes/DataCache.php');
//require './classes/DataCache.php';



function checkCache($cacheName, $childCats = 0){
    // Название кеша - каталог с количеством
    $dataCache = new DataCache($cacheName);
    $getDataFromCache = $dataCache->initCacheData();

    if ($getDataFromCache) {
        // Получаем кэшированные данные из кэша
        //echo "из cache";
        $cats = $dataCache->getCacheData();
    } else {
        // Исполняем этот код, если кеширование отключено или данные в кеше старые

        $cats = doCatsArray($childCats);
    //     Обновляем данные в кэше
        $dataCache->updateCacheData($cats);
    }
    //deb($cats);
    return $cats;
}

function doCatsArray($childCats){
    global $db;
    global $rootCats;
    global $limit;
    $cats = array();
    $cats_res = $db->query("SELECT * FROM category WHERE parent_id='".$childCats."'  LIMIT ".$limit);

    //Проверка на вывод всех блоков
//    if($childCats){
//        echo ($childCats);
//        echo "FROM category WHERE parent_id";
//        $cats_res = $db->query("SELECT * FROM category WHERE parent_id=".$childCats);
//    }else{
//        echo "Внутри главной ветки ".$childCats;
//        $cats_res = $db->query("SELECT * FROM category");
//    }



    while ($cat = $cats_res->fetch(PDO::FETCH_ASSOC))
    {
        //deb($cat);
        $cats[$cat['cat_id']]=$cat;
        $cats[$cat['cat_id']]['prods_count'] = addCountToCats($cat['cat_id']);

    }

        //Выводим главные категории
        /////////////////
        //deb($cats);
//        function rootCatsFoo($i){
//            global $childCats;
//            deb($childCats);
//            return $i['parent_id'] == (int)$childCats;
//        }

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


function checkProdCache($cacheName, $childCats = 0){
    // Название кеша - каталог с количеством
    $dataCache = new DataCache($cacheName);
    $getDataFromCache = $dataCache->initCacheData();

    if ($getDataFromCache) {
        // Получаем кэшированные данные из кэша
        //echo "из cache";
        $products = $dataCache->getCacheData();
        //deb($products);
    } else {
        // Исполняем этот код, если кеширование отключено или данные в кеше старые

        $products = doProdsArray($childCats);
        //     Обновляем данные в кэше
        $dataCache->updateCacheData($products);
    }
    //deb($cats);


    return $products;
}

function doProdsArray($parent_id){
    global $db;
    global $columns;
    global $limit;
    $sql = "SELECT $columns FROM products 
    LEFT JOIN img ON (products.prod_id = img.prod_id) 
    WHERE category_id='".$parent_id."'
    GROUP BY products.prod_id, img.prod_id Limit ".$limit;

    $products_res = $db->query($sql);
    $products = $products_res->fetchAll(PDO::FETCH_ASSOC);

    return $products;
}











