<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <script type="text/javascript" src="<?php echo base_url(); ?>dist/jspdf.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Acaadpro | <?php echo $title;?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css"/>
<style>
    .content-body {
        background-color:#fff;
    }
    
    .content-wrapper {
        min-height:1200px !important;
    }
    
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.js"></script>
<?php 
    $this->load->helper('common_helper');
    $roleid = $this->session->userdata('user_role');
    $upermission = get_screen_permission($roleid);
?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php date_default_timezone_set('Asia/Kolkata'); ?>
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>circular" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>O</b>M</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Office</b> Management</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                
                <ul class="menu">
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url('assets/aplogomini.png'); ?>" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url('assets/aplogomini.png'); ?>" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url('assets/afluence_logo.png'); ?>" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url('assets/afluence_logo.png'); ?>" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url('assets/afluence_logo.png'); ?>" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          
          
          
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
               
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li
          
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
          
                <ul class="menu">
                  
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  
                  <li>
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  
                  <li>
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  
                  <li>
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li-->
          
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/aplogomini.png'); ?>" class="user-image" alt="User Image" style="border:1px solid #fff;">
              <span class="hidden-xs"><?php echo $this->session->userdata('user_name'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/aplogomini.png'); ?>" class="img-circle" alt="User Image" style="background-color:transparent;">

                <p>
                  <?php echo $this->session->userdata('user_name'); ?>
                  <!--small>Member since Nov. 2019</small-->
                </p>
              </li>
            
              <!-- Menu Footer-->
              <li class="user-footer">
                  <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <a href="<?php echo base_url(); ?>user/user_profile" class="btn btn-default btn-flat" style="border-radius:2px;">Profile</a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4 text-center">
                        <?php if($this->session->userdata('user_role') == '1') { ?>
                            <a href="<?php echo base_url(); ?>user/roles" class="btn btn-default btn-flat" style="border-radius:2px;">Roles</a>
                        <?php } ?>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                      <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat" style="border-radius:2px;">Sign out</a>
                    </div>
                  </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!--li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li-->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/aplogomini.png'); ?>" class="img-circle" alt="User Image" style="width:45px; height:45px; padding:5px;">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('user_name'); ?> </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!--form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form-->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" style="background-color:#3C8DBC;color:#fff;height:50px;font-size:20px;"><center><b>MAIN NAVIGATION</b></center></li>
        
    <?php if( $this->session->userdata('user_role') != 23 AND $this->session->userdata('user_role') != 24  ) { ?>
        <li class="<?php echo ($title == 'Circular') ? "active":""; ?>"><a href="<?php echo base_url();?>circular"><i class="fa fa-bell"></i> Circular </a></li>
    
    <?php } ?>    
        <?php if(getview('projects') == '1') { ?>
            <li class="<?php echo ($title == 'Projects') ? "active":""; ?>"><a href="<?php echo base_url();?>project"><i class="fa fa-address-card"></i> Projects </a></li>
        <?php } ?>
        
        
       
         <?php if(getview('projects') == '1') { ?>
            <li class="<?php echo ($title == 'Discussions') ? "active":""; ?>"><a href="<?php echo base_url();?>discussions"><i class="fa fa-users"></i> Minutes of Meeting </a></li>
        <?php } ?>
        
        
      <!--   <?php if(getview('projects') == '1') { ?>
            <li class="<?php echo ($title == 'Task Planner') ? "active":""; ?>"><a href="<?php echo base_url();?>project/task_planner_projects"><i class="fa fa-address-card"></i> Task Planner </a></li>
        <?php } ?> -->
        
     <!--    <?php if(getview('projects') == '1') { ?>
            <li class="<?php echo ($title == 'Quotation/Invoice') ? "active":""; ?>"><a href="<?php echo base_url();?>quationandinvoice"><i class="fa fa-address-card"></i> Quotation/Invoice </a></li>
        <?php  } ?> -->
        
      <!--    <?php if(getview('projects') == '1') { ?>
            <li class="<?php echo ($title == 'client View') ? "active":""; ?>"><a href="<?php echo base_url();?>quationandinvoice/requirement"><i class="fa fa-address-card"></i> Requirements </a></li>
        <?php  } ?>
 -->
        
        
        <?php if(getview('users') == '1') { ?>
            <li class="<?php echo ($title == 'Users') ? "active":""; ?>"><a href="<?php echo base_url();?>user"><i class="fa fa-users"></i> Users </a></li>
        <?php } ?>
        
        <?php if(getview('tasks') == '1') { ?>
        <li class="<?php echo ($title == 'Tasks') ? "active":""; ?>"><a href="<?php echo base_url();?>tasks"><i class="fa fa-list"></i> Tasks </a></li>
        <?php } ?>
        
         <?php if($this->session->userdata('user_role') == 24  ) { ?>
        
             <li class="<?php echo ($title == 'requirement') ? "active":""; ?>"><a href="<?php echo base_url();?>requirement"><i class="fa fa-list"></i> Requirement </a></li>
             <li class="<?php echo ($title == 'progress Bar') ? "active":""; ?>"><a href="<?php echo base_url();?>requirement/progressbarlist"><i class="fa fa-list"></i> progress Bar </a></li>
       
        <?php } ?>
        
        <?php  // if(getview('bugsheets') == '1') { ?>
    <?php if( $this->session->userdata('user_role') != 23 AND $this->session->userdata('user_role') != 24 AND $this->session->userdata('user_role') != 25 ) { ?>
       <li class="<?php echo ($title == 'Bug Sheets') ? "active":""; ?>"><a href="<?php echo base_url();?>bugsheets"><i class="fa fa-list"></i> Bug Sheets </a></li> 

        <li class="<?php echo ($title == 'Google Sheets') ? "active":""; ?>"><a href="<?php echo base_url();?>googlesheets"><i class="fa fa-list"></i> Google Sheets </a></li>
    <?php } ?>
        <?php // } ?>
        
       <?php { ?>
            <li class="<?php echo ($title == 'Sales Updates') ? "active":""; ?>"><a href="<?php echo base_url();?>sales"><i class="fa fa-users"></i> Sales Activity </a></li>
        <?php } ?>
        
        <?php if(getview('leaves') == '1') { ?>
        <li class="<?php echo ($title == 'Leaves') ? "active":""; ?>"><a href="<?php echo base_url();?>leaves"><i class="fa fa-user-times"></i> Leaves </a></li>
        <?php } ?>
          
        <?php if(getview('leave_types_master') == '1') { ?>
            <li class="<?php echo ($title == 'Leave Types') ? "active":""; ?> treeview">
                <a href="#" class="">
                <i class="fa fa-cog"></i> <span>MASTERS</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                    <?php if(getview('leave_types_master') == '1') { ?>
                    
                        <li class="<?php echo ($title == 'Leave Types') ? "active":""; ?>"><a href="<?php echo base_url();?>masters/leave_types">&nbsp &nbsp &nbsp &nbsp <i class="fa fa-leanpub"></i> <span>Leave Types</span>  </a></li>
                    
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>
        
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="border-bottom:2px solid silver;">
      <h1>
        <?php echo $title; ?>
        <small><?php echo $subtitle;?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#" style="color:grey;"><?php echo $title; ?></a></li>
        <!--<li class="active">Dashboard</li>-->
      </ol>
      <br>
    </section>
