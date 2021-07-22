<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Circular extends CI_Controller {

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
	}
    public function index()
    {
        $data['title'] = 'Circular';
		$data['subtitle'] = 'Events List';
		$log_user_id = $this->session->userdata('user_id');
        $log_user_type = $this->session->userdata('user_type');
        $log_user_role = $this->session->userdata('user_role');
        $data['log_user_id'] = $log_user_id;
        $data['log_user_type'] = $log_user_type;
    
        if($log_user_role == 1 || $log_user_role == 15 || $log_user_role == 17) {
            $data['add_edit_circular'] = 'yes';
        } else {
            $data['add_edit_circular'] = 'no';
        }
        
        $data['circular'] = $this->db->get('circular_tbl')->result_array();
            
        $this->load->view('admin/templates/header', $data);
		//$this->load->view('admin/tasks');
		$this->load->view('admin/circular');
		$this->load->view('admin/templates/footer');
    }
    
    
    public function add_circular()
    {
        $data['description'] = $this->input->post('description');
        $data['start'] = $this->input->post('fromdate');
        $data['end'] = $this->input->post('todate');
        $data['color'] = $this->input->post('color');
        $data['description']=$this->input->post('description');
        $this->db->insert('circular_tbl',$data);
        redirect('circular');
    }
    
    public function edit_circular()
    {
        $data['title'] = 'Circular';
		$data['subtitle'] = 'Edit Event';
        $id = $this->input->post('id');
        $data['circular'] = $this->db->get('circular_tbl')->result_array();
        $data['circ'] = $this->db->get_where('circular_tbl', array('id'=>$id))->row_array();
            
        $this->load->view('admin/templates/header', $data);
		$this->load->view('admin/circular_edit');
		$this->load->view('admin/templates/footer');
    }
    
    public function update_circular()
    {
        $id = $this->input->post('id');
        $data['description'] = $this->input->post('description');
        $data['start'] = $this->input->post('fromdate');
        $data['end'] = $this->input->post('todate');
        $data['color'] = $this->input->post('color');
        $data['description']=$this->input->post('description');
        $this->db->where('id', $id);
        $this->db->update('circular_tbl',$data);
        redirect('circular');
    }
    
    
}