<?php
$start = microtime(true);
//require './cats.php';

if(!$_GET){
    require './home.php';
    //deb('главная');
}
else{
    //print_r($_GET);
    if($_GET['cat']){
        require './subCategory.php';
        require './products.php';
    }
    //deb($_GET);
}




require './debug_line.php';

