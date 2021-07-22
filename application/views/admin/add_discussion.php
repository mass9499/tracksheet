<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <div class="container-fluid"><br>
        <form method="POST" action="<?php echo base_url(); ?>discussions/discussion_save">
            
            <input type="hidden" id="box_count" value="1">
            
            <h4 style="color:grey;"><b>Discussion Date and Time: <i><?php echo date('d-M-Y - h:i a'); ?></i></b></h4>
            
            <div class="panel panel-info discpanels" id="original_panel">
              <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-3 selectinput1">
                            <select name="disctpye[]" class="form-control" onchange="discussion_type_change(this, 0)" required>
                               <option>~ Select Type of Discussions ~</option>
                                <option value="internal"> Internal </option>
                               <option value="school"> School (Support) </option>
                               <option value="college"> College (Support) </option> 
                                <option value="rnd"> RND </option> 
                            </select>
                        </div>
                           
                        <div class="col-md-3 selectinput2">
                            <select name="projects[]" id="projects0" class="form-control" style="display:none;">
                                  <option value=""> ~ Select Institution name ~ </option>
                                  <?php if(!empty($projects)) { ?>
                                      <?php foreach($projects as $project) { ?>
                                        <option value="<?php echo $project['project_id']; ?>"><?php echo $project['project_name']; ?></option>
                                      <?php } ?>
                                  <?php } ?>
                            </select>
                        </div>
                    </div>
                   
                </div>
               
              <div class="panel-body">
                  <div class="row">
                      <div class="col-md-9 noteinput">
                          <textarea rows="10" name="discussion_notes[]" class="form-control" placeholder="Add notes here..."></textarea>
                      </div>
                      <div class="col-md-3 assigninput">
                          <b style="font-size:17px;"> Assign To : </b> <br>
                                                              
                            <select class="form-control" name="assignedto0[]" multiple style="font-size:17px; border:3px solid #e2e2e2; border-radius:4px; min-height:190px; overflow-y: auto;">
                             <?php foreach($disassign as $user) { ?>
                              <option value="<?php echo $user['login_id']; ?>"><?php echo $user['first_name'].' '.$user['last_name']; ?></option>
                             <?php } ?>
                            </select>
                      </div>
                  </div>
                
              </div>
            
            </div>
            <div id="copied_panels"></div>
            
            <div class="pull-right"> <i class="fa fa-plus btn btn-success btn-md" id="addbox"></i> <i class="fa fa-minus btn btn-danger btn-md" id="removebox" onclick="return confirm('Are you sure you want to remove this panel?');"></i> </div>
            <br>
            <hr style="border:2px solid #dddddd;">
            <center>
                <input type="submit" class="btn btn-primary" name="submit" value="Save">
                <a href="<?php echo base_url(); ?>discussions" class="btn btn-danger">Cancel</a>
            </center>
        </form>
    </div>
   
    <input type="hidden" id="sectioncount" value="0" />

    <script>
        $("#addbox").click(function(){
          $("#original_panel").clone().appendTo("#copied_panels");
          $("#copied_panels > .panel:last > .panel-body > .row > .noteinput > textarea").val(""); 
          
          var seccount = $("#sectioncount").val();
          var seccountnew = parseInt(seccount) + parseInt(1);
          $("#sectioncount").val(seccountnew);
          
          var copiedpanelid = 'copied_panel_'+1;
          var copiedpanelfuncdef = 'discussion_type_change(this, '+seccountnew+')';
          var copiedpanelselid = 'projects'+seccountnew;
          var copiedpaneluserselname = 'assignedto'+seccountnew+'[]';
          
          $("#copied_panels > .panel:last").attr("id", copiedpanelid);
          
          $("#copied_panels > .panel:last > .panel-heading > .row > .selectinput1 > select").attr("onchange", copiedpanelfuncdef);
          $("#copied_panels > .panel:last > .panel-heading > .row > .selectinput2 > select").attr("id", copiedpanelselid);
          $("#copied_panels > .panel:last > .panel-body > .row > .assigninput > select").attr("name", copiedpaneluserselname);
          
          
        });
    </script>
    
    <script>
        $("#removebox").click(function(){
            $('#copied_panels').children().last().remove();
        });
    </script>
    
    <script>
    
      function discussion_type_change(dis, i){
          
          var discussion_type= dis.value;
          
          if(discussion_type == 'school' ){
              $.ajax({
                 type: 'post',
                 url: '<?php echo base_url(); ?>discussions/get_ins_by_type',
                 data: {'instype': 'school'},
                 success: function(res){
                    var obj = JSON.parse(res); 
                   
                    var inslist = "";
    
                     $.each(obj, function( index, row ) {
                          inslist += '<option value="'+row.project_id+'">'+row.project_name+'</option>';
                    });
                    
                    $("#projects"+i).html(inslist);
                 },
                 error: function(){
                     console.log('Error');
                 }
                  
              });
              $("#projects"+i).show();
              $("#projects"+i).prop("required",true);
          }else if(discussion_type == 'college'){
              
              $.ajax({
                 type: 'post',
                 url: '<?php echo base_url(); ?>discussions/get_ins_by_type',
                 data: {'instype': 'college'},
                 success: function(res){
                    var obj = JSON.parse(res); 
                   
                    var inslist = "";
    
                     $.each(obj, function( index, row ) {
                          inslist += '<option value="'+row.project_id+'">'+row.project_name+'</option>';
                    });
                    
                    $("#projects"+i).html(inslist);
                 },
                 error: function(){
                     console.log('Error');
                 }
                  
              });
              $("#projects"+i).show();
              $("#projects"+i).prop("required", true);
          }else if(discussion_type == 'internal' || discussion_type == 'rnd'){
              $("#projects"+i).hide();
              $("#projects"+i).prop("required",false);
          }else{
              $("#projects"+i).hide();
              $("#projects"+i).prop("required",false);
          }
          
      }
        
        
        
    </script>

    