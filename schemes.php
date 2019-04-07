<?php include('scheme-server.php')
?>

<!DOCTYPE html>
<html>
<head>
    <title> </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <br>
        <h1 class="text-white bg-dark text-center">
            Enter the Scheme Details
        </h1>    
       <div>
        <form action=schemes.php method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="scheme-title"> Scheme Title: </label>
                <input type="text" name="scheme-title" id="scheme-title" class="form-control">
            <div>   
                <br>
            <div class="form-group">
                <label for="scheme-desc"> Scheme Description: </label>
                <input type="text" name="scheme-desc" id="scheme-desc" class="form-control">
            <div>  
                <br>
            <div class="form-group">
                <label for="file"> Upload Information File: </label>
                <input type="file" name="scheme-file" id="scheme-file" class="form-control">
            <div>
                
            <?php
                if($uploadOk==1) {
					echo "Scheme Added Successfully.";
                }
            ?>
                
                <br>
            <input type="submit" name="schemes_submit" Value="Submit" class="btn btn-success">
        
            </form>
        </div>

        
</body>
</html> 