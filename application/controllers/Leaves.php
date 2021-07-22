<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Leaves extends CI_Controller {

	public function __construct()
	{
	    date_default_timezone_set('Asia/Kolkata');
	    parent::__construct();
		$this->load->database();
        if($this->session->userdata('loggedin') != '1')
		{
		    redirect('login');
		}
		$this->load->model('leaves_model');
	}
    public function index()
    {
        $data['title'] = 'Leaves';
		$data['subtitle'] = 'Users List';
		$log_user_id = $this->session->userdata('user_id');
        $log_user_type = $this->session->userdata('user_type');
            if($log_user_type == 'superadmin') {
                $data['users']= $this->db->get_where('login_tbl',array('type' => 'user'))->result_array();
            } else {
                $data['users']= $this->db->get_where('login_tbl',array('login_id' => $log_user_id))->result_array();
            }
        $this->load->view('admin/templates/header', $data);
		$this->load->view('admin/user_leaves');
		$this->load->view('admin/templates/footer');
    }
    
    public function user_leaves($user_id)
    {
        
        $data['title'] = 'Leaves';
		$data['subtitle'] = 'User Leaves';
		$data['userid'] = $user_id;

		$log_user_type = $this->session->userdata('user_type');
        $log_user_id = $this->session->userdata('user_id');

		$data['user_id'] = $user_id;
		
		$data['leaves'] = $this->leaves_model->get_leaves_by_id($user_id);
        $this->load->view('admin/templates/header', $data);

        if($log_user_type == 'superadmin') {

            $data['leave_types'] = $this->leaves_model->get_leave_types();
		    $this->load->view('admin/admin_leaves_view', $data);

        } else {
            $data['leave_types'] = $this->leaves_model->get_leave_types();
            $this->load->view('admin/user_leaves_view', $data);
        }
        $this->load->view('admin/templates/footer', $data);
    }
    
    public function add_leaves()
    {
        $data['user_id'] = $this->input->post('userid');
        $data['apply_date'] = $this->input->post('applydate');
        $data['leave_type'] = $this->input->post('leavetype');
        $data['from_date'] = $this->input->post('fromdate');
        $data['to_date'] = $this->input->post('todate');
        
        $timestamp1 = strtotime($data['from_date']);
        $timestamp2 = strtotime($data['to_date']);
        $tothours = abs($timestamp2 - $timestamp1)/(60*60);
        
        $from_date = date_create($data['from_date']);
        $to_date = date_create($data['to_date']);
        $datediff = date_diff($from_date,$to_date);
        $total_days = $datediff->format("%a");
        if($tothours < 9) {
            $data['total_days'] = 0.5;
        } else {
            $data['total_days'] = $total_days + 1;
        }
        $data['reason'] = $this->input->post('reason');
        $data['created_date'] = date('Y-m-d H:i:s');
        $data['created_by'] = $this->session->userdata('user_id');
        
        if($this->db->insert('leaves_tbl', $data)) {
            $this->session->set_flashdata('add_leave_response', '<span style="color:green;">Leave added successfully</span>');
        } else {
            $this->session->set_flashdata('add_leave_response', '<span style="color:maroon;"Failed to add leave!');
        }
        
        redirect('leaves/user_leaves/'.$data['user_id']);
        
    }
    
    public function approve_leave($leave_id, $user_id)
    {
        $data['approval'] = '1';
        $this->db->where('leave_id', $leave_id);
        $this->db->update('leaves_tbl', $data);
        redirect('leaves/user_leaves/'.$user_id);
    }
    
    public function edit_task_ajax()
    {
        $task_id = $this->input->post('taskid');
        $data['task_status'] = $this->input->post('taskstatus');
        if($this->task_model->update_task($data, $task_id)) {
            echo "1";
        } else {
            echo "0";
        }
        
    }
    
    public function task_new()
    {
        $data['title'] = 'Tasks';
		$data['subtitle'] = 'Add Tasks';
        $this->load->view('admin/templates/header', $data);
		$this->load->view('admin/tasksadd');
		$this->load->view('admin/templates/footer');
    }
    public function tasks_add()
    {
        $data['tasks_project']=$this->input->post('tasks_project');
        $data['tasks_name']=$this->input->post('tasks_name');
        $data['tasks_time']=$this->input->post('tasks_time');
        $data['tasks_date']=$this->input->post('tasks_date');
        $data['tasks_assigned_by']=$this->input->post('tasks_assigned_by');
        $data['tasks_status']=$this->input->post('tasks_status');
        $this->db->insert('tasks',$data);
        redirect('tasks');
    }
}