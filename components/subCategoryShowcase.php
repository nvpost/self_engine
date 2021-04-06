<?php


//deb($mainPageProds);

?>


<section class="s-products">
    <div class="container">
        <?php foreach($mainPageProds as $k => $prodLine):?>
            <div class="tab-wrap">

                <div class="products-title-cover">
                    <h2 class="title"><?=$prodLine['label']?></h2>
                    <p class = "products-title_link">
                        <?php $category_link = "category/".str_replace([' ', '.'], ['_', ''], $prodLine['label'])?>
                        <a href="<?=$category_link?>">Перейти в категорию</a>
                    </p>
                </div>
                <div class="tabs-content">
                    <div class="my_tab tab1">
                        <div class="row product-cover">
                                <?php foreach ($prodLine['prods'] as $prod_key => $item):?>
                                    <?= drowShowcaseProduct($item)?>
                                <?php endforeach;?>
                        </div>
                    </div>

                </div>
            </div>
        <?php endforeach?>
    </div>
</section>
