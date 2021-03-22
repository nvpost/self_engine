<?php

function getSliderGoods(){
    global $db;
    $sql = "SELECT * FROM products ORDER BY RAND() LIMIT 10";

    $prod_res = $db->query($sql);
    $prods = $prod_res->fetchAll(PDO::FETCH_ASSOC);

    return $prods;

}

$slider_goods = getSliderGoods();
//deb($slider_goods);


function doSliderItem($item){
    //deb($item);
    $slideHtml = "<div class='main-slide'>
                <div class='main-slide-bg' style='background-image: url(assets/img/bg-slider.svg);'></div>
                <div class='container'>
                    <div class='main-slide-info'>
                        <h2 class='title'>".$item['name']."</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        <a href='single-shop.html' class='btn'><span>buy now</span></a>
                    </div>
                    <div class='slide-img-cover'>
                        <a href='single-shop.html' class='lable-bike'>
                            <div class='lable-bike-img'><img src='assets/img/bike-info-slide.jpg' alt='img'></div>
                            <div class='lable-bike-item'>
                                <div class='model'>model SX-200</div>
                                <div class='price'>$1399</div>
                            </div>
                        </a>
                        <img src='assets/img/img-slider.png' alt='img' class='slide-img'>
                    </div>
                </div>
            </div>";
    return $slideHtml;

}


?>
<section class="s-main-slider">
		<div class="main-slide-navigation"></div>
		<ul class="main-soc-list">
			<li><a href="https://www.facebook.com/rovadex">facebook</a></li>
			<li><a href="https://twitter.com/RovadexStudio">twitter</a></li>
			<li><a href="https://www.instagram.com/rovadex/">instagram</a></li>
		</ul>
		<div class="main-slider">
            <?php foreach ($slider_goods as $item):?>
                <?= doSliderItem($item)?>
            <?php endforeach;?>
		</div>
	</section>