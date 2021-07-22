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
		
						<h2 class="panel-title">Project Details Form</h2>
					</header>
					<div class="panel-body panel-body-nopadding">
						
							<div class="tab-content"><br>
								    
								    <div class="col-md-12">
								
								        <div class="row"><br>
                                            <div class="col-md-6">
                                                <div class="col-md-4">
                                                    <h5><b>institution Name:</b></h5>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                  <div class="input-group" style="width:100%;">    	
                                                    <input type="text" class="form-control" name="projectname" id="projectname" value="<?php echo $project_data['project_name']; ?>" placeholder="Enter Project Name" readonly>
                                                  </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6" style="display: none;">
                                                <div class="col-md-4">
                                                  <h5><b>Country:</b></h5>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                  <div class="input-group" style="width:100%;">    	
                                                    <input type="text" class="form-control" name="countryname" id="countryname" value="<?php echo $project_data['country_name']; ?>" placeholder="Enter Country Name" readonly>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <br>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="col-md-4">
                                                  <h5><b>institution Type:</b></h5>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                  <div class="input-group" style="width:100%;">
                                                      <input class="form-control" name="projecttype" id="projecttype" value="<?php echo $project_data['project_type']; ?>" disabled>
                                                  </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6" style="display: none;">
                                                <div class="col-md-4">    
                                                  <h5><b>Type of Work:</b></h5>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                  <div class="input-group" style="width:100%;">
                                                      <input class="form-control" name="typeofwork" id="typeofwork" value="<?php echo $project_data['type_of_work']; ?>" disabled>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <br>
                                        
                                        <div class="row">
                                            <div class="col-md-6" id="typeofbusinessdiv" style="display: none;">
                                                <div class="col-md-4">
                                                  <h5><b>Type of Business:</b></h5>
                                                </div>
                                                
                                                <div class="col-md-8">
                                                  <div class="input-group" style="width:100%;">    	
                                                      <input class="form-control" name="typeofbusiness" id="typeofbusiness" value="<?php echo $project_data['type_of_business']; ?>" disabled>
                                                  </div>
                                                </div>
                                            </div>
                                        
                                            <div class="col-md-6">
                                                <div class="col-md-6">
                                                  <!--h5><b>Step 1 comments:</b></h5-->
                                                </div>
                                                
                                                <div class="col-md-6">
                                                  <div class="input-group">    	
                                                      <!--input name="additionalcomments_step1" id="additionalcomments_step1" class="form-control" value="<?php echo $project_data['additional_comments_step1']; ?>"-->
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <br>
                                        
                                        <?php if($project_data['additional_comments_step1'] != '') { ?>
                                            <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-10">
                                                  <h5><b>Step 1 comments:</b></h5>
                                                  <textarea class="form-control" rows="5" style="border:1px solid #e2e2e2;">
                                                      <?php echo $project_data['additional_comments_step1']; ?>
                                                  </textarea>
                                                </div>
                                                <div class="col-md-1"></div>
                                            </div>
                                            </div>
                                            
                                        <br><hr>
                                        <?php } ?>
                                        
                                        
                                    </div><!--col-md-12-->
								    
								    <div class="col-md-12">
								        <center>
								        <div class="row">
								            <?php if($project_data['referral_link_check'] == 1 ) { echo '<hr>'.'<b>Referral link : </b>'.$project_data['referral_link_url']; } ?>
								        </div>
								        </center>
								        
                                            <!--div class="row">
        							            <div class="col-md-4">
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
                                                        <input type="text" class="form-control" name="referrallinkurl" placeholder="Enter referral url here" <?php if($project_data['referral_link_check'] == 1 ) { ?>value ="<?php echo $project_data['referral_link_url']; ?>"<?php } ?>>
                                                    </div>
                                                </div> 
                                            </div--> 
                                            
                                             
                                            
                                            <br><hr>
                                            
                                    <?php /* 
                                        
                                        <div class="sectionb" style="border-top:1px solid #D5D5D5;"><br>
                                          
                                        <?php if($project_data['referral_link_check'] == 0 ) { ?>
                                        
                                          <div class="row">
                                              
                                              <?php $designarray = explode(';',$project_data['design_url']); //print_r($designarray); 
                                              $designpagearray = explode(';',$project_data['website_pages']);
                                              $designimagearray = $get_design_pages; 
                                            //   print_r($get_design_pages); 
                                            //   print_r($designimagearray); echo "<br>";
                                             //print_r($designimagearray['0']);?>
                                              
                                              <div class="col-md-12" style="margin-left:0%;">
                                              <?php if (!empty($designpagearray) || !empty($designimagearray)) { ?>
                                                <!--<h5><b>Page Designs and Details</b></h5>-->
                                                <div class="col-md-12 tabs">
                                                    <?php foreach ($designarray as $key => $desarr) { 
                                                    //print_r($designimagearray[$key]);?>
                                                    <div class="section">
                                                        <!--span class="accordion"><b><?php echo $designpagearray[$key]; ?></b></span--><br>
                                                        <div class="panel">
                                                            <?php if($desarr != '') { ?>
                                                                <div class="row">
                                                                    <div class="col-md-1"></div>
                                                                    <div class="col-md-5">
                                                                        <label> Design URL : </label>
                                                                        <?php echo $desarr; ?>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label style="float:left;margin-right: 3px;">Design Image : </label>
                                                                        <!--img src="<?php echo base_url().$designimagearray[$key]['image_path'];?>" style="width:24%;height:auto;"-->
                                                                    </div><br>
                                                                </div>
                                                                <hr>
                                                            <?php } ?>
                                                            
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                    
                                                </div>
                                                <?php } ?> <!-- if -->
                                              </div>
                                          </div> <!-- row -->
                                          <?php } ?>
                                          
                                        </div>
                                    */ ?>
                                    
                                    <br>
                                          
                                          <?php if(!empty($project_tasks)) { ?>
                                                <h4>Project Tasks : </h4>
                                                <table class="table table-bordered table-striped" >
                                                    <thead>
                                                        <tr style="background-color:#F6F6F6; height:40px;">
                                                            <th class="text-center"> Sl.no </th>
                                                            <th> Task Description </th>
                                                            <th class="text-center" style="width:15%;"> Task Hours </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $slno = 1; ?>
                                                        <?php foreach($project_tasks as $task) { ?>
                                                        <?php $sl_no = $slno++; ?>
                                                            <tr style="height:40px;">
                                                                <td class="text-center"> <?php echo '#'.$sl_no; ?> </td>
                                                                <td> <?php echo $task['task_desc']; ?> </td>
                                                                <td class="text-center"> <?php if($task['task_hours'] < 10) { echo '0'.$task['task_hours']; } else { echo $task['task_hours']; } ?> </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                          <?php } ?>
                                          
                                          <br><hr>
                                          
                                          <div class="row" style="display: none;">
                                              <center>
            								        <div class="row">
            								            <h4>
            								            Woocommerce :
            								            <?php if($project_data['enable_woocommerce'] == 1 ) { echo "<b style='color:green;'>Enabled</b>"; } else { echo "<b style='color:maroon;'>Not Enabled</b>"; } ?>
            								            </h4>
            								        </div>
                                              </center>
                                              
                                              <hr>
                                              
                                              <?php if($project_data['enable_woocommerce'] == 1 ) { ?>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                      <br>
                                                      <div class="col-md-12 woota">
                                                          <div class="wsection"><span class="accordion"><b>Product Page</b></span><br><br><div class="panel"><div class="row"><div class="col-md-1"></div><div class="col-md-5"><label> Design URL : </label><!--input type="text" name="wooproductpageurl"--><?php if($project_data['woo_productpage_url'] == '') { echo "<span style='color:maroon;'> Not Defined </span>"; } else { echo $project_data['woo_productpage_url']; } ?></div><div class="col-md-6"><label style="float:left;margin-right: 3px;">Design Image : </label><!--input type="file" name="wooproductpageimage" accept="image/x-png,image/gif,image/jpeg" /--></div><br></div></div></div><div class="wsection"><span class="accordion"><b>Shop Page</b></span><br><br><div class="panel"><div class="row"><div class="col-md-1"></div><div class="col-md-5"><label> Design URL : </label><!--input type="text" name="wooshoppageurl"--><?php if($project_data['woo_shoppage_url'] == '') { echo "<span style='color:maroon;'>Not Defined</span>"; } else { echo $project_data['woo_shoppage_url']; } ?></div><div class="col-md-6"><label style="float:left;margin-right: 3px;">Design Image : </label><!--input type="file" name="wooshoppageimage" accept="image/x-png,image/gif,image/jpeg" /--></div><br></div></div></div><div class="wsection"><span class="accordion"><b>Cart and Checkout Page</b></span><br><br><div class="panel"><div class="row"><div class="col-md-1"></div><div class="col-md-5"><label> Design URL : </label><!--input type="text" name="woocarturl"--><?php if($project_data['woo_cart_url'] == '') { echo "<span style='color:maroon;'>Not Defined</span>"; } else { echo $project_data['woo_cart_url']; } ?></div><div class="col-md-5"><label style="float:left;margin-right: 3px;">Design Image : </label><!--input type="file" name="woocarturl" accept="image/x-png,image/gif,image/jpeg" /--></div><br></div></div></div>
                                                      </div> 
                                                    </div>
                                                    <hr>
                                                </div>
                                              <?php } ?>
                                              
                                           </div> 
                                        
                                        <div class="row" style="display: none;"   >
                                            <div class="col-md-12">
                                            <h5><b>Color Schemes and Styles:</b></h5>
                                                <div class="col-md-3">
                                                      <h5>Header Color:</h5>
                                                      <div class="input-group">    	
                                                        <input type="color" class="form-controlc" value="<?php echo $project_data['header_color'];?>" name="headercolor" id="headercolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Footer Color:</h5>
                                                      <div class="input-group">    	
                                                        <input type="color" class="form-controlc" value="<?php echo $project_data['footer_color'];?>" name="footercolor" id="footercolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Background Color:</h5>
                                                      <div class="input-group">    	
                                                        <input type="color" class="form-controlc" value="<?php echo $project_data['background_color'];?>" name="backgroundcolor" id="backgroundcolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Text Color:</h5>
                                                      <div class="input-group">    	
                                                        <input type="color" class="form-controlc" value="<?php echo $project_data['text_color'];?>" name="textcolor" id="textcolor">
                                                      </div>
                                                </div>
                                            </div><!-- col-md-12 -->
                                            
                                            <div class="col-md-12">
                                                <div class="col-md-3">
                                                      <h5>Button Color:</h5>
                                                      <div class="input-group">    	
                                                        <input type="color" class="form-controlc" value="<?php echo $project_data['button_color'];?>" name="buttoncolor" id="buttoncolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Button Hover Color:</h5>
                                                      <div class="input-group">    	
                                                        <input type="color" class="form-controlc" value="<?php echo $project_data['button_hover_color'];?>" name="buttonhovercolor" id="buttonhovercolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Menu Color:</h5>
                                                      <div class="input-group">    	
                                                        <input type="color" class="form-controlc" value="<?php echo $project_data['menu_color'];?>" name="menucolor" id="menucolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Menu Hover Color:</h5>
                                                      <div class="input-group">    	
                                                        <input type="color" class="form-controlc" value="<?php echo $project_data['menu_hover_color'];?>" name="menuhovercolor" id="menuhovercolor">
                                                      </div>
                                                </div>
                                            </div><!-- col-md-12 -->
                                            
                                            <div class="col-md-12">
                                                <div class="col-md-3">
                                                      <h5>Heading Text Color:</h5>
                                                      <div class="input-group">    	
                                                        <input type="color" class="form-controlc" value="<?php echo $project_data['heading_text_color'];?>" name="headingtextcolor" id="headingtextcolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Paragraph Text Color:</h5>
                                                      <div class="input-group">    	
                                                        <input type="color" class="form-controlc" value="<?php echo $project_data['paragraph_text_color'];?>" name="paragraphtextcolor" id="paragraphtextcolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Highligting Text Color:</h5>
                                                      <div class="input-group">    	
                                                        <input type="color" class="form-controlc" value="<?php echo $project_data['highlighting_text_color'];?>" name="highlightingtextcolor" id="highlightingtextcolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Font Style:</h5>
                                                      <div class="input-group">    	
                                                        <input type="text" class="form-control" value="<?php echo $project_data['font_style'];?>" name="fontstyle" id="fontstyle" placeholder="Enter font family">
                                                      </div>
                                                </div>
                                                
                                            </div><!-- col-md-12 -->
                                        </div>
                                        
                                        <br>
                                        
                                        <?php if($project_data['additional_comments_step2'] != '') { ?>
                                        
                                            <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-10">
                                                  <h5><b>Step 2 comments:</b></h5>
                                                  <textarea class="form-control" rows="5" style="border:1px solid #e2e2e2;">
                                                      <?php echo $project_data['additional_comments_step2']; ?>
                                                  </textarea>
                                                </div>
                                                <div class="col-md-1"></div>
                                            </div>
                                            </div>
                                            
                                        <?php } ?>
                                        
                                        
                                        <br><br><hr>
								    </div><!-- col-md-12 -->
								    
								    <br>
								    
									<div class="col-md-12">
									    <div class="row">
                                              <center>
                                                  <div class="row" style="display: none;">
                                                      <h4>
                                                          Payment Gateway &nbsp &nbsp
                                                          <?php if($project_data['enable_payment_gateway'] == 1 ) { echo "<b style='color:green;'>Enabled</b>"; } else { echo "<b style='color:maroon;'>Not Enabled</b>"; } ?>
                                                      </h4>
                                                    </div>
                                                </center>
                                                  <br>
                                            <?php if($project_data['enable_payment_gateway'] == 1 ) { ?>
                                                <div class="row" id="paymentgatewaydiv" <?php if($project_data['enable_payment_gateway'] == 0) { ?> style="display:none;" <?php } ?> >
                                                    <div class="col-md-12">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-3">
                                                            <h5><b>Payment Gateway:</b></h5>
                                                        </div>    
                                                        <div class="col-md-4">
                                                            <div class="input-group">    	
                                                              <input class="form-control" name="paymentgateway" id="paymentgateway" value="<?php echo $project_data['payment_gateway']; ?>">
                                                          </div>  
                                                        </div>    
                                                        <div class="col-md-2"></div>
                                                    </div>
                                                </div>
                                              <br><br>
                                            <?php } ?>
                                           </div> 
                                        
                                            <br>
                                            <?php if($project_data['additional_comments_step3'] != '') { ?>
                                                <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-10">
                                                      <h5><b>Step 3 comments:</b></h5>
                                                      <textarea class="form-control" rows="5" style="border:1px solid #e2e2e2;">
                                                          <?php echo $project_data['additional_comments_step3']; ?>
                                                      </textarea>
                                                    </div>
                                                    <div class="col-md-1"></div>
                                                </div>
                                                </div>
                                            <?php } ?>
                                           
                                        <hr>
                                        
                                        <div class="row">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-5" style="border:2px solid #e2e2e2; border-radius:4px;">
                                                <h4 style="background-color:#e2e2e2; padding:6px; border-radius:4px;"><b> Assigned to: </b></h4>
                                                <h5 style="margin-left:10px;padding-top:7px;">
                                                    <?php if(!empty($assigned_to)) { ?>
                                                        <?php foreach($assigned_to as $assigned) { ?>
                                                            <div style="border-bottom:1px solid #e2e2e2; padding-bottom:7px;"> <?php echo $assigned['name']; ?> - <?php echo $assigned['email']; ?> </div><br>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </h5>
                                            </div>
                                            <div class="col-md-2"></div>
                                            <br>
                                        </div>
                                        
                                        <center><br>
                                            <a href="<?php echo base_url(); ?>project" class="btn btn-danger" style="border-radius:7px;">Back</a>
                                        </center>
                                        <br><br>
                                           
                                        <!--div class="row">
                                           <center>
                                                <input type="submit" name="submit" value="Create Project" class="btn btn-primary" style="border-radius:7px;">
                                                <a href="<?php echo base_url(); ?>projects" class="btn btn-danger" style="border-radius:7px;">Cancel</a>
                                           </center> <br><br>
                                        </div-->
                                    </div>    
                                        
								<br>
							</div><!-- Tab Content -->
							
					</div>
					
					<!--div class="panel-footer">
					    
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
									<a href="#w1-confirm" data-toggle="tab" class="text-center">
										<span class="badge hidden-xs">Step 3</span>
									</a>
								</li>
							</ul>
						</div-->
					    
						<!--ul class="pager">
							<li class="previous disabled">
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


