<?php 
		session_start();
		if(!isset($_SESSION['username'])) {
			header("Location: login.php");
		}
		require_once "includes/dbconnect.php";
?>

<!DOCTYPE html> 
<HTML>
<HEAD>
		<TITLE>AgroDeal</TITLE>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/slider.css">
		<link rel="stylesheet" href="css/index.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" > 
</HEAD>
<BODY>

		<table height=100 width="100%" bgcolor="#065535">
		<tr>
			<div>
			<a href="index.php">		
			<img src="images/AgroDeal.png" style="height:45px; width:45px; position:absolute; top:2.5%; left:17%;">
			</a>
			</div>
			<div style="position: absolute; top: 5%; left:27%; transform: translate(-50%,-50%); background: #2f3640; 
							height: 25px; border-radius: 40px; padding: 10px;">
					<a href="scheme-display.php"  style=" color: #00ff00; float: right; width: 25px; height: 25px; border-radius: 50%; background: 
					#2f3640; display: flex; justify-content: center; align-items: center;">
							<i class="far fa-address-card"></i>
					</a>
			</div>
			<div style="position: absolute; top: 5%; left:35%; transform: translate(-50%,-50%); background: #2f3640; 
							height: 25px; border-radius: 40px; padding: 10px;">
					<a href="product-upload.php"  style=" color: #00ff00; float: right; width: 25px; height: 25px; border-radius: 50%; background: 
					#2f3640; display: flex; justify-content: center; align-items: center;">
							<i class="fas fa-camera"></i>
					</a>
			</div>
			<div class="search-box">
			<form action="search_product.php" method="get">
				<input class="search-txt" type=text name="search" placeholder="Search Your Product">
				
				<button class="search-btn" type="submit" name="submit" style="border:none;">
					<i class="fas fa-search"></i>
				</button>

			</form>
			</div>
			<div class="prof-box">
			<a class="prof-btn" href="profile.php">
					<i class="far fa-user-circle"></i>
			</a>
			</div>
			<div class="cart-box">
					<a class="cart-btn" href="#">
							<i class="fas fa-shopping-cart"></i>
					</a>
			</div>
			<div style="position: absolute; top: 5%; left:80%; transform: translate(-50%,-50%); background: #2f3640; 
							height: 25px; border-radius: 40px; padding: 10px;">
					<a href="controllers/logoutHandler.php"  style=" color: #00ff00; float: right; width: 25px; height: 25px; border-radius: 50%; background: 
					#2f3640; display: flex; justify-content: center; align-items: center;">     
					<i class="fas fa-sign-in-alt" ></i>
					</a>
			</div>
		</tr>
		<tr>
			<div style= "left:17%;position:absolute;top:73px; color:#00FF00;">Home</div>
			<div style= "left:25.2%;position:absolute;top:75px; color:#00FF00;">Schemes</div>
			<div style= "left:32.5%;position:absolute;top:75px; color:#00FF00;">Sell Product</div>
			<div style= "left:63.5%;position:absolute;top:75px; color:#00FF00;">Profile</div>
			<div style= "left:72%;position:absolute;top:75px; color:#00FF00;">Cart</div>
			<div style= "left:78.5%;position:absolute;top:75px; color:#00FF00;">Log Out</div>

		</tr>
		</table>


		<?php  if (isset($_SESSION['username'])) : ?>
				<p><center>Welcome <strong><?php echo $_SESSION['username']; ?></center></strong></p>
			<p><center> <a href="controllers/logoutHandler.php" style="color: red;">logout</center></a> </p>
		<?php endif ?>


		<div class="wrapper">
			<div class="product-box">
				<h1>Added Products : </h1>
				<hr class="underLine"/>
				<div class="product-grid">
					<a href="#">
					<?php 
						$sql="SELECT image,prod_name,prod_price,prod_desc FROM products";

						if ($result=mysqli_query($conn,$sql)) {
						// Fetch one and one row
						while ($row=mysqli_fetch_row($result)) {
								echo '<div class="product">';
									echo '<img src='.$row[0].'>';
									echo '<h3>'.$row[1].'</h3>';
									echo '<h4><strong>&#8377; '.$row[2]. '</strong></h4>';
									echo '<input type="submit" value="Add to Cart"><br>';
								echo '</div>';
						
						}
						// Free result set
						mysqli_free_result($result);
						}
					?>
					</a>
					

				</div>
			</div>
		</div>






		<?php
			if(isset($_SESSION["succes"])) : ?>
				<div class="error success">
						<h3>
							<?php 
								echo $_SESSION["success"];
								unste($_SESSION["success"]);
							?>
						</h3>
				</div>
		<?php endif ?>


</BODY>
</HTML>