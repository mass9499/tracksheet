
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<section class="box-body">
    <br>
    <div class="box box-danger">
      <div class="box-header with-border">
      </div>
        <div class="row">
            <div class="col-md-12">
                   <form action="<?php echo base_url();?>sales/editsalessave/<?php echo $user['login_id'];?>" method="POST" onsubmit="return uservalidate()">
                    
                    <div class="col-xs-6">
                      <label>Date</label>
                      <input name="date" id="firstname" class="form-control"  placeholder="Enter Date" value="<?php echo $user['date']; ?>" readonly >
                    </div>
                    <div class="col-xs-6">
                      <label>POA of the Day</label>
                      <input type="text" name="poa" id="lastname" class="form-control" placeholder="Enter POA of the day" value="<?php echo $user['poa']; ?>" required>
                      <br>
                    </div>
                    <div class="col-xs-6">
                      <label> Institution Name</label>
                      <input type="mail" name="institution" id="useremail" class="form-control" placeholder="Enter Institution Name" value="<?php echo $user['institution']; ?>" required>
                    </div>
                  
                      <div class="col-xs-6">
                      <label>Contact Person Name </label>
                      <input type="text" name="contactperson" id="status" class="form-control" placeholder="Enter Contact person Name" value="<?php echo $user['contactperson']; ?>" required>
                      <br>
                    </div>
                 
                    <div class="col-xs-6">
                  <label>Contact Person Designation</label>
                      <input type="text" name="designation" id="nextfollow" class="form-control" placeholder="Enter Contact person designation" value="<?php echo $user['designation']; ?>" required>

                    </div>
                    <div class="col-xs-6">
                      <label>Contact Person Phone No</label>
                      <input type="text" name="phone" id="additional" class="form-control" placeholder="Enter Contact person Ph no" value="<?php echo $user['phone']; ?>" required>
                      <br>
                    </div>
                    <div class="col-xs-6">
                      <label>Mode of Communication</label>
                      <input type="text" name="mode" id="additional" class="form-control" placeholder="Enter Mode of communication" value="<?php echo $user['mode']; ?>" required>
                    </div>
                   
                    <div class="col-xs-6">
                      <label>Potentional Conversion</label>
                      <input type="text" name="potentional" id="additional" class="form-control" placeholder="Enter Potentional conversion" value="<?php echo $user['potentional']; ?>" required>
                    <br>
                    </div>
                    <!--<div class="col-xs-6">-->
                    <!--  <label>Follow up Date</label>-->
                    <!--  <input type="datetime-local" name="followupdate" id="additional" class="form-control" placeholder="Enter Follow up date" value="<?php echo $user['followupdate']; ?>" required>-->
                    <!--  <br>-->
                    <!--</div>-->
                    
                    <div class="col-xs-6">
                      <label>Next day POA</label>
                      <input type="text" name="nextpoa" id="additional" class="form-control" placeholder="Enter Next day POA" value="<?php echo $user['nextpoa']; ?>" required>
                    <br>
                    </div>
                    
                      <div class="col-xs-12">
                      <label>Note(Describe about the Discussion)</label>
                       <textarea class="form-control" rows="5" id="comment" name="notes" id="additional" class="form-control" placeholder="Describe about the discussion"required><?php echo $user['notes']; ?></textarea>
                    </div>

                    <div class="col-xs-4"></div>
                    <center>
                        <div class="col-xs-4">
                          <br><br>
                          <input type="submit" value="submit" name="submit" class="btn btn-primary" style="width:44%;">
                          <a href="<?php echo base_url(); ?>sales" class="btn btn-danger" style="width:44%;">Cancel</a>
                          <br><br>
                        </div>
                    </center>
                    <div class="col-xs-4"></div>
                  </form>
            </div>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
</section>

<script type="text/javascript">
  function uservalidate()
  {
    var uname = document.getElementById("username").value;
    var umail = document.getElementById("useremail").value;
    if(uname=="" || umail=="")
    {
      alert("Please fill out all the fields");
      return false;
    }  
    var p1 = document.getElementById("userpassword").value;
    var p2 = document.getElementById("userconfirmpassword").value;
    if(p1!==p2)
    {
      alert("Your Passwords does not match!");
      return false;
    }  
  }
</script>

<script>
    $("#userstatusswitch").change(function(){
        
        if($("#userstatusswitch").prop("checked") == true){
            $("#userstatus").val('1');
        } else {
            $("#userstatus").val('0');
        }
        
    });
</script>
