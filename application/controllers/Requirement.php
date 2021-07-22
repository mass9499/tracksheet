<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Requirement extends CI_Controller {

	public function __construct()
	{
	    date_default_timezone_set('Asia/Kolkata'); 
	    parent::__construct();
		$this->load->database();
		$this->load->model('client_model');
		$this->load->model('task_model');
	}
    public function index()
    {
     
        $data['title'] = 'requirement';
		$data['subtitle'] = 'Requirement List';+
		$log_user_id = $this->session->userdata('user_id'); 
        $log_user_type = $this->session->userdata('user_type');   
        $log_user_role = $this->session->userdata('user_role');
        $data['log_user_id'] = $log_user_id;
        $data['log_user_type'] = $log_user_type;
        
        
        if(isset($_POST['submit'])){
            
        $data['projectname'] = $this->input->post('projectname');
        $data['projectdetails'] = $this->input->post('prodetail');
        
        
        if (isset($_FILES["userfile"]) && !empty($_FILES['userfile']['name'])) {
            
                $fileInfo = pathinfo($_FILES["userfile"]["name"]);
                $img_name = $insert_id . '.' . $fileInfo['extension'];
                move_uploaded_file($_FILES["userfile"]["tmp_name"], "./client_files/" . $img_name);
                $data_img = array('id' => $insert_id, 'image' => 'client_files/' . $img_name);
                
                print_r($fileInfo);
                print_r($img_name);
                print_r($data_img);
                die;
                $this->student_model->add($data_img);
                
            }
        
        $data['created_date'] = date('Y-m-d H:i:s');
        
        if($this->db->insert('client_requirement_tbl', $data)){
            
           $this->session->set_flashdata('project_add_suc', "<strong>Success!</strong>Project details added successfully.");
                  } else {
           $this->session->set_flashdata('project_add_fail', "<strong>failed!</strong> Faild to add project details try again.");
            }

        }
        
        $data['project_dateils'] = $this->client_model->client_porject_list_get($log_user_id);
        
        
        $this->load->view('admin/templates/header', $data);
		$this->load->view('admin/requirement');
		$this->load->view('admin/templates/footer');
        
    }
    
    public function requirement_edit($project_id){

         $data['title'] = 'requirement';
        $data['subtitle'] = 'Requirement list';
		$log_user_id = $this->session->userdata('user_id');
        $log_user_type = $this->session->userdata('user_type');
        $log_user_role = $this->session->userdata('user_role');
        $data['log_user_id'] = $log_user_id;
        $data['log_user_type'] = $log_user_type;
    
          if(isset($_POST['submit'])){
            print_r("sd");die;
            //     $data['projectname'] = $this->input->post('projectname');
            //     $data['projectdetails'] = $this->input->post('prodetail');
            //     $data['created_date'] = date('Y-m-d H:i:s');
                

            //   	if($this->client_model->project_update($project_id, $data)){
            
            //                 $this->session->set_flashdata('project_update_suc', "<strong>Success!</strong>Project details updated successfully.");
            //                 redirect('requirement');
            //       } else {
            //                 $this->session->set_flashdata('project_update_fail', "<strong>failed!</strong> Faild to update project details try again.");
            //                   redirect('requirement');
            //     //   }
          }
          
          
        $data['project_edit'] = $this->client_model->client_porject_list_edit($project_id);
        $data['project_dateils'] = $this->client_model->client_porject_list_get($log_user_id);
        
        
        $this->load->view('admin/templates/header', $data);
		$this->load->view('admin/requirement_edit');
		$this->load->view('admin/templates/footer');

        
    }
    
    public function progress_bar($project_id){

        $data['title'] = 'progress Bar';
        $data['subtitle'] = 'Project status';
		$log_user_id = $this->session->userdata('user_id');
        $log_user_type = $this->session->userdata('user_type');
        $log_user_role = $this->session->userdata('user_role');
        $data['log_user_id'] = $log_user_id;
        $data['log_user_type'] = $log_user_type;

   
        $client_project_bar = $this->client_model->client_porject_progress_bar($log_user_id,$project_id);
        $client_project_total_timeline = $this->client_model->client_porject_progress_bar_totaltimeline($log_user_id,$project_id);
        // print_r($client_project_bar);die;
           
         $completedhours = 0;
         $inprogresshours = 0;
         $pendinghours = 0;
         $waitingresponshoures = 0;
         
         $totalhoures  = $client_project_total_timeline['total_timeline'];

           
          foreach($client_project_bar as $results){

            $taskstatus = $results['task_status'];
            $taskhours = $results['task_hours'];
            
                 
                    if($taskstatus == 'Completed'){
                        
                    $completedhours  = $taskhours + $completedhours;
                    
                    // print_r($completedhours);
                    }   
                    if($taskstatus == 'In Progress'){
                        
                    $inprogresshours  = $taskhours + $inprogresshours;
                    //  print_r($inprogresshours);
                        
                    }
                    if($taskstatus == 'Pending'){
                        
                    $pendinghours  = $taskhours + $pendinghours;
                    //  print_r($pendinghours);
                        
                    }
                    if($taskstatus == 'Waiting for client response'){
                        
                    $waitingresponshoures  = $taskhours + $waitingresponshoures;
                //  print_r($waitingresponshoures);
                        
                    }
          
          }
            
            

            if($completedhours == 0){
                
                    $data['completed'] = 0;    
                
            }else{
            
                    $balancehoursco =  $totalhoures - $completedhours;
                    $Completedper = ($balancehoursco/$totalhoures)*100;
        
                    $data['completed'] = $Completedper * 2;
              
            }
            
            if($inprogresshours == 0){
                 
                    $data['inprogress'] = 0 ;
            }else{
            
                    $balancehoursin =  $totalhoures - $inprogresshours;
                    $inprogressper = ($balancehoursin/$totalhoures)*100;
                    
                    $data['inprogress'] = $inprogressper * 2;
            }
            
            if($pendinghours == 0){
                
                $data['pending'] = 0;
            }else{
            
                     $balancehourspe =  $totalhoures - $pendinghours;
                     $pendingper = ($balancehourspe/$totalhoures)*100;
                    
                     $data['pending'] = $pendingper * 2;
            }
            
            if($waitingresponshoures == 0){

                $data['waiting'] = 0 ;
                
            }else{
                    $balancehourswa =  $totalhoures - $waitingresponshoures;
                    $waitingper = ($balancehourswa/$totalhoures)*100;
        
                    $data['waiting'] = $waitingper * 2;
            }        


        $this->load->view('admin/templates/header', $data);
		$this->load->view('admin/progress_bar');
		$this->load->view('admin/templates/footer');

        
    }
    
    public function progressbarlist(){
        
        $data['title'] = 'progress Bar';
        $data['subtitle'] = 'Progress bar list';
		$log_user_id = $this->session->userdata('user_id');
        $log_user_type = $this->session->userdata('user_type');
        $log_user_role = $this->session->userdata('user_role');
        $data['log_user_id'] = $log_user_id;
        $data['log_user_type'] = $log_user_type;
        
        
         $data['project_dateils'] = $this->client_model->client_porject_list_get($log_user_id);
        
        
        $this->load->view('admin/templates/header', $data);
		$this->load->view('admin/progress_bar_list');
		$this->load->view('admin/templates/footer');
        
    }

    
    
    
}