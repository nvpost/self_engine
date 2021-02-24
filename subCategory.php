<?php
require './cats.php';
require './drowCatalogItem.php';



$cacheName = $_GET['cat'];
$db_label = str_replace('_', ' ', $cacheName);

$cat_id_res = $db->query("SELECT * FROM category WHERE label='".$db_label."'");

$cat_id = $cat_id_res->fetch(PDO::FETCH_ASSOC);
$parent_id = $cat_id['cat_id'];


$rootCats = checkCache($cacheName, $parent_id);
foreach($rootCats as $key => $rootCat){
    drowShowCaseItem($rootCat);
}
//deb($rootCats);

