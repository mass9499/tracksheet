<style>
    .colorpickericon {
        width:20px;
        border-radius:2px;   
    }
    
    .bootstrap-tagsinput > input {
        border-radius:3px;
    }
    
    #footertabs > li:hover{
        background-color:#fff;
    }
    
    .form-control {
        border:0px solid transparent !important;
        background-color:transparent !important;
        border-radius:7px !important;
    }
</style>

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/third_party/assets/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/third_party/assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/third_party/assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/third_party/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/third_party/assets/vendor/pnotify/pnotify.custom.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/third_party/assets/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/third_party/assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/third_party/assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="<?php echo base_url(); ?>assets/third_party/assets/vendor/modernizr/modernizr.js"></script>
      
    <div class="row">
      <div class="col-lg-12">
          <form name="createprojectform" class="form-horizontal" novalidate="novalidate" method="POST" action="<?php echo base_url(); ?>project/project_edit_save">
        <section class="panel form-wizard" id="w1">
          <header class="panel-heading top-destination">
            <div class="panel-actions">
              <a href="#" class="fa fa-caret-down"></a>
              <!--a href="#" class="fa fa-times"></a-->
            </div>
    
            <h2 class="panel-title">Sales Details Form</h2>
          </header>
          <div class="panel-body panel-body-nopadding">
            
              <div class="tab-content"><br>
                    
                    <div class="col-md-12">
                
                        <div class="row"><br>
                                            <div class="col-md-12">
                                                <div class="col-md-4">
                                                    <h5><b>Date:</b></h5>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                  <div class="input-group" style="width:100%;">     
                                                    <input type="" class="form-control" name="projectname" id="projectname" value="<?php echo $project_data['date']; ?>" placeholder="Enter Project Name" readonly>
                                                  </div><br> 
                                                </div>
                                                <br> 
                                            </div>
                                          
                                           
                                         <div class="col-md-12">
                                                <div class="col-md-4">
                                                    <h5><b>POA of the Day:</b></h5>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                  <div class="input-group" style="width:100%;">     
                                                    <input type="text" class="form-control" name="projectname" id="projectname" value="<?php echo $project_data['poa']; ?>" placeholder="Enter Project Name" readonly>
                                                  </div><br> 
                                                </div>
                                            </div> 


                                            <div class="col-md-12">
                                                <div class="col-md-4">
                                                    <h5><b>Institution Name:</b></h5>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                  <div class="input-group" style="width:100%;">     
                                                    <input type="text" class="form-control" name="projectname" id="projectname" value="<?php echo $project_data['institution']; ?>" placeholder="Enter Project Name" readonly>
                                                  </div><br> 
                                                </div>
                                            </div>


                                             <div class="col-md-12">
                                                <div class="col-md-4">
                                                    <h5><b>Contact Person Name:</b></h5>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                  <div class="input-group" style="width:100%;">     
                                                    <input type="text" class="form-control" name="projectname" id="projectname" value="<?php echo $project_data['contactperson']; ?>" placeholder="Enter Project Name" readonly>
                                                  </div><br> 
                                                </div>
                                            </div> 


                                            <div class="col-md-12">
                                                <div class="col-md-4">
                                                    <h5><b>Contact Person Designation:</b></h5>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                  <div class="input-group" style="width:100%;">     
                                                    <input type="text" class="form-control" name="projectname" id="projectname" value="<?php echo $project_data['designation']; ?>" placeholder="Enter Project Name" readonly>
                                                  </div><br> 
                                                </div>
                                            </div>


                                             <div class="col-md-12">
                                                <div class="col-md-4">
                                                    <h5><b>Contact Person Phone No:</b></h5>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                  <div class="input-group" style="width:100%;">     
                                                    <input type="text" class="form-control" name="projectname" id="projectname" value="<?php echo $project_data['phone']; ?>" placeholder="Enter Project Name" readonly>
                                                  </div><br> 
                                                </div>
                                            </div>

                                             <div class="col-md-12">
                                                <div class="col-md-4">
                                                    <h5><b>Mode of Communication:</b></h5>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                  <div class="input-group" style="width:100%;">     
                                                    <input type="text" class="form-control" name="projectname" id="projectname" value="<?php echo $project_data['mode']; ?>" placeholder="Enter Project Name" readonly>
                                                  </div><br> 
                                                </div>
                                            </div> 


                                            <div class="col-md-12">
                                                <div class="col-md-4">
                                                    <h5><b>Note(Describe about the discussion):</b></h5>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                  <div class="input-group" style="width:100%;">     
                                                    <input type="text" class="form-control" name="projectname" id="projectname" value="<?php echo $project_data['notes']; ?>" placeholder="Enter Project Name" readonly>
                                                  </div><br> 
                                                </div>
                                            </div> 


                                            <div class="col-md-12">
                                                <div class="col-md-4">
                                                    <h5><b>Potentional Conversion:</b></h5>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                  <div class="input-group" style="width:100%;">     
                                                    <input type="text" class="form-control" name="projectname" id="projectname" value="<?php echo $project_data['potentional']; ?>" placeholder="Enter Project Name" readonly>
                                                  </div><br> 
                                                </div>
                                            </div> 


                                            <div class="col-md-12">
                                                <div class="col-md-4">
                                                    <h5><b>Follow up Date:</b></h5>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                  <div class="input-group" style="width:100%;">     
                                                    <input type="text" class="form-control" name="projectname" id="projectname" value="<?php echo $project_data['followupdate']; ?>" placeholder="Enter Project Name" readonly>
                                                  </div><br> 
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="col-md-4">
                                                    <h5><b>Number Follow ups:</b></h5>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                  <div class="input-group" style="width:100%;">     
                                                    <input type="text" class="form-control" name="projectname" id="projectname" value="<?php if(isset($counts)){ echo $counts; } ?>" placeholder="Number Follow ups" readonly>
                                                  </div><br> 
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <div class="col-md-4">
                                                    <h5><b>Next day POA:</b></h5>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                  <div class="input-group" style="width:100%;">     
                                                    <input type="text" class="form-control" name="projectname" id="projectname" value="<?php echo $project_data['nextpoa']; ?>" placeholder="Enter Project Name" readonly>
                                                  </div><br> 
                                                </div>
                                            </div>
                                        
 

                  <center><a href="<?php echo base_url(); ?>sales" class="btn btn-danger" style="border-radius:5px;">Back</a><br> </center><br> 
                                
          </div>
        </section>
        </form>
      </div>
    </div>
        

        <script>
            function nextt()
            {
                console.log("clicked");
            }
        </script>

    <!-- Vendor -->
    <script src="<?php echo base_url(); ?>assets/third_party/assets/vendor/jquery/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/third_party/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="<?php echo base_url(); ?>assets/third_party/assets/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/third_party/assets/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="<?php echo base_url(); ?>assets/third_party/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/third_party/assets/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="<?php echo base_url(); ?>assets/third_party/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    
    <!-- Specific Page Vendor -->
    <script src="<?php echo base_url(); ?>assets/third_party/assets/vendor/jquery-validation/jquery.validate.js"></script>
    <script src="<?php echo base_url(); ?>assets/third_party/assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
    <script src="<?php echo base_url(); ?>assets/third_party/assets/vendor/pnotify/pnotify.custom.js"></script>
    
    <!-- Theme Base, Components and Settings -->
    <script src="<?php echo base_url(); ?>assets/third_party/assets/javascripts/theme.js"></script>
    
    <!-- Theme Custom -->
    <script src="<?php echo base_url(); ?>assets/third_party/assets/javascripts/theme.custom.js"></script>
    
    <!-- Theme Initialization Files -->
    <script src="<?php echo base_url(); ?>assets/third_party/assets/javascripts/theme.init.js"></script>


    <!-- Examples -->
    <script src="<?php echo base_url(); ?>assets/third_party/assets/javascripts/forms/examples.wizard.js"></script>
    





