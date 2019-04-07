<!doctype html>
<html lang="en">

    <?php
        require_once '../../includes/dbconnect.php';
        $title = "Edit User";
        include_once('partials/header.php')
    ?>


    <body>
        <div class="wrapper ">
            <!--sidebar-->
            <?php
                $activePage = "Users";
                include_once('partials/sidebar.php')
            ?>

            <div class="main-panel">
                <!-- Navbar -->
                <?php
                    include_once('partials/nav.php')
                ?>
                <div class="content">
                    <?php 
                        $id = isset($_GET['id']) ? trim($_GET['id']) : '';
                        $id = strip_tags($id);
                        $id = mysqli_real_escape_string($conn,$id);

                        if($id==''){
                            echo '<div class="bg-danger p-2 text-white text-center">Invalid Input</div>';
                        }else{ 
                            $query = 'SELECT * FROM `users_list` WHERE `id` = "'.$id.'"';
                            if($result = mysqli_query($conn,$query)){
                                if($row = mysqli_fetch_assoc($result)){
                                ?>
                                    <div class="row">
                                        <div class="col-md-6 mx-auto">
                                            <div class="card">
                                                <div class="card-header card-header-primary">
                                                <h4 class="card-title ">Edit User</h4>
                                                </div>
                                                <div class="card-body text-center">
                                                    <div class="row text-left">
                                                        <form action="updateUser.php" method="POST" class="col-12" enctype="multipart/form-data">
                                                            <input type="hidden" name="id" value="<?php echo $id;?>">
                                                            <div class="form-group">
                                                                <label class="text-left col font-weight-bold ">User Name</label>
                                                                <div class="col">
                                                                    <input type="text" class="form-control" value="<?php echo $row['user_name']?>" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="text-left col font-weight-bold ">User Type</label>
                                                                <div class="col">
                                                                    <input type="text" class="form-control" value="<?php echo $row['user_type']?>" disabled>
                                                                </div>
                                                            </div>
                                                           
                                                            <div class="form-group">
                                                                <label for="id_user_email" class="text-left col font-weight-bold ">User Email </label>
                                                                <div class="col">
                                                                    <input type="text" name="user_email" class="form-control" id="id_user_email" value="<?php echo $row['user_email']?>" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="id_user_password" class="text-left col font-weight-bold ">Set New Password (Optional)</label>
                                                                <div class="col">
                                                                    <input type="password" name="user_password" class="form-control" id="id_user_password" value="">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <input type="submit" class="btn btn-success mx-auto" value="submit" name="submit">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }else{
                                    echo '<div class="bg-danger p-2 text-white text-center">User not present.</div>';
                                }
                            }else{
                                echo '<div class="bg-danger p-2 text-white text-center">User not present.</div>';
                            }

                        }
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
    </body>
</html>
