<?php

require './drow/drowProductsShowcase.php';



$pure_lable = $_GET['cat'];
$cacheName = $pure_lable.'_prod';


$products = checkProdCache($cacheName, $parent_id);


$prods_counter = $db->query("SELECT * FROM products WHERE category_id='".$parent_id."'")->rowCount();
//deb($prods_counter);

if($products){
    echo "<div class='showcase_container showcase_container_products'>";
    foreach($products as $key => $product){
        drowProductsShowcaseFoo($product);
    }
    echo "</div>";
}

checkPagination(count($products), $prods_counter);

//if(count($products)<$prods_counter){
//    $pages = ceil($prods_counter/count($products));
//    echo "<div class='show_more_items'>";
//    //echo "<a href='".$home_url."category/".$cacheName."/".$limit."'>Следующие категории</a>";
//    echo pagination($pages);
//    echo "</div>";
//
//}


if(count($products)<$prods_counter){
    echo "<div class='show_more_items'>";
    echo "<a href='".$home_url."category/".$pure_lable."/".$limit."'>Все товары категории ".$_GET['cat']."</a>";
    echo "</div>";

}
