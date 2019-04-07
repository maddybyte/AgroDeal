<?php

$uploadOk = 0;


if(isset($_POST['reg_user'])) {
    $db = mysqli_connect('localhost', 'root', '', 'agrodeal');
    $prod_name = $_POST['prod_name'];
    $prod_price = $_POST['prod_price'];
    $prod_desc = $_POST['prod_desc'];
    $city = $_POST['city'];
    
    $file=$_FILES["prod_image"]["name"];


    $temp_name=$_FILES["prod_image"]["tmp_name"];

    $path="prod_img/".$file;
    move_uploaded_file($temp_name,$path);

    // mysqli_query($db,"insert into products (image)value('$file')");

    $sql= "INSERT INTO products (prod_name, prod_price, prod_desc,image, city) 
    VALUES('$prod_name','$prod_price','$prod_desc','$path','$city')";
    
    if(mysqli_query($db, $sql))
    {
        $uploadOk = 1;
    }
    else {
        exit();
    }
    header('location: index.php');
}
//header('location: index.php');
?>
