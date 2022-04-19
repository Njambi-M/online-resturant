<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cart</title>
</head>
	<link rel="shortcut icon" href="images/Marz'_Place.png" type="image/x-icon" />
  <link rel="stylesheet" type = "text/css" href ="css_files/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

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
	<li class="active" ><a href="menu.php">CART
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

<?php
if(!empty($_SESSION["cart"]))
{
  ?>
  <div class="container">
      <div class="jumbotron">
        <h1>Your Shopping Cart</h1>
        <p>Here is what you have bought🥰</p>
        
      </div>
      
    </div>
    <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;" >
<table class="table table-striped">
  <thead class="thead-dark">
<tr>
<th width="40%">Food Name</th>
<th width="10%">Quantity</th>
<th width="20%">Price Details</th>
<th width="15%">Order Total</th>
<th width="5%">Action</th>
</tr>
</thead>

<?php  

$total = 0;
foreach($_SESSION["cart"] as $keys => $values)
{
?>
<tr>
<td><?php echo $values["Food_name"]; ?></td>
<td><?php echo $values["quantity"] ?></td>
<td>Ksh <?php echo $values["Food_price"]; ?></td>
<td>Ksh <?php echo number_format($values["quantity"] * $values["Food_price"], 2); ?></td>
<td><a href="cart.php?action=delete&Food_ID=<?php echo $values["Food_ID"]; ?>"><span class="text-danger">Remove</span></a></td>
</tr>
<?php 
$total = $total + ($values["quantity"] * $values["Food_price"]);
}
?>
<tr>
<td colspan="3" align="right">Total</td>
<td align="right">Ksh <?php echo number_format($total, 2); ?></td>
<td></td>
</tr>
</table>
<?php
  echo '<a href="cart.php?action=empty"><button class="btn btn-danger">Empty Cart</button></a>&nbsp;<a href="menu.php"><button class="btn btn-warning">Continue Shopping</button></a>&nbsp;<a href="delivery.php"><button class="btn btn-success pull-right"> Check Out</button></a>';
?>
</div>
<br><br><br><br><br><br><br>
<?php
}
if(empty($_SESSION["cart"]))
{
  ?>
  <div class="container">
      <div class="jumbotron">
        <h1>Your Shopping Cart</h1>
        <p>Your cart is empty.Click here to <a href="menu.php">order now.</a></p>
        
      </div>
      
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php
}
?>
<?php
if(isset($_POST["add"]))
{
if(isset($_SESSION["cart"]))
{
$item_array_id = array_column($_SESSION["cart"], "Food_ID");
if(!in_array($_GET["Food_ID"], $item_array_id))
{
$count = count($_SESSION["cart"]);

$item_array = array(
'Food_ID' => $_GET["Food_ID"],
'Food_name' => $_POST["Food_name"],
'Food_price' => $_POST["Food_price"],
'quantity' => $_POST["quantity"]
);
$_SESSION["cart"][$count] = $item_array;
echo '<script>window.location="cart.php"</script>';
}
else
{
echo '<script>alert("Products already added to cart")</script>';
echo '<script>window.location="cart.php"</script>';
}
}
else
{
$item_array = array(
'Food_ID' => $_GET["Food_ID"],
'Food_name' => $_POST["Food_name"],
'Food_price' => $_POST["Food_price"],
'quantity' => $_POST["quantity"]
);
$_SESSION["cart"][0] = $item_array;
}
}
if(isset($_GET["action"]))
{
if($_GET["action"] == "delete")
{
foreach($_SESSION["cart"] as $keys => $values)
{
if($values["Food_ID"] == $_GET["Food_ID"])
{
unset($_SESSION["cart"][$keys]);
echo '<script>alert("Food has been removed")</script>';
echo '<script>window.location="cart.php"</script>';
}
}
}
}

if(isset($_GET["action"]))
{
if($_GET["action"] == "empty")
{
foreach($_SESSION["cart"] as $keys => $values)
{

unset($_SESSION["cart"]);
echo '<script>alert("Cart has been made empty!")</script>';
echo '<script>window.location="cart.php"</script>';

}
}
}


?>
<?php

?>



</body>
</html>