<?php
	include 'database.php';
	$email = $password = $confirm_password = "";
	$email_err = $password_err = $confirm_password_err = "";
	if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            // validation email
			if (empty(trim($_POST["email"]))) {
                $email_err = "email cannot be empty";
			}elseif (filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL) === false) {
				$email_err = "invalid email format";
			}else {
                $sql = "SELECT id FROM users WHERE email = ?";
                if ($stmt = mysqli_prepare($conn, $sql)) {
                    mysqli_stmt_bind_param($stmt, "s", $param_email);
                    $param_email = trim($_POST['email']);

                    if (mysqli_stmt_execute($stmt)) {
                        mysqli_stmt_store_result($stmt);
                        if (mysqli_stmt_num_rows($stmt) == 1) {
                            $email_err = "This email is already taken.";
                        } else {
                            $email = trim($_POST['email']);
                        }
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                    }

                    mysqli_stmt_close($stmt);
                }
			}
			//validasi password
		if(empty(trim($_POST["password"]))){
			$password_err = "Please enter a password.";
		}elseif(strlen(trim($_POST["password"])) < 6){
			$password_err = "Password must have atleast 6 characters.";
		}else{
			if (empty(trim($_POST["confirm_password"]))) {
                $confirm_password_err = "Please confirm password.";
            } elseif (trim($_POST["password"]) != trim($_POST["confirm_password"])) {
                $confirm_password_err = "Password did not match.";
            } else {
                $password = trim($_POST["password"]);
            }
		}
		//cek input sebelum memasukkan ke db
		if(empty($email_err) && empty($password_err) && empty($confirm_password_err)){
			$sql = "INSERT INTO users (email, password) VALUES (?, ?)";
			if($stmt = mysqli_prepare($conn, $sql)){
				mysqli_stmt_bind_param($stmt, "ss", $param_email, $param_password);
				$param_email = $email;
				$param_password = password_hash($password, PASSWORD_DEFAULT);
				if(mysqli_stmt_execute($stmt)){
					//redirect to register
					header("location: login.php");
					exit;
				}else{
					echo "oops! Something went wrong. Please try again later.";
				}
                mysqli_stmt_close($stmt);
			}
		}
        mysqli_close($conn);
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
			<h2 class="text-center mb-15 mt-25" data-wow-duration="1.1s" data-wow-delay=".1s">Register</h2>
			<div class="breadcrumb-list  text-center mb-15 mt-25 ">
				<a href="index.php" class="primary-hover"><i class="fa-solid fa-house me-1"></i> Home <i
						class="fa-regular text-white fa-angle-right"></i></a>
				<span>Register</span>
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
								<a href="login.php">Register in</a>
								<a class="active"  href="register.php">create account</a>
							</div>
						</div>
					</div>
					<div class="col-xxl-4">
						<div class="login__content">
							<h2 class="text-white mb-65">Welcome Back</h2>
							<div class="form-area login__form">
								<form action="register.php" method="POST">
									<input type="email" placeholder="Email" id="email" name="email" value="<?php echo $email; ?>">
									<span><?php echo $email_err; ?></span>
									<input class="mt-30" type="password" id="password" placeholder="Password" name="password">
									<span><?php echo $password_err; ?></span>
									<input class="mt-30" type="password" placeholder="Confirm Password" id="confirm_password" name="confirm_password" required>
									<span><?php echo $confirm_password_err; ?></span>
									<button class="mt-30" type="submit">Sign up</button>
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

<!-- Footer area start here -->
<?php
include ('views/footer.php')
?>
</body>

</html>