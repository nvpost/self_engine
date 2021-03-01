<?php

require './drow/drowProductsShowcase.php';





$cacheName = $_GET['cat'].'_prod';

//$columns = "products.prod_id pid, products.name name, products.descr descr, products.price price";
// из subCategories
//deb($parent_id);
//
//    GROUP BY products.prod_id, img.prod_id
//."' LEFT JOIN img ON products.prod_id = img.prod_id"
//$sql = "SELECT $columns FROM products WHERE category_id='".$parent_id."' LEFT JOIN img ON  pid=img_pid ";
//$sql = "SELECT $columns FROM products
//    LEFT JOIN img ON (products.prod_id = img.prod_id)
//    WHERE category_id='".$parent_id."'
//    GROUP BY products.prod_id, img.prod_id Limit ".$limit;
//
//$products_res = $db->query($sql);
//deb($db->errorInfo());
//deb($parent_id);
//deb($cacheName);
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
