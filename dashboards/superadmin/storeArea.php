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

        if(isset($_POST['area_admin_user_name'])) {
            $area_admin_user_name=trim($_POST['area_admin_user_name'] );
            $area_admin_user_name=strip_tags($area_admin_user_name);
            $area_admin_user_name=mysqli_real_escape_string($conn,$area_admin_user_name);
        }
        else 
            $area_admin_user_name = "";


        $query="INSERT INTO areas(area_name,area_admin_user_name)";
        $query.="VALUES ('$area_name','$area_admin_user_name')";

        if ($conn->query($query) === TRUE) {
            SetFlashMessage('Area Created Successfully','success','announcement');
            header("Location: areas.php");
            
        } else {

            echo "Error: " . $query . "<br>" . $conn->error;
            header("Location: areas.php?result=error");

        }
        if(!$error) {

        }
        else {
            $error_msg="Error is their";
        }
    }

    ob_end_flush(); 