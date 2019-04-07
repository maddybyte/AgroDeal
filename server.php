<?php

session_start();

require_once "includes/dbconnect.php";

$username = "";
$email    = "";
$errors = array(); 



// for user registration


	
//                 to log in the user


	if(isset($_GET['logout'])){
			session_destroy();
			unset($_SESSION['username']);
			header('Location: login.php');
	}
?>
