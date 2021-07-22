<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
		$this->load->database();
		$this->load->model('login_model');
		$this->load->library('form_validation');
		
	}
	
	public function index()
	{		
		if($this->session->userdata('loggedin') == 1){
			redirect('project');
		}
		
		//$data['branches'] = $this->common_model->get_recordset('branch');
		$this->load->view('admin/login');
	
	}
	
	 public function checklogin()
	 {

	 	$uname = $this->input->post('username');
	 	$pass = $this->input->post('password');
	 	
	 	$this->form_validation->set_rules('username', 'Username', 'trim|required');
	 	$this->form_validation->set_rules('password', 'Password', 'trim|required');
	 	
		$checklogin = $this->login_model->login($uname,$pass);
		$logindata = $this->login_model->logindata($uname,$pass);
		
    		if($checklogin == 1){
    		    
    		    if($logindata['status'] == 0) {
    		        
    		        $this->session->set_flashdata('msg','Your account has deactivated! Please contact administrator.');
    			    redirect('login');
    		        
    		    } else {
    		        
        			$this->session->set_userdata('loggedin',1);
        			$this->session->set_userdata('user_id',$logindata['login_id']);
        			$this->session->set_userdata('user_type',$logindata['type']);
        			$this->session->set_userdata('user_role',$logindata['role']);
        			$this->session->set_userdata('user_email',$logindata['email']);
        			$this->session->set_userdata('user_name',$logindata['first_name'].' '.$logindata['last_name']);
        			
        			    if($this->session->userdata('user_role') == 23) {
            			    redirect('tasks');
            			} else if($this->session->userdata('user_role') == 24) {
            			    redirect('requirement');
            			}else{
            			    redirect('circular');
            			}
    		    }
    		}
    		else
    		{
    			$this->session->set_flashdata('msg','Username or Password Incorrect');
    			redirect('login');
    		}	
	 	}


	 	public function signup(){

    	 	$this->load->view('admin/signup');

	    } 
	 	
	 	public function signup_save(){
         
         
    //         $data['title'] = 'Requirement';
		  //  $data['subtitle'] = 'Requirements';
	    	 	    	 	   
    	 	$this->form_validation->set_rules('first_name', 'First name', 'trim|required');
    	 	$this->form_validation->set_rules('last_name', 'Last name', 'trim|required');
    	 	$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
    	 	$this->form_validation->set_rules('mobilenumber', 'Mobile', 'trim|required');
    	 	$this->form_validation->set_rules('email', 'Email', 'trim|required');
    	 	$this->form_validation->set_rules('password', 'Password', 'trim|required');
                	 	
    	 	    if($this->form_validation->run()){
    	 	        
    	 	     //   $verification_key = md5(rand());
    	 	     
    	 	     
    	 	        $encrypted_password  = md5($this->input->post('password'));
            	 	$data['first_name']  = $this->input->post('first_name');
            	 	$data['last_name']   = $this->input->post('last_name');
            	 	$data['gender']      = $this->input->post('gender');
            	 	$data['mobile']      = $this->input->post('mobilenumber');
            	 	$data['skype']       = $this->input->post('skypeid');
            	 	$email               = $this->input->post('email');
            	 	$data['email']       = $email;
            	 	$data['password']    = $encrypted_password;
            	 	$data['role']        = '24';
            	 	$data['type']        = 'client';
            	 	$data['created_time']= date('Y-m-d H:i');
            	 	$data['created_by'] = '1';
            	 	$data['status'] = '1';
            	 
            	    $six_digit_random_number = mt_rand(100000, 999999);
            	    $data['otp'] = $six_digit_random_number;
                    
                    // email funciton 
                      
                      $config = Array(
                      'protocol' => 'smtp',
                      'smtp_host' => 'ssl://smtp.googlemail.com',
                      'smtp_port' => 465,
                      'smtp_user' => 'passvino@gmail.com', // change it to yours
                      'smtp_pass' => 'Vinoth@123', // change it to yours
                      'mailtype' => 'html',
                      'charset' => 'iso-8859-1',
                      'wordwrap' => TRUE
                    );
                      
                      $message = 'One Time OTP'. - $six_digit_random_number;
                      $this->load->library('email', $config);
                      $this->email->set_newline("\r\n");
                      $this->email->from('passvino@gmail.com'); // change it to yours
                      $this->email->to($email);// change it to yours
                      $this->email->subject('One time OTP');
                      $this->email->message($message);
                      $this->email->send();
                      
                    //   if($this->email->send())
                        // {
                        //   echo 'Email sent.';
                        // }
                        //   else
                        // {
                        //   show_error($this->email->print_debugger());
                        // }
                    
                    // email funciton 
            	    
            	    
            	 	$id = $this->login_model->signvalidation($data);


            	 	if($id > 0){
            	 	    
            	 	     redirect('login/signup');
            	 	     
            	 	}else{
            	 	    
            	 	     redirect('login/signup');
            	 	     
            	 	}
    	 	        
    	 	    }else{
    	 	
    	 	
                      redirect('login/signup');
    	 	          
    
    	 	    }
    	 	   
    
	 	
	 	}
	 	






}
