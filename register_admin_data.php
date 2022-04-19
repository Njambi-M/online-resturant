<?php

require("connection.php");
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$email=$_POST['email_add'];
$user_name=$_POST['user_name'];
$pass=$_POST['password'];
$dob=$_POST['DOB'];
$gender=$_POST['gender'];
$user=$_POST['user'];


$sql = "INSERT INTO Users (fname, lname, email, user_name, password, dob, gender, role)
VALUES ('$fname', '$lname', '$email', '$user_name', '$pass', '$dob', '$gender', '$user')";

echo $pass;

if (mysqli_query($conn, $sql)) {
 echo '<script>alert("User created successfully")</script>';
   header("location:view_users.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>