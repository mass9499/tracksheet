
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

<div class="box" style="background-color:#fff;">
<section class="content-body">
    
    <div class="col-md-12"><br>
        <div class="row">
            <div class="col-md-12">
                
                <?php if(getadd('leaves') == '1') { ?>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddLeaveModal"> <i class="fa fa-plus"></i> Apply Leave </button> <br><br>
                <?php } ?>
                
        		<div class="panel panel-default">
                  <div class="panel-heading" style="font-size: 20px; font-weight:bold;">Leaves</div>
                  <div class="panel-body" style="overflow-x:scroll;">
                      <table id="leaveslisttable" class="table table-bordered table-striped table-hover" style="background-color:#fff;">
                          <thead>
                            <tr style="background-color:#e2e2e2;">
                              <th class="text-center"># Sl no.</th>
                              <th class="text-center">From Date</th>
                              <th class="text-center">To Date</th>
                              <th class="text-center">Total Days</th>
                              <th class="text-center">Leave Type</th>
                              <th class="text-center">Approval</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php $slno = 1; ?>
                              <?php foreach($leaves as $leave) { ?>
                              <?php $sl_no = $slno++; ?>
                                    <tr>
                                      <td class="text-center"><?php echo $sl_no.'.'; ?></td>
                                      <td class="text-center"><?php echo date('Y-m-d h:i a', strtotime($leave['from_date'])); ?></td>
                                      <td class="text-center"><?php echo date('Y-m-d h:i a', strtotime($leave['to_date'])); ?></td>
                                      <td class="text-center"><?php if($leave['total_days'] < 1) { echo 'Half Day'; } else { echo $leave['total_days'].' Days'; } ?></td>
                                      <td class="text-center"><?php if($leave['leave_type_name'] != '') { echo $leave['leave_type_name']; } else { echo 'Compensation'; } ?></td>
                                      <td class="text-center"><?php if($leave['approval'] == '1') { echo "<b class='btn-success' style='padding:2px 5px; border-radius:20px;'> <i class='fa fa-check'></i> </b>"; } else { echo "<b class='btn-danger' style='padding:2px 5px; border-radius:20px;'> <i class='fa fa-times'></i> </b>"; } ?>
                                        
                                      </td>
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

<div id="AddLeaveModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" style="margin-top:7%;">
    <form method="POST" action="<?php echo base_url(); ?>leaves/add_leaves">
    <input type="hidden" class="form-control" name="userid" value="<?php echo $userid; ?>">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #ECF0F5;">
        <h4 class="modal-title"><b> Add Leave </b></h4>
      </div>
      <div class="modal-body">
        
        <div class="row">
            <div class="col-md-6">
                <label> Applying Date </label>
                <input type="date" name="applydate" class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly />
            </div>
            <div class="col-md-6">
                <label> Leave Type </label>
                <select id="leavetype" name="leavetype" class="form-control" required>
                    <option value=""> Select Type </option>
                    <?php foreach($leave_types as $type) { ?>
                        <?php //if($type['total']['taken_days'] < $type['leave_days']) { ?>
                            <option value="<?php echo $type['leave_type_id']; ?>"><?php echo $type['leave_type_name']; ?></option>
                        <?php //} ?>
                    <?php } ?>
                        <option value="1"> Comp-off / LOP </option>
                        
                </select>
            </div>
        </div>
        
        <div class="row" id="compensatedatediv" style="display:none;">
            <div class="col-md-12"><br>
                <label> Compensate Date (Upcoming Saturday) </label>
                <input type="text" class="form-control" id="compensatedate" name="compensatedata" value="" readonly>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6"><br>
                <label> From Date </label>
                <input type="datetime-local" name="fromdate" class="form-control" placeholder="Select From Date" required/>
            </div>
            <div class="col-md-6"><br>
                <label> To Date </label>
                <input type="datetime-local" name="todate" class="form-control" placeholder="Select To Date" required/>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12"><br>
                <label> Reason </label>
                <textarea rows="3" name="reason" class="form-control" placeholder="Enter reason" required></textarea>
            </div>
        </div>
        <br>
        
      </div>
      <div class="modal-footer" style="background-color:#ECF0F5;">
        <input type="submit" name="submit" class="btn btn-primary" value="Save" />
        <span class="btn btn-default" data-dismiss="modal">Close</span>
      </div>
    </div>
    </form>
  </div>
</div>

<!-- script -->

<script>
    $(document).ready(function() {
        $('#leaveslisttable').DataTable();
    });
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
    $("#leavetype").change(function(){
       var leavetype = $("#leavetype option:selected").val();
       
       var date = new Date();
        var day = date.getDay();
        var prevMonday;
        if(date.getDay() != 0){
            prevMonday = new Date().setDate(date.getDate() - 5);
        }
        else{
            prevMonday = new Date().setDate(date.getDate() - day);
        }
        
        var sat = new Date(prevMonday);
        
          if(sat.getDate() < 10) {
            var sat_dat = parseInt(sat.getDate()) + parseInt(1);
            var sat_date = '0'+sat_date;
          } else {
              var sat_dat = parseInt(sat.getDate()) + parseInt(1);
              var sat_date = sat_dat;
          }
       
          if(sat.getMonth() < 10) {
            var sat_mon = parseInt(sat.getMonth()) + parseInt(1);
            var sat_month = '0'+sat_mon;
          } else {
              var sat_mon = parseInt(sat.getMonth()) + parseInt(1);
              var sat_month = sat_mon;
          }
          var sat_year = sat.getFullYear();
          
          var sat_fulldate = sat_date+'-'+sat_month+'-'+sat_year;
        
       
    //   var d = new Date();
    //   d.setDate(d.getDate() + (1 + 5 - d.getDay()) % 7);
    //   var sat_date = d.getDate();
       
    //   if(d.getMonth() < 10) {
    //     var sat_month = '0'+d.getMonth();
    //   } else {
    //       var sat_month = d.getMonth();
    //   }
    //   var sat_year = d.getFullYear();
    //   var sat_fulldate = sat_date+'-'+sat_month+'-'+sat_year;
       
       if(leavetype == 1) {
           $("#compensatedate").val(sat_fulldate);
           $("#compensatedatediv").show();
       } else {
           $("#compensatedatediv").hide();
       }
    });
</script>