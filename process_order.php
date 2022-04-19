<?php
session_start();
require_once("connection.php");
if(isset($_POST['save'])){
	$order_date = date('Y-m-d');
	

	$sql="INSERT INTO orders(order_date, delivery_address, phone_no) VALUES('$order_date', '".$_POST["delivery_address"]."', '".$_POST["phone_number"]."') ";

	if (mysqli_query($conn, $sql)) {
		$_SESSION['order_id'] = mysqli_insert_id($conn);
   header("location:payment.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

?>