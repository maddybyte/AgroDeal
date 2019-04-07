<!-- Coded By aspraz and Sujit-->
<?php
   
    session_start();
    ob_start();
    
    if(isset($_SESSION['user_name'])=="") {
        session_destroy();
        header("Location: ../../login.php");
    } 

    require_once '../../includes/dbconnect.php';
    require_once '../../includes/helper.php';  // to set flash messages
    
    $error = false;
    $error_msg = "";
    //never will open if session is already active

    if(isset($_POST['submit'])) {

        $area_name=trim($_POST['area_name'] );
        $area_name=strip_tags($area_name);
        $area_name=mysqli_real_escape_string($conn,$area_name);

        $admin_name=trim($_POST['admin_name'] );
        $admin_name=strip_tags($admin_name);
        $admin_name=mysqli_real_escape_string($conn,$admin_name);

        $admin_password=trim($_POST['admin_password'] );
        $admin_password=strip_tags($admin_password);
        $admin_password=mysqli_real_escape_string($conn,$admin_password);

        $admin_email=trim($_POST['admin_email'] );
        $admin_email=strip_tags($admin_email);
        $admin_email=mysqli_real_escape_string($conn,$admin_email);

        $user_type=trim($_POST['user_type'] );
        $user_type=strip_tags($user_type);
        $user_type=mysqli_real_escape_string($conn,$user_type);



        $query="INSERT INTO users_list(user_name,user_password,user_email,user_type,user_home)";
        $query.="VALUES ('$admin_name','$admin_password','$admin_email','$user_type','$area_name')";

        if ($conn->query($query) === TRUE) {
            SetFlashMessage('Admin/Manager Created Successfully','success','announcement');
            header("Location: users.php");
            
        } else {

            echo "Error: " . $query . "<br>" . $conn->error;
            header("Location: users.php?result=error");

        }
        if(!$error) {

        }
        else {
            $error_msg="Error is their";
        }
    }

    ob_end_flush(); 