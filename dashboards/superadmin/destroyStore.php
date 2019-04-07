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
    
    if(!isset($_POST['id'])) {
        header("Location: areas.php");
    }
    
    $summon_id = $_POST['id'];

    $error = false;
    $error_msg = "";

    $query = "DELETE from stores where id='$summon_id'";

    if ($conn->query($query) === TRUE) {
        SetFlashMessage('Store Deleted ','danger','delete');
        header("Location: stores.php?result=success");
       
    } else {
        echo "Error: " . $query . "<br\>" . $conn->error;
        exit();
        header("Location: stores.php?result=error");
    }
