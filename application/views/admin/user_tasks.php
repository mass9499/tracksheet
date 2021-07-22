
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
            <div class="col-md-12" style="overflow-x:scroll;">
        		
        		<table id="tasklisttable" class="table table-bordered table-striped table-hover" style="background-color:#fff;">
                  <thead>
                    <tr style="background-color:#e2e2e2;">
                      <th class="text-center" scope="col"># Sl no.</th>
                      <th scope="col">Full Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Created at</th>
                      <th class="text-center" scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php $slno = 1; ?>
                      <?php foreach($users as $user) { ?>
                        <tr>
                          <td class="text-center"><?php echo $slno++; ?></td>
                          <td><?php echo $user['first_name'].' '.$user['last_name']; ?></td>
                          <td><?php echo $user['email']; ?></td>
                          <td><?php echo $user['created_time']; ?></td>
                          <td class="text-center"><a href="<?php echo base_url(); ?>tasks/user_task_list/<?php echo $user['login_id']; ?>" class="btn btn-primary">Tasks</a></td>
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
        $('#tasklisttable').DataTable();
    });
</script>

<script>
$(document).ready(function(){    
    $(".flash").fadeOut(3000);  
});
</script>