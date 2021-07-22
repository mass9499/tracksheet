<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
	    date_default_timezone_set('Asia/Kolkata');
	    parent::__construct();
		$this->load->database();
		$this->load->model('user_model');
		if($this->session->userdata('loggedin') != '1')
		{
		    redirect('login');
		}
	}

	public function index()
	{
		$data['title'] = 'Users';
		$data['subtitle'] = 'Users list';
		
		$id = $this->session->userdata('userid');		
		
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/user');
		$this->load->view('admin/templates/footer');
	}
	public function adduser()
	{
		$data['title'] = 'Users';
		$data['subtitle'] = 'Add User';
		
		$id = $this->session->userdata('userid');		
		$data['roles'] = $this->user_model->get_roles();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/useradd');
		$this->load->view('admin/templates/footer');
	}
	public function edit_user_view($login_id)
	{
	    $data['title'] = 'Users';
		$data['subtitle'] = 'Edit User';
		$data['user'] = $this->db->get_where('login_tbl', array('login_id'=>$login_id))->row_array();
		$data['roles'] = $this->user_model->get_roles();
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/useredit');
		$this->load->view('admin/templates/footer');
	}
	public function adddusersave()
	{
		$udata['first_name'] = $this->input->post('firstname');
		$udata['last_name'] = $this->input->post('lastname');
		$udata['email'] = $this->input->post('useremail');
		$udata['role'] = $this->input->post('userrole');
		$udata['password'] = md5($this->input->post('userpassword'));
		$udata['type'] = 'user';
		$udata['status']=1;
		//$id = $this->session->userdata('userid');	
		$udata['created_time'] = date('Y-m-d H:i:s');
		$udata['created_by'] = $this->session->userdata('user_id');
		
		if($this->db->insert('login_tbl', $udata)) {
	        $this->session->set_flashdata('user_add_success', 'User created successfully!');   
	    } else {
	        $this->session->set_flashdata('user_add_failed', 'Failed to create User!');   
	    }
		redirect('user');
		
	}
	
	public function editusersave()
	{
	    if($this->session->userdata['user_id'] = 73 || $this->session->userdata['user_id'] = 75) {
	        date_default_timezone_set('Asia/Kolkata');
	    } else {
	        date_default_timezone_set('Australia/Sydney');
	    }
	    
	    
	    $user_id = $this->input->post('user_id');
	    $userrow = $this->db->get_where('login_tbl', array('login_id'=>$user_id))->row_array();
	    
		$udata['name'] = $this->input->post('username');
		$udata['email'] = $this->input->post('useremail');
		$udata['role'] = $this->input->post('userrole');
		$password = $this->input->post('userpassword');
		if($password == $userrow['password']) {
		    $udata['password'] = $password;
		} else {
		    $udata['password'] = md5($this->input->post('userpassword'));
		}
		$udata['type'] = 'user';
		$udata['status'] = $this->input->post('userstatus');
		
		if($this->user_model->edit_user_details($udata, $user_id)) {
	        $this->session->set_flashdata('user_edit_success', 'User details updated successfully!');   
	    } else {
	        $this->session->set_flashdata('user_edit_failed', 'Failed to update user details!');   
	    }
		redirect('user');
		
	}
	
	public function recover_login()
	{
	    $email = $this->input->post('email');
	    $uniqid = uniqid();
	    $data['temp_pass'] = md5($uniqid);
	    
	    $exists = $this->user_model->check_email_exists($email);
	    
	    if(!empty($exists)) {
		$this->user_model->update_temp_password($data, $email);
	        
	        $this->session->set_flashdata('login_recovery_success', 'A new password has sent to your registered email.<br> You can use it temporarily.');
	    } else {
	        $this->session->set_flashdata('login_recovery_failed', 'The email you entered is unavailable in our server!<br> Please enter the existing one.');
	    }
	    
	    redirect('login');
	    
	}
	
	public function roles()
	{
	    $data['title'] = 'Roles';
		$data['subtitle'] = 'User roles';
		$data['roles'] = $this->db->get_where('roles_tbl', array('role_id!='=>1))->result_array();
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/roles');
		$this->load->view('admin/templates/footer');
	}
	
	public function role_add()
	{
		$role_name = $this->input->post('rolename');
		$trimmed = str_replace(' ','',$role_name);
		$lowered = strtolower($trimmed);
		
		$data['role_name'] = $role_name;
		$data['role_code'] = $lowered;
		$data['created_date'] = date('Y-m-d H:i:s');
		$data['created_by'] = $this->session->userdata('user_id');
		
		$roleexist = $this->db->get_where('roles_tbl', array('role_name'=>$role_name))->row_array();
	     
	     if(empty($roleexist)) {
	         
    		if($this->db->insert('roles_tbl', $data)) {
    		    $last_insert_id = $this->db->insert_id();
    		    $screens = $this->db->get('screen_permissions')->result_array();
    		    
    		    foreach($screens as $screen) {
    		        $roledata['role'] = $last_insert_id;
    		        $roledata['screen_name'] = $screen['screen_name'];
    		        $roledata['screen_code'] = $screen['screen_code'];
    		        $roledata['view_option'] = 0;
    		        $roledata['add_option'] = 0;
    		        $roledata['edit_option'] = 0;
    		        $roledata['approve_option'] = 0;
    		        $roledata['delete_option'] = 0;
    		        
    		        $this->db->insert('role_permissions', $roledata);
    		    }
    		    
    		    $this->session->set_flashdata('role_resp_1', '<strong>Success! </strong>Role created successfully.');
    		    
    		}
    	
		} else {
		    $this->session->set_flashdata('role_resp_0', '<b>Role name already exists!</b>');
		}
		
		
		redirect('user/roles');
	}
	
	public function role_edit()
	{
	    $data['title'] = 'Roles';
		$data['subtitle'] = 'Edit role';
	    $role_id = $this->input->post('roleid');
	    $data['roles'] = $this->user_model->get_roles();
	    $data['role'] = $this->db->get_where('roles_tbl', array('role_id'=>$role_id))->row_array();
	    $this->load->view('admin/templates/header', $data);
		$this->load->view('admin/roles_edit');
		$this->load->view('admin/templates/footer');
	}
	
	public function role_update()
	{
	    $role_id = $this->input->post('roleid');
	    
	    $role_name = $this->input->post('rolename');
		$trimmed = str_replace(' ','',$role_name);
		$lowered = strtolower($trimmed);
		
		$data['role_name'] = $role_name;
		$data['role_code'] = $lowered;
		
		$this->db->where('role_id', $role_id);
		$this->db->update('roles_tbl', $data);
		
	    redirect('user/roles');
	}
	
	public function role_permissions($role_id)
	{
	    $data['title'] = 'User Permissions';
		$data['subtitle'] = 'Set user permissions';
	    $data['role'] = $this->db->get_where('roles_tbl', array('role_id'=>$role_id))->row_array();
	    $data['screen_permissions'] = $this->db->order_by('screen_name', 'ASC')->get_where('role_permissions', array('role'=>$role_id))->result_array();
	    $this->load->view('admin/templates/header', $data);
		$this->load->view('admin/set_user_permissions');
		$this->load->view('admin/templates/footer');
	}
	
	public function role_permissions_save()
	{
	    $role_permission_id = $this->input->post('role_permission_id');
	    $icount = count($role_permission_id);
	    $i = '';
	    
	    for($i=0; $i<$icount; $i++) {
	        $rpid = $role_permission_id[$i];
	        $rpdata['view_option'] = $this->input->post('viewoption_'.$i);
	        $rpdata['add_option'] = $this->input->post('addoption_'.$i);
	        $rpdata['edit_option'] = $this->input->post('editoption_'.$i);
	        $rpdata['approve_option'] = $this->input->post('approveoption_'.$i);
	        $rpdata['delete_option'] = $this->input->post('deleteoption_'.$i);
	   
	        $this->db->where('role_permission_id', $rpid);
	        $this->db->update('role_permissions', $rpdata);
	    }
	    
	    redirect('user/roles');
	}
	
	public function user_profile()
	{
	    
	    $data['title'] = 'User Profile';
		$data['subtitle'] = '';
		$user_id = $this->session->userdata('user_id');
	
	    $data['user_profile'] = $this->user_model->get_user_profile($user_id);
	    
	    $data['roles'] = $this->user_model->get_roles();
	    
	    $this->load->view('admin/templates/header', $data);
		$this->load->view('admin/user_profile');
		$this->load->view('admin/templates/footer');
	}
	
	
	public function user_profile_save()
	{
	    $user_id = $this->input->post('user_id');
	    $data['first_name'] = $this->input->post('firstname');
	    $data['last_name'] = $this->input->post('lastname');
	    $data['role'] = $this->input->post('userrole');
	    $data['email'] = $this->input->post('useremail');
	    $data['mobile'] = $this->input->post('usermobile');
	    $data['skype'] = $this->input->post('userskype');
	    $data['date_of_birth'] = $this->input->post('dateofbirth');
	    $data['age'] = $this->input->post('age');
	    $data['gender'] = $this->input->post('gender');
            
            $basename = str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
            
            //UPLOAD PROTOCOL
	            $config_profilepic['upload_path']          = $_SERVER['DOCUMENT_ROOT'].$basename.'assets/profile_pictures';
                $config_profilepic['allowed_types']        = 'jpg|png';
                $config_profilepic['max_size']             = 5000;
                $config_profilepic['max_width']            = 3500;
                $config_profilepic['max_height']           = 2625;
                $config_profilepic['file_name']            = $user_id;
                
                $filepath_png = $_SERVER['DOCUMENT_ROOT'].$basename.'assets/profile_pictures/'.$user_id.'.png';
                $filepath_jpg = $_SERVER['DOCUMENT_ROOT'].$basename.'assets/profile_pictures/'.$user_id.'.jpg';
                
                if(file_exists($filepath_jpg)) {
                    unlink($filepath_jpg);
                } else if(file_exists($filepath_png)) {
                    unlink($filepath_png);
                } else {
                    echo 'file not exists';
                }
                
                $this->load->library('upload', $config_profilepic);
                $this->upload->initialize($config_profilepic);
                
                $profilepic_name = $_FILES['file_profilepicture']['name'];
                
                if(!empty($profilepic_name)) {
                    
                        if ( ! $this->upload->do_upload('file_profilepicture'))
                        {
                            $error = array('error' => $this->upload->display_errors());
                            $data['file_profilepicture'] = '';
                            $profilepic_error_msg = $error['error'];
                            $this->session->set_flashdata('errprofilepic', $profilepic_error_msg);
                            
                        }
                        else
                        {
                            $profilepic_success_data = array('upload_data' => $this->upload->data());
                            $data['file_profilepicture'] = 'assets/profile_pictures/'.$profilepic_success_data['upload_data']['file_name'];
                            $this->session->set_flashdata('sucprofilepic', "Profile picture uploaded successfully.");
                            
                        }
                        
                }
        
	    if($this->user_model->update_profile($data, $user_id)) {
	        $this->session->set_flashdata('profile_resp_1', '<strong>Success! </strong>Profile updated successfully.');
	    } else {
	        $this->session->set_flashdata('profile_resp_0', '<strong>Failed! </strong>Unable to update profile.');
	    }
	    redirect('user/user_profile');
	}
	
}
