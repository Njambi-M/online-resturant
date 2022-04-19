<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Payment</title>
</head>
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
<?php
$gtotal = 0;

  foreach($_SESSION["cart"] as $keys => $values)
  {
    if(isset($_SESSION["user"])){
    $Food_ID = $values["Food_ID"];
    $Food_name = $values["Food_name"];
    $quantity = $values["quantity"];
    $price =  $values["Food_price"];
    $total = ($values["quantity"] * $values["Food_price"]);
    $username = $_SESSION["user"];
    require('process_order.php');
    $order_id=$_SESSION['order_id'];
    
    $gtotal = $gtotal + $total; 

              $sql_order=("INSERT INTO order_items (order_id, user_name, Food_ID, Food_name, quantity, price) 
              VALUES ('" . $order_id . "', '" . $username . "', '" . $Food_ID . "','" . $Food_name . "' ,'" . $quantity . "', '" . $total . "')");    

              }else{
    $Food_ID = $values["Food_ID"];
    $Food_name = $values["Food_name"];
    $quantity = $values["quantity"];
    $price =  $values["Food_price"];
    $total = ($values["quantity"] * $values["Food_price"]);
    require('process_order.php');
    $order_id=$_SESSION['order_id'];
    
    $gtotal = $gtotal + $total; 

              $sql_order=("INSERT INTO order_items (order_id, Food_ID, Food_name, quantity, price) 
              VALUES ('" . $order_id . "', '" . $Food_ID . "','" . $Food_name . "' ,'" . $quantity . "', '" . $total . "')");
              }     

      if (mysqli_query($conn, $sql_order)) 
      {
        ?>
         <div class="container">
           <div class="jumbotron">
             <h1>Thank you for choosing Marz' Place</h1>
          </div>
         </div>

         <?php
     } else{
        ?>  
      <div class="container">
          <div class="jumbotron">
            <h1>Something went wrong!</h1>
            <?php echo  $conn->error; ?>
            <p>Try again later.</p>
          </div>
        </div>

        <?php
      }
    }
        ?>
        
        <br>
<h1 class="text-center">Grand Total: Ksh <?php echo "$gtotal"; ?>/=</h1>
<h5 class="text-center">Order ID number: <?php echo "$order_id"; ?></h5>
<h5 class="text-center">Payment is upon delivery. Enjoy your meal</h5>
<br>
<h1 class="text-center">
  <a href="cart.php"><button class="btn btn-warning"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go back to cart</button></a>
  <a href="homepage.php"><button class="btn btn-warning"><span class="glyphicon glyphicon-circle-arrow-left"></span> Leave</button><?php unset($_SESSION["cart"]); ?></a>
</h1>
<br><br><br><br><br><br>

</body>
</html>