     <br> 
     
   
 
     <div class="container"> 
         <div class="row"> 
         
             <div class="col-md-4"> 
                
                    <div class="panel panel-default">
            
                        <div class="panel-heading" style="font-size: 20px; font-weight:bold;">
                         
                           Edit Requirement
                        </div>
                        
                        <div class="panel-body" style="overflow-x:scroll;">
                               
                            <form action="<?php echo base_url();?>requirement/requirement_edit" method="post" enctype="multpart/form-data">
                                   <label>Project Name</label><br>
                                   <input type="text" name="projectname" value="<?php echo $project_edit['projectname']?>" placeholder="Enter project name" class="form-control"><br>
                                   <label>Enter your project details</label><br>
                                   <textarea rows="4" cols="50" class="form-control" name="prodetail" required> <?php echo $project_edit['projectdetails']?> </textarea>
                                   <button type="submit" name="edit_submit" class="btn btn-primary">Submit</button>
                                   
                            </form>
                        
                        </div>  
                          
                        
                    </div>
                
            </div>
            
             <div class="col-md-8">
                 
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
                                  
                                 
                                  
                                  <td><a href="<?php echo base_url(); ?>requirement/requirement_edit/<?php echo $pro['cr_id']; ?>"class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
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
 