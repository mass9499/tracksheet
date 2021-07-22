
<section class="content-body">
    
<center>
    <?php
        if($this->session->flashdata('project_add_success') != '') 
        {
            echo "<br><h4 style='color:green;' class='flash'><b>".$this->session->flashdata('project_add_success')."</b></h4><br>";
        }
        
        if($this->session->flashdata('project_add_failed') != '') 
        {
            echo "<br><h4 style='color:maroon;' class='flash'><b>".$this->session->flashdata('project_add_failed')."</b></h4><br>";
        }
        
    ?>
    
    <?php
        if($this->session->flashdata('project_edit_success') != '') 
        {
            echo "<br><h4 style='color:green;' class='flash'><b>".$this->session->flashdata('project_edit_success')."</b></h4><br>";
        }
        
        if($this->session->flashdata('project_edit_failed') != '') 
        {
            echo "<br><h4 style='color:maroon;' class='flash'><b>".$this->session->flashdata('project_edit_failed')."</b></h4><br>";
        }
        
    ?>
</center>
    <div class="col-md-12" style="background-color:#fff;"><br>
        <div class="row">
            <div class="col-md-12" style="overflow-x:scroll;">
                
            <?php if(getadd('projects') == '1') { ?>
                <a href="<?php echo base_url();?>project/addproject"><button class="btn btn-primary"><i class="fa fa-plus"></i> Create New Institutions</button></a> <br><br>
            <?php } ?>
        	
        		<table id="projectslisttable" class="table table-bordered table-striped" style="background-color:#fff;">
                  <thead>
                    <tr style="background-color:#e2e2e2;">
                      <th scope="col"># Sl no.</th>
                      <th scope="col">Institution Name</th>
                      <th scope="col">Institution Type</th>
                      <th scope="col" style="display: none;">Country</th>
                      <th scope="col">Created Time</th>
                      <?php if(getview('projects') == '1' || getedit('projects') == '1') { ?>
                        <th class="text-center" scope="col" style="width:10%;">Action</th>
                      <?php } ?>
                    </tr>
                  </thead>
                  <tbody>
                      <?php $slno = 1; ?>
                    <?php foreach($projects as $project) { ?>
                        <tr>
                          <td><?php echo $slno++; ?></td>
                          <td><?php echo $project['project_name']; ?></td>
                          <td><?php echo $project['project_type']; ?></td>
                          <td style="display: none;"><?php echo $project['country_name']; ?></td>
                          <td><?php echo $project['created_time']; ?></td>
                          <?php if(getview('projects') == '1' || getedit('projects') == '1') { ?>
                              <td class="text-center">
                                  <?php if(getview('projects') == '1') { ?>
                                    <a href="<?php echo base_url(); ?>project/project_view/<?php echo $project['project_id']; ?>"><small class="btn-success" style="padding:4px 7px;border-radius:3px;"><i class="fa fa-eye"></i></small></a>
                                  <?php } ?>
                                  &nbsp
                                  <?php if(getedit('projects') == '1') { ?>
                                    <a href="<?php echo base_url(); ?>project/project_edit/<?php echo $project['project_id']; ?>"><small class="btn-primary" style="padding:4px 7px;border-radius:3px;"><i class="fa fa-edit"></i></small></a>
                                <?php } ?>
                              </td>
                          <?php } ?>
                        </tr>
                    <?php } ?>
                  </tbody>
                </table>
            </div>
        </div>		
    </div><!-- col-md-12 -->
</section>

<script>
    $(document).ready(function() {
        $(function () {
    		$("#projectslisttable").DataTable({
    		   "aoColumnDefs": [{ "bSortable": false, "aTargets": [ 0, 4 ] }]
    		});
    	  });
    });
</script>

<script>
$(document).ready(function(){    
    $(".flash").fadeOut(3000);  
});
</script>