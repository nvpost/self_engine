<!DOCTYPE html>
<html lang="ru">

<?php
ini_set('error_reporting', E_ALL);
$time_start = microtime(true);
//    require_once 'func.php';
    require './catsAndProdsShowcase.php';
    //do header
    $heatTitle = "Интернет магазин ножей";
    $headDesrc = "Огромный выбор ножей самых известных производителей";
    doHeader($heatTitle, $headDesrc);
?>

<body id="home" class="inner-scroll">
	<!--================ PRELOADER ================-->
	<div class="preloader-cover">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!--============== PRELOADER END ==============-->
	<!-- ================= HEADER ================= -->
    <?php
        require_once 'components/main_menu.php';
    ?>
<!--main_menu.php-->

	<!-- =============== HEADER END =============== -->

	<!-- =============== main-slider =============== -->
    <?php
        require_once 'components/slider.php';
    ?>
<!--slider.php-->
	<!-- ============= main-slider end ============= -->

	<!--================ S-FIND-BIKE ================-->

	<!--============== S-FIND-BIKE END ==============-->

	<!--============== S-CATEGORY-BICYKLE ==============-->
    <?php
        require_once 'components/categoryBars.php';
    ?>
	<!--============ S-CATEGORY-BICYKLE END ============-->

	<!--=============== S-OUR-ADVANTAGES ===============-->
    <?php
        //require_once 'components/advantages.php';
    ?>
	<!--============= S-OUR-ADVANTAGES END =============-->

	<!--================== S-PRODUCTS ==================-->
	<?php
        require_once 'components/subCategoryShowcase.php'
    ?>
	<!--================ S-PRODUCTS END ================-->

	<!--================== S-SUBSCRIBE ==================-->
	<section class="s-subscribe" style="background-image: url(assets/img/bg-subscribe.jpg);">
		<span class="mask"></span>
		<span class="subscribe-effect wow fadeIn" data-wow-duration="1s" style="background-image: url(assets/img/subscribe-effect.svg);"></span>
		<div class="container">
			<div class="subscribe-left">
				<h2 class="title"><span>Subscribe</span></h2>
				<p>Subscribe us and you won't miss the new arrivals, as well as discounts and sales.</p>
				<form class="subscribe-form">
					<i class="fa fa-at" aria-hidden="true"></i>
					<input class="inp-form" type="email" name="subscribe" placeholder="E-mail">
					<button type="submit" class="btn btn-form btn-yellow"><span>send</span></button>
				</form>
			</div>
			<img class="wow fadeInRightBlur lazy" data-wow-duration=".8s" data-wow-delay=".3s" src="assets/img/placeholder-all.png" data-src="assets/img/subscribe-img.png" alt="img">
		</div>
	</section>
	<!--================ S-SUBSCRIBE END ================-->

	<!--================== S-TOP-SALE ==================-->
	<section class="s-top-sale">
		<div class="container">
			<h2 class="title">Top sale</h2>
			<div class="row product-cover">
				<div class="col-sm-6 col-lg-3">
					<div class="product-item">
						<ul class="product-icon-top">
							<li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
						</ul>
						<a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-9.png" alt="product"></a>
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
						<a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-10.png" alt="product"></a>
						<div class="product-item-cover">
							<div class="price-cover">
								<div class="new-price">$1.499</div>
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
						<a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-11.png" alt="product"></a>
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
						<a href="single-shop.html" class="product-img"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/prod-12.png" alt="product"></a>
						<div class="product-item-cover">
							<div class="price-cover">
								<div class="new-price">$1.499</div>
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
		</div>
	</section>
	<!--================ S-TOP-SALE END ================-->

	<!--================== S-FEEDBACK ==================-->
	<section class="s-feedback" style="background-image: url(assets/img/bg-feedback.jpg);">
		<span class="effwct-bg-feedback" style="background-image: url(assets/img/effect-bg-feedback.svg);"></span>
		<span class="mask"></span>
		<div class="container">
			<h2 class="title">feedback</h2>
			<div class="feedback-slider">
				<div class="feedback-slide">
					<div class="feedback-item">
						<div class="feedback-content">
							<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempoinc ididunt ut magna aliqua dolor sit amet, consectetur adipiscing elit magna”</p>
						</div>
						<div class="feedback-item-top">
							<img src="assets/img/feedback-photo-1.png" alt="photo">
							<div class="feedback-title">
								<h5 class="title"><span>Li piters</span></h5>
								<ul class="rating">
									<li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
									<li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
									<li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
									<li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
									<li class="star-not-bg"><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="feedback-slide">
					<div class="feedback-item">
						<div class="feedback-content">
							<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempoinc ididunt ut magna aliqua dolor sit amet, consectetur adipiscing elit magna”</p>
						</div>
						<div class="feedback-item-top">
							<img src="assets/img/feedback-photo-2.png" alt="photo">
							<div class="feedback-title">
								<h5 class="title"><span>Sam Barton</span></h5>
								<ul class="rating">
									<li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
									<li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
									<li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
									<li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
									<li class="star-not-bg"><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="feedback-slide">
					<div class="feedback-item">
						<div class="feedback-content">
							<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempoinc ididunt ut magna aliqua dolor sit amet, consectetur adipiscing elit magna”</p>
						</div>
						<div class="feedback-item-top">
							<img src="assets/img/feedback-photo-3.png" alt="photo">
							<div class="feedback-title">
								<h5 class="title"><span>Zoe Tyler</span></h5>
								<ul class="rating">
									<li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
									<li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
									<li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
									<li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
									<li class="star-not-bg"><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="feedback-slide">
					<div class="feedback-item">
						<div class="feedback-content">
							<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempoinc ididunt ut magna aliqua dolor sit amet, consectetur adipiscing elit magna”</p>
						</div>
						<div class="feedback-item-top">
							<img src="assets/img/feedback-photo-2.png" alt="photo">
							<div class="feedback-title">
								<h5 class="title"><span>Sam Barton</span></h5>
								<ul class="rating">
									<li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
									<li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
									<li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
									<li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
									<li class="star-not-bg"><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ S-FEEDBACK END ================-->

	<!--================== S-OUR-NEWS ==================-->
	<section class="s-our-news">
		<div class="container">
			<h2 class="title">Our News</h2>
			<div class="news-cover row">
				<div class="col-12 col-md-6 col-lg-4">
					<div class="news-item">
						<h6 class="title"><a href="news.html">doloremque laudantium, totam rem aperiam, eaque ipsa quae</a></h6>
						<div class="news-post-thumbnail">
							<a href="news.html"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/news-1.jpg" alt="news"></a>
						</div>
						<div class="meta">
							<span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 26,2019</span>
							<span class="post-by"><i class="fa fa-user" aria-hidden="true"></i> By <a href="#">Samson</a></span>
						</div>
						<div class="post-content">
							<p>Sed ut perspiciatis unde omnis iste natus  sit voluptatem accusantium doloremque lauda ntium, totam rem aperiam, eaque.</p>
						</div>
						<a href="news.html" class="btn-news">read more</a>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<div class="news-item">
						<h6 class="title"><a href="news.html">At vero eos et accusamus et iusto odio dignissimos ducim</a></h6>
						<div class="news-post-thumbnail">
							<a href="single-news.html"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/news-2.jpg" alt="news"></a>
						</div>
						<div class="meta">
							<span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 26,2019</span>
							<span class="post-by"><i class="fa fa-user" aria-hidden="true"></i> By <a href="#">Samson</a></span>
						</div>
						<div class="post-content">
							<p>Corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui.</p>
						</div>
						<a href="single-news.html" class="btn-news">read more</a>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4">
					<div class="news-item">
						<h6 class="title"><a href="news.html">On the other hand, we denounce with righteous indignation a</a></h6>
						<div class="news-post-thumbnail">
							<a href="news.html"><img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/news-3.jpg" alt="news"></a>
						</div>
						<div class="meta">
							<span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 26,2019</span>
							<span class="post-by"><i class="fa fa-user" aria-hidden="true"></i> By <a href="#">Samson</a></span>
						</div>
						<div class="post-content">
							<p>Blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those.</p>
						</div>
						<a href="single-news.html" class="btn-news">read more</a>
					</div>
				</div>
			</div>
			<div class="btn-cover"><a class="btn" href="news.html"><span>view more</span></a></div>
		</div>
	</section>
	<!--================ S-OUR-NEWS END ================-->

	<!--=================== S-CLIENTS ===================-->
	<section class="s-clients">
		<div class="container">
			<div class="clients-cover">
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="assets/img/client-1.svg" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="assets/img/client-2.svg" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="assets/img/client-4.svg" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="assets/img/client-5.svg" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="assets/img/client-6.svg" alt="img">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================= S-CLIENTS END =================-->

	<!--=================== S-BANNER ===================-->
	<section class="s-banner" style="background-image: url(assets/img/bg-section-banner.jpg);">
		<span class="mask"></span>
		<div class="banner-img">
			<div class="banner-img-bg wow fadeIn" data-wow-duration=".6s" style="background-image: url(assets/img/effect-section-banner.svg);"></div>
			<img class="lazy wow fadeInLeftBlur" data-wow-duration=".8s" data-wow-delay=".3s" src="assets/img/placeholder-all.png" data-src="assets/img/bike-banner.png" alt="img">
		</div>
		<div class="container">
			<h2 class="title">Hyper E-Ride Bike 700C</h2>
			<p class="slogan">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor tincidunt lorem.</p>
			<div class="banner-price">
				<div class="new-price">$1.699</div>
				<div class="old-price">$1.799</div>
			</div>
			<div id="clockdiv">
				<div>
					<span class="days"></span>
					<div class="smalltext">Days</div>
				</div>
				<div>
					<span class="hours"></span>
					<div class="smalltext">Hours</div>
				</div>
				<div>
					<span class="minutes"></span>
					<div class="smalltext">Minutes</div>
				</div>
				<div>
					<span class="seconds"></span>
					<div class="smalltext">Seconds</div>
				</div>
			</div>
		</div>
	</section>
	<!--================= S-BANNER END =================-->

	<!--================== S-INSTAGRAM ==================-->
	<section class="s-instagram">
		<div class="instagram-cover">
			<a href="#" class="instagram-item">
				<ul>
					<li class="comments">234 <i class="fa fa-comment-o" aria-hidden="true"></i></li>
					<li class="like">134 <i class="fa fa-heart-o" aria-hidden="true"></i></li>
				</ul>
				<img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/instagram-1.jpg" alt="img">
			</a>
			<a href="#" class="instagram-item">
				<ul>
					<li class="comments">222 <i class="fa fa-comment-o" aria-hidden="true"></i></li>
					<li class="like">118 <i class="fa fa-heart-o" aria-hidden="true"></i></li>
				</ul>
				<img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/instagram-2.jpg" alt="img">
			</a>
			<a href="#" class="instagram-item">
				<ul>
					<li class="comments">224 <i class="fa fa-comment-o" aria-hidden="true"></i></li>
					<li class="like">124 <i class="fa fa-heart-o" aria-hidden="true"></i></li>
				</ul>
				<img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/instagram-3.jpg" alt="img">
			</a>
			<a href="#" class="instagram-item">
				<ul>
					<li class="comments">155 <i class="fa fa-comment-o" aria-hidden="true"></i></li>
					<li class="like">107 <i class="fa fa-heart-o" aria-hidden="true"></i></li>
				</ul>
				<img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/instagram-4.jpg" alt="img">
			</a>
			<a href="#" class="instagram-item">
				<ul>
					<li class="comments">350 <i class="fa fa-comment-o" aria-hidden="true"></i></li>
					<li class="like">140 <i class="fa fa-heart-o" aria-hidden="true"></i></li>
				</ul>
				<img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/instagram-5.jpg" alt="img">
			</a>
		</div>
	</section>
	<!--================ S-INSTAGRAM END ================-->

	<!--==================== FOOTER ====================-->
	<footer>
		<div class="container">
			<div class="row footer-item-cover">
				<div class="footer-subscribe col-md-7 col-lg-8">
					<h6>subscribe</h6>
					<p>Subscribe us and you won't miss the new arrivals, as well as discounts and sales.</p>
					<form class="subscribe-form">
						<i class="fa fa-at" aria-hidden="true"></i>
						<input class="inp-form" type="email" name="subscribe" placeholder="E-mail">
						<button type="submit" class="btn btn-form"><span>send</span></button>
					</form>
				</div>
				<div class="footer-item col-md-5 col-lg-4">
					<h6>info</h6>
					<ul class="footer-list">
						<li><a href="shop.html">FAQ</a></li>
						<li><a href="shop.html">Contacts</a></li>
						<li><a href="shop.html">Shipping + Heading</a></li>
						<li><a href="shop.html">Exchanges</a></li>
						<li><a href="shop.html">2019 Catalog</a></li>
						<li><a href="shop.html">Returns</a></li>
						<li><a href="shop.html">Search</a></li>
					</ul>
				</div>
			</div>
			<div class="row footer-item-cover">
				<div class="footer-touch col-md-7 col-lg-8">
					<h6>stay in touch</h6>
					<ul class="footer-soc social-list">
						<li><a target="_blank" href="https://www.facebook.com/rovadex"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://twitter.com/RovadexStudio"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://www.instagram.com/rovadex"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://www.youtube.com"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
					</ul>
					<div class="footer-autor">Questions? Please write us at: <a href="mailto:rovadex@gmail.com">rovadex@gmail.com</a></div>
				</div>
				<div class="footer-item col-md-5 col-lg-4">
					<h6>shop</h6>
					<ul class="footer-list">
						<li><a href="shop.html">Road Bike</a></li>
						<li><a href="shop.html">City Bike</a></li>
						<li><a href="shop.html">Mountain Bike</a></li>
						<li><a href="shop.html">Kids Bike</a></li>
						<li><a href="shop.html">BMX Bike</a></li>
					</ul>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="footer-copyright"><a target="_blank" href="https://rovadex.com">Rovadex</a> © 2019. All Rights Reserved.</div>
				<ul class="footer-pay">
					<li><a href="#"><img src="assets/img/footer-pay-1.png" alt="img"></a></li>
					<li><a href="#"><img src="assets/img/footer-pay-2.png" alt="img"></a></li>
					<li><a href="#"><img src="assets/img/footer-pay-3.png" alt="img"></a></li>
					<li><a href="#"><img src="assets/img/footer-pay-4.png" alt="img"></a></li>
				</ul>
			</div>
		</div>
	</footer>
	<!--================== FOOTER END ==================-->

	<!--===================== TO TOP =====================-->
	<a class="to-top" href="#home">
		<i class="fa fa-angle-double-up" aria-hidden="true"></i>
	</a>
	<!--=================== TO TOP END ===================-->
	<!--==================== SCRIPT	====================-->
	<script src="assets/js/jquery-2.2.4.min.js"></script>
	<script src="assets/js/slick.min.js"></script>
	<script src="assets/js/jquery.nice-select.js"></script>
	<script src="assets/js/wow.js"></script>
	<script src="assets/js/lazyload.min.js"></script>
	<script src="assets/js/scripts.js"></script>

<?php
$time_log = 't: '.round(microtime(true) - $time_start, 4).'s.';
c_deb($time_log);
?>

</body>
</html>
