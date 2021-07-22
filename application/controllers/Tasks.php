<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks extends CI_Controller {

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
        $data['title'] = 'Tasks';
		$data['subtitle'] = 'Users List';
		//$data['tasks']= $this->db->get('tasks')->result_array();
		$log_user_id = $this->session->userdata('user_id');
        $log_user_type = $this->session->userdata('user_type');
        $log_user_roleid = $this->session->userdata('user_role');
            if($log_user_type == 'superadmin' || $log_user_type == 'analyst') {
                $data['users']= $this->db->get_where('login_tbl',array('type' => 'user'))->result_array();
            } else if($log_user_roleid == '15') {
                $data['users']= $this->db->get_where('login_tbl',array('type!=' => 'superadmin', 'login_id!=' => $log_user_id))->result_array();
            } else {
                $data['users']= $this->db->get_where('login_tbl',array('login_id' => $log_user_id))->result_array();
            }
            
        $this->load->view('admin/templates/header', $data);
		//$this->load->view('admin/tasks');
		$this->load->view('admin/user_tasks');
		$this->load->view('admin/templates/footer');
    }
    
    public function user_task_list($user_id=null)
    {
        
        $data['title'] = 'Tasks';
		$data['subtitle'] = 'Task List';
		
		if($user_id != '') {
		    $data['userid'] = $user_id;
		} else {
		    $user_id = $this->session->userdata('user_id');
		    $data['userid'] = $user_id;
		}
		
		$log_user_type = $this->session->userdata('user_type');
		if($log_user_type == 'superadmin') {
		    $data['projects'] = $this->db->order_by('created_time', 'DESC')->get_where('project_tbl')->result_array();
		} else {
		    //$data['projects'] = $this->db->order_by('created_time', 'DESC')->get_where('project_tbl', array('assigned_to'=>$user_id))->result_array();
		    $data['projects'] = $this->task_model->get_user_projects($user_id);
		}
		if($log_user_type == 'analyst') {
		    $data['tasks'] = $this->task_model->getanalyst_tasks($user_id, 20);
		} else {
		    $data['tasks'] = $this->task_model->getuser_tasks($user_id);
		}
        $this->load->view('admin/templates/header', $data);
		$this->load->view('admin/user_task_list');
		$this->load->view('admin/templates/footer');
    }
    
    public function add_task()
    {
        
        $data['user_id'] = $this->input->post('userid');
        $data['task_date'] = $this->input->post('taskdate');
        $data['project_id'] = $this->input->post('projectid');
        $data['project_task_id'] = $this->input->post('taskname');
       // $data['task_type'] = $this->input->post('tasktype');
        
        $projecttaskrow = $this->db->get_where('project_tasks_tbl', array('project_task_id' => $data['project_task_id']))->row_array();
        
        $data['task_name'] = $projecttaskrow['task_desc'];
        $data['subtask'] =  $this->input->post('subtask');
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
            
                $userdata = $this->db->get_where('login_tbl', array('login_id' => $data['user_id']))->row_array();
            
                // 1063419819:AAHZAZIbcRUV53wi3741AcLd5CwIGtfnDzA
                // chatname : @aflbotchannel | chatid : -1001294878484
            
                $token = "1355880416:AAGmJ7AxkwpegNVx2Z4cdmB4gzYN3irpkts";
                $chatid = "-328570035";
                $user = $userdata['first_name'].' '.$userdata['last_name'];
                $msg = $user." updated task in office management.";
                $this->sendTgMessage($chatid, $msg, $token);
            
        } else {
            $this->session->set_flashdata('add_task_response', '<span style="color:maroon;"Failed to add task!');
        }
        
        $project_row = $this->db->get_where('project_tasks_tbl', array('project_task_id' => $data['project_task_id']))->row_array();
        $project_total_hours = $project_row['task_hours'];
        
        $this->db->select_sum('task_hours');
        $this->db->from('tasks');
        $this->db->where('project_task_id', $data['project_task_id']);
        $query = $this->db->get();
        $project_task_row = $query->row_array();
        $project_task_hours = $project_task_row['task_hours'];
        
        if($project_task_hours > $project_total_hours) {
            
            $userdata = $this->db->get_where('login_tbl', array('login_id' => $data['user_id']))->row_array();
            
                // 1063419819:AAHZAZIbcRUV53wi3741AcLd5CwIGtfnDzA
                // chatname : @aflbotchannel | chatid : -1001294878484
            
                $token = "1063419819:AAHZAZIbcRUV53wi3741AcLd5CwIGtfnDzA";
                $chatid = "-1001294878484";
                $user = $userdata['first_name'].' '.$userdata['last_name'];
                $msg = "The task updated by ".$user." has exceeded the timeline.";
                //$this->sendTgMessage($chatid, $msg, $token);
            
        } /*else {
        
            echo "Not exceeded";
              redirect('tasks/user_task_list');
        } */
        
        //redirect('tasks/user_task_list/'.$data['user_id']);
        redirect('tasks/user_task_list');
        
    }
    
    public function sendTgMessage($chatID, $messaggio, $token) {
            //echo "sending message to " . $chatID . "\n";
        
            $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
            $url = $url . "&text=" . urlencode($messaggio);
            $ch = curl_init();
            $optArray = array(
                    CURLOPT_URL => $url,
                    CURLOPT_RETURNTRANSFER => true
            );
            curl_setopt_array($ch, $optArray);
            $result = curl_exec($ch);
            curl_close($ch);
            
            return true;
        }

    
    public function get_project_tasks()
    {
        $project_id = $this->input->post('project_id');
      //  $user_id = $this->input->post('user_id');
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