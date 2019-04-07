<?php 
  	session_start();
	require_once "includes/checkUser.php";
	require_once "includes/dbconnect.php";
	
?>

<?php 

  $id=$_SESSION['username'];
  $result3 = mysqli_query($conn,"SELECT * FROM user where username='$id'");
  
  while($row3 = mysqli_fetch_array($result3)) { 
	$username=$row3['username'];
	$image=$row3['image'];
	$email_id=$row3['email'];
	$password=$row3['password'];
	$mob_no=$row3['mobile'];
	$address=$row3['address'];
	$city=$row3['city'];
  }

?>

<!DOCTYPE html> 
<HTML>
<HEAD>
	<TITLE>AgroDeal</TITLE>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/slider.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" >
	<link rel="stylesheet" href="css/index.min.css">
	<?php
	if(isset($_GET['error'])) {
		$error = $_GET['error'];
		if($error=="false") {
			echo "<script>alert('Update Successfull!')</script>";
		}
		else {
			echo "<script>alert('Update unSuccessfull! Try again')</script>";
		}
	}
	?>
</HEAD>

<BODY>

		<table height=80 width="100%" bgcolor="#065535">
			<tr>
			<a href="index.php">
			<img src="images/AgroDeal.png" style="height:45px; width:45px; position:absolute; top:2.5%; left:25%;">
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
			<input class="search-txt" type=text name="search" placeholder="Search Your Product">
			<a class="search-btn" href="#">
					<i class="fas fa-search"></i>
			</a>
			</div>
			<div class="prof-box">
			<style>
				a.prof-btn-active i  {
				color:#fff;
				}
			</style>
			<a class="prof-btn prof-btn-active" href="profile.php">
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
		</table>
	
		<div class="wrapper">
			<div class="col-left">
				<div class="info-block info-block-red">
					<div class="profile-pic">
						<div class="center">
							<img src='<?php echo $image; ?>' />
						</div>
						<div class="name">
							<h2 style="font-family:sans-serif"><?php echo $username; ?></h2>
							<button class="profile-edit" id="edit_profile_button">Edit Profile</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-right">				
				<div class="info-block info-block-red">
					<h3> Username : <span style="font-weight:normal"><?php echo $username; ?></span></h3>
					<hr class="underLine" />
				</div>
				<div class="info-block info-block-red">
					<h3> Email Id : <span style="font-weight:normal"><?php echo $email_id; ?></span></h3>
					<hr class="underLine" />
				</div>
				<div class="info-block info-block-red">
					<h3> Mobile Number : <span style="font-weight:normal"><?php echo $mob_no; ?></span></h3>
					<hr class="underLine" />
				</div>
				<div class="info-block info-block-red">
					<h3> Address : <span style="font-weight:normal"><?php echo $address; ?></span></h3>
					<hr class="underLine" />
				</div>
				<div class="info-block info-block-red">
					<h3> City : <span style="font-weight:normal"><?php echo $city; ?></span></h3>
					<hr class="underLine" />
				</div>
				<div class="info-block info-block-red">
					<h3> Products Added: </h3>
					<hr class="underLine" />
				</div>
			</div>
		</div>

		<div id="overlay">
			<div class="close">
				<i class="fa fa-close" id="close">Close</i>
			</div>
			<div class="overlay_form">
				<form action="controllers/updateUserHandler.php" method="POST"  enctype="multipart/form-data">
					<h4>Profile Update Form : </h4>
					<hr class="underLine"/>
					<div class="input-block">
						<label for="text">UserName : </label>
						<input type="text" name="username" placeholder="username" 
							value = '<?php echo $username; ?>' />
					</div>
					<div class="input-block">
						<label for="text">Phone Number : </label>
						<input type="text" name="mob_no" placeholder="phone_number"
							value = <?php echo $mob_no; ?>
						/>
					</div>
					<div class="input-block">
						<label for="text">Email Id : </label>
						<input type="text" name="email_id"" placeholder="Email Id" 
						value = <?php echo $email_id; ?>
						/>
					</div>
					<div class="input-block">
						<label for="text">Address : </label>
						<input type="text" name="address"" placeholder="Address" 
						value = <?php echo $address; ?>
						/>
					</div>
					<div class="input-block">
						<label for="text">City : </label>
						<input type="text" name="city"" placeholder="City" 
						value = <?php echo $city; ?>
						/>
					</div>
					<div class="input-block">
						<label for="text">Profile Pic : </label>
						<input type="file" name="profilePic" />
					</div>
					<div class="input-block">
						<input type="submit" name="submit" value="Update" />
					</div>
				</form>

			</div>	
		</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>

		$(document).ready( () => {
			$('#overlay').hide();
			$('#edit_profile_button').click( () => {
				$('#overlay').show();
			});
			$('#close').click( ()=> {
				$('#overlay').hide();
			});
		})

	</script>

</BODY>
</HTML>