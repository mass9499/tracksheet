
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>


<section class="content-body" style="min-height:450px;">

<center>
    <?php
        if($this->session->flashdata('user_add_success') != '') 
        {
            echo "<br><h4 style='color:green;' class='flash'>".$this->session->flashdata('leavetype_add_success')."</h4>";
        }
        
        if($this->session->flashdata('user_add_failed') != '') 
        {
            echo "<br><h4 style='color:maroon;' class='flash'>".$this->session->flashdata('leavetype_add_failed')."</h4>";
        }
        
    ?>
</center>

    <div class="col-md-12"><br>
        <div class="row">
            
            <?php if(getadd('leave_types_master') == '1') { ?>
                <div class="col-xs-12 col-md-4" id="leavetypeaddform">
                  <div class="box" style="border:1px solid #e2e2e2;">
                    <div class="box-header" style="background-color: #ECF0F5;">
                        <h4><b>Add Leave Type</b></h4>
                    </div>
                    <div class="box-body">
                        <form method="POST" action="<?php echo base_url(); ?>masters/leave_type_add">
                            <label>Leave Type</label>
                            <input type="text" name="leavetype" class="form-control" placeholder="Enter Leave Type" required>
                            <br>
                            <label>Available Days</label>
                            <input type="number" name="leavedays" class="form-control" placeholder="Enter available days" required>
                            <br>
                            <center><input type="submit" name="submit" class="btn btn-primary" value="Save"></center>
                        </form>
                    </div>
                  </div>
                </div>
            <?php } ?>
            
                <div class="col-xs-12 col-md-4" id="leavetypeeditform" style="display:none;">
                  <div class="box" style="border:1px solid #e2e2e2;">
                    <div class="box-header" style="background-color: #ECF0F5;">
                        <h4><b>Edit Leave Type</b></h4>
                    </div>
                    <div class="box-body">
                        <form method="POST" action="<?php echo base_url(); ?>masters/leave_type_edit">
                            <input type="hidden" name="leavetypeid" id="leavetypeidedit">
                            <label>Leave Type</label>
                            <input type="text" name="leavetype" id="leavetypeedit" class="form-control" placeholder="Enter Leave Type" required>
                            <br>
                            <label>Available Days</label>
                            <input type="number" name="leavedays" id="leavedaysedit" class="form-control" placeholder="Enter available days" required>
                            <br>
                            <center>
                                <input type="submit" name="submit" class="btn btn-success" value="Update leave type">
                                <span class="btn btn-danger" id="canceleditbutt">Switch to add new</span>
                            </center>
                        </form>
                    </div>
                  </div>
                </div>
            
            <?php if(getadd('leave_types_master') == '1') { ?>
            <div class="col-xs-12 col-md-8">
            <?php } else { ?>
            <div class="col-xs-12 col-md-12">
            <?php } ?>
                
        	  <div class="box" style="border:1px solid #e2e2e2; overflow-x:scroll;">
                <div class="box-header" style="background-color: #ECF0F5;">
                    <h4><b>Leave Types</b></h4>
                </div>
                <div class="box-body">
        		<table id="projectslisttable" class="table table-bordered table-striped table-hover" style="background-color:#fff;">
                  <thead>
                    <tr style="background-color:#e2e2e2;">
                      <th class="text-center" scope="col"># Sl no.</th>
                      <th scope="col">Leave Type</th>
                      <th scope="col">Available Days</th>
                      <th scope="col">Created at</th>
                      <?php if(getedit('leave_types_master') == '1' || getdelete('leave_types_master') == '1') { ?>
                        <th class="text-center" scope="col">Action</th>
                      <?php } ?>
                    </tr>
                  </thead>
                  <tbody>
                      <?php $slno = 1; ?>
                      <?php foreach($leave_types as $type) { ?>
                      <?php $sl_no = $slno++; ?>
                        <form method="POST" action="<?php echo base_url(); ?>masters/leave_type_update">
                            <tr>
                              <td class="text-center"><?php echo $sl_no.'.'; ?></td>
                              <td><?php echo $type['leave_type_name']; ?></td>
                              <td class="text-center"> <?php echo $type['leave_days']; ?> </td>
                              <td><?php echo $type['created_date']; ?></td>
                              
                              <?php if(getedit('leave_types_master') == '1' || getdelete('leave_types_master') == '1') { ?>
                                  <td class="text-center">
                                    <?php if(getedit('leave_types_master') == '1') { ?>
                                      <span class="btn-primary" data-leavetypeid="<?php echo $type['leave_type_id']; ?>" data-leavetype="<?php echo $type['leave_type_name']; ?>" data-leavedays="<?php echo $type['leave_days']; ?>" style="border-radius:4px; padding:3px 6px; cursor:pointer;" onclick="return editleavedata(this)" > Edit </span>
                                    <?php } ?>
                                    &nbsp;
                                    <?php if(getdelete('leave_types_master') == '1') { ?>
                                      <a href="<?php echo base_url(); ?>masters/delete_leave_type/<?php echo $type['leave_type_id']; ?>" class="btn-danger" style="border-radius:4px; padding:3px 6px; cursor:pointer;" onclick="return confirm('Are you sure you want to delete this leave type?')" > Delete </a>
                                    <?php } ?>
                                  </td>
                              <?php } ?>
                            </tr>
                        </form>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              </div>
            </div>
            
        </div>		
    </div>
</section>

<script>
    $(document).ready(function() {
        $('#userslisttable').DataTable();
    });
</script>

<script>
$(document).ready(function(){    
    $(".flash").fadeOut(3000);  
});
</script>

<script>
    function editleavedata(dis)
    {
        var leavetype = dis.getAttribute('data-leavetype');
        var leavedays = dis.getAttribute('data-leavedays');
        var leavetypeid = dis.getAttribute('data-leavetypeid');
        
        $("#leavetypeidedit").val(leavetypeid);
        $("#leavetypeedit").val(leavetype);
        $("#leavedaysedit").val(leavedays);
        
        $("#leavetypeaddform").hide();
        $("#leavetypeeditform").show();
        
    }
    
    $("#canceleditbutt").click(function(){
        $("#leavetypeaddform").show();
        $("#leavetypeeditform").hide();
    });
    
</script>