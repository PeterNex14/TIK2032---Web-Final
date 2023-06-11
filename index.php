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
	<title>MyShop</title>
	<link rel="stylesheet" href="css/index.css">
</head>

<body>
	<header>
		<img id="icon-shop" src="img/Brand/Logo_NIKE.svg-removebg-preview.png" alt="">
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
		<section class="hero">
			<div class="box">
				<h1>Welcome, </h1>
				<p>Find everything you need here</p>
				<a href="reference.php" class="btn-primary">Shop Now</a>
			</div>
		</section>

		<section class="products">
			<div class="head-prod">
				<h1>New Arrival</h1>
			</div>
			<div class="prod-cont" id="prod-cont">
				<div class="product">
					<img src="Images/airjordan1low.jpg" alt="1 Low">
					<h3>Air Jordan 1 Low</h3>
				</div>
				<div class="product">
					<img src="Images/retro 6.jpg" alt="Retro 6">
					<h3>Air Jordan Retro 6</h3>
				</div>
				<div class="product">
					<img src="Images/jordan 13.jpeg" alt="13 retro">
					<h3>Air Jordan 13 Retro</h3>
				</div>
			</div>
		</section>
	</main>
	

</body>

</html>