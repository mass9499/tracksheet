<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quationandinvoice extends CI_Controller {

	public function __construct()
	{
	  date_default_timezone_set('Asia/Kolkata'); 
	    parent::__construct();
		$this->load->database();
        if($this->session->userdata('loggedin') != '1')
		{
		    redirect('login');
		}
		$this->load->model('project_model');
		$this->load->model('task_model');
		$this->load->model('client_model');
	}

	public function index()

	{
	    
	    $user_id = $this->session->userdata('user_id');
        $log_user_type = $this->session->userdata('user_type');
	    $data['title'] = 'Quotation/Invoice';
		$data['subtitle'] = 'Quatation and invoice';
		$data['userid'] = $user_id;
		$log_user_type = $this->session->userdata('user_type');
		if($log_user_type == 'superadmin') {
		    $data['projects'] = $this->db->order_by('created_time', 'DESC')->get_where('project_tbl')->result_array();
		} else {
		    //$data['projects'] = $this->db->order_by('created_time', 'DESC')->get_where('project_tbl', array('assigned_to'=>$user_id))->result_array();
		    $data['projects'] = $this->task_model->get_user_projects($user_id);
		}
		if($log_user_type == 'analyst') {
		   
		    $data['tasks'] = $this->task_model->getanalyst_tasksqutation($user_id, 20);
		} else {
		    $data['tasks'] = $this->task_model->getuser_tasks($user_id);
		} 
	 
         
        $project_id = $this->input->post('projectid');
	if(!empty($project_id)){
	    
	     $data['quation_tasksdate'] =  date('d-m-Y');
	    
	     $data['quation_tasksname'] = $this->task_model->getanalyst_projects($project_id);
	    
	     $quation_task = $this->task_model->getanalyst_tasklistsqutation($project_id);

	     $data['quation_tasks'] = $quation_task;
        
	    
	}
		
		
		$this->load->view('admin/templates/header', $data);
		
    		if($this->input->post('billing') == 'invoice'){
    		    
        		$this->load->view('admin/invoice');
        		}else{
        		$this->load->view('admin/quotation_and_invoice');
             }
             
		$this->load->view('admin/templates/footer');
		
	}
	


	public function addqutn()
	{
	        
		$data['title'] = 'Quotation Projects';
		$data['subtitle'] = 'List';
		$userid = $this->session->userdata('user_id');		
		$role = $this->session->userdata('user_role');
		if($role == 1 || $role == 17) {
		    $data['projects'] = $this->db->order_by('created_time', 'DESC')->get_where('project_tbl')->result_array();
		} else {
		    $data['projects'] = $this->project_model->get_user_projects($userid);
		}
		
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/addquation');
		$this->load->view('admin/templates/footer');
		
	}
	
	public function addqutn_edit($project_id)
	{
		$data['title'] = 'Quotation Projects';
		$data['subtitle'] = 'Add Quotation';
		$id = $this->session->userdata('userid');		
        $data['users']= $this->db->get_where('login_tbl',array('type!=' => 'superadmin'))->result_array();
		$data['project_data'] = $this->project_model->get_project_details($project_id);
		$data['project_tasks'] = $this->db->get_where('project_tasks_tbl', array('project'=>$project_id))->result_array();
		$project_uniq_id = $data['project_data']['unique_id'];
		$data['get_design_pages'] = $this->project_model->get_project_designs($project_uniq_id);
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/addquationedit');
		$this->load->view('admin/templates/footer');
	}
	
	
	
public function addqutn_edit_save()
	
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
        
        $data['hourly_cost'] = $this->input->post('projecthourlycost');
        $data['taxper'] = $this->input->post('projecttax');
        $data['client_name'] = $this->input->post('client_name');
        $data['client_address'] = $this->input->post('client_address');
        
        
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
         $taskcosts = $this->input->post('taskcosts');
        $totaltaskhours['totalhours']=$this->input->post('ttlhrs');
          $totaltaskcosts['totalcost']=$this->input->post('ttlamnt');
          
	    if($this->project_model->update_quation($data, $projectid)) {
	       
	        $this->db->where('project', $projectid);
	        $this->db->delete('project_tasks_tbl');
	        
            $taskcount = count($taskdesc);
            $i = '';
            
            for($i=0;$i<$taskcount;$i++) {
                $taskdata['project'] = $projectid;
                $taskdata['task_desc'] = $taskdesc[$i];
                $taskdata['task_hours'] = $taskhours[$i];
                 $taskdata['taskcosts'] = $taskcosts[$i];
                 
                
                $this->db->insert('quotationadd_tbl', $taskdata);
            }
	        
	        $this->session->set_flashdata('project_edit_success', 'Project updated successfully!');   
	    } else {
	        $this->session->set_flashdata('project_edit_failed', 'Failed to update Project!');   
	    }
	    
	    redirect('project');
	    
	}
	
	
