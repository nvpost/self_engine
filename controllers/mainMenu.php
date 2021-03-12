<?php
echo (__DIR__);

require '../catsAndProdsShowcase.php';

$rootMenu = checkMenuCache(0);
deb($rootMenu);

