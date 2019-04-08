<!doctype html>
<html lang="en">

    <?php
        $title="";
        include_once('partials/header.php')
    ?>


    <body>
        <div class="wrapper ">
            <!--sidebar-->
            <?php
                $activePage="Dashboard";
                include_once('partials/sidebar.php')
            ?>

            <div class="main-panel">
                <!-- Navbar -->
                <?php
                    include_once('partials/nav.php')
                ?>
                <div class="content">
                    <?php 
                        include_once('partials/index_content.php');
                    ?>
                </div>

                <!--footer-->
                <?php
                    include_once('partials/footer.php')
                ?>
                
            </div>
        </div>

        <?php
            include_once('partials/scripts.php')
        ?>

        <?php
            include_once('partials/alert.php')
        ?>
        <script>
        
            $(document).ready(function(){
                if($("#summon_notify_icon_val").html()!='' && $("#summon_notify_icon_val").html() != '0'){
                    $('#summon_notify').modal('show');
                }
            });
        </script>
    </body>
</html>
