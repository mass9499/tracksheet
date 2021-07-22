
<style>
    .datepicker-days {
        display:none !important;
    }
</style>
<div class="box">
<section class="content-body bgc-white p-20 mB-20" style="margin-top:20px;">
    <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <form method="POST" action="<?php echo base_url(); ?>circular/update_circular">
                        <input type="hidden" name="id" value="<?php echo $circ['id']; ?>" >
                        
                        <div class="col-md-12" style="border:2px solid #e2e2e2; background-color:#fff;">
                            <div class="col-md-12">
                                <h3><b>Edit Circular</b></h3> <hr>
                            </div>
                            <div class="col-md-12">
                                <label>From Date</label>
                                <input type="date" class="form-control" name="fromdate" value="<?php echo $circ['start']; ?>" required/>
                                <br>
                            </div>
                            <div class="col-md-12">
                                <label>To Date</label>
                                <input type="date" class="form-control" name="todate" value="<?php echo $circ['end']; ?>" required/>
                                <br>
                            </div>
                            <div class="col-md-12">
                                <label>Color</label>
                                <input type="color" class="form-control" name="color" value="<?php echo $circ['color']; ?>" required/>
                                <br>
                            </div>
                            <div class="col-md-12">
                                <label>Enter Description</label>
                                <textarea type="text" rows="3" class="form-control" name="description" placeholder="Write description..." required><?php echo $circ['description']; ?></textarea>
                                <br>
                            </div>
                            <div class="col-md-12">
                                <center><input type="submit" class="btn btn-primary form-control" name="submit" value="Update"></center>
                                <br>
                            </div>
                        </div>
                        
                        
                    </form>
                </div>
                <div class="col-md-8" style="background-color:#fff;">
                    <center><h3><b>Circular Calendar</b></h3></center>
                    <hr>
                    <div id='calendar'></div>
                </div>
            
            </div>		
    </div>
    
    </section>
</div>



<!-- **********************************************************************************************************************************************************************-->




<link href='<?php echo base_url();?>assets/plugins/calendar/fullcalendar.min.css' rel='stylesheet' />
<link href='<?php echo base_url();?>assets/plugins/calendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='<?php echo base_url();?>assets/plugins/calendar/lib/moment.min.js'></script>
<script src='<?php echo base_url();?>assets/plugins/calendar/lib/jquery.min.js'></script>
<script src='<?php echo base_url();?>assets/plugins/calendar/fullcalendar.min.js'></script>

    <script>
    
      $(document).ready(function() {
    
        $('#calendar').fullCalendar({
          //defaultDate: '2019-01-12',
          editable: true,
          eventLimit: true, // allow "more" link when too many events
          
          events: [
			<?php foreach($circular as $event): 			
			
				/*$start = explode(" ", $event['start']);
				$end = explode(" ", $event['end']);
				if($start[1] == '00:00:00'){
					$start = $start[0];
				}else{*/
					$start = $event['start'];
				//}
				/*if($end[1] == '00:00:00'){
					$end = $end[0];
				}else{*/
					$end = $event['end'];
				//} 
				$end_date_event = $event['end'];
				$eedate = date('Y-m-d', strtotime("+1 day", strtotime($end_date_event)));
			?>
				{
					id: '<?php echo $event['id']; ?>',
					title: '<?php echo $event['description']; ?>',
					start: '<?php echo $start; ?>',
					end: '<?php echo $eedate; ?>',
					color: '<?php echo $event['color']; ?>',
				},
			<?php endforeach; ?>
			]
          
          /*events: [
            {
              title: 'All Day Event',
              start: '2019-01-01',
              end: '2019-01-03'
            },
            {
              title: 'Long Event',
              start: '2019-01-07',
              end: '2019-01-10'
            },
            {
              title: 'Conference',
              start: '2019-01-11',
              end: '2019-01-13'
            },
            {
              title: 'Click for Google',
              url: 'http://google.com/',
              start: '2019-01-28'
            }
          ]*/
          
          
        });
    
      });
    
    </script>
    
    
    <script>
    
        $(document).ready(function(){
            
            // $(".fc-day-grid-event").css({"background-color":"#40E0D0","float":"right","margin-right":"15px","margin-top":"-5px","border-top-left-radius":"15px","border-bottom-left-radius":"15px","border-bottom-right-radius":"15px","width":"2%","cursor":"pointer"});
            
            $(".fc-day-top").click(function(){
                var seldate = $(this).attr("data-date");
                var logtype = $("#logtype").val();
                
                document.getElementById("selecteddate").value = seldate;
                document.getElementById("selecteddate2").value = seldate;
                document.getElementById("selecteddate3").value = seldate;
                
                if(logtype == 'coordinator') {
                    //$("#datesubmitbutt").click();
                    $("#SubmissionTypeModalId").click();
                } else {
                    return false;
                }
            });
           
            $(".fc-prev-button").click(function(){
                // $(".fc-day-grid-event").css({"background-color":"#40E0D0","margin-left":"0px","margin-top":"0px","border-top-left-radius":"50px","border-top-right-radius":"50px","border-bottom-right-radius":"50px","width":"1px","cursor":"pointer"});
                $(".fc-day-top").click(function(){
                    var logtype = $("#logtype").val();
                    var seldate = $(this).attr("data-date");
                    document.getElementById("selecteddate").value = seldate;
                    document.getElementById("selecteddate2").value = seldate;
                    document.getElementById("selecteddate3").value = seldate;
                    
                    if(logtype == 'coordinator') {
                        //$("#datesubmitbutt").click();
                        $("#SubmissionTypeModalId").click();
                    } else {
                        return false;
                    }
                });
            });
            
            $(".fc-next-button").click(function(){
                // $(".fc-day-grid-event").css({"background-color":"#40E0D0","margin-left":"0px","margin-top":"0px","border-top-left-radius":"50px","border-top-right-radius":"50px","border-bottom-right-radius":"50px","width":"1px","cursor":"pointer"});
                $(".fc-day-top").click(function(){
                    var seldate = $(this).attr("data-date");
                    var logtype = $("#logtype").val();
                    
                    document.getElementById("selecteddate").value = seldate;
                    document.getElementById("selecteddate2").value = seldate;
                    document.getElementById("selecteddate3").value = seldate;
                    
                    if(logtype == 'coordinator') {
                        //$("#datesubmitbutt").click();
                        $("#SubmissionTypeModalId").click();
                    } else {
                        return false;
                    }
                });
            });
           
        });
        
        
    </script>
    


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




<button id="viewdescbtn" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#viewdescmodal" style="display:none;"></button>

<!-- Modal -->
<div id="viewdescmodal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="margin-top:10%;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" style="color:red;">&times;</button>
        <h4 class="modal-title"><b>Circular Description </b></h4>
      </div>
      <div class="modal-body" id="cal_desc">
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script>
    $(document).ready(function(){
        $(".fc-content").click(function()
        {
            var desc = $(this).text();
            
            $("#viewdescbtn").click();
            
            var description = "<p style='text-align:justified;'>"+desc+"</p>";
            
            $("#cal_desc").html(description);
            
        });
    });
</script>