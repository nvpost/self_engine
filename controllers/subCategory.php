<?php
require './cats.php';
require './drow/drowCatalogItem.php';



$cacheName = $_GET['cat'];

//если есть слешь то запросим категории с отступом

//TODO: передть в функцию кеша имя категории с отсупом и сам отступ (лимит берем из func) - ок

//TODO: Сделать домашнюю страницу с лимит = 1 редиректом на главную страницу категории / товара
//TODO: переделать ссылку в пагинации (чтобы не дублировалась)
//TODO: Много категорий в конце


//deb($_GET);
global $routeArray;
$routeArray=[
    'cacheName'=>'',
    'pure_cat_label'=>'',
    'offset' => '',
];



$routeArray = doUrl($_GET['cat']);

//deb($routeArray);
$db_label = str_replace('_', ' ', $routeArray['pure_cat_label']);
//$db_label = str_replace('_', ' ', $pure_cat_label);
//deb($db_label);
$cat_id_res = $db->query("SELECT * FROM category WHERE label='".$db_label."'");


$cat_id = $cat_id_res->fetch(PDO::FETCH_ASSOC);

$parent_id = $cat_id['cat_id'];
//deb($parent_id);
$cat_counter = $db->query("SELECT * FROM category WHERE parent_id='".$parent_id."'")->rowCount();

$rootCats = checkCache($routeArray['cacheName'], $parent_id, $routeArray['offset']);



if($rootCats){
    echo "<div class='showcase_container'>";
    foreach($rootCats as $key => $rootCat){
        drowShowCaseItem($rootCat);
    }
    echo paginationOrShowMore();
    echo "</div>";

}
//deb(count($rootCats));
function paginationOrShowMore(){
    global $cat_counter;
    global $subCatsLimit;
    global $routeArray;
    $showMoreHtml ="";
    if($cat_counter>$subCatsLimit){
        $showMoreHtml = "<a href='".$home_url."category/".$cacheName."/all'>Показать все категории из ".$routeArray['cacheName']."</a>";
    }
    return $showMoreHtml;
}

if(count($rootCats)<$cat_counter){
    $pages = ceil($cat_counter/count($rootCats));
    echo "<div class='show_more_items'>";
    //echo "<a href='".$home_url."category/".$cacheName."/".$limit."'>Следующие категории</a>";
    echo pagination($pages);
    echo "</div>";

}







//deb($rootCats);

