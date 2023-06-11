<?php

session_start();
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Team</title>
    <link rel="stylesheet" href="css/about.css">
</head>
<body>
    <header>
		<img id="icon-shop" src="img/Brand/Logo_NIKE.svg-removebg-preview.png" alt="" >
        <a href="logout.php"><img id="icon-logout" src="img/Brand/logout_FILL1_wght400_GRAD0_opsz48.png" alt=""></a>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="reference.php">Shop</a></li>
				<li><a href="about.php">About Us</a></li>
			</ul>
		</nav>
	</header>
    <main>
        <div class="team-container">
            <div class="team-card">
                <img src="img/Designer/gabs_foro.png" alt="">
                <p>Peter Gabriel Sompotan</p>
                <p>210211060245</p>
            </div>
            <div class="team-card">
                <img src="img/Designer/DSC09491sq.png" alt="">
                <p>Try Setiawan</p>
                <p>210211060199</p>
            </div>
            <div class="team-card">
                <img src="img/Designer/cipo.jpg" alt="">
                <p>Christy Potabuga</p>
                <p>210211060021</p>
            </div>
            <div class="team-card">
                <img src="img/Designer/osin.jpg" alt="">
                <p>Hosiana Wuwungan</p>
                <p>210211060172</p>
            </div>
            <div class="team-card">
                <img src="img/Designer/brenda.jpg" alt="">
                <p>Brenda Sangian</p>
                <p>210211060126</p>
            </div>
        </div>
        <!-- Repeat the above section for each team member -->
    </main>
</body>
</html>