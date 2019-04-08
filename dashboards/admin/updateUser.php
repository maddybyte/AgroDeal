<!-- Coded By aspraz and Sujit-->
<?php
   
    session_start();
    ob_start();
    
    if(isset($_SESSION['user_name'])=="") {
        session_destroy();
        header("Location: ../../login.php");
    } 

    require_once '../../includes/dbconnect.php';
    require_once '../../includes/helper.php';  //set flash message
    
    if(!isset($_POST['id'])) {
        header("Location: users.php");
    }
    
    $user_id = $_POST['id'];

    $error = false;
    $error_msg = "";
    
    //never will open if session is already active

    if(isset($_POST['submit'])) {


        $user_email=trim($_POST['user_email'] );
        $user_email=strip_tags($user_email);
        $user_email=mysqli_real_escape_string($conn,$user_email);

        $user_password=trim($_POST['user_password'] );
        $user_password=strip_tags($user_password);
        $user_password=mysqli_real_escape_string($conn,$user_password);


        if($user_password =="") 
            $query="UPDATE users_list SET user_email='$user_email' WHERE id='$user_id'";
        else
            $query="UPDATE users_list SET user_email='$user_email',user_password='$user_password' WHERE id='$user_id'";
        
        
        // $query.=",summon_completed='$summon_completed',summon_reason='$summon_reason',date_result='$date_result' WHERE id='$summon_id'";


        if ($conn->query($query) === TRUE) {
            SetFlashMessage('User Updated Successfully','success','edit');
            header("Location: users.php?result=success");
       
        } else {
            SetFlashMessage('User Updated UnSuccessfully','danger','danger');
            header("Location: users.php?result=error");
        }
        if(!$error) {

        }
        else {
            $error_msg="Error is their";
        }
    }

    ob_end_flush(); 