<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jastip By Laa</title>
	<link rel="shortcut icon" href="assets/images/favicon.png">
	<!-- Bootstarp min css -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- All min css -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php
include ('views/navbar.php')
?>
<main>
	<section class="banner-two">
		<div class="banner-two__shape-left d-none d-lg-block wow bounceInLeft">
			<!--<img src="assets/images/banner/banner.jpg" alt="shape">-->
		</div>
		<div class="swiper banner-two__slider">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="slide-bg" data-background="assets/images/service/services.jpg"></div>
					<div class="container">
						<div class="banner-two__content">
							<h1 data-animation="fadeInUp" data-delay="1.3s">Galeri Produk<br>
								<span class="primary-color">Jastip by Laa</span></h1>
							<p class="mt-40 pb-140">Selamat datang di Gallery Produk Jastip by Laa, <br> Temukan berbagai macam snack otentik dan lezat dari Dubai yang siap memanjakan lidah Anda. <br>Setiap produk di galeri ini dipilih dengan cermat untuk memastikan Anda mendapatkan pengalaman kuliner terbaik dari Timur Tengah.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="discount-area about-area pt-80 pb-80">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="discount__item pl-30">
						<div class="section-header">
							<div class="section-title-icon">
								<span class="title-icon mr-10"></span>
								<h2>Fix Chocolate - Cokelat Arab Premium</h2>
							</div>
							<p class="mt-30 mb-55">Fix Chocolate adalah pilihan sempurna bagi pecinta cokelat yang mencari pengalaman rasa otentik dari Timur Tengah. <br> Terbuat dari bahan-bahan berkualitas tinggi, cokelat ini menawarkan perpaduan rasa yang kaya dan tekstur yang halus, menjadikannya camilan istimewa untuk segala kesempatan.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="image position-relative">
						<img class="radius-10" src="assets/images/gallery/fix-chocolate.jpg" alt="image">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="discount-area about-area pt-80 pb-80">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="image position-relative">
						<img class="radius-10" src="assets/images/gallery/snacks.jpg" alt="image">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="discount__item pl-30">
						<div class="section-header">
							<div class="section-title-icon">
								<span class="title-icon mr-10"></span>
								<h2>Jenis-Jenis Snack Dubai - Kelezatan Timur Tengah dalam Setiap Gigitan</h2>
							</div>
							<p class="mt-30 mb-55">Dubai terkenal dengan ragam kulinernya yang kaya dan beragam, termasuk snack yang lezat dan unik. <br>Di sini, kami menghadirkan pilihan terbaik dari snack khas Dubai yang siap memanjakan lidah Anda. Setiap jenis snack dipilih dengan cermat untuk memberikan pengalaman kuliner yang otentik dan memuaskan.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<!-- Footer area start here -->
<?php
include ('views/footer.php')
?>
</body>
</html>