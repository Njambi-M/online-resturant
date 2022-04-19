<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Add address</title>
		<link rel="stylesheet" type="text/css" href="css_files/delivery.css">
		<link rel="shortcut icon" href="images/Marz'_Place.png" type="image/x-icon" />
	</head>
	<body>
		<header>
		<div class="header">
		
		<nav>
			<img id="logo" src="images/Marz'_Place.png">
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
</header>
<main>
	<article class="center">
		<h1>Delivery Details</h1>
		<form action="process_order.php" method="post">
			<div id=data>
				<label for="deliv_add">Delivery address:</label>
				<input type="text" required id="deliv_add" name="delivery_address"> <br><br>
			</div>
			<div id=data>
				<label for="email">Email:</label>
				<input type="Email" required id="email" name="email_add"> <br><br>
			</div>
			<div id=data>
				<label for="usernme">Phone number:</label>
				<input type="number" required id="phone_no" name="phone_number"> <br><br>
			</div>
				<input type="submit" id="save" name="save" value="Save">
				
		</form>
	</article>
	</main>
	</body>
</html>