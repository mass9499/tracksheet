<div class="box" style="background-color:#fff;">
<section class="content-body">
    
    <div class="col-md-12"><br>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                  <div class="panel-heading" style="font-size: 20px; font-weight:bold;">
                      Add Google Sheet
                      <center> <?php if($this->session->flashdata('add_task_response') != '') { echo $this->session->flashdata('add_task_response'); } ?> </center>
                  </div>
                  <div class="panel-body" style="overflow-x:scroll;">
                    <form method="POST" action="<?php echo base_url(); ?>googlesheets/googlesheet_save" enctype="multipart/form-data">
                        <!--<input type="hidden" class="form-control" name="userid" value="<?php // echo $userid; ?>">-->
                        <table class="table table-bordered table-striped" style="background-color:#fff;">
                          <thead>
                            <tr style="background-color:#e2e2e2;">
                              <th class="text-center" scope="col">Date</th>
                              <th scope="col">Institution Name</th>
                              <th class="text-center" scope="col">Google Sheet Url</th>
                              <th class="text-center" scope="col">Description</th>
                              <th class="text-center" scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><input type="text" class="form-control" value="<?php echo date('Y-m-d'); ?>" style="margin-top:20px;height:35px;text-align:center;" readonly></td>
                              <td>
                                  <select class="form-contro" name="projectid"  id="projectid" required style="margin-top:20px;height:35px;">
                                      <option value=""> Select Institution </option>
                                      <?php foreach($projects as $project) { ?>
                                        <option value="<?php echo $project['project_id']; ?>"> <?php echo $project['project_name']; ?> </option> 
                                      <?php } ?>
                                  </select>
                              </td>
                              <td><textarea rows="3" class="form-control" name="googlesheet" required></textarea></td>
                              <td><textarea rows="3" class="form-control" name="description"></textarea></td>
                              <td><input type="submit" class="btn btn-success" name="submit" value="Save" style="margin-top:20px;"></td>
                            </tr>
                          </tbody>
                        </table>
                    </form>
                    </div>
                </div>
                
                <center>
                    <?php if($this->session->flashdata('gsheet_resp_1') != '') { echo "<h4 style='color:green;'><b>".$this->session->flashdata('gsheet_resp_1')."</b></h4>"; } ?>
                    <?php if($this->session->flashdata('gsheet_resp_0') != '') { echo "<h4 style='color:maroon;'><b>".$this->session->flashdata('gsheet_resp_0')."</b></h4>"; } ?>
                </center>
                
        		<div class="panel panel-default">
                  <div class="panel-heading" style="font-size: 20px; font-weight:bold;">Google Sheets</div>
                  <div class="panel-body" style="overflow-x:scroll;">
                      <table id="projectslisttable" class="table table-bordered table-striped table-hover" style="background-color:#fff;">
                          <thead>
                            <tr style="background-color:#e2e2e2;">
                              <th class="text-center" scope="col"># Sl no.</th>
                              <th class="text-center" scope="col">Created Date</th>
                              <th scope="col">Institution Name</th>
                              <th class="text-center">Google Sheet</th>
                              <th scope="col">Description</th>
                              <!--<th class="text-center" scope="col">Action</th>-->
                            </tr>
                          </thead>
                          <tbody>
                              <?php $slno = 1; ?>
                              <?php foreach($googlesheets as $gsheet) { ?>
                              <?php $sl_no = $slno++; ?>
                                    <tr>
                                      <td class="text-center"><?php echo $sl_no.'.'; ?></td>
                                      <td class="text-center"><?php echo date('Y-m-d', strtotime($gsheet['googlesheet_created_date'])); ?></td>
                                      <td><?php echo $gsheet['project_name']; ?></td>
                                      <td><?php echo $gsheet['description']; ?></td>
                                      <td class="text-center">
                                          <span type="button" id="SheetModalBtn" class="btn btn-info" data-toggle="modal" data-target="#SheetModal" data-desc="<?php echo $gsheet['description']; ?>" data-src="<?php echo $gsheet['googlesheet']; ?>" onclick="opensheetfunc(this)">Open Sheet</span>
                                          <a class="btn btn-success" href="<?php echo $gsheet['googlesheet']; ?>">View in Google Sheets</a>
                                      </td>
                                      <!--td class="text-center">
                                          <span class="btn btn-primary" id="<?php echo 'completebtn_'.$gsheet['bugsheet_id']; ?>" data-bugsheetid="<?php echo $gsheet['bugsheet_id']; ?>" onclick="return bugsheetcompleteaction(this)" <?php if($bug['bug_status'] == 'Completed') { ?> style="display:none;" <?php } ?>>Yet to complete</span>
                                          <span class="btn btn-success" id="<?php echo 'completedbtn_'.$gsheet['bugsheet_id']; ?>" data-bugsheetid="<?php echo $gsheet['bugsheet_id']; ?>" onclick="return bugsheetcompletedaction(this)" <?php if($bug['bug_status'] == 'In Progress') { ?> style="display:none;" <?php } ?>>Completed</span>
                                      </td-->
                                    </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                  </div>
                </div>
            </div>
        </div>		
    </div>
    
    </section>
</div>


    <!-- Modal -->
    <div id="SheetModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
    
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title"><b id="gsheettitle">Acaadpro Bugsheet</b><span type="button" class="close" data-dismiss="modal" style="color:red; font-size:30px;">&times;</span></h4>
          </div>
          <div class="modal-body">
                <iframe id="gsheetframe" src="" style="border:2px solid #e2e2e2; border-radius:5px; width:100%; height:480px; overflow-x:scroll; overflow-y:scroll;"></iframe>
          </div>
        </div>
    
      </div>
    </div>

<script>
 $(document).ready( function () {
    $('#projectslisttable').DataTable();
} );
</script>

<script>
$(document).ready(function(){    
    $(".flash").fadeOut(3000);  
});
</script>

<script>
    function edit_butt_clicked(dis) {
        var rowid = dis.getAttribute('data-row');
        
        $(".taskstatusinput").hide();
        $(".savebutt").hide();
        $(".closebutt").hide();
        
        $(".taskstatusecho").show();
        $(".editbutt").show();
        
        $("#taskstatusecho-"+rowid).hide();
        $("#editbutt-"+rowid).hide();
        
        $("#taskstatusinput-"+rowid).show();
        $("#savebutt-"+rowid).show();
        $("#closebutt-"+rowid).show();
    }
</script>

<script>
    function close_butt_clicked(dis) {
        var rowid = dis.getAttribute('data-row');
        
        $(".taskstatusinput").hide();
        $(".savebutt").hide();
        $(".closebutt").hide();
        
        $(".taskstatusecho").show();
        $(".editbutt").show();
        
    }
</script>

<script>
    function save_butt_clicked(dis) {
        var rowid = dis.getAttribute('data-row');
        var taskid = dis.getAttribute('data-taskid');
        var taskstatus = $("#taskstatusinput-"+rowid).val();
        var url = "<?php echo base_url(); ?>tasks/edit_task_ajax";
        
        $.ajax({
            type: "POST",
            url: url,
            data: {taskid:taskid,taskstatus:taskstatus},
            success: function(response)
            {
                if(response == 1) {
                    $("#taskstatusecho-"+rowid).html(taskstatus);
                    
                    $(".taskstatusinput").hide();
                    $(".savebutt").hide();
                    $(".closebutt").hide();
                    
                    $(".taskstatusecho").show();
                    $(".editbutt").show();
                } else {
                    $(".taskstatusinput").hide();
                    $(".savebutt").hide();
                    $(".closebutt").hide();
                    
                    $(".taskstatusecho").show();
                    $(".editbutt").show();
                }
            }
        });
        
        
    }
</script>

<script>
    $("#projectid").change(function(){
        var def = "<option value=''> ~ Select Task ~ </option>";
        $("#taskname").html(def);
        
        var projectid = $("#projectid").val();
        url = "<?php echo base_url(); ?>tasks/get_project_tasks";
            
        $.ajax({
            type: "POST",
            url: url,
            data: {project_id:projectid},
            success: function(response)
            {
                var obj = JSON.parse(response);
                
                obj.forEach(function(res) {
                    var options = "<option>"+res.task_desc+"</option>";
                    $("#taskname").append(options);
                });
                
            }
        });
        
    });
</script>

<script>
    function bugsheetcompleteaction(dis)
    {
        var bugsheet_id = dis.getAttribute('data-bugsheetid');
        var url = "<?php echo base_url(); ?>bugsheets/bugsheetcompleteaction/"+bugsheet_id;
        
        $.ajax({
            type: "POST",
            url: url,
            success: function(response)
            {
                if(response == 'Failed') {
                    alert("Failed to update status!");
                } else if(response == '1') {
                    $("#completedbtn_"+bugsheet_id).hide();
                    $("#completebtn_"+bugsheet_id).show();
                } else {
                    $("#completebtn_"+bugsheet_id).hide();
                    $("#completedbtn_"+bugsheet_id).show();
                }
            }
        });
    }
    
    function bugsheetcompletedaction(dis)
    {
        var bugsheet_id = dis.getAttribute('data-bugsheetid');
        var url = "<?php echo base_url(); ?>bugsheets/bugsheetcompletedaction/"+bugsheet_id;
        
        $.ajax({
            type: "POST",
            url: url,
            success: function(response)
            {
                if(response == 'Failed') {
                    alert("Failed to update status!");
                } else if(response == '1') {
                    $("#completedbtn_"+bugsheet_id).hide();
                    $("#completebtn_"+bugsheet_id).show();
                } else {
                    $("#completebtn_"+bugsheet_id).hide();
                    $("#completedbtn_"+bugsheet_id).show();
                }
            }
        });
    }
</script>

<script>

    function opensheetfunc(dis)
    {
        var desc = dis.getAttribute('data-desc');
        var src = dis.getAttribute('data-src');
        
        
        document.getElementById("gsheettitle").innerHTML = 'Acaadpro Bugsheet';
        document.getElementById("gsheetframe").src = '';
        
        document.getElementById("gsheettitle").innerHTML = desc;
        document.getElementById("gsheetframe").src = src;
    }
    
</script>