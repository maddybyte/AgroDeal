<script>

<?php
    if(isset($_SESSION['flash_message'])){
        $message = isset($_SESSION['flash_message']) ? $_SESSION['flash_message'] : '';
        $type = isset($_SESSION['flash_type']) ? $_SESSION['flash_type'] : 'info';
        $icon = isset($_SESSION['flash_icon']) ? $_SESSION['flash_icon'] : 'info';
        echo '
        $(document).ready(function(){
            $.notify({
                icon: "'.$icon.'",
                message: "'.$message.'",
            },{
                type: "'.$type.'",
            });
            
        });
        ';

        unset($_SESSION['flash_message']);
        unset($_SESSION['flash_icon']);
        unset($_SESSION['flash_type']);
    }
?>
</script>
