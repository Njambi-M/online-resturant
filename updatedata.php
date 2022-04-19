<?php
require("connection.php");

$id= $_GET['customer_id'];
$result=mysqli_query($conn,"SELECT * FROM users WHERE customer_id='$id'");
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

  $edit=mysqli_query($conn," UPDATE users set fname='$fname', lname='$lname', email='$email', user_name='$user_name', password='$password', dob='$dob', gender='$gender', role='$role' where customer_id='$id' ");
if($edit){
  echo '<script>alert("Updated successfully")</script>';
 header("location:view_users.php");
  return true;
}else{ 
  echo mysqli_error();
}

}

?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Update User Data</title>
    <link rel="stylesheet" type="text/css" href="css_files/updatedata.css">
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
  <form action="" method="post" class="updateusersdata" >
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
</main>
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
