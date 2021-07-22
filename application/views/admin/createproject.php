    
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
			    <form name="createprojectform" class="form-horizontal" novalidate="novalidate" method="POST" action="<?php echo base_url(); ?>project/create_project_save" onsubmit="return check_form_validation()" enctype="multipart/form-data">
			        <input type="hidden" name="projectuniqid" value="<?php echo uniqid(); ?>">
			        
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
								
								<li id="headertab3">
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
                                                    
                                                      <select class="form-control" name="projecttype" id="projecttype" required>
                                                        <option value="">~ Select Type of Institution ~</option>
                                                        <option value="school">School</option>
                                                        <option value="college">College</option>
                                                        <option value="inhouse">In-house</option>
                                                      
                                                      </select>
                                                    
                                                  </div>
                                            </div>
								                             <div class="col-md-6" style="display: none;">
                                                  <h5><b>Institution type:</b></h5>
                                                  <div class="input-group">     
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                                                    <input type="text" class="form-control" name="" id="" placeholder="Enter Institution Type">
                                                  </div>
                                            </div>
								            
                                            <div class="col-md-6">
                                                  <h5><b>Institution Name:</b></h5>
                                                  <div class="input-group">    	
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                                                    <input type="text" class="form-control" name="projectname" id="projectname" placeholder="Enter Institution Name">
                                                  </div>
                                            </div>
                                            
                                            <div class="col-md-6" style="display: none;">
                                                  <h5><b>Country:</b></h5>
                                                   <div class="input-group">    	
                                                      <span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
                                                      <select class="form-control" name="countryname" id="countryname">
                                                               <option value="">~ Select Country ~</option>
                                                               <option value="Afganistan">Afghanistan</option>
                                                               <option value="Albania">Albania</option>
                                                               <option value="Algeria">Algeria</option>
                                                               <option value="American Samoa">American Samoa</option>
                                                               <option value="Andorra">Andorra</option>
                                                               <option value="Angola">Angola</option>
                                                               <option value="Anguilla">Anguilla</option>
                                                               <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                               <option value="Argentina">Argentina</option>
                                                               <option value="Armenia">Armenia</option>
                                                               <option value="Aruba">Aruba</option>
                                                               <option value="Australia">Australia</option>
                                                               <option value="Austria">Austria</option>
                                                               <option value="Azerbaijan">Azerbaijan</option>
                                                               <option value="Bahamas">Bahamas</option>
                                                               <option value="Bahrain">Bahrain</option>
                                                               <option value="Bangladesh">Bangladesh</option>
                                                               <option value="Barbados">Barbados</option>
                                                               <option value="Belarus">Belarus</option>
                                                               <option value="Belgium">Belgium</option>
                                                               <option value="Belize">Belize</option>
                                                               <option value="Benin">Benin</option>
                                                               <option value="Bermuda">Bermuda</option>
                                                               <option value="Bhutan">Bhutan</option>
                                                               <option value="Bolivia">Bolivia</option>
                                                               <option value="Bonaire">Bonaire</option>
                                                               <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                               <option value="Botswana">Botswana</option>
                                                               <option value="Brazil">Brazil</option>
                                                               <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                               <option value="Brunei">Brunei</option>
                                                               <option value="Bulgaria">Bulgaria</option>
                                                               <option value="Burkina Faso">Burkina Faso</option>
                                                               <option value="Burundi">Burundi</option>
                                                               <option value="Cambodia">Cambodia</option>
                                                               <option value="Cameroon">Cameroon</option>
                                                               <option value="Canada">Canada</option>
                                                               <option value="Canary Islands">Canary Islands</option>
                                                               <option value="Cape Verde">Cape Verde</option>
                                                               <option value="Cayman Islands">Cayman Islands</option>
                                                               <option value="Central African Republic">Central African Republic</option>
                                                               <option value="Chad">Chad</option>
                                                               <option value="Channel Islands">Channel Islands</option>
                                                               <option value="Chile">Chile</option>
                                                               <option value="China">China</option>
                                                               <option value="Christmas Island">Christmas Island</option>
                                                               <option value="Cocos Island">Cocos Island</option>
                                                               <option value="Colombia">Colombia</option>
                                                               <option value="Comoros">Comoros</option>
                                                               <option value="Congo">Congo</option>
                                                               <option value="Cook Islands">Cook Islands</option>
                                                               <option value="Costa Rica">Costa Rica</option>
                                                               <option value="Cote DIvoire">Cote DIvoire</option>
                                                               <option value="Croatia">Croatia</option>
                                                               <option value="Cuba">Cuba</option>
                                                               <option value="Curaco">Curacao</option>
                                                               <option value="Cyprus">Cyprus</option>
                                                               <option value="Czech Republic">Czech Republic</option>
                                                               <option value="Denmark">Denmark</option>
                                                               <option value="Djibouti">Djibouti</option>
                                                               <option value="Dominica">Dominica</option>
                                                               <option value="Dominican Republic">Dominican Republic</option>
                                                               <option value="East Timor">East Timor</option>
                                                               <option value="Ecuador">Ecuador</option>
                                                               <option value="Egypt">Egypt</option>
                                                               <option value="El Salvador">El Salvador</option>
                                                               <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                               <option value="Eritrea">Eritrea</option>
                                                               <option value="Estonia">Estonia</option>
                                                               <option value="Ethiopia">Ethiopia</option>
                                                               <option value="Falkland Islands">Falkland Islands</option>
                                                               <option value="Faroe Islands">Faroe Islands</option>
                                                               <option value="Fiji">Fiji</option>
                                                               <option value="Finland">Finland</option>
                                                               <option value="France">France</option>
                                                               <option value="French Guiana">French Guiana</option>
                                                               <option value="French Polynesia">French Polynesia</option>
                                                               <option value="French Southern Ter">French Southern Ter</option>
                                                               <option value="Gabon">Gabon</option>
                                                               <option value="Gambia">Gambia</option>
                                                               <option value="Georgia">Georgia</option>
                                                               <option value="Germany">Germany</option>
                                                               <option value="Ghana">Ghana</option>
                                                               <option value="Gibraltar">Gibraltar</option>
                                                               <option value="Great Britain">Great Britain</option>
                                                               <option value="Greece">Greece</option>
                                                               <option value="Greenland">Greenland</option>
                                                               <option value="Grenada">Grenada</option>
                                                               <option value="Guadeloupe">Guadeloupe</option>
                                                               <option value="Guam">Guam</option>
                                                               <option value="Guatemala">Guatemala</option>
                                                               <option value="Guinea">Guinea</option>
                                                               <option value="Guyana">Guyana</option>
                                                               <option value="Haiti">Haiti</option>
                                                               <option value="Hawaii">Hawaii</option>
                                                               <option value="Honduras">Honduras</option>
                                                               <option value="Hong Kong">Hong Kong</option>
                                                               <option value="Hungary">Hungary</option>
                                                               <option value="Iceland">Iceland</option>
                                                               <option value="Indonesia">Indonesia</option>
                                                               <option value="India">India</option>
                                                               <option value="Iran">Iran</option>
                                                               <option value="Iraq">Iraq</option>
                                                               <option value="Ireland">Ireland</option>
                                                               <option value="Isle of Man">Isle of Man</option>
                                                               <option value="Israel">Israel</option>
                                                               <option value="Italy">Italy</option>
                                                               <option value="Jamaica">Jamaica</option>
                                                               <option value="Japan">Japan</option>
                                                               <option value="Jordan">Jordan</option>
                                                               <option value="Kazakhstan">Kazakhstan</option>
                                                               <option value="Kenya">Kenya</option>
                                                               <option value="Kiribati">Kiribati</option>
                                                               <option value="Korea North">Korea North</option>
                                                               <option value="Korea Sout">Korea South</option>
                                                               <option value="Kuwait">Kuwait</option>
                                                               <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                               <option value="Laos">Laos</option>
                                                               <option value="Latvia">Latvia</option>
                                                               <option value="Lebanon">Lebanon</option>
                                                               <option value="Lesotho">Lesotho</option>
                                                               <option value="Liberia">Liberia</option>
                                                               <option value="Libya">Libya</option>
                                                               <option value="Liechtenstein">Liechtenstein</option>
                                                               <option value="Lithuania">Lithuania</option>
                                                               <option value="Luxembourg">Luxembourg</option>
                                                               <option value="Macau">Macau</option>
                                                               <option value="Macedonia">Macedonia</option>
                                                               <option value="Madagascar">Madagascar</option>
                                                               <option value="Malaysia">Malaysia</option>
                                                               <option value="Malawi">Malawi</option>
                                                               <option value="Maldives">Maldives</option>
                                                               <option value="Mali">Mali</option>
                                                               <option value="Malta">Malta</option>
                                                               <option value="Marshall Islands">Marshall Islands</option>
                                                               <option value="Martinique">Martinique</option>
                                                               <option value="Mauritania">Mauritania</option>
                                                               <option value="Mauritius">Mauritius</option>
                                                               <option value="Mayotte">Mayotte</option>
                                                               <option value="Mexico">Mexico</option>
                                                               <option value="Midway Islands">Midway Islands</option>
                                                               <option value="Moldova">Moldova</option>
                                                               <option value="Monaco">Monaco</option>
                                                               <option value="Mongolia">Mongolia</option>
                                                               <option value="Montserrat">Montserrat</option>
                                                               <option value="Morocco">Morocco</option>
                                                               <option value="Mozambique">Mozambique</option>
                                                               <option value="Myanmar">Myanmar</option>
                                                               <option value="Nambia">Nambia</option>
                                                               <option value="Nauru">Nauru</option>
                                                               <option value="Nepal">Nepal</option>
                                                               <option value="Netherland Antilles">Netherland Antilles</option>
                                                               <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                               <option value="Nevis">Nevis</option>
                                                               <option value="New Caledonia">New Caledonia</option>
                                                               <option value="New Zealand">New Zealand</option>
                                                               <option value="Nicaragua">Nicaragua</option>
                                                               <option value="Niger">Niger</option>
                                                               <option value="Nigeria">Nigeria</option>
                                                               <option value="Niue">Niue</option>
                                                               <option value="Norfolk Island">Norfolk Island</option>
                                                               <option value="Norway">Norway</option>
                                                               <option value="Oman">Oman</option>
                                                               <option value="Pakistan">Pakistan</option>
                                                               <option value="Palau Island">Palau Island</option>
                                                               <option value="Palestine">Palestine</option>
                                                               <option value="Panama">Panama</option>
                                                               <option value="Papua New Guinea">Papua New Guinea</option>
                                                               <option value="Paraguay">Paraguay</option>
                                                               <option value="Peru">Peru</option>
                                                               <option value="Phillipines">Philippines</option>
                                                               <option value="Pitcairn Island">Pitcairn Island</option>
                                                               <option value="Poland">Poland</option>
                                                               <option value="Portugal">Portugal</option>
                                                               <option value="Puerto Rico">Puerto Rico</option>
                                                               <option value="Qatar">Qatar</option>
                                                               <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                               <option value="Republic of Serbia">Republic of Serbia</option>
                                                               <option value="Reunion">Reunion</option>
                                                               <option value="Romania">Romania</option>
                                                               <option value="Russia">Russia</option>
                                                               <option value="Rwanda">Rwanda</option>
                                                               <option value="St Barthelemy">St Barthelemy</option>
                                                               <option value="St Eustatius">St Eustatius</option>
                                                               <option value="St Helena">St Helena</option>
                                                               <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                               <option value="St Lucia">St Lucia</option>
                                                               <option value="St Maarten">St Maarten</option>
                                                               <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                               <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                               <option value="Saipan">Saipan</option>
                                                               <option value="Samoa">Samoa</option>
                                                               <option value="Samoa American">Samoa American</option>
                                                               <option value="San Marino">San Marino</option>
                                                               <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                               <option value="Saudi Arabia">Saudi Arabia</option>
                                                               <option value="Senegal">Senegal</option>
                                                               <option value="Seychelles">Seychelles</option>
                                                               <option value="Sierra Leone">Sierra Leone</option>
                                                               <option value="Singapore">Singapore</option>
                                                               <option value="Slovakia">Slovakia</option>
                                                               <option value="Slovenia">Slovenia</option>
                                                               <option value="Solomon Islands">Solomon Islands</option>
                                                               <option value="Somalia">Somalia</option>
                                                               <option value="South Africa">South Africa</option>
                                                               <option value="Spain">Spain</option>
                                                               <option value="Sri Lanka">Sri Lanka</option>
                                                               <option value="Sudan">Sudan</option>
                                                               <option value="Suriname">Suriname</option>
                                                               <option value="Swaziland">Swaziland</option>
                                                               <option value="Sweden">Sweden</option>
                                                               <option value="Switzerland">Switzerland</option>
                                                               <option value="Syria">Syria</option>
                                                               <option value="Tahiti">Tahiti</option>
                                                               <option value="Taiwan">Taiwan</option>
                                                               <option value="Tajikistan">Tajikistan</option>
                                                               <option value="Tanzania">Tanzania</option>
                                                               <option value="Thailand">Thailand</option>
                                                               <option value="Togo">Togo</option>
                                                               <option value="Tokelau">Tokelau</option>
                                                               <option value="Tonga">Tonga</option>
                                                               <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                               <option value="Tunisia">Tunisia</option>
                                                               <option value="Turkey">Turkey</option>
                                                               <option value="Turkmenistan">Turkmenistan</option>
                                                               <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                               <option value="Tuvalu">Tuvalu</option>
                                                               <option value="Uganda">Uganda</option>
                                                               <option value="United Kingdom">United Kingdom</option>
                                                               <option value="Ukraine">Ukraine</option>
                                                               <option value="United Arab Erimates">United Arab Emirates</option>
                                                               <option value="United States of America">United States of America</option>
                                                               <option value="Uraguay">Uruguay</option>
                                                               <option value="Uzbekistan">Uzbekistan</option>
                                                               <option value="Vanuatu">Vanuatu</option>
                                                               <option value="Vatican City State">Vatican City State</option>
                                                               <option value="Venezuela">Venezuela</option>
                                                               <option value="Vietnam">Vietnam</option>
                                                               <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                               <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                               <option value="Wake Island">Wake Island</option>
                                                               <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                               <option value="Yemen">Yemen</option>
                                                               <option value="Zaire">Zaire</option>
                                                               <option value="Zambia">Zambia</option>
                                                               <option value="Zimbabwe">Zimbabwe</option>
                                                      </select>
                                                  </div>
                                                  
                                                 
                                            </div>
                                        </div>
                                        
                                        <br>
                                        
                                        <div class="row" >
                                            <div class="col-md-6" style="display: none;">
                                                  <h5><b>Project Type:</b></h5>
                                                  <div class="input-group">    	
                                                      <span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
                                                      <select class="form-control" name="" id="">
                                                        <option value="">~ Select Project Type ~</option>
                                                        <option>Application Development</option>
                                                        <option>Website Development</option>
                                                        <option>Plugin Development</option>
                                                        <option>Marketing & Sales</option>
                                                      </select>
                                                  </div>
                                            </div>
                                            
                                            <div class="col-md-6" style="display: none;">
                                                  <h5><b>Type of Work:</b></h5>
                                                  <div class="input-group">
                                                      <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>    	
                                                      <select class="form-control" name="typeofwork" id="typeofwork">
                                                        <option value="">~ Select Type of Work ~</option>
                                                        <option>Create from Scratch</option>
                                                        <option>Modifications</option>
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
                                                    <input type="text" class="form-control" name="client_name" id="#" value="" placeholder="Enter Client Name" >
                                                    
                                                  </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                  <h5><b>Client address:</b></h5>
                                                  <div class="input-group">    	
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                                    <input type="text" class="form-control" name="client_address" id="#" value="" placeholder="ex : 796 Silver Harbour, TX 79273, US" >
                                                    
                                                  </div>
                                            </div>
                                          </div>
                                          <br>
                                           
                                          <div class="row">
                                            <div class="col-md-6" style="display: none;">
                                                  <h5><b>Project Hourly Cost:</b></h5>
                                                  <div class="input-group">    	
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
                                                    <input type="number" class="form-control" name="projecthourlycost" id="#" placeholder="Enter Project Hourly Cost">
                                                  </div>
                                            </div>
                                            
                                            <div class="col-md-3" style="display: none;">
                                                  <h5><b>Total Timeline:</b></h5>
                                                  <div class="input-group">    	
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                                    <input type="number" class="form-control" name="total_timeline" id="#" placeholder="Enter Project Timeline">
                                                  </div>
                                            </div>
                                            <div class="col-md-3" style="display: none;">
                                                  <h5><b>Tax %:</b></h5>
                                                  <div class="input-group">    	
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                                    <input type="number" class="form-control" name="projecttax" id="#" placeholder="Enter Tax %">
                                                  </div>
                                            </div>
                                        </div>
                                        
                                        
                                         <br>  
                                         
                                         
                                        <div class="row">
                                            <div class="col-md-12" id="typeofbusinessdiv" style="display: none;">
                                                  <h5><b>Type of Business:</b></h5>
                                                  <div class="input-group">    	
                                                      <span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
                                                      <select class="form-control" name="typeofbusiness" id="typeofbusiness">
                                                        <option value="">~ Select Type of Business ~</option>
                                                        <option> Manufacturing </option>
                                                        <option> Marketing </option>
                                                        <option> Medical </option>
                                                        <option> Sales </option>
                                                        <option> Software </option>
                                                        <option>Others</option>
                                                      </select>
                                                  </div>
                                            </div>
                                        </div>
                                        
                            
                                           
                                        <div class="row">
                                            <div class="col-md-12">
                                                <hr>
                                                  <h5><b>Enter Additional Informations here:</b></h5>
                                                  <div class="input-group">    	
                                                      <span class="input-group-addon"><i>Abc</i></span>
                                                      <textarea name="additionalcomments_step1" id="additionalcomments_step1" class="form-control" rows="4" style="box-shadow:2px 2px 2px #cccccc;"></textarea>
                                                      
                                                  </div>
                                            </div>
                                        </div>
                                        
                                    <br><br>
                                    </div><!--col-md-12-->
								</div>
								<div id="w1-profile" class="tab-pane"><br>
								    <div class="col-md-12">
								            
                                    	<div class="col-md-12">
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
                                                    <hr>
                                                </div>
                
								            
								            <center ><h3 style="display: none;"> Design Details </h3></center>
								            
                                            <div class="row" style="display: none;">
        							            <div class="col-md-4" style="display: none;">
        							                <label style="margin-top:7px;"><h5><b>Do you have referral site for design:</b></h5></label>
        							            </div>
                                                <div class="col-md-2"><br>
                                                    <label class="switch referalsiteswitch"> 
                                                        <input type="checkbox" name="referrallinkcheck" id="refersite">
                                                        <span class="slider"></span>
                                                    </label>
                                                </div>
                                                
                                                <div class="col-md-6" style="display:none;margin-top:4px;" id="referrallinkurldiv">
                                                    <div class="input-group">    	
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-link"></i></span>
                                                        <input type="text" class="form-control" name="referrallinkurl" placeholder="Enter referral url here">
                                                    </div>
                                                </div> 
                                            </div>   
                                            
                                            <br>
                                            
                                          <div class="sectionb" style="border-top:1px solid #D5D5D5;display: none;"><br>
                                          <div class="row">
                                            <div class="col-md-2" >
                                              <h5><b>Website Pages:</b></h5>
                                            </div>  
                                            <div class="col-md-8">
                                                <select multiple name="websitepages[]" id="selectman" data-role="tagsinput">
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
                                              <div class="col-md-12" style="margin-left:0%;display: none;">
                                                <h5><b>Page Designs and Details</b></h5>
                                                <br>
                                                <div class="col-md-12 tabs"style="display: none;">
                                                    <div class="section">
                                                        <span class="accordion"><b>Header</b></span><br>
                                                        <div class="panel">
                                                            <div class="row">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-5">
                                                                    <label> Design URL : </label>
                                                                    <input type="text" name="designurl[]">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label style="float:left;margin-right: 3px;">Design Image : </label>
                                                                    <input type="file" name="designimage[]" accept="image/x-png,image/gif,image/jpeg" />
                                                                </div><br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <hr>
                                                    
                                                    <div class="section">
                                                        <span class="accordion"><b>Footer</b></span><br>
                                                        <div class="panel">
                                                            <div class="row">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-5">
                                                                    <label> Design URL : </label>
                                                                    <input type="text" name="designurl[]">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label style="float:left;margin-right: 3px;">Design Image : </label>
                                                                    <input type="file" name="designimage[]" accept="image/x-png,image/gif,image/jpeg" />
                                                                </div><br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="section">
                                                        <span class="accordion"><b>Home</b></span><br>
                                                        <div class="panel">
                                                            <div class="row">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-5">
                                                                    <label> Design URL : </label>
                                                                    <input type="text" name="designurl[]">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label style="float:left;margin-right: 3px;">Design Image : </label>
                                                                    <input type="file" name="designimage[]" accept="image/x-png,image/gif,image/jpeg" />
                                                                </div><br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!--div class="section"><br><br><div class="panel"><div class="row"><div class="col-md-1"></div><div class="col-md-5"><label> Design URL : </label><input type="text" name="designurl"></div><div class="col-md-6"><label style="float:left;margin-right: 3px;">Design Images</label><input type="file" accept="image/x-png,image/gif,image/jpeg" /></div><br></div></div></div-->
                                                </div>
                                              </div>
                                          </div>
                                          
                                        </div>
                                          
                                          <hr>
                                          
                                          <div class="row" style="display: none;">
                                              <center>
                                                  <h3>
                                                      Enable Woocommerce &nbsp &nbsp
                                                      <label class="switch">
                                                        <input type="checkbox" name="enablewoocommerce" id="woocommerce">
                                                        <span class="slider"></span>
                                                      </label>
                                                  </h3>
                                              </center>
                                              
                                                <div class="col-md-12">
                                                    <div class="row">
                                                      <br>
                                                      <div class="col-md-12 wootab">
                                                    
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
                                                        <input type="color" class="form-control" name="headercolor" id="headercolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Footer Color:</h5>
                                                      <div class="input-group">    	
                                                        <span class="input-group-addon"><img class="colorpickericon" src="<?php echo base_url(); ?>assets/icons/color-picker.jpg"></span>
                                                        <input type="color" class="form-control" name="footercolor" id="footercolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Background Color:</h5>
                                                      <div class="input-group">    	
                                                        <span class="input-group-addon"><img class="colorpickericon" src="<?php echo base_url(); ?>assets/icons/color-picker.jpg"></span>
                                                        <input type="color" class="form-control" name="backgroundcolor" id="backgroundcolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Text Color:</h5>
                                                      <div class="input-group">    	
                                                        <span class="input-group-addon"><img class="colorpickericon" src="<?php echo base_url(); ?>assets/icons/color-picker.jpg"></span>
                                                        <input type="color" class="form-control" name="textcolor" id="textcolor">
                                                      </div>
                                                </div>
                                            </div><!-- col-md-12 -->
                                            
                                            <div class="col-md-12">
                                                <div class="col-md-3">
                                                      <h5>Button Color:</h5>
                                                      <div class="input-group">    	
                                                        <span class="input-group-addon"><img class="colorpickericon" src="<?php echo base_url(); ?>assets/icons/color-picker.jpg"></span>
                                                        <input type="color" class="form-control" name="buttoncolor" id="buttoncolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Button Hover Color:</h5>
                                                      <div class="input-group">    	
                                                        <span class="input-group-addon"><img class="colorpickericon" src="<?php echo base_url(); ?>assets/icons/color-picker.jpg"></span>
                                                        <input type="color" class="form-control" name="buttonhovercolor" id="buttonhovercolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Menu Color:</h5>
                                                      <div class="input-group">    	
                                                        <span class="input-group-addon"><img class="colorpickericon" src="<?php echo base_url(); ?>assets/icons/color-picker.jpg"></span>
                                                        <input type="color" class="form-control" name="menucolor" id="menucolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Menu Hover Color:</h5>
                                                      <div class="input-group">    	
                                                        <span class="input-group-addon"><img class="colorpickericon" src="<?php echo base_url(); ?>assets/icons/color-picker.jpg"></span>
                                                        <input type="color" class="form-control" name="menuhovercolor" id="menuhovercolor">
                                                      </div>
                                                </div>
                                            </div><!-- col-md-12 -->
                                            
                                            <div class="col-md-12">
                                                <div class="col-md-3">
                                                      <h5>Heading Text Color:</h5>
                                                      <div class="input-group">    	
                                                        <span class="input-group-addon"><img class="colorpickericon" src="<?php echo base_url(); ?>assets/icons/color-picker.jpg"></span>
                                                        <input type="color" class="form-control" name="headingtextcolor" id="headingtextcolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Paragraph Text Color:</h5>
                                                      <div class="input-group">    	
                                                        <span class="input-group-addon"><img class="colorpickericon" src="<?php echo base_url(); ?>assets/icons/color-picker.jpg"></span>
                                                        <input type="color" class="form-control" name="paragraphtextcolor" id="paragraphtextcolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Highligting Text Color:</h5>
                                                      <div class="input-group">    	
                                                        <span class="input-group-addon"><img class="colorpickericon" src="<?php echo base_url(); ?>assets/icons/color-picker.jpg"></span>
                                                        <input type="color" class="form-control" name="highlightingtextcolor" id="highlightingtextcolor">
                                                      </div>
                                                </div>
                                                
                                                <div class="col-md-3">
                                                      <h5>Font Style:</h5>
                                                      <div class="input-group">    	
                                                        <span class="input-group-addon"><b>A</b><u>b</u><i>c</i></span>
                                                        <input type="text" class="form-control" name="fontstyle" id="fontstyle" placeholder="Enter font family">
                                                      </div>
                                                </div>
                                                
                                            </div><!-- col-md-12 -->
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-12" style="display: none;">
                                                <hr>
                                                  <h5><b>Enter additional comments here:</b></h5>
                                                  <div class="input-group">    	
                                                      <span class="input-group-addon"><i>Abc</i></span>
                                                      <textarea name="additionalcomments_step2" id="additionalcomments_step2" class="form-control" rows="4" style="box-shadow:2px 2px 2px #cccccc;"></textarea>
                                                      
                                                  </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <br><br>
								    </div><!-- col-md-12 -->
								</div>
								<div id="w1-confirm" class="tab-pane" ><br>
									<div class="col-md-12" style="display: none;">
									    <div class="row">
                                              <center>
                                                  <h3>
                                                      Enable Payment Gateway &nbsp &nbsp
                                                      <label class="switch">
                                                        <input type="checkbox" name="enablepaymentgateway" id="enablepaymentgateway">
                                                        <span class="slider"></span>
                                                      </label>
                                                  </h3>
                                                </center>
                                                  
                                                  <hr>
                                                  
                                                <div class="row" id="paymentgatewaydiv" style="display:none;">
                                                    <div class="col-md-12">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-3">
                                                            <h5><b>Payment Gateway:</b></h5>
                                                        </div>    
                                                        <div class="col-md-4">
                                                            <div class="input-group">    	
                                                              <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                                              <select class="form-control" name="paymentgateway" id="paymentgateway">
                                                                <option value="">~ Select Payment Gateway ~</option>
                                                                <option> Paypal </option>
                                                                <option> Stripe </option>
                                                                <option> Square </option>
                                                                <option> Payfast </option>
                                                                <option> Klarna </option>
                                                                <option>Others</option>
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
                                                      <textarea name="additionalcomments_step3" id="additionalcomments_step3" class="form-control" rows="4" style="box-shadow:2px 2px 2px #cccccc;"></textarea>
                                                      
                                                  </div>
                                            </div>
                                        </div>
                                           
                                        <br>   
                                           
                                        <!--<div class="row">-->
                                        <!--   <center>-->
                                        <!--        <input type="submit" name="submit" value="Create Project" class="btn btn-primary" style="border-radius:7px;">-->
                                        <!--        <a href="<?php // echo base_url(); ?>projects" class="btn btn-danger" style="border-radius:7px;">Cancel</a>-->
                                        <!--   </center> <br><br>-->
                                        <!--</div>-->
                                    </div>    
                                        
								<br></div>
								
								<div id="w1-assign" class="tab-pane"><br>
									<div class="col-md-12">
									    <div class="row">
                                              <center>
                                                      <b style="font-size:17px;"> Assign To : </b> <br>
                                                      
                                                        <select name="assignedto[]" multiple style="font-size:17px; border:1px solid #e2e2e2; border-radius:4px;overflow-y: auto;">
                                                            <?php foreach($users as $user) { ?>
                                                                <option value="<?php echo $user['login_id']; ?>"><?php echo $user['first_name'].' '.$user['last_name']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                </center>
                                              <br><br>
                                              
                                              <h5><b>Note to assigned user:</b></h5>
                                              <div class="input-group">    	
                                                  <span class="input-group-addon"><i>Abc</i></span>
                                                  <textarea name="assignedtonote" id="assignedtonote" class="form-control" rows="4" style="box-shadow:2px 2px 2px #cccccc;"></textarea>
                                                  
                                              </div>
                                              
                                           </div> 
                                           
                                        <br>   
                                           
                                        <div class="row">
                                           <center>
                                                <input type="submit" name="submit" value="Create Project" class="btn btn-primary" style="border-radius:7px;">
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
    jQuery(".wootab").html('<div class="wsection"><span class="accordion"><b>Product Page</b></span><br><br><div class="panel"><div class="row"><div class="col-md-1"></div><div class="col-md-5"><label> Design URL : </label><input type="text" name="wooproductpageurl"></div><div class="col-md-6"><label style="float:left;margin-right: 3px;">Design Image : </label><input type="file" name="wooproductpageimage" accept="image/x-png,image/gif,image/jpeg" /></div><br></div></div></div><div class="wsection"><span class="accordion"><b>Shop Page</b></span><br><br><div class="panel"><div class="row"><div class="col-md-1"></div><div class="col-md-5"><label> Design URL : </label><input type="text" name="wooshoppageurl"></div><div class="col-md-6"><label style="float:left;margin-right: 3px;">Design Image : </label><input type="file" name="wooshoppageimage" accept="image/x-png,image/gif,image/jpeg" /></div><br></div></div></div><div class="wsection"><span class="accordion"><b>Cart and Checkout Page</b></span><br><br><div class="panel"><div class="row"><div class="col-md-1"></div><div class="col-md-5"><label> Design URL : </label><input type="text" name="woocarturl"></div><div class="col-md-5"><label style="float:left;margin-right: 3px;">Design Image : </label><input type="file" name="woocartimage" accept="image/x-png,image/gif,image/jpeg" /></div><br></div></div></div>');
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
    jQuery(".tabs").append('<div class="section"><span class="accordion"><b>'+element+'</b></span><br><div class="panel"><div class="row"><div class="col-md-1"></div><div class="col-md-5"><label> Design URL : </label><input type="text" name="designurl[]"></div><div class="col-md-6"><label style="float:left;margin-right: 3px;">Design Image : </label><input type="file" name="designimage[]" accept="image/x-png,image/gif,image/jpeg" /></div><hr></div></div></div>');
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






<?php /* <!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Tags Input</title>
    <meta name="robots" content="index, follow" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url()?>bootstrap-tagsinput-latest/dist/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rainbow/1.2.0/themes/github.css">
    <style>
      .accordion {
        background-color: #eee;
        color: #444;
        cursor: pointer;
        padding: 10px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
      }

      .active, .accordion:hover {
        background-color: #ccc;
      }

      .active:after {
        content: "\2212";
      }

      .section
      {
          border:1px solid #eee;
          margin-bottom: 5px;
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
    <div class="container">
      <br><br><br>
      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-3">
          <label><h3>Do you have referal site</h3></label>
        </div>
        <div class="col-md-1">
          <br>
          <label class="switch">
            <input type="checkbox" id="refersite">
            <span class="slider"></span>
          </label>
        </div>  
        <div class="col-md-4">
        </div> 
      </div>  
        <br><br>
      <div class="sectiona" style="display: none">
        <div class="row">
          <h3>Loading...</h3>
        </div>  
       </div> 
      <div class="sectionb">
      <div class="row">
        <div class="col-md-4">
          <h3>Website Pages</h3>
        </div>  
        <div class="col-md-6">
          <br>
            <select multiple id="selectman" data-role="tagsinput">
            <option value="Header">Header</option>
            <option value="Footer">Footer</option>
            <option value="Home">Home</option>
            <option value="Contact Us">Contact Us</option>
          </select>
           </div> 
        <div class="col-md-2">
          <button class="btn btn-primary" style="margin-top: 18px;" onClick="generatedetails()">Generate Design</button>
        </div> 
      </div> 
      <div class="row" >
        <h3>Page Designs and Details</h3>
        <div class="col-md-12 tabs">
  
        <div class="section"><button class="accordion">Design</button><br><br><div class="panel"><div class="row"><div class="col-md-1"></div><div class="col-md-5"><label> Design URL : </label><input type="text" name="designurl"></div><div class="col-md-6"><label style="float:left;margin-right: 3px;">Design Images</label><input type="file" accept="image/x-png,image/gif,image/jpeg" /></div><br></div></div></div>
        </div>  
      </div>
      <br><br>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-2">
          <br>
          <label class="switch">
            <input type="checkbox" id="woocommerce">
            <span class="slider"></span>
          </label>
        </div>  
        <div class="col-md-3">
          <h3>Enable Woocommerce</h3>
        </div> 
        <div class="col-md-3"></div>
      </div>
        <div class="row">
          <br>
          <div class="col-md-12 wootab">
        
          </div> 
          <br><br>      
        </div>

        <div class="row">
          <div class="col-md-3">
            <h3>Color Pattern One</h3>
          </div>  
          <div class="col-md-3">
            <br>
            <input type="color" name="colorpattern">
          </div>

          <div class="col-md-3">
            <br>
            <input type="color" name="colorpattern">
          </div>
          <div class="col-md-3">
            <br>
            <input type="color" name="colorpattern">
          </div>
        </div>  
        <div class="row">
          <div class="col-md-3">
            <h3>Color Pattern Two</h3>
          </div>  
          <div class="col-md-3">
            <br>
            <input type="color" name="colorpattern">
          </div>

          <div class="col-md-3">
            <br>
            <input type="color" name="colorpattern">
          </div>
          <div class="col-md-3">
            <br>
            <input type="color" name="colorpattern">
          </div>
        </div> 
      </div>
    </div>
    <script type="text/javascript">
      jQuery("#woocommerce").click(function(){
  console.log("clicked")
  var checker = document.getElementById("woocommerce");
  if(checker.checked == true)
  {
    console.log("checked");
    jQuery(".wootab").html('<div class="wsection"><button class="accordion">Product Page</button><br><br><div class="panel"><div class="row"><div class="col-md-1"></div><div class="col-md-5"><label> Design URL : </label><input type="text" name="designurl"></div><div class="col-md-6"><label style="float:left;margin-right: 3px;">Design Images</label><input type="file" accept="image/x-png,image/gif,image/jpeg" /></div><br></div></div></div><div class="wsection"><button class="accordion">Shop Page</button><br><br><div class="panel"><div class="row"><div class="col-md-1"></div><div class="col-md-5"><label> Design URL : </label><input type="text" name="designurl"></div><div class="col-md-6"><label style="float:left;margin-right: 3px;">Design Images</label><input type="file" accept="image/x-png,image/gif,image/jpeg" /></div><br></div></div></div><div class="wsection"><button class="accordion">Cart and Checkout Page</button><br><br><div class="panel"><div class="row"><div class="col-md-1"><label class="switch"><input type="checkbox" id="woocommerce"><span class="slider"></span></label></div><div class="col-md-2" style="border-right: 1px solid black;"><label>Use Default</label></div><div class="col-md-4" style="border-right: 1px solid black;"><label> Design URL : </label><input type="text" name="designurl"></div><div class="col-md-5"><label style="float:left;margin-right: 3px;">Design Images</label><input type="file" accept="image/x-png,image/gif,image/jpeg" /></div><br></div></div></div>');
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
    jQuery(".tabs").append('<div class="section"><button class="accordion">'+element+'</button><br><br><div class="panel"><div class="row"><div class="col-md-1"></div><div class="col-md-5"><label> Design URL : </label><input type="text" name="designurl"></div><div class="col-md-6"><label style="float:left;margin-right: 3px;">Design Images</label><input type="file" accept="image/x-png,image/gif,image/jpeg" /></div><br></div></div></div>');
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
    <br><br><br><br>
  </body>
</html>

*/ ?>

<script>
    $(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
</script>

<script>
    function check_form_validation()
    {   

        var projectname = document.getElementById('projectname').value;
        var countryname = document.getElementById('countryname').value;
        var projecttype = document.getElementById('projecttype').value;
        var typeofwork = document.getElementById('typeofwork').value;
        var typeofbusiness = document.getElementById('typeofbusiness').value;
        
        /*if(projectname == '' || projectname == null) {
            
            alert('Project name is required!');
            return false;
            
        } else if(countryname == '' || countryname == null) {
            
            alert('Country name is required!');
            return false;
            
        } else if(projecttype == '' || projecttype == null) {
            
            alert('Project type is required!');
            return false;
            
        } else if(typeofwork == '' || typeofwork == null) {
            
            alert('Type of work is required!');
            return false;
            
        } else if(typeofbusiness == '' || typeofbusiness == null) {
            
            alert('Type of business is required!');
            return false;
            
        } else {
            
            return true;
            
        }*/
        
    }
</script>
