<!doctype html>

<html lang="en">

    <?php
        require_once '../../includes/dbconnect.php';
        $title = "Areas";
        include_once('partials/header.php')
    ?>


    <body>
        <div class="wrapper ">
            <!--sidebar-->
            <?php
                $activePage="Areas";
                include_once('partials/sidebar.php')
            ?>

            <div class="main-panel">
                <!-- Navbar -->
                <?php
                    include_once('partials/nav.php')
                ?>
                <div class="content">
                    <div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title ">Users</h4>
                                        <p class="card-category"> View and manage users.</p>
                                    </div>
                                    <div class="card-body">
                                        <a href="createArea.php" class="btn btn-info">
                                            <i class="material-icons mr-2">add</i>
                                            Create New Area
                                        </a>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <?php
                                                    $query = 'SELECT * FROM areas';
                                                    if($result = mysqli_query($conn,$query)){
                                                        $resultNo = mysqli_num_rows($result);
                                                        if($resultNo <= 0){
                                                        ?>
                                                            <p class="text-center h3">
                                                                No Users
                                                            </p>
                                                        <?php
                                                        }else{
                                                        ?>
                                                            <thead class=" text-primary">
                                                                <th>Sr.No.</th>
                                                                <th>Area Name</th>
                                                                <th>Area Admin</th>
                                                                <th>Actions</th>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                    $i=0;
                                                                    while($row = mysqli_fetch_assoc($result)){
                                                                        $i++;
                                                                        echo '
                                                                        <tr>
                                                                        <td>'.$i.'</td>
                                                                        <td>'.$row["area_name"].'</td>
                                                                        <td>'.$row["area_admin_user_name"].'</td>
                                                                        ';
                                                                        echo '
                                                                        <td>
                                                                           
                                                                            <a data-toggle="modal" data-target="#summon_delete" data-summon-id="'.$row["id"].'" href="#" class="ml-2">
                                                                                <i class="material-icons">delete</i>
                                                                            </a>
                                                                        </td>
                                                                        
                                                                        </tr>';
                    
                                                                    }
                                                                        
                                                                ?>
                                                            </tbody>

    
                                                        <?php
                                                        }
                                                    }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal" tabindex="-1" id="summon_delete" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-danger text-white">
                                <h5 class="modal-title">Delete Area</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>This will delete Area permanently.</p>
                                <p id="test"></p>
                            </div>
                            <form action="destroyArea.php" method="POST">
                                <div class="modal-footer">
                                    <input type="hidden" id="data_summon_id" name="id" value="" required>
                                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                    <button type="submit" name="submit" class="btn btn-danger">Delete Area</button>
                                </div>
                            </form>
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

        <script>
            $('#summon_delete').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var summon_id = button.data('summon-id')
                var modal = $(this)
                modal.find('#data_summon_id').val(summon_id);
            });

        </script>
    <?php
        include_once('partials/alert.php')
    ?>

</body>
</html>
