
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>


<section class="content-body" style="min-height:450px;">
    
<?php
    $servername = "localhost";
    $username = "acaadpro_track";
    $password = "@Z6LM&qB?6Py";
    $dbname = "acaadpro_tracksheet_db";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $log_user_id = $this->session->userdata('user_id');
    $log_user_type = $this->session->userdata('user_type');
    $log_user_roleid = $this->session->userdata('user_role');
    
    if($log_user_type == 'superadmin' || $log_user_roleid == 15) {
        $sql = "SELECT * FROM sales where type != 'superadmin'";
    } else {
        $sql = "SELECT * FROM login_tbl where login_id = '".$log_user_id."'";
    }
        $users = $conn->query($sql);
?>

<center>
    <?php
        if($this->session->flashdata('user_edit_success') != '') 
        {
            echo "<br><h4 style='color:green;' class='flash'>".$this->session->flashdata('user_edit_success')."</h4>";
        }
        
        if($this->session->flashdata('user_edit_failed') != '') 
        {
            echo "<br><h4 style='color:maroon;' class='flash'>".$this->session->flashdata('user_edit_failed')."</h4>";
        }
        
    ?>
</center>
<style>
    .adminrow { background-color: #b5e4ff; }
</style>
    <div class="col-md-12"><br>
        <div class="row">
            <div class="col-md-12" style="overflow-x:scroll;">
                
            <?php if(getadd('sales_activity') == '1') { ?>
                <a href="<?php echo base_url();?>sales/addsales"><button class="btn btn-primary"><i class="fa fa-plus"></i> Create Sales Updates</button></a> <br><br>
            <?php } ?>
        		
        		<table id="userlisttable" class="table table-bordered table-striped" style="background-color:#fff;">
                  <thead>
                    <tr style="background-color:#e2e2e2;">
                      <th class="text-center" scope="col"># Sl no.</th>
                      <th scope="col">Date</th>
                      <th scope="col">Person</th>
                      <th scope="col">POA of the day</th>
                      <th scope="col">Institution Name</th>
                      <th scope="col">Contact person Name</th>
                      <th scope="col">Contact person designation</th>
                      <th scope="col">Contact person Ph no</th>
                      <th scope="col">Mode of communication</th>
                      <th scope="col">Note(Describe about the discussion)</th>
                      <th scope="col">Potentional conversion</th>
                      <th scope="col">Follow up date</th>
                      <th scope="col">Number of follow ups</th>
                      <th scope="col">Next day POA</th>
                      <th scope="col">Followup</th>

                     
                      <?php if(getedit('sales_activity') == '1') { ?>
                        <th class="text-center" scope="col">Action</th>
                      <?php } ?>
                    </tr>
                  </thead>
                  <tbody>
                      <?php $sl_no = 1; ?>
                        
                      <?php foreach ($details as $key => $row) { ?>
                   
                      <tr>
                          <td class="text-center"><?php echo $sl_no++; ?></td>
                          <td><?php echo $row['date']; ?></td>
                          <td><?php echo $row['user']; ?></td>
                          <td><?php echo $row['poa']; ?></td>
                          <td><?php echo $row['institution']; ?></td>
                          <td><?php echo $row['contactperson']; ?></td>
                          <td><?php echo $row['designation']; ?></td>
                          <td><?php echo $row['phone']; ?></td>
                          <td><?php echo $row['mode']; ?></td>
                          <td><?php echo $row['notes']; ?></td>
                          <td><?php echo $row['potentional']; ?></td>
                          <td>
                              <?php 
                                  if(!empty($row['follow_ups'])) {
                                    echo date('d-m-Y', strtotime($row['follow_ups'][0]['follow_date'])); 
                                    echo '<br>'; 
                                    echo date('h:i a', strtotime($row['follow_ups'][0]['follow_date'])); 
                                  } else {
                                      echo 'N/A'; 
                                  }
                              ?>
                          </td>
                          <td><?php if(isset($row['follow_count'])) { echo $row['follow_count']; } ?></td>
                          <td><?php echo $row['nextpoa']; ?></td>
                         <td class="text-center"><small data-toggle="modal" data-target="<?php echo '#addmodal' . $key; ?>" class="btn-primary" style="padding:4px 7px;border-radius:3px;"><i class="fa fa-plus"></i></small>

                                  <!-- Modal -->
                              <div class="modal fade" id="<?php echo 'addmodal' . $key; ?>" role="dialog">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Follow ups</h4>
                                    </div>
                                    <div class="modal-body">

                                        <form method="post" action="<?php echo base_url(); ?>sales/next_follow">
                                            <input type="hidden" name="sales_id" value="<?php print_r($row['login_id']); ?>" />
                                            <div class="form-group">
                                                 <div class="col-md-12">
                                                        <div class="col-md-4">
                                                            <h5><b>Add Next Followup:</b></h5>
                                                       <br> </div>
                                                        
                                                        <div class="col-md-8">
                                                          <div class="input-group" style="width:100%;">     
                                                            <input type="datetime-local"  class="form-control" name="follow_date" id="nexfollow" required><br>
                                                          </div>
                                                        </div>          
                                                </div>
                                                
                                                 <div class="col-md-12">
                                                    <div class="col-md-4">
                                                        <h5><b>Notes:</b></h5>
                                                    </div>
                                                    
                                                    <div class="col-md-8">
                                                      <div class="input-group" style="width:100%;">     
                                                         <textarea class="form-control" rows="3" id="comment" name="follownotes" id="additional" class="form-control" placeholder="Describe about the discussion" required></textarea>
                                                         
                                                      </div>
                                                    </div>
                                                </div> 
                                                    
                                                        <div class="col-md-12" style="width:98%;">
                                                        <br>
                                                        <button type="submit" class="btn btn-primary btn pull-right">Submit</button>
                                                        <br><br>
                                                        </div>
                                                      
                                        </form>
                                                    

                                                      <table id="userlisttable" class="table table-bordered table-striped" style="background-color:#fff;width:100%;">
                                                          <thead>
                                                            <tr style="background-color:#e2e2e2;">
                                                              <th class="text-center" scope="col"># Sl no.</th>
                                                              <th scope="col">Date & Time</th>   
                                                                <th scope="col">Followup Notes</th> 
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                              <?php if(!empty($row['follow_ups'])) { ?>
                                                                  <?php $slno = 1; ?>
                                                                  <?php foreach($row['follow_ups'] as $follow) {  ?>
                                                                   
                                                                      <tr>
                                                                          <td class="text-center"><?php echo $slno++; ?></td>
                                                                          <td><?php echo date('d-M-Y h:i a', strtotime($follow['follow_date'])); ?></td>
                                                                          <td><?php echo $follow['follow_notes']; ?></td>
                                                                         
                                                                      </tr>
                                                                 <?php } ?>
                                                             <?php } else { ?>
                                                                <tr>
                                                                    <td colspan="3">No followup available</td>
                                                                </tr>
                                                             <?php } ?>
                                                          </tbody>
                                                        </table>

                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </td>

                   
                          <?php if(getedit('sales_activity') == '1') { ?>
                            <td class="text-center"><a href="<?php echo base_url(); ?>sales/sales_view/<?php echo $row['login_id']; ?>"><small class="btn-success" style="padding:4px 7px;border-radius:3px;"><i class="fa fa-eye"></i></small></a>

                              <a href="<?php echo base_url(); ?>sales/edit_sales_view/<?php echo $row['login_id']; ?>"><small class="btn-primary" style="padding:4px 7px;border-radius:3px;"><i class="fa fa-edit"></i></small></a>

                            </td>

                          <?php } ?>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
            </div>
        </div>		
    </div>
</section>

<script>
    $(document).ready(function() {
        $('#userlisttable').DataTable();
    });
</script>

<script>
$(document).ready(function(){    
    $(".flash").fadeOut(3000);  
});
</script>
