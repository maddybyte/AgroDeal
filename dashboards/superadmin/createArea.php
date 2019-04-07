<!doctype html>
<html lang="en">

    <?php
        $title = "Create Area";
        include_once('partials/header.php')
    ?>


    <body>
        <div class="wrapper ">
            <!--sidebar-->
            <?php
                $activePage  = "Areas";
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
                                <h4 class="card-title ">Create New Area</h4>
                                </div>
                                <div class="card-body text-center">
                                    <div class="row text-left">
                                        <form action="storeArea.php" method="POST" class="col-12" enctype="multipart/form-data">
                                            
                                            <div class="form-group">
                                                <label for="id_summon_name" class="text-left col font-weight-bold ">Area Name</label>
                                                <div class="col">
                                                    <input type="text" name="area_name" class="form-control" id="id_admin_value" value="" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="admin_password" class="text-left col font-weight-bold ">Area Admin username (not Required)</label>
                                                <div class="col">
                                                    <input type="text" name="area_admin_user_name" class="form-control" id="id_password" value="" >
                                                </div>
                                            </div>
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
