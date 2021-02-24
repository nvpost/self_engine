<?php
$start = microtime(true);
//require './cats.php';

if(!$_GET){
    require './home.php';
    deb('главная');
}
else{
    if($_GET['cat']){
        require './subCategory.php';
    }
    //deb($_GET);
}




require './debug_line.php';

