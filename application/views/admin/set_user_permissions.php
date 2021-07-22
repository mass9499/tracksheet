
    <div class="col-md-12"><br>
        <div class="row">
            
            <div class="col-md-12">
                
        	  <div class="box" style="border:1px solid #e2e2e2;">
                <div class="box-header">
                    <h4> &nbsp; Setting role Permissions for <b><?php echo $role['role_name']; ?></b> </h4>
                </div>
                <div class="box-body">
                    <form method="POST" action="<?php echo base_url(); ?>user/role_permissions_save">
                		<table id="rolestable" class="table table-bordered table-striped table-hover" style="background-color:#fff;">
                          <thead>
                            <tr style="background-color:#e2e2e2;">
                              <th class="text-center">Screens</th>
                              <th class="text-center">View</th>
                              <th class="text-center">Add</th>
                              <th class="text-center">Edit</th>
                              <th class="text-center">Approve</th>
                              <th class="text-center">Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php if(!empty($screen_permissions)) { ?>
                              <?php $slno = 0; ?>
                              <?php foreach($screen_permissions as $spermission) { ?>
                              <?php $sl_no = $slno++; ?>
                                    <input type="hidden" name="role_permission_id[]" value="<?php echo $spermission['role_permission_id']; ?>" />
                                    <tr>
                                      <td class="text-center"> <?php echo $spermission['screen_name']; ?> </td>
                                      <td class="text-center"> <input type="checkbox" name="<?php echo 'viewoption_'.$sl_no; ?>" value="1" <?php if($spermission['view_option'] == 1) { ?> checked <?php } ?> /> </td>
                                      <td class="text-center"> <input type="checkbox" name="<?php echo 'addoption_'.$sl_no; ?>" value="1" <?php if($spermission['add_option'] == 1) { ?> checked <?php } ?> /> </td>
                                      <td class="text-center"> <input type="checkbox" name="<?php echo 'editoption_'.$sl_no; ?>" value="1" <?php if($spermission['edit_option'] == 1) { ?> checked <?php } ?> /> </td>
                                      <td class="text-center"> <input type="checkbox" name="<?php echo 'approveoption_'.$sl_no; ?>" value="1" <?php if($spermission['approve_option'] == 1) { ?> checked <?php } ?> /> </td>
                                      <td class="text-center"> <input type="checkbox" name="<?php echo 'deleteoption_'.$sl_no; ?>" value="1" <?php if($spermission['delete_option'] == 1) { ?> checked <?php } ?> /> </td>
                                    </tr>
                                <?php } ?>
                                <?php } ?>
                          </tbody>
                        </table>
                        
                        <span class="pull-right">
                            <input type="submit" name="submit" value="Save" class="btn btn-success" >
                            <a href="<?php echo base_url(); ?>user/roles" class="btn btn-danger"> Cancel </a>
                        </span>
                        
                    </form>
                    
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