<meta http-equiv="content-type" content="text/html; charset=utf-8">

<?php
header('Content-Type: text/html; charset=utf-8');

$start = microtime(true);
//require './cats.php';
print_r($_SERVER['REQUEST_URI']);
if(!$_GET){
    require './controllers/home.php';
    //deb('главная');
}
else{
    //print_r($_GET);
    if($_GET['cat']){
        require './controllers/subCategory.php';
        require './controllers/productsShowCase.php';
    }
    if($_GET['noz']){

        require './controllers/product.php';
    }
}




require './debug_line.php';

