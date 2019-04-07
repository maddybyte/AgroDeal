<?php
    session_start();
    require_once "../includes/dbconnect.php";
    if(isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email_id = mysqli_real_escape_string($conn, $_POST['email_id']);
        $mob_no = mysqli_real_escape_string($conn, $_POST['mob_no']);
        

        if(!file_exists($_FILES['profilePic']['tmp_name']) || !is_uploaded_file($_FILES['profilePic']['tmp_name'])) {
            $profilePic = 'images/profile/default.png';
        }
        else {
            $file=$_FILES["profilePic"]["name"];
            $temp_name=$_FILES["profilePic"]["tmp_name"];
            $profilePic="images/profile/".$file;
            move_uploaded_file($temp_name,'../'.$profilePic);

        }
        $real = $_SESSION['username'];
        // echo "$profilePic";
        $query = "UPDATE user SET username='$username',email='$email_id',mobile='$mob_no',image='$profilePic' WHERE username='$username'";
        if(mysqli_query($conn,$query)) {
            header("Location: ../profile.php?error=false");
        }
        else  {
            header("Location: ../profile.php?error=true");
        }

    }
    else {
        header("Location: ../profile.php?error=true");
    }