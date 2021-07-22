<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Bugsheets extends CI_Controller {

	public function __construct()
	{
	    date_default_timezone_set('Asia/Kolkata'); 
	    parent::__construct();
		$this->load->database();
        if($this->session->userdata('loggedin') != '1')
		{
		    redirect('login');
		}
		$this->load->model('task_model');
		$this->load->model('bugsheet_model');
	}
    public function index()
    {
        $data['title'] = 'Bug Sheets';
		$data['subtitle'] = 'Bug sheet List';
		$log_user_type = $this->session->userdata('user_type');
		$log_user_id = $this->session->userdata('user_id');
		$user_id = $this->session->userdata('user_id');
		if($log_user_type == 'superadmin') {
		    $data['projects'] = $this->db->order_by('created_time', 'DESC')->get_where('project_tbl')->result_array();
		} else {
		    $data['projects'] = $this->task_model->get_user_projects($log_user_id);
		}
        $data['bugsheets']= $this->bugsheet_model->get_all_bugsheets();
        $this->load->view('admin/templates/header', $data);
		$data['projects'] = $this->db->order_by('created_time', 'DESC')->get_where('project_tbl')->result_array();
		$this->load->view('admin/bugsheets');
		$this->load->view('admin/templates/footer');
    }
    
    public function bugsheet_save()
    {
        $data['project'] = $this->input->post('projectid');
        $data['description'] = $this->input->post('description');
        $data['bugsheet'] = 'In Progress';
        $data['bugsheet_created_date'] = date('Y-m-d H:i:s');
        $data['bugsheet_created_by'] = $this->session->userdata('user_id');
        $project_folder = $data['project'];
        
        //CREATE DIR
                $config_upload_path_main = $_SERVER['DOCUMENT_ROOT'].'/officemanagement/assets/project_files/bugsheets/'.$project_folder;
                if (!is_dir($config_upload_path_main)) { mkdir($config_upload_path_main, 0777, true); }
        
        
        //UPLOAD Bugsheet
                
	            $configpp['upload_path']          = $_SERVER['DOCUMENT_ROOT'].'/officemanagement/assets/project_files/bugsheets/'.$project_folder;
                $configpp['allowed_types']        = 'xlsx|docx';
                $configpp['max_size']             = 5000;
                $configpp['max_width']            = 3500;
                $configpp['max_height']           = 2625;
                $configpp['file_name']            = $project_folder.'_Bugsheet';
                
                $this->load->library('upload', $configpp);
                $this->upload->initialize($configpp);
                $bugsheetname = $_FILES['bugsheet']['name'];
                if(!empty($bugsheetname)) 
                {
                    
                    if (!$this->upload->do_upload('bugsheet'))
                    {
                        $error = array('error' => $this->upload->display_errors());
                        $data['bugsheet'] = '';
                        $bugsheet_error_msg = $error['error'];
                        $this->session->set_flashdata('errbugsheet', $bugsheet_error_msg);
                    }
                    else
                    {
                        $bugsheet_success_data = array('upload_data' => $this->upload->data());
                        $data['bugsheet'] = 'assets/project_files/bugsheets/'.$project_folder.'/'.$bugsheet_success_data['upload_data']['file_name'];
                    }
                }
                
                if($data['bugsheet'] != '') {
                    $this->db->insert('bugsheets_tbl', $data);
                    $this->session->set_flashdata('bugsheet_resp_1', 'Bugsheet added successfully!');
                } else {
                    $this->session->set_flashdata('bugsheet_resp_0', 'Failed to add new Bugsheet!');
                }
                
                redirect('bugsheets');
        
    }
    
    public function bugsheetcompleteaction($bugsheet_id)
    {
        $data['bug_status'] = "Completed";
        if($this->db->update('bugsheets_tbl', $data, array('bugsheet_id'=>$bugsheet_id))) {
            $bugsheetrow = $this->db->get_where('bugsheets_tbl', array('bugsheet_id'=>$bugsheet_id))->row_array();
            if($bugsheetrow['bug_status'] == 'In Progress')
            {
                echo "1";
            } else {
                echo "0";
            }
        } else {
            echo "Failed";
        }
        
    }
    
    public function bugsheetcompletedaction($bugsheet_id)
    {
        $data['bug_status'] = "In Progress";
        if($this->db->update('bugsheets_tbl', $data, array('bugsheet_id'=>$bugsheet_id))) {
            $bugsheetrow = $this->db->get_where('bugsheets_tbl', array('bugsheet_id'=>$bugsheet_id))->row_array();
            if($bugsheetrow['bug_status'] == 'In Progress')
            {
                echo "1";
            } else {
                echo "0";
            }
        } else {
            echo "Failed";
        }
        
    }
    
    public function user_task_list($user_id)
    {
        $data['title'] = 'Tasks';
		$data['subtitle'] = 'Task List';
		$data['userid'] = $user_id;
		$log_user_type = $this->session->userdata('user_type');
		if($log_user_type == 'superadmin') {
		    $data['projects'] = $this->db->order_by('created_time', 'DESC')->get_where('project_tbl')->result_array();
		} else {
		    //$data['projects'] = $this->db->order_by('created_time', 'DESC')->get_where('project_tbl', array('assigned_to'=>$user_id))->result_array();
		    $data['projects'] = $this->task_model->get_user_projects($user_id);
		}
		$data['tasks'] = $this->task_model->getuser_tasks($user_id);
        $this->load->view('admin/templates/header', $data);
		$this->load->view('admin/user_task_list');
		$this->load->view('admin/templates/footer');
    }
    
    public function add_task()
    {
        $data['user_id'] = $this->input->post('userid');
        $data['task_date'] = $this->input->post('taskdate');
        $data['project_id'] = $this->input->post('projectid');
        $data['task_name'] = $this->input->post('taskname');
        $data['task_hours'] = $this->input->post('taskhours');
        $task_status = $this->input->post('taskstatus');
        if($task_status != '') {
            $data['task_status'] = $this->input->post('taskstatus');
        } else {
            $data['task_status'] = 'In Progress';
        }
        $data['created_date'] = date('Y-m-d H:i:s');
        $data['created_by'] = 'User';
        
        if($this->db->insert('tasks', $data)) {
            $this->session->set_flashdata('add_task_response', '<span style="color:green;">Task added successfully</span>');
        } else {
            $this->session->set_flashdata('add_task_response', '<span style="color:maroon;"Failed to add task!');
        }
        
        redirect('tasks/user_task_list/'.$data['user_id']);
        
    }
    
    public function get_project_tasks()
    {
        $project_id = $this->input->post('project_id');
        $project_tasks = $this->db->order_by('project_task_id', 'ASC')->get_where('project_tasks_tbl', array('project'=>$project_id))->result_array();
        echo json_encode($project_tasks);
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