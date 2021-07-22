<style>
    .formfield {
        display:none;
    }
</style>

<section class="box-body">
    <br>
    <div class="box box-danger">
      <div class="box-header with-border">
      </div>
      <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                  <form action="<?php echo base_url();?>/user/user_profile_save" method="POST" enctype="multipart/form-data">
                      <input type="hidden" name="user_id" value="<?php echo $user_profile['login_id']; ?>">
                    <div class="col-xs-4">
                      <label>Firstname</label>
                      <input type="text" class="form-control viewfield" value="<?php if($user_profile['first_name'] != '') { echo $user_profile['first_name']; } else { echo 'Nil'; } ?>" readonly>
                      <input type="text" name="firstname" id="firstname" class="form-control formfield" value="<?php echo $user_profile['first_name']; ?>" required>
                    </div>
                    <div class="col-xs-4">
                      <label>Lastname</label>
                      <input type="text" class="form-control viewfield" value="<?php if($user_profile['last_name'] != '') { echo $user_profile['last_name']; } else { echo 'Nil'; } ?>" readonly>
                      <input type="text" name="lastname" id="lastname" class="form-control formfield" value="<?php echo $user_profile['last_name']; ?>" required>
                    </div>
                    <div class="col-xs-4">
                      <label>Role</label>
                      <input type="text" class="form-control viewfield" value="<?php if($user_profile['role_name'] != '') { echo $user_profile['role_name']; } else { echo 'Nil'; } ?>" readonly>
                      <select name="userrole" id="userrole" class="form-control formfield" value="<?php echo $user_profile['role_name']; ?>" required>
                          <?php if($this->session->userdata('user_role') == 1) { ?>
                              <?php foreach($roles as $role) { ?>
                                <option <?php if($role['role_id'] == $user_profile['role_id']) { ?> selected <?php } ?> value="<?php echo $role['role_id']; ?>"> <?php echo $role['role_name']; ?> </option>
                              <?php } ?>
                          <?php } else { ?>
                              <?php $roleid = ''; $rolename = ''; ?>
                              <?php foreach($roles as $role) { ?>
                                <?php if($role['role_id'] == $user_profile['role_id']) { $roleid = $role['role_id']; $rolename = $role['role_name']; } ?>
                              <?php } ?>
                              <option value="<?php echo $roleid; ?>"> <?php echo $rolename; ?> </option>
                          <?php } ?>
                      </select>
                    </div>
                    <br><hr><br>
                    <div class="col-xs-4">
                      <label>Email</label>
                      <input type="mail" class="form-control viewfield" value="<?php if($user_profile['email'] != '') { echo $user_profile['email']; } else { echo 'Nil'; } ?>" readonly>
                      <input type="mail" name="useremail" id="useremail" class="form-control formfield" value="<?php echo $user_profile['email']; ?>" required>
                    </div>
                    <div class="col-xs-4">
                      <label>Mobile</label>
                      <input type="number" class="form-control viewfield" value="<?php if($user_profile['mobile'] != '') { echo $user_profile['mobile']; } else { echo 'Nil'; } ?>" readonly>
                      <input type="number" name="usermobile" id="usermobile" class="form-control formfield" value="<?php echo $user_profile['mobile']; ?>">
                    </div>
                    <div class="col-xs-4">
                      <label>Skype</label>
                      <input type="text" class="form-control viewfield" value="<?php if($user_profile['skype'] != '') { echo $user_profile['skype']; } else { echo 'Nil'; } ?>" readonly>
                      <input type="text" name="userskype" id="userskype" class="form-control formfield" value="<?php echo $user_profile['skype']; ?>">
                    </div>
                    <br><hr><br>
                    <div class="col-xs-4">
                      <label>Date of Birth</label>
                      <input type="text" class="form-control viewfield" value="<?php if($user_profile['date_of_birth'] != '') { echo $user_profile['date_of_birth']; } else { echo 'Nil'; } ?>" readonly>
                      <input type="date" name="dateofbirth" id="dateofbirth" class="form-control formfield" value="<?php echo $user_profile['date_of_birth']; ?>">
                    </div>
                    <div class="col-xs-4">
                      <label>Age</label>
                      <input type="text" class="form-control viewfield" value="<?php if($user_profile['age'] != '') { echo $user_profile['age']; } else { echo 'Nil'; } ?>" readonly>
                      <input type="number" name="age" id="age" class="form-control formfield" value="<?php echo $user_profile['age']; ?>">
                    </div>
                    <div class="col-xs-4">
                      <label>Gender</label>
                      <input type="text" class="form-control viewfield" value="<?php if($user_profile['gender'] != '') { echo $user_profile['gender']; } else { echo 'Nil'; } ?>" readonly>
                      <select name="gender" id="gender" class="form-control formfield">
                          <option value=""> ~ Select Gender ~ </option>
                            <option <?php if($user_profile['gender'] == 'Male') { ?> selected <?php } ?> value="Male"> Male </option>
                            <option <?php if($user_profile['gender'] == 'Female') { ?> selected <?php } ?> value="Female"> Female </option>
                            <option <?php if($user_profile['gender'] == 'Others') { ?> selected <?php } ?> value="Others"> Others </option>
                      </select>
                    </div>
                    <br><hr><br>
                    
                    <div class="col-xs-12">
                        <center>
                            <div class="col-xs-4"></div>
                            <div class="col-xs-4">
                                <h4><b>Profile Picture  </b></h4>
                                <?php if($user_profile['file_profilepicture'] != '') { ?>
                                
                                    <img id="previewprofile" src="<?php echo base_url(); ?><?php echo $user_profile['file_profilepicture']; ?>" style="width:50%; border-radius:12%; border:2px solid #e2e2e2;"/>
                              
                                <?php } else { ?>
                                   
                                    <img id="previewprofile" src="<?php echo base_url(); ?>assets/profile_pictures/no_file.jpg" style="width:50%; border-radius:12%; border:2px solid #e2e2e2;"/>
                               
                                <?php } ?>
                                <br><br>
                                <input type='file' name="file_profilepicture" class="form-control formfield" onchange="readURL(this);" />
                            </div>
                            <div class="col-xs-4"></div>
                        </center>
                    </div>
                    
                    <script>
                        function readURL(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();
                                
                                reader.onload = function (e) {
                                    $('#previewprofile').attr('src', e.target.result);
                                };
                
                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                    </script>
                    
                    <div class="col-xs-4"></div>
                    <center>
                        <div class="col-xs-4">
                          <br><br>
                          <span class="btn btn-primary viewfield" id="editprofilebutt">Edit Profile</span>
                          <input class="btn btn-success formfield" type="submit" name="submit" value="Save" style="display:none;" />
                          <span class="btn btn-danger formfield" id="cancelprofilebutt">Cancel</span>
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
    $(document).ready(function(){
        $(".formfield").hide();
        $(".viewfield").show();
        
        $("#editprofilebutt").click(function(){
            $(".viewfield").hide();
            $(".formfield").show();
        });
        
        $("#cancelprofilebutt").click(function(){
            $(".formfield").hide();
            $(".viewfield").show();
        });
        
    });
</script>