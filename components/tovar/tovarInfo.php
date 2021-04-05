<?php
?>

<div class="col-12 col-md-7 single-shop-left">
    <h2 class="title">
        <?=$tovar['name']?>
    </h2>
    <div class="single-price">
        <div class="new-price">
            <?=$tovar['price']?> &#8381;
        </div>
        <div class="old-price">
            <?=$tovar['price']*1.3?> &#8381;
        </div>
    </div>


    <div class="single-btn-cover">
        <a href="<?=$tovar['url']?>" target="_blank" class="btn btn-buy-now"><span>Купить сейчас</span></a>
        <a href="#" class="btn btn-wishlist"><span>Добавить в избранное</span></a>
    </div>
</div>
