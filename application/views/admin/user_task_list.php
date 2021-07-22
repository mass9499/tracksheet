<div class="box" style="background-color:#fff;">
<section class="content-body">
    
    <div class="col-md-12"><br>
        <div class="row">
            <div class="col-md-12">
                <?php if(getadd('tasks') == '1') { ?>
                    <div class="panel panel-default">
                      <div class="panel-heading" style="font-size: 20px; font-weight:bold;">
                          Add Task
                          <center> <?php if($this->session->flashdata('add_task_response') != '') { echo $this->session->flashdata('add_task_response'); } ?> </center>
                      </div>
                      <div class="panel-body" style="overflow-x:scroll;">
                        <form method="POST" action="<?php echo base_url(); ?>tasks/add_task">
                            <input type="hidden" class="form-control" id="userid" name="userid" value="<?php echo $userid; ?>">
                            <table class="table table-bordered table-striped" style="background-color:#fff;">
                              <thead>
                                <tr style="background-color:#e2e2e2;">
                                  <th class="text-center" scope="col">Date</th>
                                  <th scope="col">Task Type</th> 
                                  <th scope="col">Institution Name</th>
                                  <th scope="col">Task</th>
                                    <th class="text-center" scope="col">Sub Task</th>
                                  <th class="text-center" scope="col" col span="1">Timeline(Hrs)</th>
                                  <th class="text-center" scope="col">Status</th>
                                  <th class="text-center" scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><input type="date" class="form-control" name="taskdate" value="<?php echo date('Y-m-d'); ?>" readonly style="margin-top:20px;height:35px;text-align:center;" required></td>
                                   <td>
                                        <select rows="3" class="form-control" name="tasktype" id="tasktype" required style="margin-top:20px;height:35px;">
                                            <option> ~ Select ~ </option>
                                              <option>~ Select Type of Discussions ~</option>
                                            <option value="internal"> Internal </option>
                                           <option value="school"> School (Support) </option>
                                           <option value="college"> College (Support) </option> 
                                            <option value="rnd"> RND </option> 
                                        </select>
                                  </td>
                                  <td>
                                      <select class="form-contro" name="projectid"  id="projectid" required style="margin-top:20px;height:35px;">
                                          <option value=""> Select Institution </option>
                                          <?php foreach($projects as $project) { ?>
                                            <option value="<?php echo $project['project_id']; ?>"> <?php echo $project['project_name']; ?> </option> 
                                          <?php } ?>
                                      </select>
                                  </td>
                                  <!--<td><textarea rows="3" class="form-control" name="taskname" required></textarea></td>-->
                                  <td>
                                        <select rows="3" class="form-control" name="taskname" id="taskname" required style="margin-top:20px;height:35px;">
                                            <option> ~ Task List ~ </option>
                                        </select>
                                  </td>
                                   <td><input type="text" class="form-control" name="subtask" style="width:250px;margin-top:20px;height:35px;" required></td>
                                   
                                  <td><input type="number" class="form-control" name="taskhours" style="width:100px;margin-top:20px;height:35px;" required></td>
                                  <!--<td><textarea rows="3" class="form-control" name="taskstatus"></textarea></td>-->
                                  <td>
                                      <select class="form-contro" name="taskstatus" required style="width:100px;margin-top:20px;height:35px;">
                                          <option value=""> ~ Status ~ </option>
                                            <option value="In Progress"> In Progress </option> 
                                            <option value="Pending"> Pending </option>
                                            <option value="Waiting for client response"> Waiting for client response </option>
                                            <option value="Completed"> Completed </option> 
                                      </select>
                                  </td>
                                  <td><input type="submit" class="btn btn-success" name="submit" value="Save" style="margin-top:20px;"></td>
                                </tr>
                              </tbody>
                            </table>
                        </form>
                        </div>
                    </div>
                <?php } ?>
                
        		<div class="panel panel-default">
                  <div class="panel-heading" style="font-size: 20px; font-weight:bold;">Tasks</div>
                  <div class="panel-body" style="overflow-x:scroll;">
                      <table id="projectslisttable" class="table table-bordered table-striped table-hover" style="background-color:#fff;">
                          <thead>
                            <tr style="background-color:#e2e2e2;">
                              <th class="text-center" scope="col"># Sl no.</th>
                              <th class="text-center" scope="col" style="width:12%;">Date</th>
                              <th scope="col">Institution Name</th>
                              <th scope="col">Task Description</th>
                              <th scope="col">Sub Task</th>
                              <th class="text-center" scope="col">Timeline (Hours)</th>
                              <th class="text-center" scope="col">Status</th>
                              <?php if(getedit('tasks') == '1') { ?>
                                <th class="text-center" scope="col">Action</th>
                              <?php } ?>
                            </tr>
                          </thead>
                          <tbody>
                              <?php $slno = 1; ?>
                              <?php foreach($tasks as $task) { ?>
                              <?php $sl_no = $slno++; ?>
                                <form method="POST" action="<?php echo base_url(); ?>tasks/edit_task/<?php echo $task['task_id']; ?>">
                                    <tr>
                                      <td class="text-center"><?php echo $sl_no.'.'; ?></td>
                                      <td class="text-center"><?php echo $task['task_date']; ?></td>
                                      <td><?php echo $task['project_name']; ?></td>
                                      <td><?php echo $task['task_name']; ?></td>
                                      <td><?php echo $task['subtask']; ?></td>
                                      <td class="text-center"><?php echo $task['task_hours']; ?></td>
                                      <td class="text-center">
                                          <span class="taskstatusecho" id="<?php echo 'taskstatusecho-'.$sl_no; ?>"><?php echo $task['task_status']; ?></span>
                                          <center><input class="taskstatusinput form-contro" id="<?php echo 'taskstatusinput-'.$sl_no; ?>" type="text" name="taskstatus" value="<?php echo $task['task_status']; ?>" style="display:none; border-radius:4px; padding-left:3px;" required></center>
                                      </td>
                                      <?php if(getedit('tasks') == '1') { ?>
                                          <td class="text-center" style="width:10%;">
                                              <span class="btn-primary editbutt" id="<?php echo 'editbutt-'.$sl_no; ?>" data-row="<?php echo $sl_no; ?>" onclick="return edit_butt_clicked(this)" style="padding: 1px 6px; border-radius:4px;cursor:pointer;"> <i class="fa fa-edit"></i> </span>
                                              <span class="btn-success savebutt" id="<?php echo 'savebutt-'.$sl_no; ?>" data-taskid="<?php echo $task['task_id']; ?>" data-row="<?php echo $sl_no; ?>" onclick="return save_butt_clicked(this)" style="padding: 2px 6px; border-radius:4px;cursor:pointer; display:none;"> <i class="fa fa-save"></i></span>
                                              <!--<input class="btn-success submitbutt" id="<?php echo 'submitbutt-'.$sl_no; ?>" type="submit" name="submit" value="Save" style="display:none;">-->
                                              <span class="btn-danger closebutt" id="<?php echo 'closebutt-'.$sl_no; ?>" data-row="<?php echo $sl_no; ?>" onclick="return close_butt_clicked(this)" style="padding: 2px 6px; border-radius:4px;cursor:pointer; display:none;"> <i class="fa fa-close"></i> </span>
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
        
    //   var userid = $("#userid").val();
      
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
                    var options = "<option value='"+res.project_task_id+"'>"+res.task_desc+"</option>";
                    $("#taskname").append(options);
                });
                
            }
        });
        
    });
</script>



