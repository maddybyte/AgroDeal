<?php 
	session_start();
	//if user already signed in
	if(isset($_SESSION['username'])) {
		header("Location: index.php");
	}

	$errors = [];
	require_once "includes/dbconnect.php";
	require_once "controllers/loginHandler.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Log In</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>
  	<div class="header">
  		<h2>Login</h2>
		<form method="post" action="login.php">
			<?php
				if(count($errors) >= 1){
					foreach($errors as $error){
						echo 
						'<div>
							<span class="error">
							'.$error.'
							</span>
						</div>
						';
					}
				}
			?>
			<div class="input-group">
				<i class="far fa-user"></i>
				<input type="text" placeholder="Username" name="username" >
			</div>
			<div class="input-group">
				<i class="fas fa-key"></i>
				<input type="password" placeholder="Password" name="password">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="login_user">Login</button>
			</div>
			<div class="last">
				<p>
					<center><a href="register.php">Don't Have an Account?</a></center>
				</p>
			</div>
		</form>
	</div>
</body>
</html>