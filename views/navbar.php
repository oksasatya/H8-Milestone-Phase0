<?php
$current_url = basename($_SERVER['REQUEST_URI'], ".php");
?>
<div class="top__header pt-30 pb-30">
    <div class="container">
        <div class="top__wrapper">
            <a href="/index.php">
                <img src="/assets/images/logo/logo.png" class="main__logo" alt="logo__image">
            </a>
        </div>
    </div>
</div>
<header class="header-section">
    <div class="container">
        <div class="header-wrapper">
            <div class="header-bar d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="main-menu">
                <!--if current url class active-->
                <li>
                    <!--<i class="fa-regular fa-angle-down"></i>-->
                    <a href="index.php" class="<?= ($current_url == 'index') ? 'active' : '' ?>">Home</a>
                </li>
                <li>
                    <a href="service.php" class="<?= ($current_url == 'service') ? 'active' : '' ?>">Services</a>
                </li>
                <li>
                    <a href="gallery.php" class="<?= ($current_url == 'gallery') ? 'active' : '' ?>">Gallery</a>
                </li>
                <li>
                    <a href="about.php" class="<?= ($current_url == 'about-us') ? 'active' : '' ?>">About Us</a>
                </li>
                <li>
                    <a href="/contact.html" class="<?= ($current_url == 'contact') ? 'active' : '' ?>">Contact Us</a>
                </li>
                <li>
                    <a href="login.php" class="<?= ($current_url == 'login' || $current_url == 'register') ? 'active' : '' ?>">Login</a>
                </li>
	            <li>
		            <a href="currency.php" class="<?= ($current_url == 'currency') ? 'active' : '' ?>">Currency</a>
	            </li>
            </ul>
        </div>
    </div>
</header>

