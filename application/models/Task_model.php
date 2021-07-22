<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task_model extends CI_Model {

	public function getuser_tasks($user_id)
	{
		$this->db->select('t1.*, t2.*');
		$this->db->from('tasks t1');
		$this->db->join('project_tbl t2', 't2.project_id=t1.project_id');
		$this->db->where('user_id',$user_id);
		$this->db->order_by('created_date', 'DESC');
		$query=$this->db->get();
		$result = $query->result_array();
		
		return $result;
		
	}
    //  public function get_usertask_hours($user_id)
    //  {
    //      $this->db->select('t1.task_hours, t2.task_hours');
    //      $this->db->from('tasks t1');
    //      $this->db->join('project_tasks_tbl t2', 't2.project_task_id=t1.project_task_id');
    //     $this->db->where('user_id', $user_id);
    //     $query = $this->db->get();
    //     $result = $query->result_array();
    //      return $results;
    //  }

    public function update_task($data, $task_id)
    {
        $this->db->where('task_id', $task_id);
        $this->db->update('tasks', $data);
        return true;
        
    }
    
    public function get_user_projects($user_id)
    {
        $this->db->select('t1.*');
		$this->db->from('project_tbl t1');
		$this->db->like('assigned_to', $user_id);
		$this->db->order_by('created_time', 'DESC');
		$query=$this->db->get();
		$result = $query->result_array();
		return $result;
    }
    
    public function getanalyst_tasks($user_id, $project_id)
    {
        $this->db->select('t1.*, t2.*');
		$this->db->from('tasks t1');
		$this->db->join('project_tbl t2', 't2.project_id=t1.project_id');
		$this->db->where('user_id',$user_id);
		$this->db->where('t1.project_id',$project_id);
		$this->db->order_by('created_date', 'DESC');
		$query=$this->db->get();
		$result = $query->result_array();
		return $result;
    }
    
    
    public function getanalyst_tasklistsqutation($project_id)
    {
        
        $this->db->select('t1.*, t2.*');
		$this->db->from('tasks t1');
		$this->db->join('project_tbl t2', 't2.project_id=t1.project_id');
	
		$this->db->where('t1.project_id',$project_id);
		$this->db->order_by('created_date', 'DESC');
		$query=$this->db->get();
		$result = $query->result_array();
	
		return $result;
    }
      

    
    
    
    public function getanalyst_projects($project_id)
    {
        
        
       
        $this->db->select('t1.*');
		$this->db->from('project_tbl t1');
		
		$this->db->where('t1.project_id',$project_id);
		
		$query=$this->db->get();
		$result = $query->row_array();
		
		return $result;
    }
    
    
    
    public function getanalyst_tasksqutation($project_id)
    {
        $this->db->select('t1.*, t2.*');
		$this->db->from('tasks t1');
		$this->db->join('project_tbl t2', 't2.project_id=t1.project_id');
		
		$this->db->where('t1.project_id',$project_id);
		$this->db->order_by('created_date', 'DESC');
		$query=$this->db->get();
		$result = $query->result_array();
		return $result;
    }
    
    
    
    

}