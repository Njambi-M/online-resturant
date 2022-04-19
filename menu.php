<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu</title>

	 
	<link rel="shortcut icon" href="images/Marz'_Place.png" type="image/x-icon" /> 
  <link rel="stylesheet" type = "text/css" href ="css_files/bootstrap.min.css"> 
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
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
<div class="container" style="width:95%;">

<?php

require 'connection.php';

$sql = "SELECT * FROM menu ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
	 $count=0;
  while($row = mysqli_fetch_assoc($result)){
   if ($count == 0)
      echo "<div class='row'>";

?>

<div class="col-md-3">

<form method="post" action='cart.php?action=add&Food_ID=<?php echo $row["Food_ID"]; ?>'>
<div class="mypanel" align="center";>

<img src='asset/ <?php echo $row["Food_image"]; ?>' class="img-responsive">
<h4 ><?php echo $row["Food_name"]; ?></h4>
<h5 ><?php echo $row["description"]; ?></h5>
<h5 >ksh <?php echo $row["Food_price"]; ?>/=</h5>
<h5 >Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
<input type="hidden" name="Food_name" value="<?php echo $row["Food_name"]; ?>">
<input type="hidden" name="Food_price" value="<?php echo $row["Food_price"]; ?>">

<input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
</div>
</form>        
</div>

<?php
$count++;
if($count==4)
{
  echo "</div>";
  echo "<br><br><br>";
  $count=0;
}
}
}
?>

</div>

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