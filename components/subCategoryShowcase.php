<?php
$parent_id = 0;

require_once "classes/CatalogClass.php";

$category = new CatalogClass(0);

$childCats = $category->getChildCats();
//$category->getProducts();

//foreach ($childCats as $childCat){
//    $c = new CatalogClass($childCat['cat_id']);
//    $subCat = $c->getChildCats();
//    echo '<h3>'.$childCat['label'].'</h3>';
//    deb($c->getProducts());
//}

function getChildCatsProducts($parent_id){
    global $db;
}

?>


<section class="s-products">
    <div class="container">
        <div class="tab-wrap">
            <div class="products-title-cover">
                <h2 class="title">our products</h2>
                <ul class="tab-nav product-tabs">
                    <li class="item" rel="tab1"><span>All</span></li>
                    <li class="item" rel="tab2"><span>Road bike</span></li>
                    <li class="item" rel="tab3"><span>City bike</span></li>
                    <li class="item" rel="tab4"><span>BMX bike</span></li>
                </ul>
            </div>
            <div class="tabs-content">
                <div class="tab tab1">
                    <div class="row product-cover">
                        <div class="col-sm-6 col-lg-3">
                            <div class="product-item">
                                <span class="top-sale">top sale</span>
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-1.png" alt="product"></a>
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

                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="product-item">
                                <span class="sale">11%</span>
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-3.png" alt="product"></a>
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
                        <div class="col-sm-6 col-lg-3">
                            <div class="product-item">
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-4.png" alt="product"></a>
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
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-5.png" alt="product"></a>
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
                        <div class="col-sm-6 col-lg-3">
                            <div class="product-item">
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-6.png" alt="product"></a>
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
                        <div class="col-sm-6 col-lg-3">
                            <div class="product-item">
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-7.png" alt="product"></a>
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
                        <div class="col-sm-6 col-lg-3">
                            <div class="product-item">
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-8.png" alt="product"></a>
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
                </div>
                <div class="tab tab2">
                    <div class="row product-cover">
                        <div class="col-sm-6 col-lg-3">
                            <div class="product-item">
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-5.png" alt="product"></a>
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
                        <div class="col-sm-6 col-lg-3">
                            <div class="product-item">
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-6.png" alt="product"></a>
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
                        <div class="col-sm-6 col-lg-3">
                            <div class="product-item">
                                <span class="top-sale">top sale</span>
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-1.png" alt="product"></a>
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
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-2.png" alt="product"></a>
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
                                <span class="sale">11%</span>
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-3.png" alt="product"></a>
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
                        <div class="col-sm-6 col-lg-3">
                            <div class="product-item">
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-4.png" alt="product"></a>
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
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-7.png" alt="product"></a>
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
                        <div class="col-sm-6 col-lg-3">
                            <div class="product-item">
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-8.png" alt="product"></a>
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
                </div>
                <div class="tab tab3">
                    <div class="row product-cover">
                        <div class="col-sm-6 col-lg-3">
                            <div class="product-item">
                                <span class="sale">11%</span>
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-3.png" alt="product"></a>
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
                        <div class="col-sm-6 col-lg-3">
                            <div class="product-item">
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-4.png" alt="product"></a>
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
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-5.png" alt="product"></a>
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
                        <div class="col-sm-6 col-lg-3">
                            <div class="product-item">
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-6.png" alt="product"></a>
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
                        <div class="col-sm-6 col-lg-3">
                            <div class="product-item">
                                <span class="top-sale">top sale</span>
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-1.png" alt="product"></a>
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
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-2.png" alt="product"></a>
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
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-7.png" alt="product"></a>
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
                        <div class="col-sm-6 col-lg-3">
                            <div class="product-item">
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-8.png" alt="product"></a>
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
                </div>
                <div class="tab tab4">
                    <div class="row product-cover">
                        <div class="col-sm-6 col-lg-3">
                            <div class="product-item">
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-5.png" alt="product"></a>
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
                        <div class="col-sm-6 col-lg-3">
                            <div class="product-item">
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-6.png" alt="product"></a>
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
                        <div class="col-sm-6 col-lg-3">
                            <div class="product-item">
                                <span class="top-sale">top sale</span>
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-1.png" alt="product"></a>
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
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-2.png" alt="product"></a>
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
                                <span class="sale">11%</span>
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-3.png" alt="product"></a>
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
                        <div class="col-sm-6 col-lg-3">
                            <div class="product-item">
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-4.png" alt="product"></a>
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
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-7.png" alt="product"></a>
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
                        <div class="col-sm-6 col-lg-3">
                            <div class="product-item">
                                <ul class="product-icon-top">
                                    <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                                <a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-8.png" alt="product"></a>
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
                </div>
            </div>
        </div>
    </div>
</section>
