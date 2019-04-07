
<?php
	session_start();
		//if user already signed in 	
		$errors = [];
		require_once "includes/dbconnect.php";
		require_once "controllers/registerHandler.php";	

?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
  <div class="header">
		<h2>Register</h2>
		
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
		<i class="far fa-user"></i>
  	  <input type="text" placeholder="Username" name="username">
  	</div>
  	<div class="input-group">
		<i class="fas fa-at"></i>
  	  <input type="email" placeholder="Email Id" name="email"p>
  	</div>
  	<div class="input-group">
		<i class="fas fa-key"></i>
  	  <input type="password" placeholder="Password" name="password_1">
  	</div>
  	<div class="input-group">
		<i class="fas fa-key"></i>
  	  <input type="password" placeholder="Confirm Password" name="password_2">
  	</div>
		<div class="input-group">
		<i class="fas fa-mobile-alt"></i>
  	  <input type="text" placeholder="Mobile Number" name="mobile">
  	</div>
		<div class="input-group">
		<i class="fas fa-home"></i>
  	  <input type="text" placeholder="Address" name="address">
  	</div>
		<div class="input-group">
		<i class="fas fa-city"></i>
  	  <input type="text" placeholder="City" name="city">
  	</div>
  	<div class="input-group">
  	<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<div class="last">
  	<p>
  	<center><a href="login.php">Already a Member?</a><center>
		</p>
		</div>
</div>
  </form>
</body>
</html>