<section class="box-body">
    <br>
    <div class="box box-danger">
      <div class="box-header with-border">
      </div>
      <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                  <form action="<?php echo base_url();?>/user/adddusersave" method="POST" onsubmit="return uservalidate()">
                    <div class="col-xs-6">
                      <label>Firstname</label>
                      <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter Firstname" required >
                    </div>
                    <div class="col-xs-6">
                      <label>lastname</label>
                      <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter Lastname" required>
                    </div>
                    <div class="col-xs-6">
                      <label>Email</label>
                      <input type="mail" name="useremail" id="useremail" class="form-control" placeholder="Enter Email" required>
                    </div>
                    <div class="col-xs-6">
                      <label>Role</label>
                      <select name="userrole" id="userrole" class="form-control">
                          <option> ~ Select Role ~ </option>
                          <?php foreach($roles as $role) { ?>
                            <option value="<?php echo $role['role_id']; ?>"> <?php echo $role['role_name']; ?> </option>
                          <?php } ?>
                      </select>
                    </div>
                    <br><br><br><br><br>
                    <div class="col-xs-6">
                      <label>Password</label>
                      <input type="password" name="userpassword" id="userpassword" class="form-control" placeholder="Enter password" required>
                    </div>
                    <div class="col-xs-6">
                      <label>Re - enter password</label>
                      <input type="password" name="userconfirmpassword" id="userconfirmpassword" class="form-control" placeholder="Enter password again" required>
                    </div>
                    <div class="col-xs-4"></div>
                    <center>
                        <div class="col-xs-4">
                          <br><br>
                          <input type="submit" value="submit" name="submit" class="btn btn-primary" style="width:44%;">
                          <a href="<?php echo base_url(); ?>user" class="btn btn-danger" style="width:44%;">Cancel</a>
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