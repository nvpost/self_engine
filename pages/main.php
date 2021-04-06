<?php
$heatTitle = "Интернет магазин ножей";
$headDesrc = "Огромный выбор ножей самых известных производителей";
doHeader($heatTitle, $headDesrc);

?>

    <?
        require_once 'components/afterHead.php';
    ?>

<!-- =============== main-slider =============== -->
    <?php
        require_once 'components/slider.php';
    ?>
    <?php
        $parent_id = 0;
        require_once "classes/CatalogClass.php";

        require_once 'components/catalogShowcaseProduct.php';

        $category = new CatalogClass(0);


        $mainPageProds = $category->checkCatalogData('catalogForPage0', 5);

        //deb($mainPageProds);


        require_once 'components/categoryBars.php';
    ?>
    <?php
    //require_once 'components/advantages.php';
    ?>
    <?php
        require_once 'components/subCategoryShowcase.php'
    ?>
<!--================ S-PRODUCTS END ================-->
