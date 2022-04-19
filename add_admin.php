<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Register Administrator</title>
		<link rel="stylesheet" type="text/css" href="css_files/add_admin2.css">
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
	<li>    <a href="logout.php" title="Logout">LOGOUT</a> </li>
	<?php require_once('processlogin.php');echo $_SESSION['user'];?>
	</ul>
	</nav>
</div>
</header>
<main>
	<div class="wrapper">
    <div class="sidenav">
        <h3>Welcome</h3>
        <ul>
        	<li><a href=admin.php>Home</a></li>
            <li><a href="view_users.php">View Users</a></li>
            <li><a href="add_admin.php">Add Admin</a></li>
            <li><a href="upload_image.php">Add Food</a></li>
            <li><a href="view_food.php">View Food</a></li>
            <li><a href="admin_view_orders.php">View Orders</a></li>
        </ul>
</div>
</div>
	<article class="center">
		<h1>Kindly fill in the details</h1>
		<form action="register_admin_data.php" method="post">
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

				<label for="admin">Admin</label>
				<input type="radio" id="admin" name="user" value="admin" checked>
			</div>
				<input type="submit" id="Register" name="register" value="register">
				
		</form>
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