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
        require_once 'components/categoryBars.php';
    ?>
    <?php
    //require_once 'components/advantages.php';
    ?>
    <?php
        require_once 'components/subCategoryShowcase.php'
    ?>
<!--================ S-PRODUCTS END ================-->
