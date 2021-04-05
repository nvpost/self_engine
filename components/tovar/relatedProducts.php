<?php

require_once 'classes/RelatedProductsClass.php';
require_once 'components/catalogShowcaseProduct.php';

$relatedProducts = new RelatedProductsClass($tovar);

$relatedVendorProducts = $relatedProducts->getRelatedVendor();

$relatedPriceProducts = $relatedProducts->getRelatedForPrice(0.2);

$relatedForCat = $relatedProducts->getRelatedForCat()

//deb($relatedPriceProducts);

?>

<div class="container">
    <h2 class="title">Товары производителя <?=$tovar['vendor']?></h2>
    <div class="row product-cover">
            <?php foreach ($relatedVendorProducts as $item):?>
                <div class="col-sm-6 col-lg-3">
                    <?=drowShowcaseProduct($item)?>
                </div>
            <?php endforeach;?>
    </div>
</div>

<div class="container">
    <h2 class="title">Походие по цене предложения</h2>
    <div class="row product-cover">
        <?php foreach ($relatedPriceProducts as $item):?>
            <div class="col-sm-6 col-lg-3">
                <?=drowShowcaseProduct($item)?>
            </div>
        <?php endforeach;?>
    </div>
</div>

<div class="container">
    <h2 class="title">Другие товары в категории <?=$relatedProducts->cat_label?></h2>
    <div class="row product-cover">
        <?php foreach ($relatedForCat as $item):?>
            <div class="col-sm-6 col-lg-3">
                <?=drowShowcaseProduct($item)?>
            </div>
        <?php endforeach;?>
    </div>
</div>

