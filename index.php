

<?php
header('Content-Type: text/html; charset=utf-8');

$start = microtime(true);
//require './catsAndProdsShowcase.php';


if(!$_GET){
    require './controllers/home.php';
    //deb('главная');
}
else{
    //print_r($_GET);
    if($_GET['cat']){
        //echo 'категории';
        require './controllers/subCategory.php';
        //deb($cat_counter);
        require './controllers/productsShowCase.php';

    }
    if($_GET['noz']){

        require './controllers/product.php';
    }
}




require './debug_line.php';

