<link rel="stylesheet" href="http://localhost/noz_template/assets/css/jquery.fancybox.css">

<?php

$cacheName = $_GET['noz'];
$db_label = str_replace('_', ' ', $cacheName);


function getTovar($db_label){
    global $db;
    $sql = "SELECT * FROM products WHERE name='".$db_label."'";
    $prod = $db->query($sql)->fetch(PDO::FETCH_ASSOC);
    $prod['cat_info'] = getCat($prod['category_id']);
    $prod['imgs'][0] = getRandomIng();
    $prod['imgs'][1] = getRandomIng();
    $prod['imgs'][2] = getRandomIng();
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
    <div class="container">
        <h2 class="title">Related Products</h2>
        <div class="row product-cover">
            <div class="col-sm-6 col-lg-3">
                <div class="product-item">
                    <span class="top-sale">top sale</span>
                    <ul class="product-icon-top">
                        <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                    </ul>
                    <a href="single-shop.html" class="product-img"><img src="assets/img/prod-1.png" alt="product"></a>
                    <div class="product-item-cover">
                        <div class="price-cover">
                            <div class="new-price">$1.699</div>
                            <div class="old-price">$1.799</div>
                        </div>
                        <h6 class="prod-title"><a href="single-shop.html">Granite Peak 24" <br>Girls Mountain Bike</a></h6>
                        <a href="single-shop.html" class="btn"><span>buy now</span></a>
                    </div>
                    <div class="prod-info">
                        <ul class="prod-list">
                            <li>Frame Size: <span>17</span></li>
                            <li>Class: <span>City</span></li>
                            <li>Number of speeds: <span>7</span></li>
                            <li>Type: <span>Rigid</span></li>
                            <li>Country registration: <span>USA</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="product-item">
                    <ul class="product-icon-top">
                        <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                    </ul>
                    <a href="single-shop.html" class="product-img"><img src="assets/img/prod-2.png" alt="product"></a>
                    <div class="product-item-cover">
                        <div class="price-cover">
                            <div class="new-price">$1.699</div>
                        </div>
                        <h6 class="prod-title"><a href="single-shop.html">Hyper E-Ride Bike 700C <br>20+ Mile Range</a></h6>
                        <a href="single-shop.html" class="btn"><span>buy now</span></a>
                    </div>
                    <div class="prod-info">
                        <ul class="prod-list">
                            <li>Frame Size: <span>17</span></li>
                            <li>Class: <span>City</span></li>
                            <li>Number of speeds: <span>7</span></li>
                            <li>Type: <span>Rigid</span></li>
                            <li>Country registration: <span>USA</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="product-item">
                    <ul class="product-icon-top">
                        <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                    </ul>
                    <a href="single-shop.html" class="product-img"><img src="assets/img/prod-4.png" alt="product"></a>
                    <div class="product-item-cover">
                        <div class="price-cover">
                            <div class="new-price">$1.699</div>
                        </div>
                        <h6 class="prod-title"><a href="single-shop.html">New Spring Beach Cruiser <br>Bicycle Chrome</a></h6>
                        <a href="single-shop.html" class="btn"><span>buy now</span></a>
                    </div>
                    <div class="prod-info">
                        <ul class="prod-list">
                            <li>Frame Size: <span>17</span></li>
                            <li>Class: <span>City</span></li>
                            <li>Number of speeds: <span>7</span></li>
                            <li>Type: <span>Rigid</span></li>
                            <li>Country registration: <span>USA</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="product-item">
                    <span class="sale">11%</span>
                    <ul class="product-icon-top">
                        <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                    </ul>
                    <a href="single-shop.html" class="product-img"><img src="assets/img/prod-3.png" alt="product"></a>
                    <div class="product-item-cover">
                        <div class="price-cover">
                            <div class="new-price">$1.699</div>
                            <div class="old-price">$1.799</div>
                        </div>
                        <h6 class="prod-title"><a href="single-shop.html">Lightweight M370-27speed <br>Aluminum Alloy Mantis</a></h6>
                        <a href="single-shop.html" class="btn"><span>buy now</span></a>
                    </div>
                    <div class="prod-info">
                        <ul class="prod-list">
                            <li>Frame Size: <span>17</span></li>
                            <li>Class: <span>City</span></li>
                            <li>Number of speeds: <span>7</span></li>
                            <li>Type: <span>Rigid</span></li>
                            <li>Country registration: <span>USA</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= RELATED PRODUCTS END =============-->
