<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Add Menu</title>
		<link rel="stylesheet" type="text/css" href="css_files/upload_image.css">
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
<div class="formupload">
	<form action="process_upload.php" method="POST" enctype="multipart/form-data">

		<label for="fooditem">Food Name:</label><br>
		<input type="text" name="fooditem" required="true" /> <br/><br/>

		<label for="foodprice">Price</label><br>
		<input type="number" name="price" id="foodprice" required="true">
		
		<br/><br/>

		<label for="description">Description</label><br>
		<input type="text" name="description" id="description" required="true">
		
		<br/><br/>

		<label for="foodimage"> Image</label><br/>
		<input type="file" name="food-image" id="foodimage" required="true"><br>
 
		<br><br>

		<input type="submit" id="save" name="SubmitImage" value="ADD">
		<br>
	</form>
</div>
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