<?php
require './sql/sql_data_pass.php';


$home_url = "/noz_self/self_engine/";




function deb($v, $h=0){
    if($h) echo "<hr>";
    echo "<pre>";
    print_r($v);
    echo "</pre>";
    if($h) echo "<hr>";
}



function addImgToCats($id){
    global $db;
    //deb($id);
    $res_cats_prods = $db->query("SELECT * FROM products WHERE products.category_id =".$id);
    //deb($db->errorInfo());
    $cats_prods = $res_cats_prods->fetch(PDO::FETCH_ASSOC);
    if($res_cats_prods->rowCount()>0){
        //deb('Выборка картинок');
        //deb($cats_prods);
        $res_img = $db->query("SELECT * FROM img WHERE prod_id =".$cats_prods['prod_id'] );
        $imgs = $res_img->fetch(PDO::FETCH_ASSOC);
        //deb($imgs);
        return $imgs;

    }else{

        //Если нет дочерних товаров смотрим в дочерней рубрике
        $res_childs_cats = $db->query("SELECT * FROM category WHERE parent_id =".$id );
        $childs_cats_id = $res_childs_cats->fetch(PDO::FETCH_ASSOC);
        //deb($id);
        //deb($childs_cats_id);
        //deb("Выполним поиск еще раз в категории ".$childs_cats_id['cat_id']);
        return addImgToCats($childs_cats_id['cat_id']);

    }

}

?>

<link rel="stylesheet" href="<?=$home_url?>/style.css">
