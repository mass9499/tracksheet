     <br> 
     
   
 
     <div class="container"> 
         <div class="row"> 
  
             
             <div class="col-md-11">
                   <!--required accept flashdata-->
                        <center> <?php if($this->session->flashdata('project_admin_suc') != '') { echo "<div class='alert alert-success'>".$this->session->flashdata('project_add_suc')."</div>"; } ?> </center>
                         <center> <?php if($this->session->flashdata('project_admin_fail') != '') { echo "<div class='alert alert-danger'>".$this->session->flashdata('project_add_fail')."</div>"; } ?> </center>
             <!---->
                
                 
                   <div class="panel panel-default">
            
                        <div class="panel-heading" style="font-size: 20px; font-weight:bold;">
                        Project List
            
                        </div>
                        
                        <div class="panel-body" style="overflow-x:scroll;">
                            
                            <table class="table table-striped table-hover">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Product Name</th>
                                  <th scope="col">Product Requirement</th>
                                
                                </tr>
                              </thead>
                              <tbody>
                                  
                                 <?php 
                                 $count = 1 ;
                                 
                                 foreach($client_project_list as $pro){ ?>
                            
                                <tr>
                                  <th scope="row"><?php echo $count++ ?></th>
                                  <td><?php echo $pro['projectname']; ?></td>
                                  <td><?php echo $pro['projectdetails']; ?></td>

                                  <td>
                                     <?php if( $pro['admin_accept'] == 1){ ?>
                                     
                                      <a href="#"class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Accepted</a>
                                     
                                     <?php }else{ 
                                     
                                      if( $log_user_id == 1 ){ 
                                     ?>
                                     
                                      <a href="<?php echo base_url(); ?>quationandinvoice/accept_client_project/<?php echo $pro['log_user_id']; ?>"class="btn btn-primary"><i class="fa fa-play" aria-hidden="true"></i>&nbsp;Accept</a>
                                     
                                      <?php } } ?>
                                      
                                  </td>
                                
                                </tr>
                              
                              <?php } ?>
                              </tbody>
                            </table>
                                                    
                        </div>  
                    

                          
                        
                    </div>
                 
                 
             </div> 
             
          <div class="col-md-1"></div>
             
             
        </div>    
    </div>    
   