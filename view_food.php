<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Food</title>
	<link rel="stylesheet" type="text/css" href="css_files/view_food2.css">
	<link rel="shortcut icon" href="images/Marz'_Place.png" type="image/x-icon" />
</head>
</head>
<body>
<header>
        <div class="header">
        
        <nav>
            <img id="logo" src="images/Marz'_Place.png">
            <ul>
    <li>    <a href="homepage.php" title="Home">HOME</a> </li>
    <li>    <a href="menu.php" title="Menu">MENU</a> </li>
    <li>    <a href="logout.php" title="Logout">LOGOUT</a> </li>
    <?php require_once('processlogin.php');echo $_SESSION['user'];?>
    </ul>
    </nav> 

</div>
</header>

<main class="main">
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
	<?php
	require_once("connection.php");
	$sql_select="SELECT * FROM menu";

	if($result=mysqli_query($conn, $sql_select)){
		if(mysqli_num_rows($result)>0){
			echo "<table>";
			echo "<tr>";
			echo "<th>Food_ID</th>";
			echo "<th>Food Name</th>";
			echo "<th>Price</th>";
			echo "<th>Image</th>";
			echo "<th>Delete</th>";
			echo "<th>Edit</th>";
			echo "</tr>";
			while($row = mysqli_fetch_array($result)){
				echo "<tr>";
				echo "<td>" . $row['Food_ID'] . "</td>";
				echo "<td>" . $row['Food_name'] . "</td>";
				echo "<td>" . $row['Food_price'] . "</td>";
				echo "<div id='image'>";
				echo "<td><img src='asset/".$row['Food_image']."' width='100' height='100'></td>";
				echo "</div>";
				echo "<td><a href=deletemenu.php?Food_ID=" .$row['Food_ID']. ">Delete</a>" . "</td>";
                echo "<td><a href=edit_image.php?Food_ID=" .$row['Food_ID']. ">Edit</a>" . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		}else{
        echo "No records found.";
    }
} else{
    echo "ERROR " . mysqli_error($conn);
}
	?>
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