<?php
require './func.php';

include_once('./classes/DataCache.php');




// Название кеша - каталог с количеством
$dataCache = new DataCache('catsAndCounts');

$getDataFromCache = $dataCache->initCacheData();

if ($getDataFromCache) {
    // Получаем кэшированные данные из кэша
    //echo "из cache";
    $cats = $dataCache->getCacheData();
} else {
    // Исполняем этот код, если кеширование отключено или данные в кеше старые

    // Создание каких-то данных или какая-то ресурсоёмкая задача

    //Получаем список категорий
    //$cats = $db->query("SELECT * FROM category")->fetchAll(PDO::FETCH_ASSOC);

    $cats = doCatsArray();
//     Обновляем данные в кэше
    $dataCache->updateCacheData($cats);
}

function doCatsArray(){
    global $db;
    global $rootCats;
    $cats_res = $db->query("SELECT * FROM category");

    $cats = array();
    while ($cat = $cats_res->fetch(PDO::FETCH_ASSOC))
    {
        $cats[$cat['cat_id']]=$cat;
        $cats[$cat['cat_id']]['prods_count'] = addCountToCats($cat['cat_id']);

    }

        //Выводим главные категории
        /////////////////
        function rootCatsFoo($i){
            return $i['parent_id'] == 0;
        }
        $rootCats = array_filter($cats, 'rootCatsFoo');

        $rootCats = addSecondCats($rootCats, $cats);
        $rootCats = thirtCatArray($rootCats, $cats);
        deb($rootCats);

}
function addSecondCats($rootCats, $cats){
    foreach ($rootCats as $k => $i) {
        $secondCats = array_filter($cats, function($i) use ($k, $rootCats){
            //global $rootCats;
            //global $k;
            //deb($k);
            return $i['parent_id'] == $rootCats[$k]['cat_id'];
        });
        //deb($secondCats);
        $rootCats[$k]['childs'] = $secondCats;
    }
    return $rootCats;
}



function addCountToCats($category_id){
    global $db;
    $prod_count = $db->query("SELECT * FROM products WHERE category_id = $category_id")->rowCount();
    return $prod_count;
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











