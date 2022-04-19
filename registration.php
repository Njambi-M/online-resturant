<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Register</title>
		<link rel="stylesheet" type="text/css" href="css_files/registration2.css">
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
	<li><a href="cart.php">CART
              </a></li>
	<li>	<a href="login.php" title="Login">LOGIN</a> </li>
	<li>	<a href="registration.php" class="active" title="Register">REGISTER</a> </li>
	</ul>
	</nav>
</div>
</header>
<main>
	<article class="center">
		<h1>Kindly fill in your details</h1>
		<form action="register_user_data.php" method="post">
			<div id=data>
				<input type="text" required id="fname" name="first_name">
				<span></span>
				<label for="fname">First name:</label>
			</div>
			<div id=data>
				<input type="text" required id="lname" name="last_name">
				<span></span>
				<label for="lname">Last name:</label>
			</div>
			<div id=data>
				<input type="Email" required id="email" name="email_add">
				<span></span>
				<label for="email">Email:</label>
			</div>
			<div id=data>
				<input type="text" required id="usernme" name="user_name">
				<span></span>
				<label for="usernme">User name:</label>
			</div>
			<div id=data>
				<input type="Date" required id="dob" name="DOB" max="2021-01-01">
				<span></span>
				<label for="dob">Date of birth:</label><br>
			</div>
				<div id=data>
				<input type="Password" required id="pwd" class="pwd" name="password"><span></span>
				<label for="pwd">Create Password:</label>
			</div>
			<label>Gender:</label>

				<label for="male">Male</label>
				<input type="radio" id="male" name="gender" value="male" checked>

				<label for="female">Female</label>
				<input type="radio" id="female" name="gender" value="female">

			<div><br><br>
			<label>Role:</label>

				<label for="client">Customer</label>
				<input type="radio" id="client" name="user" value="client" checked>
			</div>
				<input type="submit" id="Register" name="register" value="register">
				<div class="log">Already have an account ? <a href="login.php">Login</a></div>
				
		</form>
	</article>
	</main>
	</body>
</html>