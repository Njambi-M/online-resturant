<?php
require("connection.php");
$id= $_GET['Food_ID'];


$del="DELETE FROM menu WHERE Food_ID='$id' ";

if ($conn->query($del) === TRUE) {
  header("location:view_food.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>