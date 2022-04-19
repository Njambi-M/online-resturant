<?php
require("connection.php");
$id= $_GET['customer_id'];


$del="DELETE FROM Users WHERE customer_id='$id' ";

if ($conn->query($del) === TRUE) {
  header("location:view_users.php")
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>