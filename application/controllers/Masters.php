<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class masters extends CI_Controller {

	public function __construct()
	{
	    date_default_timezone_set('Asia/Kolkata');
	    parent::__construct();
		$this->load->database();
		$this->load->model('masters_model');
		if($this->session->userdata('loggedin') != '1')
		{
		    redirect('login');
		}
	}

	public function index()
	{
		$data['title'] = 'Leave Types';
		$data['subtitle'] = '';
		
		$id = $this->session->userdata('userid');		
		
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/leave_types');
		$this->load->view('admin/templates/footer');
	}
	
	public function leave_types()
	{
		$data['title'] = 'Leave Types';
		$data['subtitle'] = '';
		$data['leave_types'] = $this->db->get('leave_types_tbl')->result_array();
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/leave_types', $data);
		$this->load->view('admin/templates/footer');
	}
	
	public function leave_type_add()
	{
	    $data['leave_type_name'] = $this->input->post('leavetype');
	    $data['leave_days'] = $this->input->post('leavedays');
	    $data['created_date'] = date('Y-m-d H:i:s');
	    $data['created_by'] = $this->session->userdata('user_id');
	    
	    if($this->db->insert('leave_types_tbl', $data)) {
	        $this->session->set_flashdata('masters_1', '<strong>Success! </strong>Leave type added successfully.');
	    } else {
	        $this->session->set_flashdata('masters_0', '<strong>Failed! </strong>Leave type not saved.');
	    }
	    redirect('masters/leave_types');
	}
	
	public function leave_type_edit()
	{
	    $leave_type_id = $this->input->post('leavetypeid');
	    $data['leave_type_name'] = $this->input->post('leavetype');
	    $data['leave_days'] = $this->input->post('leavedays');
	    $this->masters_model->update_leave_type($data, $leave_type_id);
	    redirect('masters/leave_types');
	}
	
	public function delete_leave_type($leave_type_id)
	{
	    $this->db->where('leave_type_id', $leave_type_id);
	    $this->db->delete('leave_types_tbl');
	    redirect('masters/leave_types');
	}
	
}
