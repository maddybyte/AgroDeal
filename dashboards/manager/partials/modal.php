<!-- notify summon status modal-->
<div class="modal" tabindex="-1" id="summon_notify" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">Summon Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p>You have <b style="font-size:18px;"><span id="summons_count"></span></b> Summons pending.</p>
            </div>
            <?php
                $userRole=$_SESSION['user_role'];
            ?>
            <div class="modal-footer">
                <a href="summons.php" class="btn btn-danger">Show Summons</a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        <?php
            include_once('../includes/dbconnect.php');
            $summonsPending = 0;
            $query = 'SELECT * FROM summon_info WHERE summon_completed = "0"';
            if($result = mysqli_query($conn,$query)){
                $resultNo = mysqli_num_rows($result);
                // $summonsPending=$resultNo;
                if($resultNo <= 0){
                    // no summons pending
                }else{
                    while($row = mysqli_fetch_assoc($result)){
                                                        
                        $date_to_be_present = $row['date_to_be_present'];
                        
                        $date_result = $row['date_result'];
                        
                        
                        $datetime1 = date_create($date_to_be_present);
                        $datetime2 = date_create($date_result);
                                        
                        $interval = date_diff($datetime1, $datetime2);
                                                               
                        $realDifference= $interval->format('%a');
                                                 
                       // echo $realDifference."\t";
                                              
                        $now = new DateTime();
                                      
                        $interval = date_diff($datetime1, $now);
                                    
                        $todayDifference= $interval->format('%a') + 1 ;
                                     
                       // echo $todayDifference."\n";
                                                                               
                                                  
                        //realDifference is their     real/2  
                        //todayDifference is their   > real/2    real/2>today>(real/33.33) real/33.33>toady
                        
                        if(!($todayDifference <= ($realDifference/5))) {
                            
                                continue;
                        }
                        if($row['summon_completed']==0) {
                            $summonsPending++;

                        }
                    }
                    if($summonsPending>0){

                        ?>
                            $('#summon_notify_icon_val').show();
                            $('#summon_notify_icon_val').html('<?php echo $summonsPending;?>');
                            $('#summon_notify_icon').on('click',function(){
                                $('#summon_notify').modal('show');
                            })
                        <?php
                    }
                }
            }
            ?>
    });
    $('#summon_notify').on('show.bs.modal', function (event) {
        // console.log('modal show');
        $('#summons_count').html('<?php echo $summonsPending;?>')
    });

</script>
