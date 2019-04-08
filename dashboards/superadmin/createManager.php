<!doctype html>
<html lang="en">

    <?php
        $title = "Create Manager";
        include_once('partials/header.php')
    ?>


    <body>
        <div class="wrapper ">
            <!--sidebar-->
            <?php
                $activePage  = "Users";
                include_once('partials/sidebar.php')
            ?>

            <div class="main-panel">
                <!-- Navbar -->
                <?php
                    include_once('partials/nav.php')
                ?>
                <div class="content">
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                <h4 class="card-title ">Create New Area Manager</h4>
                                </div>
                                <div class="card-body text-center">
                                    <div class="row text-left">
                                        <form action="storeUser.php" method="POST" class="col-12" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="id_police_station" class="text-left col font-weight-bold ">Select Area</label>
                                                <div class="col">
                                                    <select class="form-control" name="area_name" id="id_police_station">
                                                    <?php

                                                        require_once("../../includes/dbconnect.php");
                                                        $sql = "SELECT * FROM stores";
                                                        $result = mysqli_query($conn, $sql);
                                                        
                                                        if (mysqli_num_rows($result) > 0) {
                                                            // output data of each row
                                                            while($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                                <option value="<?php echo $row['store_name']; ?>">
                                                                    <?php echo $row['store_name']; ?>
                                                                </option>
                                                        <?php    
                                                            }
                                                        } else { ?>

                                                                <option value="1">No Store Yet</option>
                                                        
                                                        <?php
                                                        }
                                                    ?>
                                                    </select>
                                                   
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="id_summon_name" class="text-left col font-weight-bold ">Manager Name</label>
                                                <div class="col">
                                                    <input type="text" name="admin_name" class="form-control" id="id_admin_value" value="" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="admin_password" class="text-left col font-weight-bold ">Manager password</label>
                                                <div class="col">
                                                    <input type="password" name="admin_password" class="form-control" id="id_password" value="" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="admin_email" class="text-left col font-weight-bold ">Manager email</label>
                                                <div class="col">
                                                    <input type="text" name="admin_email" class="form-control" id="id_password" value="" required>
                                                </div>
                                            </div>
                                            <input type="hidden" name="user_type" value="manager" />

                                            <div class="row">
                                                <input type="submit" class="btn btn-success mx-auto" value="submit" name="submit">
                                            </div>
                                            <div class="row">
                                            </div> 
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
