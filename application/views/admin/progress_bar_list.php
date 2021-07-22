     <br> 
     
   
 
     <div class="container"> 
         <div class="row"> 
 
            
             <div class="col-md-12" style="padding-right:50px;">
                 
                   <div class="panel panel-default">
            
                        <div class="panel-heading" style="font-size: 20px; font-weight:bold;">
                        Requirement List
            
                        </div>
                        
                        <div class="panel-body" style="overflow-x:scroll;">
                            
                            <table class="table table-striped table-hover">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Project Name</th>
                                  <th scope="col">project details</th>
                                
                                </tr>
                              </thead>
                              <tbody>
                                  
                                 <?php 
                                 $count = 1 ;
                                 
                                 foreach($project_dateils as $pro){ ?>
                            
                                <tr>
                                  <th scope="row"><?php echo $count++ ?></th>
                                  <td><?php echo $pro['projectname']; ?></td>
                                  <td><?php echo $pro['projectdetails']; ?></td>
                                  
                                 
                                  
                                 
                                  <td><a href="<?php echo base_url(); ?>requirement/progress_bar/<?php echo $pro['cr_id']; ?>"class="btn btn-primary"><i class="fa fa-spinner" aria-hidden="true"></i></a></td>
                                </tr>
                              
                              <?php } ?>
                              </tbody>
                            </table>
                                                    
                        </div>  
                    

                          
                        
                    </div>
                 
                 
             </div> 
             

             
             
        </div>    
    </div>    
   