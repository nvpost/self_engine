<?php
require_once 'classes/CategoryDataClass.php';

$cacheName = $_GET['cat'];
$db_label = str_replace('_', ' ', $cacheName);


//добавить кеш




//название кэша и название класса
$catPageData = checkClassCache($db_label, 'CategoryDataClass');
//deb($catPageData);
//deb($catPageData->cat_id);
//deb($catPageData->label);
//deb($catPageData->categoryData);
//deb($catPageData->parentCats);
//deb($catPageData->childCats);


$heatTitle = $db_label." | Интернет магазин ножей";
$headDescr = $db_label.". Огромный выбор ножей самых известных производителей";

doHeader($heatTitle, $headDescr);
?>

<?
    require_once 'components/afterHead.php';
?>

<!-- ================ HEADER-TITLE ================ -->
<?php
    require_once 'components/category/breadCrambs.php';
?>
<!-- ============== HEADER-TITLE END ============== -->

<!-- ============== Slider ============== -->
<?php
    //deb($catPageData->childCats);
    $categorySlider = $catPageData->cat_id;
    //require_once 'components/slider.php';
?>
<!-- ============== Slider END ============== -->
<!--===================== SHOP =====================-->
<section class="s-shop">
    <div class="container">
        <div class="shop-sidebar-btn btn"><span>filter</span></div>
        <div class="row">

            <?php
                $childCats = $catPageData->childCats;
                $CatLabel = $catPageData->label;
                require_once 'components/category/leftMenuWidget.php';
            ?>
            <div class="col-12 col-lg-9 shop-cover">
                <div class="baner-shop">
                    <span class="mask"></span>
                    <img src="assets/img/banner-shop.jpg" alt="img">
                    <div class="baner-item-content">
                        <h2>our discount program</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmmpor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="single-shop.html" class="btn"><span>read more</span></a>
                        <div class="banner-sale-cover">
                            <div class="banner-sale">30% off</div>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <h2 class="title">road bike</h2>
                <div class="shop-sort-cover">
                    <div class="sort-left">120 products found</div>
                    <div class="sort-right">
                        <div class="sort-by">
                            <span class="sort-name">sort by:</span>
                            <select class="nice-select">
                                <option selected="selected" disabled>best selling</option>
                                <option>new product</option>
                                <option>sale product</option>
                            </select>
                        </div>
                        <ul class="sort-form">
                            <li data-atr="large"><i class="fa fa-th-large" aria-hidden="true"></i></li>
                            <li data-atr="block" class="active"><i class="fa fa-th" aria-hidden="true"></i></li>
                            <li data-atr="list"><i class="fa fa-list" aria-hidden="true"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="shop-product-cover">
                    <div class="row product-cover block">
                        <div class="col-12 col-sm-4 prod-item-col">
                            <div class="product-item">
                                <span class="top-sale">top sale</span>
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img src="assets/img/prod-1.png" alt="product"></a>
                                <div class="product-item-wrap">
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
                        </div>
                        <div class="col-12 col-sm-4 prod-item-col">
                            <div class="product-item">
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img src="assets/img/prod-2.png" alt="product"></a>
                                <div class="product-item-wrap">
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
                        </div>
                        <div class="col-12 col-sm-4 prod-item-col">
                            <div class="product-item">
                                <span class="sale">11%</span>
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img src="assets/img/prod-3.png" alt="product"></a>
                                <div class="product-item-wrap">
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
                        <div class="col-12 col-sm-4 prod-item-col">
                            <div class="product-item">
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img src="assets/img/prod-4.png" alt="product"></a>
                                <div class="product-item-wrap">
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
                        </div>
                        <div class="col-12 col-sm-4 prod-item-col">
                            <div class="product-item">
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img src="assets/img/prod-5.png" alt="product"></a>
                                <div class="product-item-wrap">
                                    <div class="product-item-cover">
                                        <div class="price-cover">
                                            <div class="new-price">$1.699</div>
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
                        </div>
                        <div class="col-12 col-sm-4 prod-item-col">
                            <div class="product-item">
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img src="assets/img/prod-6.png" alt="product"></a>
                                <div class="product-item-wrap">
                                    <div class="product-item-cover">
                                        <div class="price-cover">
                                            <div class="new-price">$1.699</div>
                                        </div>
                                        <h6 class="prod-title"><a href="single-shop.html">Aluminum and Fork <br>Mountain Sr-26omg</a></h6>
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
                        <div class="col-12 col-sm-4 prod-item-col">
                            <div class="product-item">
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img src="assets/img/prod-7.png" alt="product"></a>
                                <div class="product-item-wrap">
                                    <div class="product-item-cover">
                                        <div class="price-cover">
                                            <div class="new-price">$1.699</div>
                                        </div>
                                        <h6 class="prod-title"><a href="single-shop.html">Steel Frame MTB Bike <br>with 21 Speed</a></h6>
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
                        <div class="col-12 col-sm-4 prod-item-col">
                            <div class="product-item">
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img src="assets/img/prod-8.png" alt="product"></a>
                                <div class="product-item-wrap">
                                    <div class="product-item-cover">
                                        <div class="price-cover">
                                            <div class="new-price">$1.699</div>
                                        </div>
                                        <h6 class="prod-title"><a href="single-shop.html">Leopard Rider No Chain <br>Mountain Bicycle</a></h6>
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
                        <div class="col-12 col-sm-4 prod-item-col">
                            <div class="product-item">
                                <span class="sale">11%</span>
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img src="assets/img/prod-3.png" alt="product"></a>
                                <div class="product-item-wrap">
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
                    <div class="pagination-cover">
                        <ul class="pagination">
                            <li class="pagination-item item-prev"><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                            <li class="pagination-item active"><a href="#">1</a></li>
                            <li class="pagination-item"><a href="#">2</a></li>
                            <li class="pagination-item"><a href="#">3</a></li>
                            <li class="pagination-item"><a href="#">4</a></li>
                            <li class="pagination-item"><a href="#">5</a></li>
                            <li class="pagination-item item-next"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================== SHOP END ===================-->
