<?php

require './drow/drowProductsShowcase.php';





$cacheName = $_GET['cat'].'_prod';


$products = checkProdCache($cacheName, $parent_id);


$prods_counter = $db->query("SELECT * FROM products WHERE category_id='".$parent_id."'")->rowCount();
deb($prods_counter);

if($products){
    echo "<div class='showcase_container showcase_container_products'>";
    foreach($products as $key => $product){
        drowProductsShowcaseFoo($product);
    }
    echo "</div>";
}


if(count($products)<$prods_counter){
    echo "<div class='show_more_items'>";
    echo "<a href='".$home_url."category/".$cacheName."/".$limit."'>Все товары категории ".$_GET['cat']."</a>";
    echo "</div>";

}
