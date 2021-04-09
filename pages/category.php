<?php
require_once 'classes/CategoryDataClass.php';
require_once 'components/catalogShowcaseProduct.php';

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

function drowNeighborCatsStr($item){
    global $home_url;
    return "<span='neighbor'>
                <a href='{$home_url}category/{$item['label']}'>
                    {$item['label']}
                </a> /
            </span>";
}
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
                $neighborCats = $catPageData->neighbor;
                $parentLabel = $catPageData->parentCats[0]['label'];
                require 'components/category/leftMenuWidget.php';
            ?>

            <div class="col-12 col-lg-9 shop-cover">
                <h2 class="title">
                    <?=$catPageData->label?>
                </h2>
                <div class="shop-sort-cover">
                    <div class="sort-left">
                        Найлено: <?=count($catPageData->prods)?> товаров
                    </div>
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
                        <?php $catClass = "col-12 col-sm-4 prod-item-col";?>
                        <div class="neighborCats">
                            <?php foreach ($catPageData->neighbor as $item):?>
                                <?=drowNeighborCatsStr($item)?>
                            <?php endforeach?>
                        </div>
                        <?php foreach ($catPageData->prods as $item):?>
                            <?=drowShowcaseProduct($item, $catClass)?>
                        <?php endforeach;?>
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
