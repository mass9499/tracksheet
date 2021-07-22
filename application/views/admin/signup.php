<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Web | Log in</title>
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  
  <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  
  <link rel="stylesheet" href="<?php echo base_url();?>dist/css/AdminLTE.min.css">
  
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<style>
    .has-feedback .form-control {
    padding-right: 24.5px;
}
.form-control-feedback {

    text-align: inherit;
}
</style>


<body class="hold-transition login-page" style="background-color:#f9f9f9;">

<div class="login-box">
    <center><font style="color:red;"><?php if($this->session->flashdata('login_recovery_success') != '') { echo "<b style='color:green;font-size:16px;'>".$this->session->flashdata('login_recovery_success').'</b><br><br>'; } ?></font></center>
	<div class="text-center"><img src="<?php echo base_url('assets/afluence_logo.png'); ?>" style="width:23%;margin-top:0px;height:auto;background-color:#fff;border-radius:50px;opacity:0.9;"></div>

  <div class="login-logo">
    <a href="#"><b>Web</b>Portal</a>
  </div>
  
  <!-- /.login-logo -->
  <div class="login-box-body" style="background-color:rgba(188, 188, 188, 0.8);border-radius:6px;">
    <h3 class="login-box-msg" style="font-style:stencil;">Sign Up</h3>
    <center><font style="color:red;"><?php echo $this->session->flashdata('msg'); ?></font></center>
    <center><font style="color:red;"><?php echo $this->session->flashdata('expmsg'); ?></font></center>
    
    <form action="<?php echo base_url();?>login/signup_save" method="post">
        
                        <div class="form-group has-feedback">
                           
                            <div class="row">  
                                
                                <div class="col-md-6">    
                                    <input type="text" name="first_name" class="form-control" placeholder="First name" style="border-radius:2px;" required>
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                    <font style="color:red;"><?php echo form_error('first_name'); ?></font>
                                </div>
                                
                                <div class="col-md-6">    
                                    <input type="text" name="last_name" class="form-control" placeholder="Last name" style="border-radius:2px;" required>
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                    <font style="color:red;"><?php echo form_error('last_name'); ?></font>
                                </div>    
                    		
                    		         
                            </div>
                            
                        </div>
                          
                          <div class="form-group has-feedback">
                              
                            <input type="email" name="email" class="form-control" placeholder="Email" style="border-radius:7px;" required>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            <font style="color:red;"><?php echo form_error('email'); ?></font>
                            
                          </div>
                          
                          
                          <div class="form-group has-feedback">
                              
                            <div class="row"> 
                                <div class="col-md-4">
                                    <center>   
                                      <input type="radio" id="" name="gender" value="Male" checked>
                                      <label for="male"> Male </label>
                                    </center>    
                                </div>
                                
                                <div class="col-md-4">
                                    <center>
                                          <input type="radio" id="" name="gender" value="Female">
                                          <label for="female">Female</label>
                                      </center>  
                                </div> 
                                
                                <div class="col-md-4">
                                    <center>
                                          <input type="radio" id="" name="gender" value="Others">
                                          <label for="female">Others</label>
                                      </center>  
                                </div>                          
                            </div>
                            <font style="color:red;"><?php echo form_error('gender'); ?></font>
                         
                          </div>  
                          
                          <div class="form-group has-feedback">
                              <!--<input type="text"  required>-->
                              
                            <input type="text" name="mobilenumber" class="form-control" placeholder="mobile" minlength="10" maxlength="10" onkeypress="return valinumber(event)" style="border-radius:7px;" required>
                            <span class="glyphicon glyphicon-phone-alt form-control-feedback"></span>
                            <font style="color:red;"><?php echo form_error('mobilenumber'); ?></font>
                         
                          </div>
                          
                          <div class="form-group has-feedback">
                              
                            <input type="text" name="skypeid" class="form-control" placeholder="Skype" style="border-radius:7px;" required>
                            <span class="glyphicon glyphicon-phone-alt form-control-feedback"></span>
                            <font style="color:red;"><?php echo form_error('skype'); ?></font>
                         
                          </div>
                          
                          <div class="form-group has-feedback">
                              
                            <input type="password" name="password" class="form-control" placeholder="Password" style="border-radius:7px;" required>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            <font style="color:red;"><?php echo form_error('password'); ?></font>
                    		
                          </div>
                          
                          <input type="hidden" name="role" value="client">
                          
                          <br>
                    
                          <div class="row">
                           
                            <div class="col-xs-8">
                                <!--<span id="forgotpassbutt" class="btn" data-toggle="modal" data-target="#forgorpass"><b style="color:#aa0a0a;font-size:16px;">Forgot Password ?</b></span>-->
                                 <a href="<?php echo base_url(); ?>login " class="btn"><b style="color:white;font-size:16px;">Already have an account </b></a>
                             </div>
                            <div class="col-xs-4">
                              <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat" style="border-radius:7px;">Sign In </button>
                            </div>
                          
                          </div> 
                      
                          </div><br>
                          
    </form>


 
  </div>
  <!-- /.login-box-body -->
</div>

	 	/*mobile number validation*/
 
                                   
<script>
    function valinumber(evt) {
      var theEvent = evt || window.event;
    
      // Handle paste
      if (theEvent.type === 'paste') {
          key = event.clipboardData.getData('text/plain');
      } else {
      // Handle key press
          var key = theEvent.keyCode || theEvent.which;
          key = String.fromCharCode(key);
      }
      var regex = /[0-9]|\./;
      if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
      }
    }
</script>



</body>
</html>