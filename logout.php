<?php
session_start();
unset($_SESSION["user_name"]);
unset($_SESSION["pwd"]);
header("Location:login.php");
?>