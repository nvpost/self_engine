<?php
require './func.php';

include_once('./classes/DataCache.php');
$start = microtime(true);


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
    $cats_res = $db->query("SELECT * FROM category");

    $cats = array();
    while ($cat = $cats_res->fetch(PDO::FETCH_ASSOC))
    {
        $cats[$cat['cat_id']]=$cat;
        $cats[$cat['cat_id']]['prods_count'] = addCountToCats($cat['cat_id']);

    }


//    if   (mysql_num_rows($result) > 0){
//        $cats = array();
////В цикле формируем массив разделов, ключом будет id родительской категории, а также массив разделов, ключом будет id категории
//        while($cat =  mysql_fetch_assoc($result)){
//            $cats_ID[$cat['id']][] = $cat;
//            $cats[$cat['parent_id']][$cat['id']] =  $cat;
//        }
//    }


//    обходим категории и добавляем количество
//    foreach ($cats as $key => $val){
//        $cats[$key]['prods_count'] = addCountToCats($cats[$key]['cat_id']);
//    }


//     Обновляем данные в кэше
    $dataCache->updateCacheData($cats);
}



function addCountToCats($category_id){
    global $db;
    $prod_count = $db->query("SELECT * FROM products WHERE category_id = $category_id")->rowCount();
    return $prod_count;
}







//echo 'Время выполнения скрипта: '.round(microtime(true) - $start, 4).' сек.';

//////////////////
//Выводим главные категории
/////////////////
function rootCatsFoo($i){
    return $i['parent_id'] == 0;
}

$rootCats = array_filter($cats, 'rootCatsFoo');
/////


/// вторые категории
/// ////////////
///


foreach ($rootCats as $k => $i) {
    $secondCats = array_filter($cats, function($i){
        global $rootCats;
        global $k;
        return $i['parent_id'] == $rootCats[$k]['cat_id'];
    });
    $rootCats[$k]['childs'] = $secondCats;
}




function thirtCatArray(){
    global $cats;
    global $rootCats;
    foreach ($cats as $k => $i){
      //deb($i['parent_id']);
      foreach ($rootCats as $rk => $ri){
//          $thirdForSecond = array();
          foreach($ri['childs'] as $sk=>$si){

              if($si['cat_id']==$i['parent_id']){
                  //deb($i);
                  $rootCats[$rk]['childs'][$sk]['childs'][$i['cat_id']] = $i;
              }
          }
      }
    }
}
thirtCatArray();
$sc = 0;
foreach ($rootCats as $k => $i){
    $sc +=count($i['secondCats']);
}

//deb($sc+count($rootCats));
//deb($rootCats);










