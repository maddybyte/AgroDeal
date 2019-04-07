<?php 

function SetFlashMessage($message,$type='info',$icon='info'){
    if($message!=null || $message!=''){
        $_SESSION['flash_message']=$message;
    }
    $_SESSION['flash_type']=$type;
    $_SESSION['flash_icon']=$icon;
}
