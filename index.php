

<?php
header('Content-Type: text/html; charset=utf-8');

$start = microtime(true);
//require './catsAndProdsShowcase.php';
$reqUrl = __DIR__.'/404.php';

if(!$_GET){
    //require './controllers/home.php';
    $reqUrl = './controllers/home.php';
    //deb('главная');
}
else{
    //print_r($_GET);
    if($_GET['cat']){
        //echo 'категории';
//        require './controllers/subCategory.php';
//        require './controllers/productsShowCase.php';
        $reqUrl = './controllers/subCategory.php';
        //$reqUrl = './controllers/productsShowCase.php';

    }
    if($_GET['noz']){

        $reqUrl = './controllers/product.php';
    }
}

/*
 * elemets
 * */
//require './controllers/mainMenu.php';

require_once $reqUrl;

require './debug_line.php';

