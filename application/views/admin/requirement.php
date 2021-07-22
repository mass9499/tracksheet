     <br> 
     
   
 
     <div class="container"> 
         <div class="row"> 
         
             <div class="col-md-4"> 
             <!--required add flashdata-->
                        <center> <?php if($this->session->flashdata('project_add_suc') != '') { echo "<div class='alert alert-success'>".$this->session->flashdata('project_add_suc')."</div>"; } ?> </center>
                         <center> <?php if($this->session->flashdata('project_add_fail') != '') { echo "<div class='alert alert-danger'>".$this->session->flashdata('project_add_fail')."</div>"; } ?> </center>
             <!---->
               <!--required updated flashdata-->
                        <center> <?php if($this->session->flashdata('project_updated_suc') != '') { echo "<div class='alert alert-success'>".$this->session->flashdata('project_add_suc')."</div>"; } ?> </center>
                         <center> <?php if($this->session->flashdata('project_updated_fail') != '') { echo "<div class='alert alert-danger'>".$this->session->flashdata('project_add_fail')."</div>"; } ?> </center>
             <!---->
                
                    <div class="panel panel-default">
            
                        <div class="panel-heading" style="font-size: 20px; font-weight:bold;">
                         
                           Add Requirement
                        </div>
                        
                        <div class="panel-body" style="overflow-x:scroll;">
                               
                            <form action="<?php echo base_url();?>requirement" method="post" enctype="multpart/form-data">
                                
                                   <label>Project Name</label><br>
                                   <input type="text" name="projectname" placeholder="Enter project name" class="form-control" required><br>
                                   <label>Enter your project details</label><br>
                                   <textarea rows="4" cols="50" class="form-control" name="prodetail"  required> </textarea>
                                   <label>Select File To Upload:</label><br>
                                   
                                   <input type="file" name="userfile"><Br>
                                       
                                   <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                   
                            </form>
                        
                        </div>  
                          
                        
                    </div>
                    

            </div>
            
             <div class="col-md-8" style="padding-right:50px;">
                 
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
                                
                                </tr>
                              
                              <?php } ?>
                              </tbody>
                            </table>
                                                    
                        </div>  
                    

                          
                        
                    </div>
                 
                 
             </div> 
             

             
             
        </div>    
    </div>    
   