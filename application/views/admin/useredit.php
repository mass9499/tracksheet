
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<section class="box-body">
    <br>
    <div class="box box-danger">
      <div class="box-header with-border">
      </div>
      <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                  <form action="<?php echo base_url();?>/user/editusersave" method="POST">
                      <input type="hidden" name="user_id" value="<?php echo $user['login_id']; ?>">
                    <div class="col-xs-6">
                      <label>Firstname</label>
                      <input type="text" name="firstname" id="firstname" class="form-control" value="<?php echo $user['first_name']; ?>" placeholder="Enter Firstname" required >
                    </div>
                    <div class="col-xs-6">
                      <label>Lastname</label>
                      <input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo $user['last_name']; ?>" placeholder="Enter Lastname" required >
                    </div>
                    <br><hr><br>
                    <div class="col-xs-6">
                      <label>Email</label>
                      <input type="mail" name="useremail" id="useremail" class="form-control" value="<?php echo $user['email']; ?>" placeholder="Enter Email" required>
                    </div>
                    <div class="col-xs-6">
                      <label>Role</label>
                      <select name="userrole" id="userrole" class="form-control">
                          <option> ~ Select Role ~ </option>
                          <?php foreach($roles as $role) { ?>
                            <option <?php if($user['role'] == $role['role_id']) { ?> selected <?php } ?> value="<?php echo $role['role_id']; ?>"> <?php echo $role['role_name']; ?> </option>
                          <?php } ?>
                      </select>
                    </div>
                    <br><hr><br>
                    <div class="col-xs-6">
                      <label>Password</label>
                      <input type="password" name="userpassword" id="userpassword" class="form-control" value="<?php echo $user['password']; ?>" placeholder="Enter password" required>
                    </div>
                    <div class="col-xs-6">
                      <label>Re - enter password</label>
                      <input type="password" name="userconfirmpassword" id="userconfirmpassword" class="form-control" value="<?php echo $user['password']; ?>" placeholder="Enter password again" required>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-4"></div>
                        <center>
                            <div class="col-xs-4">
                                <br><br>
                                <label> Status : </label>
                                <input type="checkbox" id="userstatusswitch" data-toggle="toggle" data-on="Enabled" data-off="Disabled" data-offstyle="danger" <?php if($user['status'] == 1) { ?> checked <?php } ?>>
                                <input type="hidden" id="userstatus" name="userstatus" value="<?php echo $user['status']; ?>">
                            </div>
                        </center>
                        <div class="col-xs-4"></div>
                    </div>
                    
                    <div class="col-xs-4"></div>
                 <!--    <center> -->
                        <div class="col-xs-4">
                          <br><br>
                          <input type="submit" value="submit" name="submit" class="btn btn-primary" style="width:44%;">
                          <a href="<?php echo base_url(); ?>user" class="btn btn-danger" style="width:44%;">Cancel</a>
                          <br><br>
                        </div>
                   <!--  </center> -->
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
