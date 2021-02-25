<?php
require './sql/sql_data_pass.php';


$home_url = "/noz_self/self_engine/";

$columns = "products.prod_id pid, products.name product_name, products.descr descr, products.price price, img.prod_id img_pid, img.url src, img.title title";


function deb($v, $h=0){
    if($h) echo "<hr>";
    echo "<pre>";
    print_r($v);
    echo "</pre>";
    if($h) echo "<hr>";
}


function addImgToCats($id){
    global $columns;
    global $error_cats;
    global $db;
//    deb($id);
//    $sql="SELECT $columns FROM products LEFT JOIN img ON (products.prod_id = img.prod_id) WHERE category_id='".$id."'";
//    $res_cats_prods = $db->query($sql);
    $res_cats_prods = $db->query("SELECT * FROM products WHERE products.category_id =".$id);
    if(!$res_cats_prods){
        deb($db->errorInfo());
    }

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
        $childs_cats_id = $res_childs_cats->fetchAll(PDO::FETCH_ASSOC);
        deb($id);

        // Перебираем дочерние категории если есть что перебирать
        if($childs_cats_id){
            deb("Вошли в еслии");
            foreach ($childs_cats_id as $c){
                deb("Выполним поиск еще раз в категории ".$c['cat_id']." - ".$c['label']);
                return addImgToCats($c['cat_id']);
            }
        }else{
            return false;
        }

        //deb($res_childs_cats->fetchColumn());
    }


}
?>


<link rel="stylesheet" href="<?=$home_url?>/style.css">
