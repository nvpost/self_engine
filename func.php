<?php
require __DIR__.'/sql/sql_data_pass.php';


$home_url = "/noz_self/self_engine/";
$home_url = "/noz_template/";
$cat_limit = 12;
$prod_limit = 12;
$subCatsLimit = 12;

$columns = "products.id AS id, 
            products.prod_id AS pid, 
            products.name AS product_name, 
            products.descr AS descr, 
            products.price AS price, 
            products.url AS url, 
            products.vendor AS vendor, 
            img.id AS img_id, 
            img.prod_id AS img_pid, 
            img.url AS src, 
            img.title AS title";


function deb($v, $h=0){
    if($h) echo "<hr>";
    echo "<pre>";
    print_r($v);
    echo "</pre>";
    if($h) echo "<hr>";
}
function c_deb($v){
    echo "<script>";
    echo "console.log('".$v."')";
    echo "</script>";
}


function doHeader($title, $description="Интернет магазин ножей"){
    global $home_url;
    $headerHtml = "<head>";
    $headerHtml .= "<meta http-equiv='content-type' content='text/html; charset=utf-8'>";
    $headerHtml .= "<title>".$title."</title>";
    $headerHtml .= "<meta name='description' content='".$description."' />";

    $headerHtml .= "<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>";
	$headerHtml .= "<link rel='shortcut icon' href='assets/img/favicon.png'>";

	$headerHtml .= "<link rel='stylesheet' href='".$home_url."assets/css/slick.min.css'>";
	$headerHtml .= "<link rel='stylesheet' href='".$home_url."assets/css/bootstrap-grid.css'>";
	$headerHtml .= "<link rel='stylesheet' href='".$home_url."assets/css/font-awesome.min.css'>";
	$headerHtml .= "<link rel='stylesheet' href='".$home_url."assets/css/nice-select.css'>";
	$headerHtml .= "<link rel='stylesheet' href='".$home_url."assets/css/animate.css'>";
	$headerHtml .= "<link rel='stylesheet' href='".$home_url."assets/css/style.css'>";


	$headerHtml .= "<link rel='stylesheet' href='".$home_url."assets/style.css'>";
//href='".__DIR__."

    $headerHtml .= "<head>";

    echo $headerHtml;
}

function doFooter(){
    global $home_url;
    $footerHtml = "<script src='".$home_url."assets/script.js'></script>";

    echo $footerHtml;
}








function addImgToCats($id){
    global $columns;
    global $error_cats;
    global $db;

    $res_cats_prods = $db->query("SELECT * FROM products WHERE products.category_id =".$id);
    if(!$res_cats_prods){
        //deb($db->errorInfo());
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
        //deb($id);

        // Перебираем дочерние категории если есть что перебирать
        if($childs_cats_id){
            //deb("Вошли в еслии");
            foreach ($childs_cats_id as $c){
                //deb("Выполним поиск еще раз в категории ".$c['cat_id']." - ".$c['label']);
                return addImgToCats($c['cat_id']);
            }
        }else{
            return false;
        }

        //deb($res_childs_cats->fetchColumn());
    }


}


function doUrl($g){
    //$g = $_GET['cat|noz']
    global $cat_limit;

    if(strpos($g, '/')&&explode('/', $g)[1]!=""){
        $exploded_url = explode('/', $g);
        $routeArray['cacheName'] = $exploded_url[0].$exploded_url[1];
        $routeArray['pure_cat_label'] = $exploded_url[0];
        $routeArray['offset'] = ($exploded_url[1]-1)*$cat_limit;;
        //echo "покажем категорию ".$exploded_url[0]." и отступ ".$exploded_url[1];
        //echo "<br> Товары с ".($exploded_url[1]-1)*$cat_limit." по ".$exploded_url[1]*$cat_limit;
    }else{
        $cacheName = str_replace("/", "", $g);
        $routeArray['cacheName'] = $cacheName;
        $routeArray['pure_cat_label'] = $cacheName;
    }
    return $routeArray;
}


function checkPagination($visiableItems, $itemCounter){
    if($visiableItems<$itemCounter){
        $pages = ceil($itemCounter)/$visiableItems;
        echo "<div class='show_more_items'>";
        //echo "<a href='".$home_url."category/".$cacheName."/".$limit."'>Следующие категории</a>";
        echo pagination($pages);
        echo "</div>";

    }
}

function pagination($pages){
    global $home_url;
    global $routeArray;
    $paginationHtml="<div class='pagination_row'>";
    for($i=1;$i<=$pages; $i++){

        $paginationUrl = $home_url."category/".$routeArray['pure_cat_label']."/".$i;
        //c_deb($paginationUrl);
        $paginationHtml .= "<div class = 'pagination_box'>";
        $paginationHtml .= "<a href='".$paginationUrl."'>".$i."</a>";
        $paginationHtml .= "</div>";
    }
    $paginationHtml .="</div>";
    return $paginationHtml;
}


function getRandomIng($item = false){
    $r = rand(0, 8);

    if($item){
        $item['src'] = $r.".jpg";
        return $item;
    }
    $img = array();
    $img['url'] = $r.".jpg";
    $img['src'] = $r.".jpg";
    $img['title'] = "Случайная картинка";

    return($img);
}


function addImgToProd($prod_id, $all=false){
//    global $db;
//    $sql = "SELECT * FROM img WHERE prod_id=".$prod_id;
//    $imgs_res = $db->query($sql);
//    if($all){
//        $imgs = $imgs_res->fetchAll(PDO::FETCH_ASSOC);
//    }else{
//        $imgs = $imgs_res->fetch(PDO::FETCH_ASSOC);
//    }
    $imgs = getRandomIng();
    return $imgs;
}




?>


