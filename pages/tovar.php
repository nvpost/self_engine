<link rel="stylesheet" href="http://localhost/noz_template/assets/css/jquery.fancybox.css">


<?php
require_once 'classes/TimeLogClass.php';
require_once 'classes/TovarDataClass.php';


$cacheName = $_GET['noz'];
$db_label = str_replace('_', ' ', $cacheName);

$t = new TimeLogClass('tovarClass');
$tovarObj = checkClassCache($cacheName, 'TovarDataClass');
//добавить кеш
//$tovarObj = new TovarDataClass($cacheName );

//deb($tovarObj->tovar);
//deb($tovarObj->tovarCat);
//deb($tovarObj->parentCat);
//deb($tovar->tovarCacheName);


$heatTitle = $tovarObj->tovarName."|".$tovarObj->tovarCat['label'].". Купить - ".numFormat($tovarObj->tovar['price']);
$desrcTile = "Огромный выбор ножей самых известных производителей";

$headRequired = "Купить ".$tovarObj->tovarName." - ".numFormat($tovarObj->tovar['price']);
$headProdDesrc=$tovarObj->tovar['descr'];

$headDescr = $headRequired.". ".$headProdDesrc;

if(strlen($headDescr)>180){
    $headDescr = mb_substr($headDescr, 0, 180).'...';
}else{
    $headDescr = $headDescr. ". ". $desrcTile;
}

doHeader($heatTitle, $headDescr);

$t->timerStop();
?>


<?
    require_once 'components/afterHead.php';
?>

<!-- ================ HEADER-TITLE ================ -->
<?php
$t=new TimeLogClass('tovarBread');
    $p_cat = $tovarObj->parentCat;
    $current_cat = $tovarObj->tovarCat;
    $name = $tovarObj->tovarName;
    require_once "components/tovar/headBreadcrambs.php";

$t->timerStop();
?>
<!-- ============== HEADER-TITLE END ============== -->

<!-- ============== S-SINGLE-PRODUCT ============== -->
<section class="s-single-product">
    <div class="container">
        <div class="row">
            <!--===== SLIDER-SINGLE-FOR =====-->
            <?php
            $t=new TimeLogClass('tovarSlider');
                $tovar = $tovarObj->tovar;
                require_once 'components/tovar/tovarSlider.php';
                $t->timerStop();
            ?>
            <!--=== SLIDER-SINGLE-FOR END ===-->

            <?php
                require_once 'components/tovar/tovarInfo.php';
            ?>
        </div>
    </div>
</section>
<!-- ============ S-SINGLE-PRODUCT END ============ -->

<!--=============== SINGLE-SHOP-TABS ===============-->
<section class="single-shop-tabs">
    <?php
        require_once "components/tovar/tovarDescr.php";
    ?>
</section>
<!--============= SINGLE-SHOP-TABS END =============-->

<!--=============== RELATED PRODUCTS ===============-->
<section class="s-related-products">
    <?php
    $t = new TimeLogClass('related');
        $parent_cat_id = $tovarObj->parentCat['cat_id'];
        $cat_label = $tovarObj->parentCat['label'];
        require_once "components/tovar/relatedProducts.php";
    $t->timerStop();
    ?>
</section>
<!--============= RELATED PRODUCTS END =============-->
