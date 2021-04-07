<link rel="stylesheet" href="http://localhost/noz_template/assets/css/jquery.fancybox.css">


<?php


?>



<?php

$cacheName = $_GET['noz'];
$db_label = str_replace('_', ' ', $cacheName);

function getTovar($db_label){
    global $db;
    $sql = "SELECT * FROM products WHERE name='".$db_label."'";
    $prod = $db->query($sql)->fetch(PDO::FETCH_ASSOC);
    $prod['cat_info'] = getCat($prod['category_id']);
//    $prod['imgs'][0] = getRandomIng();
//    $prod['imgs'][1] = getRandomIng();
//    $prod['imgs'][2] = getRandomIng();
    return $prod;
}
function getCat($catId){
    global $db;
    $sql = "SELECT * FROM category WHERE cat_id='".$catId."'";
    $cat= $db->query($sql)->fetch(PDO::FETCH_ASSOC);
    return $cat;
}

//добавить кеш
$tovar = getTovar($db_label);

//deb($tovar);

$heatTitle = $db_label."|".$tovar['cat_info']['label'].". Купить - ".number_format($tovar['price'], 0, '', ' '). " руб.";
$desrcTile = "Огромный выбор ножей самых известных производителей";

$headRequired = "Купить ".$db_label." - ".number_format($tovar['price'], 0, '', ' ');
$headProdDesrc=$tovar['descr'];

$headDescr = $headRequired.". ".$headProdDesrc;

if(strlen($headDescr)>180){
    $headDescr = mb_substr($headDescr, 0, 180).'...';
}else{
    $headDescr = $headDescr. ". ". $desrcTile;
}

doHeader($heatTitle, $headDescr);

?>


<?
    require_once 'components/afterHead.php';
?>

<!-- ================ HEADER-TITLE ================ -->
<?php
    require_once "components/tovar/headBreadcrambs.php"
?>
<!-- ============== HEADER-TITLE END ============== -->

<!-- ============== S-SINGLE-PRODUCT ============== -->
<section class="s-single-product">
    <div class="container">
        <div class="row">
            <!--===== SLIDER-SINGLE-FOR =====-->
            <?php
                require_once 'components/tovar/tovarSlider.php';
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
        require_once "components/tovar/relatedProducts.php";
    ?>
</section>
<!--============= RELATED PRODUCTS END =============-->