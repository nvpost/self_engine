<?php
require './cats.php';
require './drowCatalogItem.php';

//deb($rootCats);


$rootCats = checkCache('catsAndCounts', 0);
foreach($rootCats as $key => $rootCat){
    drowShowCaseItem($rootCat);
}












?>






