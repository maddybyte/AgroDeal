
<?php include('prod-server.php') ?>
<!DOCTYPE html>
<html>
<head>

<div style="position: absolute; top: 5%; left:50%; transform: translate(-50%,-50%); background: #2f3640; 
							height: 25px; border-radius: 40px; padding: 10px;">
					<a href="index.php"  style=" color: #00ff00; float: right; width: 25px; height: 25px; border-radius: 50%; background: 
					#2f3640; display: flex; justify-content: center; align-items: center;">     
					<i class="fas fa-home"></i>
					</a>
			</div>


  <title>Sale</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
  <div class="header">
		<h2>Sale</h2>
		
  <form method="post" action="product-upload.php" enctype="multipart/form-data">
  	<div class="input-group">
		<label>Product Name</label><br>
  	  <input type="text" name="prod_name">
  	</div>
  	<div class="input-group">
		<label>Product Price</label><br>
  	  <input type="text" name="prod_price">
  	</div>
  	<div class="input-group">
		<label>Product Description</label><br>
  	  <input type="text" name="prod_desc">
  	</div>
		<div class="input-group">
		<label>City</label><br>
  	  <input type="text" name="city">
  	</div>
		<div class="input-group">
		<label>Upload Image:</label><br><br>
  	  <input type="file" name="prod_image">
  	</div>
		<?php
        if($uploadOk==1) {
					echo "Product Added Succeffuly";
				}

		?>
		<div class="input-group">
  	<button type="submit" class="btn" name="reg_user">Add Product</button>
		</div>
</div>
</body>
</html>
