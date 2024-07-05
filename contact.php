<?php
include 'database.php';
$name = $email = "";
$name_err = $email_err = $submit_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // validasi name
    if(empty(trim($_POST["name"]))){
        $name_err = "Please enter your name.";
    }else{
        $name = trim($_POST["name"]);
    }
    //validasi email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    }else{
        $email = trim($_POST["email"]);
    }

	//validasi message
	if (empty(trim($_POST["message"]))) {
            $message_err = "Please enter your message.";
        } else {
            $message = trim($_POST["message"]);
        }
    //validasi
    if(empty($name_err) && empty($email_err)){
        $sql = "INSERT INTO contact (name,email,message) VALUES (?, ?,?)";
        if($stmt = mysqli_prepare($conn, $sql)){
			mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_email, $param_message);
			$param_email = trim($_POST["email"]);
			$param_message = trim($_POST["message"]);
			$param_name = trim($_POST["name"]);

			if (mysqli_stmt_execute($stmt)) {
                    $submit_err = "Message sent successfully.";
                } else {
                    $submit_err = "Something went wrong. Please try again later.";
                }
        }
        mysqli_close($conn);
    }
}
?>


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
                    <div class="slide-bg pb-180" data-background="assets/images/service/services.jpg"></div>
                    <div class="container">
                        <div class="banner-two__content">
                            <h1 data-animation="fadeInUp" data-delay="1.3s">Hubungi<br>
                                <span class="primary-color">Kami</span></h1>
                            <p class="mt-40" data-animation="fadeInUp" data-delay="1.5s"><br> Kami di Jastip by Laa selalu siap membantu Anda.<br>Jika Anda memiliki pertanyaan, umpan balik, atau permintaan khusus, jangan ragu untuk menghubungi kami.<br> Kami berkomitmen untuk memberikan layanan terbaik dan menjawab setiap pertanyaan Anda secepat mungkin.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact pt-130 pb-130">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="content radius-10 bg-image">
                        <h2>Ada yang ingin Anda sampaikan?</h2>
                        <p>Kami berkomitmen untuk memberikan layanan terbaik dan menjawab setiap pertanyaan Anda secepat mungkin.</p>
                        <div class="arry"><img src="assets/images/contact/arry.png" alt=""></div>
                        <ul>
                            <li><a href="#"
                                   target="_blank"><i class="fa-solid fa-location-dot"></i>Jalan doang</a>
                            </li>
                            <li><a href="tel:0123456789"><i class="fa-solid fa-phone-volume"></i>0123456789</a>
                            </li>
                            <li><a href="mailto:company.info@mail.com"><i
                                        class="fa-solid fa-envelope"></i>info.stoky@company.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-area">
                        <form action="contact.php" method="post">
                            <input type="text" placeholder="Name" name="name" id="name">
	                        <span><?php echo $name_err; ?></span>
                            <input type="email" placeholder="Email" name="email">
	                        <span><?php echo $email_err; ?></span>
                            <textarea name="message" id="message" placeholder="Message..."></textarea>
                            <div class="radio-btn mt-2">
                                <span></span>
                                <p>I accept your terms & conditions</p>
                            </div>
                            <button class="mt-40 btn-one" type="submit"><span>Submit Now</span></button>
                        </form>
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
