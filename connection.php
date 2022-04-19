<?php
$servername = "localhost";
$username = "Mnjambi";
$password = "YouarelovedbyGod0";
$dbname = "Marz_place";

 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname );
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>