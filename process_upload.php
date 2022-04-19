<?php
require_once("connection.php");
if(isset($_POST["SubmitImage"])){
	$file=$_FILES["food-image"];


	$original_file_name=$_FILES['food-image'] ['name'];

	$file_tmp_location= $_FILES['food-image'] ['tmp_name'];

	$file_type= substr($original_file_name,strpos($original_file_name, '.'),strlen($original_file_name));
	$file_path="asset/";

	if(move_uploaded_file($file_tmp_location, $file_path.$original_file_name)){
		$sql="INSERT INTO menu(Food_name, Food_price, Food_image, description) VALUES('".$_POST["fooditem"]."', '".$_POST["price"]."', '$original_file_name', '".$_POST["description"]."') ";

		 if(mysqli_query($conn,$sql)){
		 	header("location:view_food.php");
		 }else{
			echo "Error".$conn->error;
 		 }
	}
}

?>