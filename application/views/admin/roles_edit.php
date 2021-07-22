
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>


<section class="content-body" style="min-height:450px;">

<center>
    <?php
        if($this->session->flashdata('user_add_success') != '') 
        {
            echo "<br><h4 style='color:green;' class='flash'>".$this->session->flashdata('user_add_success')."</h4>";
        }
        
        if($this->session->flashdata('user_add_failed') != '') 
        {
            echo "<br><h4 style='color:maroon;' class='flash'>".$this->session->flashdata('user_add_failed')."</h4>";
        }
        
    ?>
</center>

    <div class="col-md-12"><br>
        <div class="row">
            
            <div class="col-md-4">
              <div class="box" style="border:1px solid #e2e2e2;">
                <div class="box-header" style="background-color: #ECF0F5;">
                    <h4><b>Edit role</b></h4>
                </div>
                <div class="box-body">
                    <form method="POST" action="<?php echo base_url(); ?>user/role_update">
                        <input type="hidden" name="roleid" value="<?php echo $role['role_id']; ?>">
                        <label>Role name</label>
                        <input type="text" name="rolename" class="form-control" placeholder="Enter role name" value="<?php echo $role['role_name']; ?>" required>
                        <br>
                        <center>
                            <input type="submit" name="submit" class="btn btn-primary" value="Save">
                            <a href="<?php echo base_url(); ?>user/roles" class="btn btn-danger"> Cancel </a>
                        </center>
                    </form>
                </div>
              </div>
            </div>
            
            <div class="col-md-8">
                
        	  <div class="box" style="border:1px solid #e2e2e2;">
                <div class="box-header" style="background-color: #ECF0F5;">
                    <h4><b>Roles</b></h4>
                </div>
                <div class="box-body">
        		<table id="rolestable" class="table table-bordered table-striped table-hover" style="background-color:#fff;">
                  <thead>
                    <tr style="background-color:#e2e2e2;">
                      <th class="text-center" scope="col"># Sl no.</th>
                      <th scope="col">Role name</th>
                      <th scope="col">Created at</th>
                      <th class="text-center" scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php $slno = 1; ?>
                      <?php foreach($roles as $role) { ?>
                      <?php $sl_no = $slno++; ?>
                        <form method="POST" action="<?php echo base_url(); ?>user/roles_edit">
                            <input type="hidden" name="roleid" value="<?php echo $role['role_id']; ?>">
                            <tr>
                              <td class="text-center"><?php echo $sl_no.'.'; ?></td>
                              <td>
                                   <span class="leave_type_view" id="<?php echo 'leave_type_view-'.$sl_no; ?>" > <?php echo $role['role_name']; ?> </span>
                              </td>
                              <td><?php echo $role['created_date']; ?></td>
                              <td class="text-center">
                                  <span class="btn-primary editbutt" id="<?php echo 'editbutt-'.$sl_no; ?>" style="border-radius:4px; padding:3px 6px;" > Edit </span>
                              </td>
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