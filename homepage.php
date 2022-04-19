
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Marz' Place</title>
	<link rel="stylesheet" type="text/css" href="css_files/homepage.css">
	<link rel="shortcut icon" href="images/Marz'_Place.png" type="image/x-icon" />
</head>
<body>
	<header>
		<div class="header">
		
		<nav>
			<img id="logo" src="images/Marz'_Place.png">
			<ul>
	<?php 
			if(isset($_SESSION['user'])){
			?>
			<ul>
				<li>	<a href="homepage.php" title="Home">HOME</a> </li>
	<li>	<a href="menu.php" title="Menu">MENU</a> </li>
	<li ><a href="cart.php">CART
             (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
              </a></li>
				<li>    <a href="logout.php" title="Logout">LOGOUT</a> </li>
    <?php require_once('processlogin.php');echo $_SESSION['user'];?>
			</ul>
			
			
	<?php
	}else {
		?>
		<ul>
	<li>	<a href="homepage.php" title="Home">HOME</a> </li>
	<li>	<a href="menu.php" title="Menu">MENU</a> </li>
	<li><a href="cart.php">CART
             (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
              </a></li>
	<li>	<a href="login.php" title="Login">LOGIN</a> </li>
	<li>	<a href="registration.php" title="Register">REGISTER</a> </li>
	</ul>
	<?php
	}
	?>
	</nav>

	
</div>

	<div class="headline">
		<h1 class="headline">You are at the right place</h1>
		<p>At Marz' place we offer quality food, snacks and healthy drinks bound to leave you asking for more.</p>
</div>
<div class="calltoaction">
	<a href="menu.php" class="button">SEE MENU</a>
</div>
</header>
<main>
	<article class="benefits">
		<h2>Why Eat with us?</h2>
		<ul>
			<li>Be served by friendly waiters and waitresses</li>
			<li>Get fresh food cooked with natural ingredients</li>
			<li>Enjoy your food in a serene environment</li>
			<li>Cheap and affordable prices</li>

		</ul>
	</article>
	<article class="trustindicators">
		<h2>Why you should trust us</h2>
		<li>Certified by the Foods&Resturants Board</li>
			<li>Awarded the Cleanliness Trophy in the ResturantsChamps Competition</li>
			<li>Recognized as a tourist location</li>
			

	</article>
</main>

</body>
<footer class="footer">
	<div class="importantlinks">
		<h3>IMPORTANT</h3>
		<ul>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Contact us</a></li>
			<li><a href="#">Privacy Policy</a></li>
			<li><a href="#">Terms and conditions</a></li>
		</ul>
	</div>
	<div class="form">
				<h3>SUBSCRIBE TO OUR NEWSLETTER</h3>
					<form action="#" method="post">
					<label for="mail">Sign up to receive the latest news <br> and information by email</label><br><br>
				<input type="email" id="mail" placeholder="Enter your email id"><br><br>
				<button type="submit">SUBSCRIBE</button>
			</form>
			</div>
			<div class="copyright">
	<p>Copyright 2021 Marz | All rights reserved.</p>
</div>
</footer>
</html>