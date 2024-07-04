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
                        <div class="slide-bg pb-180" data-background="assets/images/banner/banner.jpg"></div>
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
        <section class="product-area pb-130 mt-130">
            <div class="container">
                <div
                    class="product__wrp pb-30 mb-65 bor-bottom d-flex flex-wrap align-items-center justify-content-xl-between justify-content-center">
                    <div class="section-header d-flex align-items-center wow fadeInUp" data-wow-delay=".1s">
                        <span class="title-icon mr-10"></span>
                        <h2>Produk Yang Kami Tawarkan</h2>
                    </div>
                    <ul class="nav nav-pills mt-4 mt-xl-0">
                        <li class="nav-item wow fadeInUp" data-wow-delay=".1s">
                            <a href="#latest-item" data-bs-toggle="tab" class="nav-link px-4 active">
                                Snacks
                            </a>
                        </li>
                        <li class="nav-item wow fadeInUp" data-wow-delay=".2s">
                            <a href="#top-ratting" data-bs-toggle="tab" class="nav-link px-4 bor-left bor-right">
                                Coklat
                            </a>
                        </li>
                        <li class="nav-item wow fadeInUp" data-wow-delay=".3s">
                            <a href="#featured-products" data-bs-toggle="tab" class="nav-link ps-4">
                                Mainan
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="latest-item" class="tab-pane fade show active">
                        <div class="row g-4">
                            <div class="col-xxl-3 col-xl-4 col-md-6">
                                <div class="product__item bor" >
                                    <a href="#" class="product__image pt-20 d-block">
                                        <img class="font-image" src="assets/images/product/product-image1.jpg"
                                            alt="image">
                                        <img class="back-image" src="assets/images/product/product-image1.jpg"
                                            alt="image">
                                    </a>
                                    <div class="product__content">
                                        <h4 class="mb-15"><a class="primary-hover">Ruffles
                                                Sour Cream & Onion</a></h4>
                                        <del>Rp 150.000</del><span class="primary-color ml-10">Rp.90.000</span>
                                        <div class="star mt-20">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                    </div>
                                    <a class="product__cart d-block bor-top" href="https://wa.me/082188188761"><i
                                            class="fa-brands fa-whatsapp primary-color me-1"></i>
                                        <span>Contact For order</span></a>
                                </div>
                            </div>
	                        <div class="col-xxl-3 col-xl-4 col-md-6">
		                        <div class="product__item bor" >
			                        <a href="#" class="product__image pt-20 d-block">
				                        <img class="font-image" src="assets/images/product/product-image3.jpg"
				                             alt="image">
				                        <img class="back-image" src="assets/images/product/product-image3.jpg"
				                             alt="image">
			                        </a>
			                        <div class="product__content">
				                        <h4 class="mb-15"><a class="primary-hover">Walkers Snack
					                        Baked 6 Pack</a></h4>
				                        <del>Rp 150.000</del><span class="primary-color ml-10">Rp 135.000</span>
				                        <div class="star mt-20">
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
				                        </div>
			                        
			                        </div>
			                        <a class="product__cart d-block bor-top" href="https://wa.me/082188188761"><i
					                        class="fa-brands fa-whatsapp primary-color me-1"></i>
				                        <span>Contact For order</span></a>
		                        </div>
	                        </div>
	                        <div class="col-xxl-3 col-xl-4 col-md-6">
		                        <div class="product__item bor" >
			                        <a href="#" class="product__image pt-20 d-block">
				                        <img class="font-image" src="assets/images/product/product-image2.jpg"
				                             alt="image">
				                        <img class="back-image" src="assets/images/product/product-image2.jpg"
				                             alt="image">
			                        </a>
			                        <div class="product__content">
				                        <h4 class="mb-15"><a class="primary-hover">Walkers Snack
					                        Baked 6 Pack</a></h4>
				                        <del>Rp 150.000</del><span class="primary-color ml-10">Rp 135.000</span>
				                        <div class="star mt-20">
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
				                        </div>
			                        
			                        </div>
			                        <a class="product__cart d-block bor-top" href="https://wa.me/082188188761"><i
					                        class="fa-brands fa-whatsapp primary-color me-1"></i>
				                        <span>Contact For order</span></a>
		                        </div>
	                        </div>
	                        <div class="col-xxl-3 col-xl-4 col-md-6">
		                        <div class="product__item bor" >
			                        <a href="#" class="product__image pt-20 d-block">
				                        <img class="font-image" src="assets/images/product/product-image4.jpg"
				                             alt="image">
				                        <img class="back-image" src="assets/images/product/product-image4.jpg"
				                             alt="image">
			                        </a>
			                        <div class="product__content">
				                        <h4 class="mb-15"><a class="primary-hover">Nestle Aero
					                        Chocolate Melts</a></h4>
				                        <del>Rp 150.000</del><span class="primary-color ml-10">Rp 90.000</span>
				                        <div class="star mt-20">
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
				                        </div>
			                        
			                        </div>
			                        <a class="product__cart d-block bor-top" href="https://wa.me/082188188761"><i
					                        class="fa-brands fa-whatsapp primary-color me-1"></i>
				                        <span>Contact For order</span></a>
		                        </div>
	                        </div>
	                        <div class="col-xxl-3 col-xl-4 col-md-6">
		                        <div class="product__item bor" >
			                        <a href="#" class="product__image pt-20 d-block">
				                        <img class="font-image" src="assets/images/product/product-image5.jpg"
				                             alt="image">
				                        <img class="back-image" src="assets/images/product/product-image5.jpg"
				                             alt="image">
			                        </a>
			                        <div class="product__content">
				                        <h4 class="mb-15"><a class="primary-hover">Nestle Aero
					                        Papermint Bubbles</a></h4>
				                        <del>Rp 150.000</del><span class="primary-color ml-10">Rp 90.000</span>
				                        <div class="star mt-20">
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
				                        </div>
			                        
			                        </div>
			                        <a class="product__cart d-block bor-top" href="https://wa.me/082188188761"><i
					                        class="fa-brands fa-whatsapp primary-color me-1"></i>
				                        <span>Contact For order</span></a>
		                        </div>
	                        </div>
	                        <div class="col-xxl-3 col-xl-4 col-md-6">
		                        <div class="product__item bor" >
			                        <a href="#" class="product__image pt-20 d-block">
				                        <img class="font-image" src="assets/images/product/product-image7.jpg"
				                             alt="image">
				                        <img class="back-image" src="assets/images/product/product-image7.jpg"
				                             alt="image">
			                        </a>
			                        <div class="product__content">
				                        <h4 class="mb-15"><a class="primary-hover">Nestle Aero
					                        Papermint Bubbles</a></h4>
				                        <del>Rp 150.000</del><span class="primary-color ml-10">Rp 90.000</span>
				                        <div class="star mt-20">
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
				                        </div>
			                        
			                        </div>
			                        <a class="product__cart d-block bor-top" href="https://wa.me/082188188761"><i
					                        class="fa-brands fa-whatsapp primary-color me-1"></i>
				                        <span>Contact For order</span></a>
		                        </div>
	                        </div>
	                        <div class="col-xxl-3 col-xl-4 col-md-6">
		                        <div class="product__item bor" >
			                        <a href="#" class="product__image pt-20 d-block">
				                        <img class="font-image" src="assets/images/product/product-image6.jpg"
				                             alt="image">
				                        <img class="back-image" src="assets/images/product/product-image6.jpg"
				                             alt="image">
			                        </a>
			                        <div class="product__content">
				                        <h4 class="mb-15"><a class="primary-hover">Cheetos Crunchy</a></h4>
				                        <del>Rp 150.000</del><span class="primary-color ml-10">Rp 66.000</span>
				                        <div class="star mt-20">
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
				                        </div>
			                        </div>
			                        <a class="product__cart d-block bor-top" href="https://wa.me/082188188761"><i
					                        class="fa-brands fa-whatsapp primary-color me-1"></i>
				                        <span>Contact For order</span></a>
		                        </div>
	                        </div>
	                        <div class="col-xxl-3 col-xl-4 col-md-6">
		                        <div class="product__item bor" >
			                        <a href="#" class="product__image pt-20 d-block">
				                        <img class="font-image" src="assets/images/product/product-image8.jpg"
				                             alt="image">
				                        <img class="back-image" src="assets/images/product/product-image8.jpg"
				                             alt="image">
			                        </a>
			                        <div class="product__content">
				                        <h4 class="mb-15"><a class="primary-hover">Cheetos Crunchy</a></h4>
				                        <del>Rp 250.000</del><span class="primary-color ml-10">Rp 235.000</span>
				                        <div class="star mt-20">
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
				                        </div>
			                        </div>
			                        <a class="product__cart d-block bor-top" href="https://wa.me/082188188761"><i
					                        class="fa-brands fa-whatsapp primary-color me-1"></i>
				                        <span>Contact For order</span></a>
		                        </div>
	                        </div>
                        </div>
                    </div>
                    <div id="top-ratting" class="tab-pane fade">
                        <div class="row g-4">
	                        <div class="col-xxl-3 col-xl-4 col-md-6">
		                        <div class="product__item bor" >
			                        <a href="#" class="product__image pt-20 d-block">
				                        <img class="font-image" src="assets/images/product/cokelat/product-image1.jpg"
				                             alt="image">
				                        <img class="back-image" src="assets/images/product/cokelat/product-image1.jpg"
				                             alt="image">
			                        </a>
			                        <div class="product__content">
				                        <h4 class="mb-15"><a class="primary-hover">Harheys Choco Bites Cookies And Crems</a></h4>
				                        <del>Rp 150.000</del><span class="primary-color ml-10">Rp 90.000</span>
				                        <div class="star mt-20">
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
				                        </div>
			                        </div>
			                        <a class="product__cart d-block bor-top" href="https://wa.me/082188188761"><i
					                        class="fa-brands fa-whatsapp primary-color me-1"></i>
				                        <span>Contact For order</span></a>
		                        </div>
	                        </div>
	                        <div class="col-xxl-3 col-xl-4 col-md-6">
		                        <div class="product__item bor" >
			                        <a href="#" class="product__image pt-20 d-block">
				                        <img class="font-image" src="assets/images/product/cokelat/product-image2.jpg"
				                             alt="image">
				                        <img class="back-image" src="assets/images/product/cokelat/product-image2.jpg"
				                             alt="image">
			                        </a>
			                        <div class="product__content">
				                        <h4 class="mb-15"><a class="primary-hover">Harheys Choco Bites Salted Caramel</a></h4>
				                        <del>Rp 150.000</del><span class="primary-color ml-10">Rp 90.000</span>
				                        <div class="star mt-20">
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
				                        </div>
			                        </div>
			                        <a class="product__cart d-block bor-top" href="https://wa.me/082188188761"><i
					                        class="fa-brands fa-whatsapp primary-color me-1"></i>
				                        <span>Contact For order</span></a>
		                        </div>
	                        </div>
	                        <div class="col-xxl-3 col-xl-4 col-md-6">
		                        <div class="product__item bor" >
			                        <a href="#" class="product__image pt-20 d-block">
				                        <img class="font-image" src="assets/images/product/cokelat/product-image3.jpg"
				                             alt="image">
				                        <img class="back-image" src="assets/images/product/cokelat/product-image3.jpg"
				                             alt="image">
			                        </a>
			                        <div class="product__content">
				                        <h4 class="mb-15"><a class="primary-hover">Nestle KitKat Cokelat Bar </a></h4>
				                        <del>Rp 150.000</del><span class="primary-color ml-10">Rp 110.000</span>
				                        <div class="star mt-20">
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
				                        </div>
			                        </div>
			                        <a class="product__cart d-block bor-top" href="https://wa.me/082188188761"><i
					                        class="fa-brands fa-whatsapp primary-color me-1"></i>
				                        <span>Contact For order</span></a>
		                        </div>
	                        </div>
	                        <div class="col-xxl-3 col-xl-4 col-md-6">
		                        <div class="product__item bor" >
			                        <a href="#" class="product__image pt-20 d-block">
				                        <img class="font-image" src="assets/images/product/cokelat/product-image4.jpg"
				                             alt="image">
				                        <img class="back-image" src="assets/images/product/cokelat/product-image4.jpg"
				                             alt="image">
			                        </a>
			                        <div class="product__content">
				                        <h4 class="mb-15"><a class="primary-hover">Nestle KitKat Miniatures</a></h4>
				                        <del>Rp 150.000</del><span class="primary-color ml-10">Rp 110.000</span>
				                        <div class="star mt-20">
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
				                        </div>
			                        </div>
			                        <a class="product__cart d-block bor-top" href="https://wa.me/082188188761"><i
					                        class="fa-brands fa-whatsapp primary-color me-1"></i>
				                        <span>Contact For order</span></a>
		                        </div>
	                        </div>
	                        <div class="col-xxl-3 col-xl-4 col-md-6">
		                        <div class="product__item bor" >
			                        <a href="#" class="product__image pt-20 d-block">
				                        <img class="font-image" src="assets/images/product/cokelat/product-image5.jpg"
				                             alt="image">
				                        <img class="back-image" src="assets/images/product/cokelat/product-image5.jpg"
				                             alt="image">
			                        </a>
			                        <div class="product__content">
				                        <h4 class="mb-15"><a class="primary-hover">Twix Choco Hazelnut Minis</a></h4>
				                        <del>Rp 150.000</del><span class="primary-color ml-10">Rp 90.000</span>
				                        <div class="star mt-20">
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
					                        <i class="fa-solid fa-star"></i>
				                        </div>
			                        </div>
			                        <a class="product__cart d-block bor-top" href="https://wa.me/082188188761"><i
					                        class="fa-brands fa-whatsapp primary-color me-1"></i>
				                        <span>Contact For order</span></a>
		                        </div>
	                        </div>
                        </div>
                    </div>
                    <div id="featured-products" class="tab-pane fade">
                        <div class="row g-4">
                           <H2 class="text-center">Coming Soon</H2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product area end here -->
        <div class="container">
            <div class="bor-top pb-40"></div>
        </div>
        <div class="marquee-wrapper text-slider">
            <div class="marquee-inner to-left">
                <ul class="marqee-list d-flex">
                    <li class="marquee-item">
                        Kinder <img src="assets/images/icon/title-left.svg" alt="icon"> <span>Twix</span>
                        <img src="assets/images/icon/title-left.svg" alt="icon">
                        Harheys<img src="assets/images/icon/title-left.svg" alt="icon"> <span>Nestle</span>
                        <img src="assets/images/icon/title-left.svg" alt="icon">
                        Walkers<img src="assets/images/icon/title-left.svg" alt="icon"> <span>Godiva</span>
                        <img src="assets/images/icon/title-left.svg" alt="icon">
                        Spinneys<img src="assets/images/icon/title-left.svg" alt="icon"> <span>Day To Day</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="bor-top pb-65"></div>
        </div>
    </main>
<?php
include ('views/footer.php')
?>
</body>

</html>