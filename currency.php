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
                    <div class="slide-bg pb-180" data-background="assets/images/banner/banner-currency.jpg"></div>
                    <div class="container">
                        <div class="banner-two__content">
                            <h1 data-animation="fadeInUp" data-delay="1.3s">Jastip From <br>
                                <span class="primary-color">Dubai</span></h1>
                            <p class="mt-40" data-animation="fadeInUp" data-delay="1.5s"><br> adalah layanan personal shopping kami yang dikhususkan untuk menyediakan snack khas dan unik dari Dubai <br>
                                Kami secara pribadi memilih dan membeli produk-produk ini langsung dari Dubai dan membawanya kembali <br>
                                ke Jakarta dengan penuh perhatian dan keamanan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<section class="currency-area pt-80 pb-80">
		<div class="container-fluid">
			<div class="row d-flex justify-content-center">
				<div class="convert">
					<form id="currency">
						<div class="row d-flex justify-content-center">
							<div class="col-md-5 mt-30 text-center">
								<label for="from" >United Arab Emirates
								</label>
								<input type="number" class="form-control" id="aed" value="4450" readonly>
							</div>
							<div class="col-md-1 mt-70 text-center">
								<span>TO</span>
							</div>
							<div class="col-md-5 mt-30 mx-auto text-center">
								<label for="from" > Indonesia
								</label>
								<input type="number" class="form-control" id="idr">
							</div>
							<div class="col-md-1 btn-group">
								<button class="btn primary-bg mt-5" type="button" onclick="total()">Convert</button>
							</div>
						</div>
					</form>
					<div id="result-total">
						<p class="text-white" id="result"></p>
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