<!DOCTYPE html>
<html lang="ru">

<?php
ini_set('error_reporting', E_ALL);
$time_start = microtime(true);
//    require_once 'func.php';
require './catsAndProdsShowcase.php';

?>
<?php
    //do header
?>


<!--Контент страницы-->
    <?
     if(!$_GET){
         require_once 'pages/main.php';
     }else{
        //deb($_GET);
        if(isset($_GET['noz'])){
            require_once 'pages/tovar.php';

         }
         if(isset($_GET['cat'])){
             require_once 'pages/category.php';
         }
     }

    ?>

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
	<script src="http://localhost/noz_template/assets/js/jquery-2.2.4.min.js"></script>
    <script src="http://localhost/noz_template/assets/js/jquery.fancybox.js"></script>
	<script src="http://localhost/noz_template/assets/js/slick.min.js"></script>
	<script src="http://localhost/noz_template/assets/js/jquery.nice-select.js"></script>
	<script src="http://localhost/noz_template/assets/js/wow.js"></script>
	<script src="http://localhost/noz_template/assets/js/lazyload.min.js"></script>
	<script src="http://localhost/noz_template/assets/js/scripts.js"></script>


<?php
$time_log = 't: '.round(microtime(true) - $time_start, 4).'s.';
c_deb($time_log);
?>

</body>
</html>
