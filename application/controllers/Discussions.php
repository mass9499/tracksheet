<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Discussions extends CI_Controller {

	public function __construct()
	{
	    date_default_timezone_set('Asia/Kolkata'); 
	    parent::__construct();
		$this->load->database();
		$this->load->model('project_model');
        if($this->session->userdata('loggedin') != '1')
		{
		    redirect('login');
		}
	}

	public function index()
	{
	        
		$data['title'] = 'Discussions';
		$data['subtitle'] = 'Discussion List';
		$userid = $this->session->userdata('user_id');		
		$role = $this->session->userdata('user_role');
		
		$data['discussions'] = $this->project_model->get_project_discussions();
		
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/discussion');
		$this->load->view('admin/templates/footer');
		
	}
	
	public function discussion_view($disc_id)
	{
		$data['title'] = 'Discussions';
		$data['subtitle'] = 'View discussion';
		
		$data['projects']= $this->db->get_where('project_tbl')->result_array();
		$data['discussion'] = $this->project_model->get_discussion_by_id($disc_id);
		$discussion_projects = $this->project_model->get_project_discussion($disc_id);
		$data['discussion_projects'] = $this->project_model->get_project_discussion_by_id($disc_id);
        
        foreach($discussion_projects as $project) 
        {
            $project_users = $project->assignedto;
            $project_users_array = explode(":", $project_users);
             
                 foreach($project_users_array as $users)
                 {
                     $project_user_data = $this->db->get_where('login_tbl', array('login_id' =>$users))->row_array();
                     
                     $project->users[] = $project_user_data;
                 }
      
      
        }   
      $data['discussion_projects'] = json_decode(json_encode($discussion_projects), true);
        
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/view_discussion');
		$this->load->view('admin/templates/footer');
	}
	
	public function project_edit($project_id)
	{
		$data['title'] = 'Projects';
		$data['subtitle'] = 'Edit Project';
		$id = $this->session->userdata('userid');		
        $data['users']= $this->db->get_where('login_tbl',array('type!=' => 'superadmin'))->result_array();
		$data['project_data'] = $this->project_model->get_project_details($project_id);
		$data['project_tasks'] = $this->db->get_where('project_tasks_tbl', array('project'=>$project_id))->result_array();
		$project_uniq_id = $data['project_data']['unique_id'];
		$data['get_design_pages'] = $this->project_model->get_project_designs($project_uniq_id);
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/project_edit');
		$this->load->view('admin/templates/footer');
	}
	
	public function add_discussion()
	{
		$data['title'] = 'Discussions';
		$data['subtitle'] = 'Add new';
		$id = $this->session->userdata('userid');		
        $data['users']= $this->db->get_where('login_tbl',array('type' => 'user'))->result_array();
        $data['projects']= $this->db->order_by('project_name', 'DESC')->get_where('project_tbl')->result_array();
        $data['disassign']= $this->db->get_where('login_tbl',array('type!=' => 'superadmin'))->result_array();
        
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/add_discussion');
		$this->load->view('admin/templates/footer');
	}
	
	public function discussion_save()
	{
	    $data['discussion_datetime'] = date('Y-m-d H:i:s');
	    $data['discussion_created_by'] = $this->session->userdata('user_id');
        
	    $disctype = $this->input->post('disctpye');
	    $projects = $this->input->post('projects');
	    $discussion_notes = $this->input->post('discussion_notes');
	    
	    $this->db->insert('discussion_tbl', $data);
	    $discussion_id = $this->db->insert_id();
	    
	    if($discussion_id > 0) {
	        $this->session->set_flashdata('discussion_add_success', 'Discussion added successfully!');
	    } else {
	        $this->session->set_flashdata('discussion_add_failed', 'Failed to add new discussion! Try again later.');
	    }
	    
	    foreach($projects as $key => $val) {
	        
	            $assigns =  $this->input->post('assignedto'.$key);
	        
	            $assigned = implode(':',$assigns);
	        
    	        $discdata['disc_id'] = $discussion_id;
    	        $discdata['proj_id'] = $projects[$key];
    	        $discdata['discussion_type'] = $disctype[$key];
    	        $discdata['discussion_note'] = $discussion_notes[$key];
    	        $discdata['assignedto'] = $assigned;
    	        
    	   $this->db->insert('discussion_projects_tbl', $discdata); 
	    }
	    redirect('discussions'); 
	}
	
	public function edit_discussion_view($discussion_id)
	{
	    $data['title'] = 'Discussions';
		$data['subtitle'] = 'Discussion Edit';
		$userid = $this->session->userdata('user_id');		
		$role = $this->session->userdata('user_role');
		
		$data['users']           = $this->db->get_where('login_tbl',array('type' => 'user'))->result_array();
		
        $data['discuss_details'] = $this->project_model->get_disccussion_details($discussion_id);
	    
	   // print_r( $data['discuss_details']); die;
		$this->load->view('admin/templates/header', $data);
	    $this->load->view('admin/edit_discussion');  
		$this->load->view('admin/templates/footer');
	}
	
	 public function discuss_edit_save($discussion_id)
	 {
	    $data['discussion_datetime'] = date('Y-m-d H:i:s');
	    $data['discussion_created_by'] = $this->session->userdata('user_id');
	    
	    $this->db->update('discussion_tbl', $data, array('discussion_id'=>$discussion_id));
	    $discussion_id = $this->db->insert_id(); 
	    
	     if($discussion_id > 0) {
	        $this->session->set_flashdata('discussion_add_success', 'Discussion added successfully!');
	    } else {
	        $this->session->set_flashdata('discussion_add_failed', 'Failed to add new discussion! Try again later.');
	    }
	    
	    $disctype = $this->input->post('disctpye');
	    $projects = $this->input->post('projects');
	    $discussion_notes = $this->input->post('discussion_notes');
	   
	    foreach($projects as $key => $val) {
	        
	            $assigns =  $this->input->post('assignedto'.$key);
	        
	            $assigned = implode(':',$assigns);
	        
    	        $discdata['disc_id'] = $discussion_id;
    	        $discdata['proj_id'] = $projects[$key];
    	        $discdata['discussion_type'] = $disctype[$key];
    	        $discdata['discussion_note'] = $discussion_notes[$key];
    	        $discdata['assignedto'] = $assigned;
    	        
    	  $this->db->update('discussion_projects_tbl', $discdata, array('disc_id'=>$discussion_id));
	    }
	    redirect('discussions');  
	 }
	 
	public function get_ins_by_type(){
	    
	  $type = $this->input->post('instype');
	  $result = $this->db->get_where('project_tbl', array('project_type' => $type))->result_array();
	  echo json_encode($result);
	 
	}
	
	function add_task($row)
    {
        $data['row'] = $row;
        echo $this->load->view('admin/add_task_ajax_view',$data,TRUE);
        
    }
    
    function add_subtask($maintaskid, $row)
    {
        $data['maintaskid'] = $maintaskid;
        $data['row'] = $row;
        echo $this->load->view('admin/add_subtask_ajax_view',$data,TRUE);
        
    }
	
	function getsubtasks()
	{
	    $taskid = $this->input->post('taskid');
	    $subtasks = $this->db->get_where('project_subtasks_tbl', array('task'=>$taskid))->result_array();
	    echo json_encode($subtasks);
	}
	
	public function subtask_save()
	{
	    $projectid = $this->input->post('projectid');
	    $taskid = $this->input->post('projecttaskid');
	    $subtask_desc = $this->input->post('subtaskdesc');
	    $subtask_hours = $this->input->post('subtaskhours');
	    
	    $subtaskcount = count($subtask_desc);
	    
	    $i='';
	    for($i=0;$i<$subtaskcount;$i++)
	    {
	            $subtaskdata['task'] = $taskid;
                $subtaskdata['subtask_desc'] = $subtask_desc[$i];
                $subtaskdata['subtask_hours'] = $subtask_hours[$i];
                
                $this->db->insert('project_subtasks_tbl', $subtaskdata);
	    }
	    redirect('project/task_planner_tasks/'.$projectid);
	}
	
	public function create_project_save()
	{
	    
	    $project_uniqid = $this->input->post('projectuniqid');
	    $data['unique_id'] = $this->input->post('projectuniqid');
	    
	    $data['project_name']=$this->input->post('projectname');
        $data['country_name']=$this->input->post('countryname');
        $data['project_type']=$this->input->post('projecttype');
        $data['type_of_work']=$this->input->post('typeofwork');
        $data['type_of_business']=$this->input->post('typeofbusiness');
        $data['additional_comments_step1']=$this->input->post('additionalcomments_step1');
        
        $taskdesc = $this->input->post('taskdesc');
        $taskhours = $this->input->post('taskhours');
        
        $referral_link_check = $this->input->post('referrallinkcheck');
            if($referral_link_check == 'on') { 
                $data['referral_link_check'] = 1; 
            } else { 
                $data['referral_link_check'] = 0; 
            }
        $data['referral_link_url'] = $this->input->post('referrallinkurl');
        
        $website_pages = $this->input->post('websitepages');
        $data['website_pages'] = implode(';',$website_pages);
        
        $design_url = $this->input->post('designurl');
        $data['design_url'] = implode(';', $design_url);
        
        $enable_woocommerce = $this->input->post('enablewoocommerce');
            if($enable_woocommerce == 'on') { 
                $data['enable_woocommerce'] = 1; 
            } else { 
                $data['enable_woocommerce'] = 0; 
            }
        if(!empty($this->input->post('wooproductpageurl'))) {
            $data['woo_productpage_url'] = $this->input->post('wooproductpageurl');
        }
        
        if(!empty($this->input->post('wooshoppageurl'))) {
            $data['woo_shoppage_url'] = $this->input->post('wooshoppageurl');
        }
        
        if(!empty($this->input->post('woocarturl'))) {
            $data['woo_cart_url'] = $this->input->post('woocarturl');
        }
        
        
        $data['header_color']=$this->input->post('headercolor');
        $data['footer_color']=$this->input->post('footercolor');
        $data['background_color']=$this->input->post('backgroundcolor');
        $data['text_color']=$this->input->post('textcolor');
        $data['button_color']=$this->input->post('buttoncolor');
        $data['button_hover_color']=$this->input->post('buttonhovercolor');
        $data['menu_color']=$this->input->post('menucolor');
        $data['menu_hover_color']=$this->input->post('menuhovercolor');
        $data['heading_text_color']=$this->input->post('headingtextcolor');
        $data['paragraph_text_color']=$this->input->post('paragraphtextcolor');
        $data['highlighting_text_color']=$this->input->post('highlightingtextcolor');
        $data['font_style']=$this->input->post('fontstyle');
        $data['additional_comments_step2']=$this->input->post('additionalcomments_step2');
        
        $enable_payment_gateway = $this->input->post('enablepaymentgateway');
            if($enable_payment_gateway == 'on') { 
                $data['enable_payment_gateway'] = 1; 
            } else { 
                $data['enable_payment_gateway'] = 0; 
            }
        $data['payment_gateway']=$this->input->post('paymentgateway');
        $data['additional_comments_step3']=$this->input->post('additionalcomments_step3');
        
        $assignedto_array = $this->input->post('assignedto');
        if(!empty($assignedto_array)) {
            $assignedto_imp = implode(";", $assignedto_array);
            $data['assigned_to'] = $assignedto_imp;
        }
        $data['assigned_to_note']=$this->input->post('assignedtonote');
        
        $data['created_time'] = date('Y-m-d H:i:s');
        if($this->session->userdata('login_id') == '') {
            $data['created_by'] = 'user';
        } else {
            $data['created_by'] = $this->session->userdata('login_id');   
        }
        
        //CREATE DIR
                $config_upload_path_main = $_SERVER['DOCUMENT_ROOT'].'/officemanagement/assets/project_files/'.$project_uniqid;
                if (!is_dir($config_upload_path_main)) { mkdir($config_upload_path_main, 0777, true); }
                
                $config_upload_path_woo = $_SERVER['DOCUMENT_ROOT'].'/officemanagement/assets/project_files/'.$project_uniqid.'/woocommerce';
                if (!is_dir($config_upload_path_woo)) { mkdir($config_upload_path_woo, 0777, true); }
                
                $config_upload_path_pages = $_SERVER['DOCUMENT_ROOT'].'/officemanagement/assets/project_files/'.$project_uniqid.'/website_pages';
                if (!is_dir($config_upload_path_pages)) { mkdir($config_upload_path_pages, 0777, true); }
        
    if(!empty($_FILES['wooproductpageimage']['name'])) {
        //UPLOAD Product_page IMAGE
                
	            $configpp['upload_path']          = $_SERVER['DOCUMENT_ROOT'].'/officemanagement/assets/project_files/'.$project_uniqid.'/woocommerce/';
                $configpp['allowed_types']        = 'pdf|png|jpg|psd';
                $configpp['max_size']             = 5000;
                $configpp['max_width']            = 3500;
                $configpp['max_height']           = 2625;
                $configpp['file_name']            = 'product_page-'.$project_uniqid;
                
                $this->load->library('upload', $configpp);
                $this->upload->initialize($configpp);
                $ppname = $_FILES['wooproductpageimage']['name'];
                if(!empty($ppname)) {
                    
                        if (!$this->upload->do_upload('wooproductpageimage'))
                        {
                            $error = array('error' => $this->upload->display_errors());
                            $data['woo_productpage_image'] = '';
                            $pp_error_msg = $error['error'];
                            $this->session->set_flashdata('errppimage', $pp_error_msg);
                        }
                        else
                        {
                            $productpage_success_data = array('upload_data' => $this->upload->data());
                            $data['woo_productpage_image'] = 'assets/project_files/'.$project_uniqid.'/woocommerce/'.$productpage_success_data['upload_data']['file_name'];
                        }
                }
    }
    
    
    if(!empty($_FILES['wooshoppageimage']['name'])) {            
        //UPLOAD Shop_page IMAGE
                
	            $configsp['upload_path']          = $_SERVER['DOCUMENT_ROOT'].'/officemanagement/assets/project_files/'.$project_uniqid.'/woocommerce/';
                $configsp['allowed_types']        = 'pdf|png|jpg|psd';
                $configsp['max_size']             = 5000;
                $configsp['max_width']            = 3500;
                $configsp['max_height']           = 2625;
                $configsp['file_name']            = 'shop_page-'.$project_uniqid;
                
                $this->load->library('upload', $configsp);
                $this->upload->initialize($configsp);
                $spname = $_FILES['wooshoppageimage']['name'];
                if(!empty($spname)) {
                    
                        if (!$this->upload->do_upload('wooshoppageimage'))
                        {
                            $error = array('error' => $this->upload->display_errors());
                            $data['woo_shoppage_image'] = '';
                            $sp_error_msg = $error['error'];
                            $this->session->set_flashdata('errspimage', $sp_error_msg);
                        }
                        else
                        {
                            $shoppage_success_data = array('upload_data' => $this->upload->data());
                            $data['woo_shoppage_image'] = 'assets/project_files/'.$project_uniqid.'/woocommerce/'.$shoppage_success_data['upload_data']['file_name'];
                        }
                        
                }
    }
    
    if(!empty($_FILES['woocartimage']['name'])) {
        //UPLOAD Cart IMAGE
                
	            $configc['upload_path']          = $_SERVER['DOCUMENT_ROOT'].'/officemanagement/assets/project_files/'.$project_uniqid.'/woocommerce/';
                $configc['allowed_types']        = 'pdf|png|jpg|psd';
                $configc['max_size']             = 5000;
                $configc['max_width']            = 3500;
                $configc['max_height']           = 2625;
                $configc['file_name']            = 'cart-'.$project_uniqid;
                
                $this->load->library('upload', $configc);
                $this->upload->initialize($configc);
                $cname = $_FILES['wooproductpageimage']['name'];
                if(!empty($cname)) {
                    
                        if (!$this->upload->do_upload('woocartimage'))
                        {
                            $error = array('error' => $this->upload->display_errors());
                            $data['woo_cart_image'] = '';
                            $c_error_msg = $error['error'];
                            $this->session->set_flashdata('errcimage', $c_error_msg);
                        }
                        else
                        {
                            $cart_success_data = array('upload_data' => $this->upload->data());
                            $data['woo_cart_image'] = 'assets/project_files/'.$project_uniqid.'/woocommerce/'.$cart_success_data['upload_data']['file_name'];
                        }
                        
                }
    }
    
    if(!empty($_FILES['designimage']['name'])) {
        $design_images = $_FILES['designimage']['name'];
        $desimgcount = count($design_images);
        //UPLOAD Web Pages IMAGES
            
                 // Count total files
                 $countfiles = count($_FILES['designimage']['name']);
                 
                 // Looping all files
                 for($i=0;$i<$countfiles;$i++){
                   $ext = pathinfo($_FILES['designimage']['name'][$i], PATHINFO_EXTENSION);
                   $uploadtime = date('Y-m-d_H-i-s');
                   
                   $pathtoupload = $_SERVER['DOCUMENT_ROOT'].'/officemanagement/assets/project_files/'.$project_uniqid.'/website_pages/website_page-'.$uploadtime.'_'.$i.'.'.$ext;
                   
                   // Upload file
                   if(move_uploaded_file($_FILES['designimage']['tmp_name'][$i],$pathtoupload)) {
                        $imgdata['project_unique_id'] = $project_uniqid;
                        $imgdata['image_path'] = 'assets/project_files/'.$project_uniqid.'/website_pages/website_page-'.$uploadtime.'_'.$i.'.'.$ext;
                        $imgdata['created_time'] = date('Y-m-d H:i:s');
                        $imgdata['created_by'] = $this->session->userdata('user_id');
                        $this->db->insert('project_website_pages_images_tbl', $imgdata);
                   }
                    
                    //$savedpath[$i] = $pathtosave;
                 }
            
            //$data['designimage'] = implode(';',$savedpath);
                  
    }
    
    
	    if($this->db->insert('project_tbl', $data)) {
	        
	        $last_id = $this->db->insert_id();
            $taskcount = count($taskdesc);
            $i = '';
            for($i=0;$i<$taskcount;$i++) {
                $taskdata['project'] = $last_id;
                $taskdata['task_desc'] = $taskdesc[$i];
                $taskdata['task_hours'] = $taskhours[$i];
                
                $this->db->insert('project_tasks_tbl', $taskdata);
            }
	        
	        $this->session->set_flashdata('project_add_success', 'Project created successfully!');   
	    } else {
	        $this->session->set_flashdata('project_add_failed', 'Failed to create Project!');   
	    }
	    
	    redirect('project');
	    
	}
	// public function adddusersave()
	// {
	// 	$udata['name'] = $this->input->post('username');
	// 	$udata['email'] = $this->input->post('useremail');
	// 	$udata['password'] = md5($this->input->post('userpassword'));
	// 	$udata['status']=1;
	// 	//$id = $this->session->userdata('userid');	
	// 	$udata['created_by']=1;
	// 	$this->db->insert('login_tbl',$udata);
	// 	redirect('user');
		
	// }
	
	
	
	
	public function project_edit_save()
	{
	    
	    
	    $projectid = $this->input->post('projectid');
	    /*$project_uniqid = $this->input->post('projectuniqid');
	    $data['unique_id']=$this->input->post('projectuniqid');*/
	    
	    $data['project_name']=$this->input->post('projectname');
        $data['country_name']=$this->input->post('countryname');
        $data['project_type']=$this->input->post('projecttype');
        $data['type_of_work']=$this->input->post('typeofwork');
        $data['type_of_business']=$this->input->post('typeofbusiness');
        $data['additional_comments_step1']=$this->input->post('additionalcomments_step1');
        
        
        
        $referral_link_check = $this->input->post('referrallinkcheck');
            if($referral_link_check == 'on') { 
                $data['referral_link_check'] = 1; 
                $data['referral_link_url'] = $this->input->post('referrallinkurl');
            } else { 
                $data['referral_link_check'] = 0; 
                /*
                $website_pages = $this->input->post('websitepages');
                $data['website_pages'] = implode(';',$website_pages);*/
                
                
                $data['website_pages'] = $this->input->post('websitepages');
                $design_url = $this->input->post('designurl');
                $data['design_url'] = implode(';', $design_url);
            }
        
        $enable_woocommerce = $this->input->post('enablewoocommerce');
            if($enable_woocommerce == 'on') { 
                $data['enable_woocommerce'] = 1; 
            } else { 
                $data['enable_woocommerce'] = 0; 
            }
        if(!empty($this->input->post('wooproductpageurl'))) {
            $data['woo_productpage_url'] = $this->input->post('wooproductpageurl');
        }
        
        if(!empty($this->input->post('wooshoppageurl'))) {
            $data['woo_shoppage_url'] = $this->input->post('wooshoppageurl');
        }
        
        if(!empty($this->input->post('woocarturl'))) {
            $data['woo_cart_url'] = $this->input->post('woocarturl');
        }
        
        $data['header_color']=$this->input->post('headercolor');
        $data['footer_color']=$this->input->post('footercolor');
        $data['background_color']=$this->input->post('backgroundcolor');
        $data['text_color']=$this->input->post('textcolor');
        $data['button_color']=$this->input->post('buttoncolor');
        $data['button_hover_color']=$this->input->post('buttonhovercolor');
        $data['menu_color']=$this->input->post('menucolor');
        $data['menu_hover_color']=$this->input->post('menuhovercolor');
        $data['heading_text_color']=$this->input->post('headingtextcolor');
        $data['paragraph_text_color']=$this->input->post('paragraphtextcolor');
        $data['highlighting_text_color']=$this->input->post('highlightingtextcolor');
        $data['font_style']=$this->input->post('fontstyle');
        $data['additional_comments_step2']=$this->input->post('additionalcomments_step2');
        
        $enable_payment_gateway = $this->input->post('enablepaymentgateway');
            if($enable_payment_gateway == 'on') { 
                $data['enable_payment_gateway'] = 1; 
            } else { 
                $data['enable_payment_gateway'] = 0; 
            }
        $data['payment_gateway']=$this->input->post('paymentgateway');
        $data['additional_comments_step3']=$this->input->post('additionalcomments_step3');
    
        $assignedto_array = $this->input->post('assignedto');
        if(!empty($assignedto_array)) {
            $assignedto_imp = implode(";", $assignedto_array);
        $data['assigned_to'] = $assignedto_imp;
        }
        $data['assigned_to_note']=$this->input->post('assignedtonote');
    
        $taskdesc = $this->input->post('taskdesc');
        $taskhours = $this->input->post('taskhours');
        
	    if($this->project_model->update_project($data, $projectid)) {
	        
	        $this->db->where('project', $projectid);
	        $this->db->delete('project_tasks_tbl');
	        
            $taskcount = count($taskdesc);
            $i = '';
            for($i=0;$i<$taskcount;$i++) {
                $taskdata['project'] = $projectid;
                $taskdata['task_desc'] = $taskdesc[$i];
                $taskdata['task_hours'] = $taskhours[$i];
                
                $this->db->insert('project_tasks_tbl', $taskdata);
            }
	        
	        $this->session->set_flashdata('project_edit_success', 'Project updated successfully!');   
	    } else {
	        $this->session->set_flashdata('project_edit_failed', 'Failed to update Project!');   
	    }
	    
	    redirect('project');
	    
	}
	
	public function task_planner_projects()
	{
	    $data['title'] = 'Task Planner';
		$data['subtitle'] = 'Projects';
		$userid = $this->session->userdata('user_id');		
		$role = $this->session->userdata('user_role');
		if($role == 1 || $role == 17) {
		    $data['projects'] = $this->db->order_by('created_time', 'DESC')->get_where('project_tbl')->result_array();
		} else {
		    $data['projects'] = $this->project_model->get_user_projects($userid);
		}
		
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/task_planner_projects');
		$this->load->view('admin/templates/footer');
	}
	
	public function task_planner_tasks($projectid)
	{
	    $data['title'] = 'Task Planner';
		$data['subtitle'] = '';
		$userid = $this->session->userdata('user_id');		
		$role = $this->session->userdata('user_role');
		$data['project'] = $this->project_model->get_project_details($projectid);
		$data['tasks'] = $this->project_model->get_project_tasks($projectid);
		
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/task_planner_tasks');
		$this->load->view('admin/templates/footer');
	}
	
	
}
