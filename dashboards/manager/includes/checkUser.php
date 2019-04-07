<?php
    session_start();
    ob_start();
    
    if(isset($_SESSION['user_name'])!="") {
       if($_SESSION['user_type'] != "$userRole") {

            $mainRole=$_SESSION['user_type'];
            
            header("Location: ../$mainRole/index.php");
        } 
    } 
    else {
        session_destroy();
        header("Location: index.php");
    }
?>