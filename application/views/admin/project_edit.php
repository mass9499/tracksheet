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
			        
			        <input type="hidden" name="projectid" value="<?php echo $project_data['project_id']; ?>">
			        
				<section class="panel form-wizard" id="w1">
					<header class="panel-heading top-destination">
						<div class="panel-actions">
							<a href="#" class="fa fa-caret-down"></a>
							<!--a href="#" class="fa fa-times"></a-->
						</div>
		
						<h2 class="panel-title">Institution Details Form</h2>
					</header>
					<div class="panel-body panel-body-nopadding">
						<div class="wizard-tabs" style="border-bottom:2px solid #e2e2e2;">
							<ul class="wizard-steps">
								<li class="active" id="headertab1">
									<a href="#w1-account" data-toggle="tab" class="text-center">
										<span class="badge hidden-xs">1</span>
										Institution Details
									</a>
								</li>
								<li id="headertab2">
									<a href="#w1-profile" data-toggle="tab" class="text-center">
										<span class="badge hidden-xs">2</span>
										Task Details
									</a>
								</li>
								
								<li id="headertab4">
									<a href="#w1-assign" data-toggle="tab" class="text-center">
										<span class="badge hidden-xs">3</span>
										Assign Project
									</a>
								</li>
							</ul>
						</div>
						
							<div class="tab-content">
								<div id="w1-account" class="tab-pane active"><br>
								    
								    <div class="col-md-12">
								        
								        <div class="row">
								             <div class="col-md-6">
                                                  <h5><b>Institution Type:</b></h5>
                                                  <div class="input-group">    	
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                                                    
                                                      <select class="form-control" name="client_pro_id" id="#" required>
                                                        <option value="">~ Select Type of Institution ~</option>
                                                        <option <?php if($project_data['project_type'] == 'school') { ?> selected <?php } ?> value="school">School</option>
                                                        <option <?php if($project_data['project_type'] == 'college') { ?> selected <?php } ?> value="college">College</option>
                                                        <option <?php if($project_data['project_type'] == 'inhouse') { ?> selected <?php } ?> value="inhouse">In-house</option>
                                                      
                                                        <?php /* foreach($client_projects as $cp) { ?>
                                                       <!--<option value="<?php echo $cp['cr_id'];?>"> <?php echo $cp['projectname']?> </option>-->
                                                        
                                <option value="<?php echo $cp['cr_id'];?>" <?php if($project_data['client_pro_id'] == $cp['cr_id']) { ?> selected <?php } ?> ><?php echo $cp['projectname']?> </option>
                                                        <?php } */ ?>
                                                      </select>
                                                    
                                                  </div>
                                            </div>
                                            <div class="col-md-6">
                                                  <h5><b>Institution Name:</b></h5>
                                                  <div class="input-group">    	
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                                                    <input type="text" class="form-control" name="projectname" id="projectname" value="<?php echo $project_data['project_name']; ?>" placeholder="Enter Project Name" >
                                                  </div>
                                            </div>
                                            
                                            <div class="col-md-6" style="display: none;">
                                                  <h5><b>Country:</b></h5>
                                                  <div class="input-group">    	
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                                    <input type="text" class="form-control" name="countryname" id="countryname" value="<?php echo $project_data['country_name']; ?>" placeholder="Enter Country Name" >
                                                  </div>
                                            </div>
                                        </div>
                                        
                                        <br>
                                        
                                        <div class="row"style="display: none;">
                                            <div class="col-md-6" style="display: none;">
                                                  <h5><b>Project Type:</b></h5>
                                                  <div class="input-group">    	
                                                      <span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
                                                      <select class="form-control" name="projecttype" id="projecttype" >
                                                        <option value="">~ Select Project Type ~</option>
                                                        <option <?php if($project_data['project_type'] == 'Application Development') { ?> selected <?php } ?> >Application Development</option>
                                                        <option <?php if($project_data['project_type'] == 'Website Development') { ?> selected <?php } ?> >Website Development</option>
                                                        <option <?php if($project_data['project_type'] == 'Plugin Development') { ?> selected <?php } ?> >Plugin Development</option>
                                                      </select>
                                                  </div>
                                            </div>
                                            
                                            <div class="col-md-6" style="display: none;">
                                                  <h5><b>Type of Work:</b></h5>
                                                  <div class="input-group">
                                                      <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>    	
                                                      <select class="form-control" name="typeofwork" id="typeofwork" >
                                                        <option value="">~ Select Type of Work ~</option>
                                                        <option <?php if($project_data['type_of_work'] == 'Create from Scratch') { ?> selected <?php } ?> >Create from Scratch</option>
                                                        <option <?php if($project_data['type_of_work'] == 'Modifications') { ?> selected <?php } ?> >Modifications</option>
                                                      </select>
                                                  </div>
                                            </div>
                                        </div>
                                        
                                        <br>
                                          <div class="row">
                                            <div class="col-md-6">
                                                  <h5><b>Client Name:</b></h5>
                                                  <div class="input-group">    	
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                                                    <input type="text" class="form-control" name="client_name" id="#" value="<?php echo $project_data['client_name']; ?>" placeholder="Enter Client Name" >
                                                    
                                                  </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                  <h5><b>Client address:</b></h5>
                                                  <div class="input-group">    	
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                                    <input type="text" class="form-control" name="client_address" id="#" value="<?php echo $project_data['client_address']; ?>" placeholder="ex : 796 Silver Harbour, TX 79273, US" >
                                                    
                                                  </div>
                                            </div>
                                          </div>
                                        
                                        <br>
                                        
                                        
                                             <div class="row">
                                            <div class="col-md-6" style="display: none;">
                                                  <h5><b>Project Hourly Cost:</b></h5>
                                                  <div class="input-group">    	
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                                                    <input type="number" class="form-control" name="projecthourlycost" id="#" value="<?php if($project_data['hourly_cost'] == 0 ){ echo "Null"; }else{ echo $project_data['hourly_cost']; }?>" placeholder="Enter Country Name" >
                                                    
                                                  </div>
                                            </div>
                                             <div class="col-md-3" style="display: none;">
                                                  <h5><b>Total Timeline:</b></h5>
                                                  <div class="input-group">    	
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                                    <input type="number" class="form-control" value="<?php if($project_data['total_timeline'] == "NULL" ){ echo "NULL"; }else{ echo $project_data['total_timeline']; } ?>" name="total_timeline" id="#" placeholder="Enter Project Timeline">
                                                  </div>
                                            </div>
                                            
                                            <div class="col-md-3" style="display: none;">
                                                  <h5><b>Tax %:</b></h5>
                                                  <div class="input-group">    	
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                                    <input type="number" class="form-control" name="projecttax" id="#" value="<?php if($project_data['taxper'] == 0 ){ echo "Null"; }else{ echo $project_data['taxper']; } ?>" placeholder="Enter Country Name" >
                                                    
                                                  </div>
                                            </div>
                                        </div>
                                        
                                        <br>
                                        
                                        <div class="row">
                                            <div class="col-md-12" id="typeofbusinessdiv" style="display: none;">
                                                  <h5><b>Type of Business:</b></h5>
                                                  <div class="input-group">    	
                                                      <span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
                                                      <select class="form-control" name="typeofbusiness" id="typeofbusiness" >
                                                        <option value="">~ Select Type of Business ~</option>
                                                        <option <?php if($project_data['type_of_business'] == 'Manufacturing') { ?> selected <?php } ?> >Manufacturing</option>
                                                        <option <?php if($project_data['type_of_business'] == 'Marketing') { ?> selected <?php } ?> >Marketing</option>
                                                        <option <?php if($project_data['type_of_business'] == 'Medical') { ?> selected <?php } ?> >Medical</option>
                                                        <option <?php if($project_data['type_of_business'] == 'Sales') { ?> selected <?php } ?> >Sales</option>
                                                        <option <?php if($project_data['type_of_business'] == 'Software') { ?> selected <?php } ?> >Software</option>
                                                        <option <?php if($project_data['type_of_business'] == 'Others') { ?> selected <?php } ?> >Others</option>
                                                      </select>
                                                  </div>
                                            </div>
                                        </div>
                                   
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <hr>
                                                  <h5><b>Enter additional Informations here:</b></h5>
                                                  <div class="input-group">    	
                                                      <span class="input-group-addon"><i>Abc</i></span>
                                                      <textarea name="additionalcomments_step1" id="additionalcomments_step1" class="form-control" rows="4" style="box-shadow:2px 2px 2px #cccccc;" >
                                                          <?php echo $project_data['additional_comments_step1']; ?>
                                                      </textarea>
                                                  </div>
                                            </div>
                                        </div>
                                        
                                    <br><br>
                                    </div><!--col-md-12-->
								</div>
								<div id="w1-profile" class="tab-pane"><br>
								    <div class="col-md-12">
								        
							            <div class="col-md-12">
							    <?php if(!empty($project_tasks)) { ?>
                                        <div class="form-group">
                                          <label><h4>Institution Tasks</h4></label>
                                              <table id="location_div" class="table location_div"> 
                                                  <thead>      
                                                      <th><center>Sl.no</center></th>
                                                      <th>Task Description</th>
                                                      <th>Timeline (In Hours)</th>
                                                  </thead>
                                                  <tbody id="task_location">
                                                          <?php $slno = 1; ?>
                                                          <?php foreach($project_tasks as $task) { ?>
                                                          <?php $sl_no = $slno++; ?>
                                                            <tr id="<?php if($sl_no > 1) { echo 'row-'.$sl_no; } else { echo 'row'; } ?>">
                                                                <td style="width:7%;">
                                                                    <center>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon" style="height:53px; width:53px;"><b><?php echo $sl_no; ?>.</b></span>
                                                                        </div>
                                                                    </center>
                                                                </td>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i>Abc</i></span>
                                                                        <textarea name="taskdesc[]" id="<?php echo 'taskdesc-'.$sl_no; ?>" class="form-control" placeholder="Describe Task" style="box-shadow:2px 2px 2px silver;"><?php echo $task['task_desc']; ?></textarea>
                                                                    </div>
                                                                </td>
                                                                <td style="width:20%;">
                                                                    <input type="number" name="taskhours[]" id="<?php echo 'taskhours-'.$sl_no; ?>" class="form-control" placeholder="Enter Hours" value="<?php echo $task['task_hours']; ?>" style="height:53px; box-shadow:2px 2px 2px silver;">
                                                                </td>
                                                            </tr>
                                                          <?php } ?>

                                                  </tbody>
                                                  </table>
                                                    <hr>
                                                    <span class="pull-right">
                                                        &nbsp; &nbsp; <a href="javascript:void(0)" class="btn btn-primary add_task_button"><i class="fa fa-plus"></i> Add More Task</a>
                                                        <input type="hidden" name="total_rows" id="currowval" value="<?php echo count($project_tasks); ?>">
                                                        &nbsp; &nbsp; <a href="javascript:void(0)" class="btn btn-danger remove_task_button"><i class="fa fa-minus"></i> Remove Task </a>
                                                    </span>
                                                </div>
                                                
                                        <?php } else { ?>
                                        
                                            <div class="form-group">
                                              <label><h4>Institution Tasks</h4></label>
                                                  <table id="location_div" class="table location_div"> 
                                                      <thead>      
                                                          <th><center>Sl.no</center></th>
                                                          <th>Task Description</th>
                                                          <th>Timeline (In Hours)</th>
                                                      </thead>
                                                      <tbody id="task_location">
                                                            <tr>
                                                                <td style="width:7%;">
                                                                    <center>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon" style="height:53px; width:53px;"><b>1.</b></span>
                                                                        </div>
                                                                    </center>
                                                                </td>
                                                                <td>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i>Abc</i></span>
                                                                        <textarea name="taskdesc[]" id="taskdesc-1" class="form-control" placeholder="Describe Task" style="box-shadow:2px 2px 2px silver;"></textarea>
                                                                    </div>
                                                                </td>
                                                                <td style="width:20%;">
                                                                    <input type="number" name="taskhours[]" id="taskhours-1" class="form-control" placeholder="Enter Hours" style="height:53px; box-shadow:2px 2px 2px silver;">
                                                                </td>
                                                            </tr>
                                                      </tbody>
                                                      </table>
                                                        <hr>
                                                        <span class="pull-right">
                                                            &nbsp; &nbsp; <a href="javascript:void(0)" class="btn btn-primary add_task_button"><i class="fa fa-plus"></i> Add More Task</a>
                                                            <input type="hidden" name="total_rows" id="currowval" value="1">
                                                            &nbsp; &nbsp; <a href="javascript:void(0)" class="btn btn-danger remove_task_button"><i class="fa fa-minus"></i> Remove Task </a>
                                                        </span>
                                                    </div>
                                        <?php } ?>
                                                <hr>
                                            </div><br>
                                                
                                                <center><h3 style="display: none;"> Design Details </h3></center>
								        
                                            <div class="row" style="display: none;">
        							            <div class="col-md-4" style="display: none;">
        							                <label style="margin-top:7px;"><h5><b>Do you have referral site for design:</b></h5></label>
        							            </div>
                                                <div class="col-md-2"><br>
                                                    <label class="switch referalsiteswitch"> 
                                                        <input type="checkbox" name="referrallinkcheck" id="refersite" <?php if($project_data['referral_link_check'] == 1 ) { ?>checked<?php } ?>>
                                                        <span class="slider"></span>
                                                        
                                                    </label>
                                                </div>
                                                
                                                <div class="col-md-6" style="margin-top:4px;" id="referrallinkurldiv">
                                                    <div class="input-group">    	
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-link"></i></span>
                                                        <input type="text" class="form-control" name="referrallinkurl" placeholder="Enter referral url here" <?php if($project_data['referral_link_check'] == 1 ) { ?>value ="<?php echo $project_data['referral_link_url']; ?>"<?php } ?>>
                                                    </div>
                                                </div> 
                                            </div> 
                                            
                                             
                                            
                                            <br>
                                     
                                          <div class="sectionb" style="border-top:1px solid #D5D5D5;"><br>
                                          <div class="row" style="display: none;">
                                            <div class="col-md-2">
                                              <h5><b>Website Pages:</b></h5>
                                            </div>  
                                            <div class="col-md-8">
                                                <select multiple name="websitepages" id="selectman" data-role="tagsinput" class="hidinput" >
                                                <option value="Header">Header</option>
                                                <option value="Footer">Footer</option>
                                                <option value="Home">Home</option>
                                              </select>
                                               </div> 
                                            <div class="col-md-2">
                                              <span class="btn btn-primary" onClick="generatedetails()">Generate Design</span>
                                            </div> 
                                          </div> 
                                          
                                          <br>
                                          
                                          <div class="row">
                                              <?php $designarray = explode(';',$project_data['design_url']); //print_r($designarray); 
                                              $designpagearray = explode(';',$project_data['website_pages']); //print_r($designarray); 
                                              $designimagearray = $get_design_pages; 
                                              
                                            //   print_r($get_design_pages); 
                                            //   print_r($designimagearray); echo "<br>";
                                             //print_r($designimagearray['0']);?>
                                              
                                              <div class="col-md-12" style="margin-left:0%;display: none;">
                                              <?php if (!empty($designpagearray) || !empty($designimagearray)) { ?>
                                                <h5><b>Page Designs and Details</b></h5>
                                                <br>
                                                <div class="col-md-12 tabs">
                                                <?php $sl = 1; ?>
                                                    <?php foreach ($designarray as $key => $desarr) { 
                                                    $slno = $sl++; 
                                                    
                                                    //print_r($designimagearray[$key]);?>
                                                    
                                                    <div class="section">
                                                        <!--span class="accordion"><b><?php echo $designpagearray[$key]; ?></b></span--><br>
                                                        <div class="panel">
                                                            
                                                            <div class="row">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-5">
                                                                    <label> Design URL : </label>
                                                                    <b style="font-size:17px;"> <span class="viewinputurl <?php echo 'viewinputurl-'.$slno; ?>"> <?php echo $desarr; ?> </span> 
                                                                        <span id="<?php echo $slno; ?>" class="<?php echo 'editbutturl-'.$slno; ?>" onclick="return enableediturl(this)"> <i class="fa fa-edit"></i> </span> </b>
                                                                    <input type="text" name="designurl[]" value="<?php echo $desarr; ?>" class="hidinputurl <?php echo 'hidinputurl-'.$slno; ?>" style="display:none;"> 
                                                                </div>
                                                                <!--div class="col-md-6">
                                                                    <label style="float:left;margin-right: 3px;">Design Image : </label>
                                                                    <img src="<?php echo base_url().$designimagearray[$key]['image_path'];?>" alt="design" height="100" width="100">
                                                                    <input type="file" name="designimage[]" accept="image/x-png,image/gif,image/jpeg"  class="<?php echo 'hidinputimg-'.$slno; ?>" style="display:none;" />
                                                                        <b style="font-size:17px;"> <span id="<?php echo $slno; ?>" class="<?php echo 'editbuttimg-'.$slno; ?>" onclick="return enableeditimg(this)"> <i class="fa fa-edit"></i> </span> </b>
                                                                </div--><br>
                                                            </div>
                                                            <hr>
                                                            
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                    
                                                </div>
                                                <?php } ?> <!-- if -->
                                              </div>
                                          </div>
                                          
                                        </div>
                                        
                                        <br>
                                          
                                          <div class="row" style="display: none;">
                                              <center>
                                                  <h3>
                                                      Enable Woocommerce &nbsp &nbsp
                                                      <label class="switch">
                                                        <input type="checkbox" name="enablewoocommerce" id="woocommerce" <?php if($project_data['enable_woocommerce'] == 1) { ?> checked <?php } ?> >
                                                        <span class="slider"></span>
                                                      </label>
                                                  </h3>
                                              </center>
                                              
                                                <div class="col-md-12">
                                                    <div class="row">
                                                      <br>
                                                      <div class="col-md-12 wootab">
                                                            <div class="wsection">
                                                                <span class="accordion"><b>Product Page</b></span>
                                                                <br><br>
                                                                <div class="panel">
                                                                    <div class="row">
                                                                        <div class="col-md-1"></div>
                                                                        <div class="col-md-5">
                                                                            <label> Design URL : </label>
                                                                            <input type="text" name="wooproductpageurl" value="<?php echo $project_data['woo_productpage_url']; ?>" >
                                                                        </div>
                                                                        <!--div class="col-md-6">
                                                                            <label style="float:left;margin-right: 3px;">Design Image : </label>
                                                                            <input type="file" name="wooproductpageimage" accept="image/x-png,image/gif,image/jpeg" />
                                                                        </div--><br>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    
                                                                    <div class="wsection"><span class="accordion"><b>Shop Page</b></span><br><br>
                                                                        <div class="panel">
                                                                            <div class="row">
                                                                                <div class="col-md-1"></div>
                                                                                <div class="col-md-5">
                                                                                    <label> Design URL : </label>
                                                                                    <input type="text" name="wooshoppageurl" value="<?php echo $project_data['woo_shoppage_url']; ?>" >
                                                                                </div>
                                                                                <
                                                                                <!--div class="col-md-6">
                                                                                    <label style="float:left;margin-right: 3px;">Design Image : </label>
                                                                                    <input type="file" name="wooshoppageimage" accept="image/x-png,image/gif,image/jpeg" />
                                                                                </div--><br>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="wsection"><span class="accordion"><b>Cart and Checkout Page</b></span><br><br>
                                                                        <div class="panel">
                                                                            <div class="row">
                                                                                <div class="col-md-1"></div>
                                                                                <div class="col-md-5">
                                                                                    <label> Design URL : </label>
                                                                                    <input type="text" name="woocarturl" value="<?php echo $project_data['woo_cart_url']; ?>" >
                                                                                </div>
                                                                                <!--div class="col-md-5">
                                                                                    <label style="float:left;margin-right: 3px;">Design Image : </label>
                                                                                    <input type="file" name="woocarturl" accept="image/x-png,image/gif,image/jpeg" />
                                                                                </div--><br>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                      </div> 
                                                    </div>
                                                </div>
                                              
                                           </div> 
								        
                                        <hr>
                                        
                                        <div class="row" style="display: none;">
                                            <div class="col-md-12">
                                            <h5><b>Color Schemes and Styles:</b></h5>
                                                <div class="col-md-3">
                                                      <h5>Header Color:</h5>
                                                      <div class="input-group">    	
                                                        <span class="input-group-addon"><img class="colorpickericon" src="<?php echo base_url(); ?>assets/icons/color-picker.jpg"></span>
                                                        <input type="color" class="form-control" value="<?php echo $project_data['header_color'];?>" name="headercolor" id="headercolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Footer Color:</h5>
                                                      <div class="input-group">    	
                                                        <span class="input-group-addon"><img class="colorpickericon" src="<?php echo base_url(); ?>assets/icons/color-picker.jpg"></span>
                                                        <input type="color" class="form-control" value="<?php echo $project_data['footer_color'];?>" name="footercolor" id="footercolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Background Color:</h5>
                                                      <div class="input-group">    	
                                                        <span class="input-group-addon"><img class="colorpickericon" src="<?php echo base_url(); ?>assets/icons/color-picker.jpg"></span>
                                                        <input type="color" class="form-control" value="<?php echo $project_data['background_color'];?>" name="backgroundcolor" id="backgroundcolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Text Color:</h5>
                                                      <div class="input-group">    	
                                                        <span class="input-group-addon"><img class="colorpickericon" src="<?php echo base_url(); ?>assets/icons/color-picker.jpg"></span>
                                                        <input type="color" class="form-control" value="<?php echo $project_data['text_color'];?>" name="textcolor" id="textcolor">
                                                      </div>
                                                </div>
                                            </div><!-- col-md-12 -->
                                            
                                            <div class="col-md-12">
                                                <div class="col-md-3">
                                                      <h5>Button Color:</h5>
                                                      <div class="input-group">    	
                                                        <span class="input-group-addon"><img class="colorpickericon" src="<?php echo base_url(); ?>assets/icons/color-picker.jpg"></span>
                                                        <input type="color" class="form-control" value="<?php echo $project_data['button_color'];?>" name="buttoncolor" id="buttoncolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Button Hover Color:</h5>
                                                      <div class="input-group">    	
                                                        <span class="input-group-addon"><img class="colorpickericon" src="<?php echo base_url(); ?>assets/icons/color-picker.jpg"></span>
                                                        <input type="color" class="form-control" value="<?php echo $project_data['button_hover_color'];?>" name="buttonhovercolor" id="buttonhovercolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Menu Color:</h5>
                                                      <div class="input-group">    	
                                                        <span class="input-group-addon"><img class="colorpickericon" src="<?php echo base_url(); ?>assets/icons/color-picker.jpg"></span>
                                                        <input type="color" class="form-control" value="<?php echo $project_data['menu_color'];?>" name="menucolor" id="menucolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Menu Hover Color:</h5>
                                                      <div class="input-group">    	
                                                        <span class="input-group-addon"><img class="colorpickericon" src="<?php echo base_url(); ?>assets/icons/color-picker.jpg"></span>
                                                        <input type="color" class="form-control" value="<?php echo $project_data['menu_hover_color'];?>" name="menuhovercolor" id="menuhovercolor">
                                                      </div>
                                                </div>
                                            </div><!-- col-md-12 -->
                                            
                                            <div class="col-md-12">
                                                <div class="col-md-3">
                                                      <h5>Heading Text Color:</h5>
                                                      <div class="input-group">    	
                                                        <span class="input-group-addon"><img class="colorpickericon" src="<?php echo base_url(); ?>assets/icons/color-picker.jpg"></span>
                                                        <input type="color" class="form-control" value="<?php echo $project_data['heading_text_color'];?>" name="headingtextcolor" id="headingtextcolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Paragraph Text Color:</h5>
                                                      <div class="input-group">    	
                                                        <span class="input-group-addon"><img class="colorpickericon" src="<?php echo base_url(); ?>assets/icons/color-picker.jpg"></span>
                                                        <input type="color" class="form-control" value="<?php echo $project_data['paragraph_text_color'];?>" name="paragraphtextcolor" id="paragraphtextcolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Highligting Text Color:</h5>
                                                      <div class="input-group">    	
                                                        <span class="input-group-addon"><img class="colorpickericon" src="<?php echo base_url(); ?>assets/icons/color-picker.jpg"></span>
                                                        <input type="color" class="form-control" value="<?php echo $project_data['highlighting_text_color'];?>" name="highlightingtextcolor" id="highlightingtextcolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Font Style:</h5>
                                                      <div class="input-group">    	
                                                        <span class="input-group-addon"><b>A</b><u>b</u><i>c</i></span>
                                                        <input type="text" class="form-control" value="<?php echo $project_data['font_style'];?>" name="fontstyle" id="fontstyle" placeholder="Enter font family">
                                                      </div>
                                                </div>
                                                
                                            </div><!-- col-md-12 -->
                                        </div>
                                        
                                        <div class="row" style="display: none;">
                                            <div class="col-md-12">
                                                <hr>
                                                  <h5><b>Enter additional comments here:</b></h5>
                                                  <div class="input-group">    	
                                                      <span class="input-group-addon"><i>Abc</i></span>
                                                      <textarea name="additionalcomments_step2" id="additionalcomments_step2" class="form-control" rows="4" style="box-shadow:2px 2px 2px #cccccc;" >
                                                          <?php echo $project_data['additional_comments_step2'];?>
                                                      </textarea>
                                                      
                                                  </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <br><br>
								    </div><!-- col-md-12 -->
								</div>
								<div id="w1-confirm" class="tab-pane"><br>
									<div class="col-md-12">
									    <div class="row">
                                              <center>
                                                  <h3>
                                                      Enable Payment Gateway &nbsp &nbsp
                                                      <label class="switch">
                                                        <input type="checkbox" name="enablepaymentgateway" id="enablepaymentgateway" <?php if($project_data['enable_payment_gateway'] == 1) { ?> checked <?php } ?> >
                                                        <span class="slider"></span>
                                                      </label>
                                                  </h3>
                                                </center>
                                                  
                                                  <hr>
                                                  
                                                <div class="row" id="paymentgatewaydiv" <?php if($project_data['enable_payment_gateway'] == 0) { ?> style="display:none;" <?php } ?>  >
                                                    <div class="col-md-12">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-3">
                                                            <h5><b>Payment Gateway:</b></h5>
                                                        </div>    
                                                        <div class="col-md-4">
                                                            <div class="input-group">    	
                                                              <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                                              <select class="form-control" name="paymentgateway" id="paymentgateway" >
                                                                <option value="">~ Select Payment Gateway ~</option>
                                                                <option <?php if($project_data['payment_gateway'] == 'Paypal') { ?> selected <?php } ?> > Paypal </option>
                                                                <option <?php if($project_data['payment_gateway'] == 'Stripe') { ?> selected <?php } ?> > Stripe </option>
                                                                <option <?php if($project_data['payment_gateway'] == 'Square') { ?> selected <?php } ?> > Square </option>
                                                                <option <?php if($project_data['payment_gateway'] == 'Payfast') { ?> selected <?php } ?> > Payfast </option>
                                                                <option <?php if($project_data['payment_gateway'] == 'Klarna') { ?> selected <?php } ?> > Klarna </option>
                                                                <option <?php if($project_data['payment_gateway'] == 'Others') { ?> selected <?php } ?> >Others</option>
                                                              </select>
                                                          </div>  
                                                        </div>    
                                                        <div class="col-md-2"></div>
                                                    </div>
                                                </div>
                                              <br><br>
                                           </div> 
                                           
                                           <div class="row">
                                            <div class="col-md-12">
                                                <hr>
                                                  <h5><b>Enter additional comments here:</b></h5>
                                                  <div class="input-group">    	
                                                      <span class="input-group-addon"><i>Abc</i></span>
                                                      <textarea name="additionalcomments_step3" id="additionalcomments_step3" class="form-control" rows="4" style="box-shadow:2px 2px 2px #cccccc;" >
                                                          <?php echo $project_data['additional_comments_step3']; ?>
                                                      </textarea>
                                                      
                                                  </div>
                                            </div>
                                        </div>
                                           
                                        <br>   
                                    </div>    
                                        
								<br></div>
								
								<div id="w1-assign" class="tab-pane"><br>
									<div class="col-md-12">
									    <div class="row">
                                              <center>
                                                      <b style="font-size:17px;"> Assign To : </b> <br>
                                                        
                                                        <?php 
                                                            $assigned_to_array = explode(';', $project_data['assigned_to']);
                                                        ?>
                                                        <select name="assignedto[]" multiple style="font-size:17px; border:1px solid #e2e2e2; border-radius:4px;overflow-y: auto; min-height:150px;">
                                                            <?php foreach($users as $user) { ?>
                                                                <option <?php if(in_array($user['login_id'], $assigned_to_array)) { ?> selected <?php } ?> value="<?php echo $user['login_id']; ?>"><?php echo $user['first_name'].' '.$user['last_name']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                </center>
                                              <br><br>
                                              
                                              <h5><b>Note to assigned user:</b></h5>
                                              <div class="input-group">    	
                                                  <span class="input-group-addon"><i>Abc</i></span>
                                                  <textarea name="assignedtonote" id="assignedtonote" class="form-control" rows="4" style="box-shadow:2px 2px 2px #cccccc;"><?php echo $project_data['assigned_to_note']; ?></textarea>
                                                  
                                              </div>
                                              
                                           </div> 
                                           
                                        <br>   
                                        
                                        <div class="row">
                                           <center>
                                                <input type="submit" name="submit" value="Update" class="btn btn-primary" style="border-radius:7px;">
                                                <a href="<?php echo base_url(); ?>project" class="btn btn-danger" style="border-radius:7px;">Cancel</a>
                                           </center> <br><br>
                                        </div>
                                           
                                    </div>    
                                        
								<br></div>
								
							</div>
							
					</div>
					
					<div class="panel-footer">
					    
					    <div class="wizard-tabs" style="border-bottom:2px solid #e2e2e2;">
							<ul class="wizard-steps" id="footertabs">
								<li class="active" id="footertab1" style="background-color:silver;">
									<a href="#w1-account" data-toggle="tab" class="text-center">
										<span class="badge hidden-xs">Step 1</span>
									</a>
								</li>
								<li id="footertab2" style="background-color:silver;">
									<a href="#w1-profile" data-toggle="tab" class="text-center">
										<span class="badge hidden-xs">Step 2</span>
									</a>
								</li>
								
								<li id="footertab3">
									<a href="#w1-assign" data-toggle="tab" class="text-center">
										<span class="badge hidden-xs">Step 3</span>
									</a>
								</li>
							</ul>
						</div>
					    
						<!--ul class="pager">
							<li class="previous ">
								<a><i class="fa fa-angle-left"></i> Previous</a>
							</li>
							<li class="finish hidden pull-right">
								<input class="btn btn-primary" type="submit" name="submit" value="Create Project" style="border-radius:30px;">
							</li>
							<li class="next" onclick="nextt()">
								<a>Next <i class="fa fa-angle-right"></i></a>
							</li>
						</ul-->
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
    
    <?php if($project_data['referral_link_check'] == 0 ) { ?>
        jQuery(document).ready(function(){
            jQuery( ".sectiona" ).hide();
            jQuery( ".sectionb" ).show();
        });
    <?php } else { ?>
        jQuery(document).ready(function(){
            jQuery( ".sectionb" ).hide();
            jQuery( ".sectiona" ).show();
        });
    <?php } ?>
    
    
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


<?php if($project_data['referral_link_check'] == 0 ) { ?>
    <script>
        $(document).ready(function(){
            $("#referrallinkurldiv").css("display", "none");
        });
    </script>
 <?php } ?>

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

<script>

    function enableediturl(dis)
    {
        var slval = dis.id;
            $('.editbutturl-'+slval).css("display","none");
            $('.viewinputurl-'+slval).css("display","none");
            $('.editbutturl-'+slval).css("display","none");
            $('.hidinputurl-'+slval).css("display","inline");
            //$('.closebutturl-'+slval).css("display","inline");
            
    }
    
    function enableeditimg(dis)
    {
        var slval = dis.id;
            $('.editbuttimg-'+slval).css("display","none");
            $('.hidinputimg-'+slval).css("display","inline");
            //$('.closebuttimg-'+slval).css("display","inline");
    }
</script>


