<?php
require './cats.php';
require './drow/drowCatalogItem.php';



$cacheName = $_GET['cat'];
$db_label = str_replace('_', ' ', $cacheName);
//deb($db_label);
$cat_id_res = $db->query("SELECT * FROM category WHERE label='".$db_label."'");

$cat_id = $cat_id_res->fetch(PDO::FETCH_ASSOC);

$parent_id = $cat_id['cat_id'];
deb($cacheName);
$rootCats = checkCache($cacheName, $parent_id);

//deb($rootCats);


if($rootCats){
    echo "<div class='showcase_container'>";
    foreach($rootCats as $key => $rootCat){
        drowShowCaseItem($rootCat);
    }
    echo "</div>";
}





//deb($rootCats);

