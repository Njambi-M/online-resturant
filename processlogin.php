<?php
session_start();
require_once("connection.php");
if(isset($_POST["Login"])){
	
		$sql="Select * from Users where user_name='".$_POST['user_name']."' and password='".$_POST['pwd']."' ";
		$result=$conn->query($sql);
		$usercheck=$result->fetch_assoc();
		if($usercheck){
			$_SESSION['user']=$_POST['user_name'];
			if($usercheck['role']=='admin'){
			header("location:admin.php");
		}else{
			header("location:user_home.php");
		}
		}
		else{
			header("location:login.php");
		}
	
} 


?>