<?php
$heatTitle = "Интернет магазин ножей";
$headDesrc = "Огромный выбор ножей самых известных производителей";
doHeader($heatTitle, $headDesrc);

?>

    <?
        $t = new TimeLogClass('afterHead');
        require_once 'components/afterHead.php';
        $t->timerStop();
    ?>

<!-- =============== main-slider =============== -->
    <?php
        $t = new TimeLogClass('slider');
        require_once 'components/slider.php';
        $t->timerStop();
    ?>
    <?php
    $t = new TimeLogClass('mainPageProds');
        $parent_id = 0;
        require_once "classes/CatalogClass.php";

        require_once 'components/catalogShowcaseProduct.php';

        $category = new CatalogClass(0);
        $mainPageProds = $category->checkCatalogData('catalogForPage0', 5);
    $t->timerStop();
        //deb($mainPageProds);
    $t = new TimeLogClass('categoryBars');
        require_once 'components/categoryBars.php';
    $t->timerStop();
    ?>
    <?php
    //require_once 'components/advantages.php';
    ?>
    <?php
    $t = new TimeLogClass('subCategoryShowcase');
        require_once 'components/subCategoryShowcase.php';
    $t->timerStop();
    ?>
<!--================ S-PRODUCTS END ================-->
