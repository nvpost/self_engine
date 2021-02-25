<?php

require './drow/drowProductItem.php';







//$columns = "products.prod_id pid, products.name name, products.descr descr, products.price price";
// из subCategories
//deb($parent_id);
//."' LEFT JOIN img ON products.prod_id = img.prod_id"
//$sql = "SELECT $columns FROM products WHERE category_id='".$parent_id."' LEFT JOIN img ON  pid=img_pid ";
$sql = "SELECT $columns FROM products LEFT JOIN img ON (products.prod_id = img.prod_id) WHERE category_id='".$parent_id."' GROUP BY products.prod_id";

$products_res = $db->query($sql);
//deb($db->errorInfo());

$products = $products_res->fetchAll(PDO::FETCH_ASSOC);
deb(count($products));
echo "<div class='showcase_container showcase_container_products'>";
foreach($products as $key => $product){
    drowProductItem($product);
}
echo "</div>";
