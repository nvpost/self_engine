<?php
require "./func.php";
require './drow/drowProduct.php';

//print_r($_GET);

//Несколько картинок к продукту

$cacheName = $_GET['noz'];
$db_label = str_replace('_', ' ', $cacheName);
//deb($db_label);
$sql = "SELECT * FROM products WHERE name='".$db_label."'";

$prod_res = $db->query($sql);
$prod = $prod_res->fetch(PDO::FETCH_ASSOC);

$img_sql = "SELECT * FROM img WHERE prod_id='".$prod['prod_id']."'";
$img_prod_res = $db->query($img_sql);

while($imgs = $img_prod_res->fetch(PDO::FETCH_ASSOC)){
    $row= array();
    $row['title'] = $imgs['title'];
    $row['src'] = $imgs['url'];
    $prod['imgs'][] = $row;
}

echo "<div class='showcase_container'>";
//foreach($prod as $key => $item){
    drowProduct($prod);
//}
echo "</div>";

   // deb($prod);
 //   deb($imgs);

//$parent_id = $cat_id['cat_id'];
//deb($cacheName);
//$rootCats = checkCache($cacheName, $parent_id);