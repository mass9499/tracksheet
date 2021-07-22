
<style>
    .accordion {
      background-color: #eee;
      color: #444;
      cursor: pointer;
      padding: 18px;
      margin-bottom: 10px;
      width: 100%;
      border: none;
      text-align: left;
      outline: none;
      font-size: 15px;
      transition: 0.4s;
    }
    
    .accactive, .accordion:hover {
      background-color: #ccc; 
    }
    
    .panel {
      padding: 0 18px;
      background-color: white;
      display:none;
      /*max-height: 0;*/
      /*overflow: hidden;*/
      /*transition: max-height 0.2s ease-out;*/
    }
    
    .accordion:after {
      content: '\02795'; /* Unicode character for "plus" sign (+) */
      font-size: 13px;
      color: #777;
      float: right;
      margin-left: 5px;
    }
    
    .accactive:after {
      content: "\2796"; /* Unicode character for "minus" sign (-) */
    }
</style>

<section class="content-body">
    
<center>
    <?php
        if($this->session->flashdata('subtask_add_success') != '') 
        {
            echo "<br><h4 style='color:green;' class='flash'><b>".$this->session->flashdata('subtask_add_success')."</b></h4><br>";
        }
        
        if($this->session->flashdata('subtask_add_failed') != '') 
        {
            echo "<br><h4 style='color:maroon;' class='flash'><b>".$this->session->flashdata('subtask_add_failed')."</b></h4><br>";
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
    <div class="col-md-12" style="background-color:#fff;">
        <br><h4><div class="col-xs-4"> <b>Project name : </b><i><?php echo $project['project_name']; ?></i> </div> <div class="col-xs-4"> <b>Project type : </b><i><?php if($project['project_type'] != '') { echo $project['project_type']; } else { echo "<b style='color:grey;'> N/A </b>"; } ?></i> </div> <div class="col-xs-4"> <b>Created at : </b><i><?php echo date('d-m-Y h:i a', strtotime($project['created_time'])); ?></i> </div> </h4>
        <br><hr style="border:1px solid #e2e2e2;"><br>
        <div class="row">
            <div class="col-md-12" style="overflow-x:scroll;">
            
            <?php $slno = 1; ?>
            <?php foreach($tasks as $task) { ?>
            <?php $sl_no = $slno++; ?>
            
                <button data-taskid="<?php echo $task['project_task_id']; ?>" class="accordion"><b><?php echo $task['task_desc'].' - <i>'.$task['task_hours'].' Hours</i>'; ?></b></button>
                <div id="<?php echo 'panel-'.$task['project_task_id']; ?>" class="panel" style="border:2px solid silver;border-top-left-radius:0px; border-top-right-radius:0px; overflow-y:scroll;">
                  <form method="POST" action="<?php echo base_url(); ?>project/subtask_save">
                      <input type="hidden" name="projectid" value="<?php echo $project['project_name']; ?>" />
                      <input type="hidden" name="projecttaskid" value="<?php echo $task['project_task_id']; ?>" />
                    <div class="form-group">
                      <label><h4><b>Add / Edit Sub Tasks</b></h4></label><hr>
                        
                          <table id="location_div" class="table location_div"> 
                              <thead>      
                                  <th><center>Sl.no</center></th>
                                  <th>Task Description</th>
                                  <th>Timeline (In Hours)</th>
                              </thead>
                              <tbody id="<?php echo 'subtask_location_'.$task['project_task_id']; ?>">
                                    <tr id="<?php echo 'row-1'; ?>" class="<?php echo 'rows-'.$task['project_task_id']; ?>">
                                        <td style="width:7%;">
                                            <center>
                                                <div class="input-group">
                                                    <span class="input-group-addon" style="height:53px; width:53px; border:2px solid #e2e2e2; border-radius:3px; box-shadow:2px 2px 2px silver;"><b>1.</b></span>
                                                </div>
                                            </center>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <span class="input-group-addon" style="background-color:#ECF0F5; box-shadow:2px 2px 2px silver;"><i>Abc</i></span>
                                                <textarea name="subtaskdesc[]" id="subtaskdesc-1" class="form-control" placeholder="Describe subtask" style="box-shadow:2px 2px 2px silver;"></textarea>
                                            </div>
                                        </td>
                                        <td style="width:20%;">
                                            <input type="number" min="1" name="subtaskhours[]" id="subtaskhours-1" class="<?php echo 'form-control subtaskhours subtaskhour_'.$task['project_task_id']; ?>" data-maintaskid="<?php echo $task['project_task_id']; ?>"  placeholder="Enter Hours" style="height:53px; box-shadow:2px 2px 2px silver;">
                                        </td>
                                    </tr>
                              </tbody>
                              </table>
                                <hr>
                                <span class="pull-right">
                                    &nbsp; &nbsp; <a href="javascript:void(0)" class="btn btn-primary add_subtask_button" data-maintaskid="<?php echo $task['project_task_id']; ?>"><i class="fa fa-plus"></i> Add More Task</a>
                                    <input type="hidden" name="total_rows" id="currowval" value="1">
                                    &nbsp; &nbsp; <a href="javascript:void(0)" class="btn btn-danger remove_subtask_button"><i class="fa fa-minus"></i> Remove Task </a>
                                    &nbsp; &nbsp; <input type="submit" name="submit" value="Save" class="btn btn-success savebtns" data-maintaskid="<?php echo $task['project_task_id']; ?>">
                                </span>
                                <br><br>
                            </div>
                            
                        </form>
                </div>
                
            <?php } ?>
        	
          <!--<div class="panel panel-default">-->
          <!--        <div class="panel-heading">-->
          <!--          <h4 class="panel-title" data-toggle="collapse" href="#collapse1" style="cursor:pointer;"> <i class="fa fa-carat"></i> Task </h4>-->
          <!--        </div>-->
          <!--        <div id="collapse1" class="panel-collapse collapse in">-->
          <!--          <div class="panel-body">Panel Body</div>-->
          <!--        </div>-->
          <!--      </div>-->
        		
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

<script>
    $(".select2").select2();
</script>

    <script>
    var base_url = '<?php echo base_url(); ?>';
    var maxField = 1000; 
    var x = $("#currowval").val();
    
      $('.add_subtask_button').click(function(){ 
      
      var maintaskid = $(this).data("maintaskid");
      
           if(x < maxField){ 
               x++; 
               $.get(base_url+'project/add_subtask/'+maintaskid+'/'+x,function(res){
                 $("#currowval").val(x);
                 $('#subtask_location_'+maintaskid).append(res);
               });
           }
       });
    </script>
    
    <script>
    $(document).on('click', '.remove_subtask_button', function(e){ 
            e.preventDefault();
        
           var last_row = $("#currowval").val();
             $("#row-"+last_row).remove();
             
             if(x > 1) {
                 x--; 
                 $("#currowval").val(x);
             } else {
                 $("#currowval").val('1');
             }
             
        });
    
    </script>
    
    <script>
        var url = "<?php echo base_url(); ?>project/getsubtasks";
        var acc = document.getElementsByClassName("accordion");
        var i;
        
        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
              
            var taskid = this.getAttribute('data-taskid');
            
            if(this.className == 'accordion accactive') {
                
            } else {
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {taskid:taskid},
                    success: function(data) 
                    {
                        var taskjson = JSON.parse(data);
                        var subtaskdata = '';
                        $.each(data, function (index, value) {
                            var subtaskdata += index;
                            //var subtaskdata += '<tr> <td style="width:7%;"> <center> <div class="input-group"> <span class="input-group-addon" style="height:53px; width:53px; border:2px solid #e2e2e2; border-radius:3px; box-shadow:2px 2px 2px silver;"><b>1.</b></span> </div> </center> </td> <td> <div class="input-group"> <span class="input-group-addon" style="background-color:#ECF0F5; box-shadow:2px 2px 2px silver;"><i>Abc</i></span> <textarea name="subtaskdesc[]" id="subtaskdesc-1" class="form-control" placeholder="Describe subtask" style="box-shadow:2px 2px 2px silver;">'+value.subtask_desc+'</textarea> </div> </td> <td style="width:20%;"> <input type="number" min="1" name="subtaskhours[]" id="subtaskhours-1" class="form-control" value="'+value.subtask_hours+'" placeholder="Enter Hours" style="height:53px; box-shadow:2px 2px 2px silver;"> </td> </tr>';
                        });
                        var data = document.getElementById('panel-'+taskid).innerHTML = subtaskdata;
                        
                    }
                });
            }
            
            this.classList.toggle("accactive");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
              panel.style.maxHeight = null;
            } else {
              panel.style.maxHeight = panel.scrollHeight + "px";
            } 
          });
        }
    </script>
    
    <script>
        $(".accordion").click(function(){
              var taskid = $(this).data('taskid');
              $(".panel").hide(500);
              if($("#panel-"+taskid).css("display") == 'none') {
                  $("#panel-"+taskid).show(500);
              } else {
                  $("#panel-"+taskid).hide(500);
              }
        });
    </script>
    
    <script>
        $(".savebtns").click(function(){
            var maintaskid = $(this).data("maintaskid");
            
            var hourscalc = 0; 
            
            $(".subtaskhour_"+maintaskid).each(function( index ) {
                hourscalc = parseInt(hourscalc) + parseInt($(this).val());
            });
            
        });
    </script>