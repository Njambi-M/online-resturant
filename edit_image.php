<?php
require_once("connection.php");

$id= $_GET['Food_ID'];
$result=mysqli_query($conn,"SELECT * FROM menu WHERE Food_ID='$id'");
$row=mysqli_fetch_array($result);

if(isset($_POST['update'])){
  $Food_name=$_POST['Food_name'];
  $Food_price=$_POST['Food_price'];
  $description=$_POST['description'];
  

  $edit=mysqli_query($conn," UPDATE menu set Food_name='$Food_name', Food_price='$Food_price' where Food_ID='$id' ");
if($edit){
 header("location:view_food.php");
  return true;
}else{
  echo mysqli_error();
}
}
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Edit Menu</title>
   <!-- <link rel="stylesheet" type="text/css" href="css_files/edit_image.css">  -->
    <link rel="shortcut icon" href="images/Marz'_Place.png" type="image/x-icon" />
</head>
<body>
  <header>
    <div class="header">
    
    <nav>
      <img id="logo" src="images/Marz'_Place.png">
      <ul>
  <li>  <a href="homepage.php" title="Home">HOME</a> </li>
  <li>  <a href="menu.php" title="Menu">MENU</a> </li>
 <li>    <a href="logout.php" title="Logout">LOGOUT</a> </li>
  <?php require_once('processlogin.php');echo $_SESSION['user'];?>
  </ul>
  </nav>
</div>
</header>
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
  <form action="" method="post" class="updateusersdata" >
<div id=data>

<label for="fooditem">Food Name:</label><br>
    <input type="text" id="fooditem" name="fooditem" required="true" value="<?php echo $row['Food_name']; ?>">

    <label for="foodprice">Price</label><br>
    <input type="number" name="price" id="foodprice" required="true" value="<?php echo $row['Food_price']; ?>">

    <label for="description">Description</label><br>
    <input type="text" name="description" id="description" required="true" value="<?php echo $row['description']; ?>">
    <input type="submit" id="save" name="SubmitImage" value="ADD">
    <br>
    </div>
  </form>
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
