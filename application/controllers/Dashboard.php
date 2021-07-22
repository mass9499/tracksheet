<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require_once(APPPATH.'controllers/admin/Common_controller.php');
class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct()
	{
	    parent::__construct();
		$this->load->database();
		// $this->load->model('home_model');
		// $this->load->model('dashboard_model');
		// $this->load->model('budget_model');
		// $this->load->model('reorder_model');
		/*if($this->session->userdata('loggedin') != 1){
			redirect('login');
		}*/
	}
	
	public function index()
	{
		//$message = $this->session->userdata('apiregister');
		$data['title'] = 'Dashboard';
		$data['subtitle'] = 'Control Panel';
		//$id = $this->session->userdata('userid');		
		
		//$data['v'] = 'dashboard';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/dashboard');
        $this->load->view('admin/templates/footer', $data);

	}
	
// 	public function user_approval()
// 	{
// 		$data['title'] = 'Employees';
// 		$data['subtitle'] = 'Control Panel';
// 		$data['reorder'] = $this->reorder_model->get_reorder();
// 		$data['reorderlist'] = $this->reorder_model->get_reorder_list();		
// 		$data['users'] = $this->home_model->userapproval();
// 		$data['v'] = 'admin/users_approval_view';
//         $this->load->view('admin/template', $data);
// 	}
	
// 	public function budget_approval()
// 	{
// 		$data['title'] = 'Budget';
// 		$data['subtitle'] = 'Control Panel';
// 		$data['budget'] = $this->budget_model->get_budget_approval_data();
// 		$data['v'] = 'admin/task_approval_view';
//         $this->load->view('admin/template', $data);
		
// 	}
	
// 	public function activetask($id)
// 	{
// 		if($id > 0) {
// 			$this->db->where('id',$id);
// 			$this->db->update('task_details',array('task_approval'=>1));
// 			redirect('admin/dashboard/task_approval');
// 		}
// 	}
	
// 	public function activeuser($id)
// 	{
// 		if($id > 0) {
// 			$this->db->where('id',$id);
// 			$this->db->update('user_master',array('status'=>1));
// 			redirect('admin/dashboard/user_approval');
// 		}
// 	}
	
	
// 	public function user_notifications()
// 	{
//         $query = $this->db->get_where('notifications_tbl',array('unread'=>1,'type'=>'user'));
// 		$notify = $query->result_array();
// 		echo json_encode($notify);
		
// 	}
	
// 	public function task_notifications()
// 	{
//         $query = $this->db->get_where('notifications_tbl',array('unread'=>1,'type'=>'task'));
// 		$notify = $query->result_array();
// 		echo json_encode($notify);
		
// 	}

//     public function map_for_date(){
// 	  $date = $this->input->post('dte');
// 	  $employee = $this->input->post('employee');
// 	  $task = $this->input->post('task');
// 	  $mapdata = $this->home_model->getmap_data($date,$employee,$task);
// 	  echo json_encode($mapdata);
//     }
	
// 	public function notified($id)
// 	{
// 		$this->db->where('id',$id);
// 		$this->db->update('notifications_tbl',array('unread'=>0));
// 		redirect('admin/users');
// 	}

// 	public function reorder()
// 	{
// //		$this->
// 	}
  
}