public function invoice()
	{
	    	$user_id = $this->session->userdata('user_id');
	    	
	    	
        $log_user_type = $this->session->userdata('user_type');
	    
	    
	    
	    
	       $data['title'] = 'Quatation';
		$data['subtitle'] = 'Quatation and invoice';
		$data['userid'] = $user_id;
		$log_user_type = $this->session->userdata('user_type');
		if($log_user_type == 'superadmin') {
		    $data['projects'] = $this->db->order_by('created_time', 'DESC')->get_where('project_tbl')->result_array();
		} else {
		    //$data['projects'] = $this->db->order_by('created_time', 'DESC')->get_where('project_tbl', array('assigned_to'=>$user_id))->result_array();
		    $data['projects'] = $this->task_model->get_user_projects($user_id);
		}
		if($log_user_type == 'analyst') {
		    $data['tasks'] = $this->task_model->getanalyst_tasksqutation($user_id, 20);
		} else {
		    $data['tasks'] = $this->task_model->getuser_tasks($user_id);
		} 
	 
         
        $project_id = $this->input->post('projectid');
	if(!empty($project_id)){
	    
	    $data['quation_tasksdate'] =  date('d-m-Y');
	    $data['quation_tasksname'] = $this->task_model->getanalyst_projects($project_id);
	    $data['quation_tasks'] = $this->task_model->getanalyst_tasklistsqutation($project_id);
	}
		
		
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/quotation_and_invoice');
		$this->load->view('admin/templates/footer');
		
	}
	
	public function requirement(){
	    
	    $data['title'] = 'Client View';
    	$data['subtitle'] = 'User List';
		$log_user_id = $this->session->userdata('user_id');
        $log_user_type = $this->session->userdata('user_type');
        $log_user_role = $this->session->userdata('user_role');
        $data['log_user_id'] = $log_user_id;
        $data['log_user_type'] = $log_user_type;
        
        $data['client_list'] = $this->client_model->get_client_list();
	    
	  	$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/admin_client_requirement_view');
		$this->load->view('admin/templates/footer');
	    
	}
	
	  public function client_projects($client_id){
	
	    $data['title'] = 'Client View';
    	$data['subtitle'] = 'User List';
		$log_user_id = $this->session->userdata('user_id');
        $log_user_type = $this->session->userdata('user_type');
        $log_user_role = $this->session->userdata('user_role');
        $data['log_user_id'] = $log_user_id;
        $data['log_user_type'] = $log_user_type;
        
        $data['client_project_list'] = $this->client_model->get_client_project_list_admin($client_id);
        
	  	$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/client_project_view_for_admin');
		$this->load->view('admin/templates/footer');
	    
	}
	
	public function accept_client_project($client_id){
	    
	     $data['admin_accept'] = 1 ;
	   
	     if($this->client_model->get_client_project_admin_accept($client_id, $data)){
	         
	       $this->session->set_flashdata('project_admin_suc', "<strong>Success!</strong>Project accept successfully.");
	       redirect('quationandinvoice/client_projects');
                  } else {
           $this->session->set_flashdata('project_admin_fail', "<strong>failed!</strong> Faild to accept project details try again.");
           redirect('quationandinvoice/client_projects');
          
           }
	
        
        
	}





	
}
