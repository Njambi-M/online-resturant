<?php
session_start();
require("connection.php");
$name= $_SESSION['user'];

$result=mysqli_query($conn,"SELECT * FROM users WHERE user_name='$name'");
$row=mysqli_fetch_array($result);

if(isset($_POST['update'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $user_name=$_POST['user_name'];
  $password=$_POST['password'];
  $dob=$_POST['dob'];
  $gender=$_POST['gender'];
  $role=$_POST['role'];

  $edit=mysqli_query($conn," UPDATE users set fname='$fname', lname='$lname', email='$email', user_name='$user_name', password='$password', dob='$dob', gender='$gender', role='$role' where user_name='$name' ");
if($edit){
  echo '<script>alert("Updated successfully")</script>';
 header("location:user_home.php");
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
   <link rel="stylesheet" type="text/css" href="css_files/profile.css">
   <link rel="shortcut icon" href="images/Marz'_Place.png" type="image/x-icon" />
  <title>Profile</title>
</head>
<body>
<header>
        <div class="header">
        
        <nav>
            <img id="logo" src="images/Marz'_Place.png">
            <ul>
    <li>    <a href="homepage.php" title="Home">HOME</a> </li>
    <li>    <a href="menu.php" title="Menu">MENU</a> </li>
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
    </nav>

</div>
</header>
<div class="wrapper">
    <div class="sidenav">
        <h3>Welcome</h3>
        <ul>
            <li><a href=profile.php>Profile</a></li>
            <li><a href="user_order.php">Orders</a></li>
        </ul>
</div>
</div>

<form action="" method="post" class="view_profile" >
<div id=data>
<input type="text" required id="f_name" name="fname" value="<?php echo $row['fname']; ?>">
        <span></span>
        <label for="f_name">First name:</label>
      </div>
      <div id=data>
        <input type="text" required id="l_name" name="lname" value="<?php echo $row['lname']; ?>">
        <span></span>
        <label for="l_name">Last name:</label>
      </div>
      <div id=data>
        <input type="Email" required id="email_add" name="email" value="<?php echo $row['email']; ?>">
        <span></span>
        <label for="email_add">Email:</label>
      </div>
      <div id=data>
        <input type="text" required id="usernme" name="user_name" value="<?php echo $row['user_name']; ?>">
        <span></span>
        <label for="usernme">User name:</label>
      </div>
        <div id=data>
        <input type="Password" required id="pwd" class="pwd" name="password" value="<?php echo $row['password']; ?>">
        <span></span>
        <label for="pwd">Create Password:</label>
      </div>
      <div id=data>
        <input type="Date" required id="dob" name="dob" max="2021-01-01" value="<?php echo $row['dob']; ?>">
        <span></span>
        <label for="dob">Date of birth:</label><br>
      </div>
        <div id=data>
        <input type="text" required id="gender" name="gender" value="<?php echo $row['gender']; ?>"><span></span>
        <label for="gender">Gender:</label>
      </div>
      <div id=data>
        <input type="text" required id="role" name="role" value="<?php echo $row['role']; ?>"><span></span>
        <label for="role">Role:</label>
      </div>
      <input type="submit" id="update" name="update" value="Update">

  </form>
</body>
<br><br><br><br>
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