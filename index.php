<?php
//require './cats.php';

if(!$_GET){
    require './home.php';
    deb('главная');
}
else{
    print_r($_GET);
    echo "Старица категории ".$_GET['cat'];
    //deb($_GET);
}
