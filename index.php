<?php
//require './cats.php';
if(!$_GET){

    require './home.php';
    deb('главная');
}
else{
    deb($_GET);
}
