<?php
require './cats.php';
require './drow/drowCatalogItem.php';



$cacheName = $_GET['cat'];
$db_label = str_replace('_', ' ', $cacheName);
//deb($db_label);
$cat_id_res = $db->query("SELECT * FROM category WHERE label='".$db_label."'");


$cat_id = $cat_id_res->fetch(PDO::FETCH_ASSOC);

$parent_id = $cat_id['cat_id'];
//deb($cacheName);
$cat_counter = $db->query("SELECT * FROM category WHERE parent_id='".$parent_id."'")->rowCount();
deb($cat_counter);


$rootCats = checkCache($cacheName, $parent_id);

//deb($rootCats);


if($rootCats){
    echo "<div class='showcase_container'>";
    foreach($rootCats as $key => $rootCat){
        drowShowCaseItem($rootCat);
    }
    echo "</div>";
}
//deb(count($rootCats));
if(count($rootCats)<$cat_counter){
    echo "<div class='show_more_items'>";
    echo "<a href='".$home_url."category/".$cacheName."/".$limit."'>Следующие категории</a>";
    echo "</div>";

}





//deb($rootCats);

