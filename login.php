<?php
include 'database.php';
$email = $password = "";
$email_err = $password_err = $login_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //validasi email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    }else{
        $email = trim($_POST["email"]);
    }
    // validasi password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    }else{
        $password = trim($_POST["password"]);
    }

    //validasi credensial
    if(empty($email_err) && empty($password_err)){
        $sql = "SELECT email, password FROM users WHERE email = ?";
		if($stmt = mysqli_prepare($conn, $sql)){
			mysqli_stmt_bind_param($stmt, "s", $param_email);
			$param_email = $email;
			if(mysqli_stmt_execute($stmt)){
				mysqli_stmt_store_result($stmt);
				if (mysqli_stmt_num_rows($stmt) == 1) {
                        mysqli_stmt_bind_result($stmt, $email, $hashed_password);
                        if (mysqli_stmt_fetch($stmt)) {
                            if (password_verify($password, $hashed_password)) {
                                session_start();
                                $_SESSION["loggedin"] = true;
                                $_SESSION["email"] = $email;
                                header("location: index.php");
								exit();
                            } else {
                                $login_err = "Invalid email or password.";
                            }
                        }
                    } else {
                        $login_err = "Invalid email or password.";
                    }
				mysqli_stmt_close($stmt);
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
        <!-- Page banner area start here -->
        <section class="page-banner bg-image pt-130 pb-130" data-background="assets/images/banner/inner-banner.jpg">
            <div class="container">
                <h2 class="text-center mb-15 mt-25" data-wow-duration="1.1s" data-wow-delay=".1s">sign in</h2>
                <div class="breadcrumb-list  text-center mb-15 mt-25 ">
                    <a href="index.php" class="primary-hover"><i class="fa-solid fa-house me-1"></i> Home <i
                            class="fa-regular text-white fa-angle-right"></i></a>
                    <span>sign in</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Login area start here -->
        <section class="login-area pt-130 pb-130">
            <div class="container">
                <div class="login__item">
                    <div class="row g-4">
                        <div class="col-xxl-8">
                            <div class="login__image">
                                <img src="assets/images/login/login-image1.jpg" alt="image">
                                <div class="btn-wrp">
                                    <a class="active" href="login.php">sign in</a>
                                    <a href="register.php">create account</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4">
                            <div class="login__content">
                                <h2 class="text-white mb-65">Welcome Back</h2>
                                <div class="form-area login__form">
                                    <form action="login.php" method="POST">
                                        <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
	                                    <span><?php echo $email_err; ?></span>
                                        <input class="mt-30" type="password" placeholder="Enter Password" name="password" required>
	                                    <span><?php echo $password_err; ?></span>
                                        <button class="mt-30" type="submit">Sign In</button>
	                                    <span><?php echo $login_err; ?></span>
                                        <div class="radio-btn mt-30">
                                            <span></span>
                                            <p>I accept your terms & conditions</p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Login area end here -->
    </main>
<?php
include ('views/footer.php')
?>
</body>

</html>