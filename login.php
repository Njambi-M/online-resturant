<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Login page</title>
		<link rel="stylesheet" type="text/css" href="css_files/login2.css">
		<link rel="shortcut icon" href="images/Marz'_Place.png" type="image/x-icon" />
	</head>
<body>
<header>
		<div class="header">
		
		<nav> 
			<img id="logo" src="images/Marz'_Place.png">
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
	<li>	<a href="login.php" class="active" title="Login">LOGIN</a> </li>
	<li>	<a href="registration.php" title="Register">REGISTER</a> </li>
	</ul>
	</nav>

</div>
</header>
<main>
	<div class="center">
		<h1>Sign in</h1>
	<form action="processlogin.php" method="post">
	<div id="data">
		<input type="text" required id="usernme" name="user_name">
		<span></span>
		<label for="usernme">User name:</label>
	</div>
	<div id="data">
		<input type="Password" required id="pwd" name="pwd">
		<span></span>
		<label for="pwd">Password:</label>
	</div>
	<div class="pass">Forgot Password</div>
	<input type="submit" id="login" name="Login" value="Login">
	<div class="signup">No account ? <a href="registration.php">Register here</a></div>
</form>
</div>
</main>
</body>
</html>