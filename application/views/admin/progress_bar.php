          
        <div class="row">
            <div class="col-md-1"></div> 
            <div class="col-md-10"> 
             
                  <div class="panel panel-default">
                
                            <div class="panel-heading" style="font-size: 20px; font-weight:bold;">
                               Project Progress
                            </div>
                            
                            <div class="panel-body" style="overflow-x:scroll;">
                                
                           <?php if($completed == 0){ ?>
                           
                                   <center><h2> Project waiting for approval! </h2></center>
                                 
                                    <?php }else{ ?>    
                                      
                                          <div class="container-fluid d-flex justify-content-center">
                                            
                                                <div class="card">
                                                    <div class="card-body">
                                                      <canvas id="chart-line" class="chartjs-render-monitor" style="display: block; width:100%; height:100%;"></canvas>
                                                    </div>
                                                
                                            </div>
                                        </div>
                                      
                                      
                                      <?php } ?>
                            </div>  
    
                    </div>
            
            </div>
            <div class="col-md-1"></div>
         </div>
         <?php 
                     
                 
                 if($completed == 0){ 
                    
                     $completed = 0;
                     
                    }else{
                        
                      $converted = (explode(".",$completed));
                     $completed    =  200 - $converted[0] ;
                        //  print_r($completed);
                     }

                if($inprogress == 0){
                    
                   $inprogress_1 = 0;
                 
                }else{   
                    
                     $inprogress_1 = (explode(".",$inprogress));
                     $inprogress_con    =  200 - $inprogress_1[0] ;
                    // print_r($inprogress_con);
                }
                
                if($pending == 0){
                    
                    $pending_2 = 0;
                    
                }else{
                     
                     $pending_2 = (explode(".",$pending));
                     $pending_con    =  200 - $pending_2[0] ;
                    //   print_r($pending_con);
                    
                }
                
                if($waiting == 0){
                  
                  $waiting_3 = 0;
                  
                }else{
                    
                     $waiting_3 = (explode(".",$waiting));
                     $waiting_con    =  200 - $waiting_3[0] ;
        //   print_r($waiting_con);
                }
                
                if(!empty($completed)){
                
                      $grandtotal = $completed + $inprogress_con + $pending_con + $waiting_con;
                      
                      $taskpending =  200 - $grandtotal;
                      // print_r($taskpending);
                }
            
         ?>
             
<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>
<script>
    $(document).ready(function() {
        var ctx = $("#chart-line");
        var myLineChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Completed","Inprogress","Pending","Waiting Client response","Taskpending"],
                datasets: [{
                    data: [<?php echo $completed;?>,<?php echo $inprogress_con;?>, <?php echo $pending_con;?>,<?php echo $waiting_con;?>,<?php echo $taskpending;?>],
                    backgroundColor: ["green", "#2ecc71","#f1c40f","#2980b9","#c0392b"]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: ''
                }
            }
        });
    });
</script>
     