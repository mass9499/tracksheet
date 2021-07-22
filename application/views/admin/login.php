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
<!--body class="hold-transition login-page" style="background-image:url(<?php echo base_url('assets/brand_images/branding-elements.png')?>); background-size:52% auto; width:100%; height:auto;"-->

<body class="hold-transition login-page" style="background-color:#f9f9f9;">

<div class="login-box">
    <center><font style="color:red;"><?php if($this->session->flashdata('login_recovery_success') != '') { echo "<b style='color:green;font-size:16px;'>".$this->session->flashdata('login_recovery_success').'</b><br><br>'; } ?></font></center>
	<div class="text-center"><img src="<?php echo base_url('assets/aplogo.png'); ?>" style="width:35%;margin-top:0px;height:auto;background-color:#fff;border-radius:10px;opacity:0.9;"></div>

  <div class="login-logo">
    <a href="#"><b>Web</b>Portal</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="background-color:rgba(188, 188, 188, 0.8);border-radius:6px;">
    <h3 class="login-box-msg" style="font-style:stencil;">LogIn</h3>
    <center><font style="color:red;"><?php echo $this->session->flashdata('msg'); ?></font></center>
    <center><font style="color:red;"><?php echo $this->session->flashdata('expmsg'); ?></font></center>
    
    <form action="<?php echo base_url();?>login/checklogin" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username" style="border-radius:7px;">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		<font style="color:red;"><?php echo form_error('username'); ?></font>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" style="border-radius:7px;">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
		<font style="color:red;"><?php echo form_error('password'); ?></font>
      </div>
      <br>
      
      <div class="row">
        <div class="col-xs-8">
            <span id="forgotpassbutt" class="btn" data-toggle="modal" data-target="#forgorpass"><b style="color:#aa0a0a;font-size:16px;">Forgot Password ?</b></span>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat" style="border-radius:7px;">Sign In </button>
        </div>
        <!-- /.col -->
        
      </div><br>
      
        <center>  <a href="<?php echo base_url(); ?>login/signup" class="btn" ><b style="color:white;font-size:16px;">Create a Account</b></a> </center>
    
    </form>

  <!-- Modal -->
  <div class="modal fade" id="forgorpass" role="dialog">
    <div class="modal-dialog" style="margin-top:10%;width:30%;">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:#C4C4C4; border-top-left-radius:6px; border-top-right-radius:6px;">
          <button type="button" class="close" data-dismiss="modal" style="color:maroon;">&times;</button>
          <h4 class="modal-title"><b>Login Recovery</b></h4>
        </div>
        <div class="modal-body" style="background-color:#F9F9F9;">
          <form  name="forgotpasswordform" method="POST" action="<?php echo base_url(); ?>user/recover_login">
            <br>
            <center><font style="color:red;"><?php if($this->session->flashdata('login_recovery_failed') != '') { echo "<span style='color:maroon;font-size:14px;'>".$this->session->flashdata('login_recovery_failed').'</span><br><br>'; } ?></font></center>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" placeholder="Enter registered Email">
                </div>
                <div class="col-sm-1"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-1"></div>
                <!--div class="col-sm-6"></div-->
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-primary form-control" name="submit">
                </div>
                <div class="col-md-1"></div>
            </div>
            <br>
          </form>
        </div>
        <div class="modal-footer" style="background-color:#C4C4C4; border-bottom-left-radius:6px; border-bottom-right-radius:6px;">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 
  </div><br><br>
  
  <!-- /.login-box-body -->
</div>

<!-- /.login-box -->
<div class="text-center">
  <!--a class="btn btn-app-store" href="<?php echo base_url();?>GPconnect.apk"download><i class="fa fa-play faa-horizontal animated"></i><span class="small">Download App</span> <span class="big">Here</span></a-->
  
  <!--div class="pull-right" style="margin-top:0.3%;margin-right:0.2%;"><br>
      <img src="<!--?php echo base_url('assets/brand_images/image001.png'); ?> ">
  </div-->
  
</div>


<!--script src="<?php echo base_url();?>plugins/jQuery/jquery-3.1.1.min.js"></script>

<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>

<script src="<?php echo base_url();?>plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script-->

<?php if($this->session->flashdata('login_recovery_failed') != '') { ?>
    <script>
        $(document).ready(function(){  
            $("#forgotpassbutt").click();
        });
    </script>
<?php } ?>

</body>
</html>