<style>
      
    .input-group-addon {
        background-color:#EEEEEE !important;
        border-top-left-radius:3px !important;
        border-bottom-left-radius:3px !important;
    }
    
    .input-group > span, .input-group > input, .input-group > select {
        box-shadow:2px 2px 2px silver !important;
    }
    
    
    
    .referalsiteswitch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
        margin-top:-20px;  
        border-radius:4px;
    }
    
    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }

    .switch input { 
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }

    input:checked + .slider {
      background-color: #2196F3;
    }

    input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }

    .slider.round {
      border-radius: 34px;
    }

    .slider.round:before {
      border-radius: 50%;
    }
    </style>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
   <script src="main.js"></script>
  </head>
  <body>
    
    
    
    <script type="text/javascript">
      jQuery("#woocommerce").click(function(){
  console.log("clicked")
  var checker = document.getElementById("woocommerce");
  if(checker.checked == true)
  {
    console.log("checked");
    //jQuery(".wootab").html('<div class="wsection"><span class="accordion"><b>Product Page</b></span><br><br><div class="panel"><div class="row"><div class="col-md-1"></div><div class="col-md-5"><label> Design URL : </label><input type="text" name="designurl"></div><div class="col-md-6"><label style="float:left;margin-right: 3px;">Design Image : </label><input type="file" accept="image/x-png,image/gif,image/jpeg" /></div><br></div></div></div><div class="wsection"><span class="accordion"><b>Shop Page</b></span><br><br><div class="panel"><div class="row"><div class="col-md-1"></div><div class="col-md-5"><label> Design URL : </label><input type="text" name="designurl"></div><div class="col-md-6"><label style="float:left;margin-right: 3px;">Design Image : </label><input type="file" accept="image/x-png,image/gif,image/jpeg" /></div><br></div></div></div><div class="wsection"><span class="accordion">Cart and Checkout Page</span><br><br><div class="panel"><div class="row"><div class="col-md-1"><label class="switch"><input type="checkbox" id="woocommerce"><span class="slider"></span></label></div><div class="col-md-2" style="border-right: 1px solid black;"><label>Use Default</label></div><div class="col-md-4" style="border-right: 1px solid black;"><label> Design URL : </label><input type="text" name="designurl"></div><div class="col-md-5"><label style="float:left;margin-right: 3px;">Design Image : </label><input type="file" accept="image/x-png,image/gif,image/jpeg" /></div><br></div></div></div>');
    jQuery(".wootab").html('<div class="wsection"><span class="accordion"><b>Product Page</b></span><br><br><div class="panel"><div class="row"><div class="col-md-1"></div><div class="col-md-5"><label> Design URL : </label><input type="text" name="wooproductpageurl"></div><div class="col-md-6"><label style="float:left;margin-right: 3px;">Design Image : </label><input type="file" name="wooproductpageimage" accept="image/x-png,image/gif,image/jpeg" /></div><br></div></div></div><div class="wsection"><span class="accordion"><b>Shop Page</b></span><br><br><div class="panel"><div class="row"><div class="col-md-1"></div><div class="col-md-5"><label> Design URL : </label><input type="text" name="wooshoppageurl"></div><div class="col-md-6"><label style="float:left;margin-right: 3px;">Design Image : </label><input type="file" name="wooshoppageimage" accept="image/x-png,image/gif,image/jpeg" /></div><br></div></div></div><div class="wsection"><span class="accordion"><b>Cart and Checkout Page</b></span><br><br><div class="panel"><div class="row"><div class="col-md-1"></div><div class="col-md-5"><label> Design URL : </label><input type="text" name="woocarturl"></div><div class="col-md-5"><label style="float:left;margin-right: 3px;">Design Image : </label><input type="file" name="woocarturl" accept="image/x-png,image/gif,image/jpeg" /></div><br></div></div></div>');
  }
  else
  {
    jQuery( ".wsection" ).hide();
  }
});
      jQuery("#refersite").click(function(){
       var checker = document.getElementById("refersite");
      if(checker.checked == true)
      {
        jQuery( ".sectiona" ).show();
        jQuery( ".sectionb" ).hide();
      }
      else
      {
         jQuery( ".sectiona" ).hide();
        jQuery( ".sectionb" ).show();
      }  
    });
      function generatedetails()
{   
  jQuery(".section").remove();
  console.log(jQuery("#selectman").val());
  var tabs = jQuery("#selectman").val(); 
  var uniqueNames = [];
  jQuery.each(tabs, function(i, el){
      if($.inArray(el, uniqueNames) === -1) uniqueNames.push(el);
  });
  console.log(uniqueNames);

  uniqueNames.forEach(element => {
  console.log(element);
    jQuery(".tabs").append('<div class="section"><span class="accordion"><b>'+element+'</b></span><br><div class="panel"><div class="row"><div class="col-md-1"></div><div class="col-md-5"><label> Design URL : </label><input type="text" name="designurl"></div><div class="col-md-6"><label style="float:left;margin-right: 3px;">Design Image : </label><input type="file" name="designimage" accept="image/x-png,image/gif,image/jpeg" /></div><hr></div></div></div>');
  });
}

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.20/angular.min.js"></script>
    <script src="<?php echo base_url()?>bootstrap-tagsinput-latest//dist/bootstrap-tagsinput.min.js"></script>
    <!-- <script src="../dist/bootstrap-tagsinput/bootstrap-tagsinput-angular.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rainbow/1.2.0/js/rainbow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rainbow/1.2.0/js/language/generic.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rainbow/1.2.0/js/language/html.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rainbow/1.2.0/js/language/javascript.js"></script>
    <script src="<?php echo base_url()?>bootstrap-tagsinput-latest/examples/assets/app.js"></script>
    <script src="<?php echo base_url()?>bootstrap-tagsinput-latest/examples/assets/app_bs3.js"></script>



<script>
    $("#refersite").click(function(){
       if($("#refersite[type='checkbox']").prop("checked") == true){
           $("#referrallinkurldiv").css("display","inline");
       } else {
           $("#referrallinkurldiv").css("display","none");
       }
    });
    
    $("#enablepaymentgateway").click(function(){
       if($("#enablepaymentgateway[type='checkbox']").prop("checked") == true){
           $("#paymentgatewaydiv").css("display","inline");
       } else {
           $("#paymentgatewaydiv").css("display","none");
       }
    });
</script>

<script>
    $("#woocommercesetup").click(function(){
       if($("#woocommercesetup[type='checkbox']").prop("checked") == true){
           $("#referrallinkurldiv").css("display","inline");
       } else {
           $("#referrallinkurldiv").css("display","none");
       }
    });
</script>

<script>
    
    $(document).ready(function(){
        $("#footertabs > li").click(function() {
            $('html, body').animate({
                scrollTop: $(".top-destination").offset().top
            }, 600);
        });
    });
       
</script>


