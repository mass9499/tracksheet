     <br> 
     
   
 
     <div class="container"> 
         <div class="row"> 

             
             <div class="col-md-6">
                 
                   <div class="panel panel-default">
            
                        <div class="panel-heading" style="font-size: 20px; font-weight:bold;">
                        Client List
            
                        </div>
                        
                        <div class="panel-body" style="overflow-x:scroll;">
                            
                            <table class="table table-striped table-hover">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">client Name</th>
                                  <th scope="col">Email</th>
                                
                                </tr>
                              </thead>
                              <tbody>
                                  
                                 <?php 
                                 $count = 1 ;
                                 
                                 foreach($client_list as $pro){ ?>
                            
                                <tr>
                                  <th scope="row"><?php echo $count++ ?></th>
                                  <td><?php echo $pro['first_name']; ?>&nbsp;<?php echo $pro['last_name']; ?></td>
                                  <td><?php echo $pro['email']; ?></td>

                                  <td><a href="<?php echo base_url(); ?>quationandinvoice/client_projects/<?php echo $pro['login_id']; ?>"class="btn btn-primary"> <i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                
                                </tr>
                              
                              <?php } ?>
                              </tbody>
                            </table>
                                                    
                        </div>  
                  
                        
                    </div>
                 
                 
             </div> 
             
          <div class="col-md-6"></div>
             
             
        </div>    
    </div>    
   