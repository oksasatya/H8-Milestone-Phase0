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
	<!-- Banner area start here -->
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
							<h1 data-animation="fadeInUp" data-delay="1.3s">Layanan Kami di <br>
								<span class="primary-color">Jastip by Laa</span></h1>
							<p class="mt-40 pb-140">Selamat datang di Jastip by Laa, <br> solusi terbaik untuk memenuhi kebutuhan Anda akan makanan ringan dan <br>camilan khas dari Dubai ke Jakarta! Kami menyediakan layanan hand-carry untuk </p>
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
					<div class="image position-relative">
						<img class="radius-10" src="assets/images/service/service-img.jpg" alt="image">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="discount__item pl-30">
						<div class="section-header">
							<div class="section-title-icon">
								<span class="title-icon mr-10"></span>
								<h2>Pembelian Makanan Ringan dan Camilan</h2>
							</div>
							<p class="mt-30 mb-55">Kami membantu Anda membeli berbagai macam makanan ringan
								<br>
								dan camilan khas dari Dubai yang tidak tersedia di Jakarta. Nikmati cita rasa internasional tanpa harus meninggalkan rumah.
							</p>
							<a class="btn-one" href="https://wa.me/082188188761"><i class="fa-brands fa-whatsapp fs-5 "></i><span class="ml-10">Click Untuk order</span></a>
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
								<h2>Pengiriman Hand-Carry</h2>
							</div>
							<p class="mt-30 mb-55">Semua barang yang Anda pesan akan kami bawa secara langsung(hand-carry)
								<br>
								saat kami kembali ke Jakarta. Dengan metode ini, kami memastikan barang Anda<br>
								sampai dengan aman dan dalam kondisi terbaik.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="image position-relative">
						<img class="radius-10" src="assets/images/service/services-img2.jpg" alt="image">
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
						<img class="radius-10" src="assets/images/service/service-img3.jpg" alt="image">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="discount__item pl-30">
						<div class="section-header">
							<div class="section-title-icon">
								<span class="title-icon mr-10"></span>
								<h2>Konsultasi Produk</h2>
							</div>
							<p class="mt-30 mb-55">Butuh saran atau rekomendasi makanan ringan dan camilan?
								<br>
								saya siap membantu Anda memilih produk yang sesuai dengan selera dan preferensi Anda.<br>
								Dapatkan informasi terkini tentang produk-produk terbaik dan terbaru di Dubai.
							</p>
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
								<h2>Layanan Pembayaran</h2>
							</div>
							<p class="mt-30 mb-55">Jastip by Laa hanya menyediakan pembayaran via bank BCA & BNI.
								<br>
								Transaksi Anda dijamin aman dengan sistem pembayaran terpercaya.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="image position-relative">
						<img class="radius-10" src="assets/images/service/service-img-4.jpg" alt="image">
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
include ('views/footer.php')
?>
</body>
</html>