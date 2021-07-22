
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>


<section class="content-body" style="min-height:450px;">
    
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mass_tracksheet";
    
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
        $sql = "SELECT * FROM login_tbl where type != 'superadmin'";
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
                
            <?php if(getadd('users') == '1') { ?>
                <a href="<?php echo base_url();?>user/adduser"><button class="btn btn-primary"><i class="fa fa-plus"></i> Create New User</button></a> <br><br>
            <?php } ?>
        		
        		<table id="userlisttable" class="table table-bordered table-striped" style="background-color:#fff;">
                  <thead>
                    <tr style="background-color:#e2e2e2;">
                      <th class="text-center" scope="col"># Sl no.</th>
                      <th scope="col">Full Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Created at</th>
                      <th class="text-center" scope="col">Status</th>
                      <?php if(getedit('users') == '1') { ?>
                        <th class="text-center" scope="col">Action</th>
                      <?php } ?>
                    </tr>
                  </thead>
                  <tbody>
                      <?php $slno = 1; ?>
                    <?php while($row = $users->fetch_assoc()) { ?>
                        <?php if($row['login_id'] == $log_user_id) { $aclass = 'adminrow'; } else { $aclass = ''; } ?>
                        <tr class="<?php echo $aclass; ?>">
                          <td class="text-center"><?php echo $slno++; ?></td>
                          <td><?php echo $row['first_name'] . ' ' . $row['last_name']; ?></td>
                          <td><?php echo $row['email']; ?></td>
                          <td><?php echo $row['created_time']; ?></td>
                          <td class="text-center"><?php if($row['status'] == 1) { ?> <b class="btn btn-default btn-sm" style="border:1px solid green; color:green;"> Active </b> <?php  } else { ?> <b class="btn btn-default btn-sm" style="border:1px solid maroon; color:maroon;"> Inactive </b> <?php } ?></td>
                          <?php if(getedit('users') == '1') { ?>
                            <td class="text-center"><a class="btn btn-primary" href="<?php echo base_url(); ?>user/edit_user_view/<?php echo $row['login_id']; ?>">Edit</a></td>
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
