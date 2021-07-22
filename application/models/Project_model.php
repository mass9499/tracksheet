<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends CI_Model {

    public function get_user_projects($userid)
    {
        $this->db->select('t1.*');
		$this->db->from('project_tbl t1');
		//$this->db->where('assigned_to',$userid);
		$this->db->like('assigned_to',$userid);
		$query=$this->db->get();
		$result = $query->result_array();
		return $result;
    }

    public function get_project_tasks($projectid)
    {
        $this->db->select('t1.*');
		$this->db->from('project_tasks_tbl t1');
		$this->db->where('project', $projectid);
		$query=$this->db->get();
		$result = $query->result_array();
		return $result;
    }

	public function get_project_details($project_id)
	{
		
		$this->db->select('t1.*');
		$this->db->from('project_tbl t1');
		$this->db->where('project_id',$project_id);
		$query=$this->db->get();
		$result = $query->row_array();
		return $result;
		
	}
	
	public function get_assigned_users($assigned_to)
	{
		$this->db->select('t1.*');
		$this->db->from('login_tbl t1');
		$this->db->where_in('login_id',$assigned_to);
		$query=$this->db->get();
		$result = $query->result_array();
		return $result;
	}
	
	public function get_project_designs($project_uniq_id)
	{
	    $this->db->where('project_unique_id',$project_uniq_id);
		$this->db->select('t1.*');
		$this->db->from('project_website_pages_images_tbl t1');
		$query=$this->db->get();
		$result = $query->result_array();
		return $result;
	}
	
	public function custlogin($username,$password)
	{
		$this->db->where('t1.username',$username);
		$this->db->where('t1.password',$password);
		$this->db->select('t1.*');
		$this->db->from('customer_tbl t1');
		$query=$this->db->get();
		$log = $query->row_array();
		if(!empty($log)){
			return true;
		}else{
			return false;
		}
		
	}
	
	/*public function logindata($username,$password)
	{		
		//$query = $this->db->get_where('admin_master_tbl',array("email"=>$username,"password"=>md5($password)));
		$query = $this->db->get_where('login_tbl',array("email"=>$username,"password"=>md5($password)));
		$this->db->limit('50');
		$login = $query->row_array();
		return $login;
	}*/
	
	public function logindata($username,$password)
	{		
		$this->db->select('t1.*');
		$this->db->from('login_tbl t1');
		$this->db->where('t1.email', $username);
		$this->db->where('t1.password', md5($password));		
		$query=$this->db->get();
		$login = $query->row_array();
		return $login;
	}
	
	public function custlogindata($username,$password)
	{		
	    $this->db->where('t1.username', $username);
		$this->db->where('t1.password', $password);		
		$this->db->select('t1.*');
		$this->db->from('customer_tbl t1');
		$query=$this->db->get();
		$login = $query->row_array();
		return $login;
	}
	
	public function custloginsessiondata($username,$password)
	{
	    $this->db->where('t1.email', $username);
		$this->db->where('t1.password', md5($password));		
	    $this->db->select('t1.*');
		$this->db->from('login_tbl t1');
		$query=$this->db->get();
		$login = $query->row_array();
		return $login;
	}
	
	public function checkforgetuser($email)
	{
		$query = $this->db->get_where('employee_tbl',array("email"=>$email));
		$login = $query->row_array();
		return $login;
	}

	/*public function getpermission($id)
    {   		
    	$this->db->where('id',$id);
		$this->db->select('role');
		$this->db->from('admin_master_tbl');
		$query = $this->db->get();
		$result = $query->row_array();
		return $result;
    }*/
	
	public function getpermission($id)
    {   		
    	$this->db->where('id',$id);
		$this->db->select('roles');
		$this->db->from('employee_tbl');
		$query = $this->db->get();
		$result = $query->row_array();
		return $result;
    }
	
	public function getrrapermission($id)
    {   
		$this->db->select('t2.permission');
		$this->db->from('login_tbl t1');
		$this->db->join('roles_tbl t2', 't2.role_id=t1.role','left');
    	$this->db->where('t1.login_id',$id);			
		$query = $this->db->get();
		$result = $query->row_array();		
		return $result;
    }
	
	/*public function getpermission1($roleid)
    {   					
		$this->db->where('role_id',$roleid);
		$this->db->select('*');
		$this->db->from('screen_permissions');
		$query = $this->db->get();
		$result = $query->row_array();
		return $result;
		/*$query = $this->db->get('screen_permissions');
		$result = $query->row_array();
		return $result;
    }*/
    
    
    public function update_project($data, $projectid)
    {
        $this->db->where('project_id', $projectid);
        $this->db->update('project_tbl', $data);
        return true;
    }
     public function update_quation($data, $projectid)
    {
        
       
        $this->db->where('project_id', $projectid);
        $this->db->update('project_tbl', $data);
        return true;
    }
    
    public function get_project_discussions()
    {
        $this->db->select('t1.*, t2.*');
		$this->db->from('discussion_tbl t1');
		$this->db->join('login_tbl t2', 't2.login_id=t1.discussion_created_by');
    	$this->db->order_by('t1.discussion_id', 'DESC');
		$query = $this->db->get();
		$result = $query->result_array();		
		return $result;
    }
    
    public function get_discussion_by_id($disc_id)
    {
        $this->db->select('t1.*, t2.*');
		$this->db->from('discussion_tbl t1');
		$this->db->join('login_tbl t2', 't2.login_id=t1.discussion_created_by');
		$this->db->where('t1.discussion_id', $disc_id);
		$query = $this->db->get();
		$result = $query->row_array();		
		return $result;
    }
    
    public function get_project_discussion($disc_id)
    {
        $this->db->select('t1.*, t2.*');
		$this->db->from('discussion_projects_tbl t1');
		$this->db->join('project_tbl t2', 't2.project_id=t1.proj_id', 'left');
		$this->db->where('t1.disc_id', $disc_id);
    	$this->db->order_by('t1.disc_id', 'ASC');
		$query = $this->db->get();
		$result = $query->result();		
		return $result;
    }
    
    public function get_project_discussion_by_id($disc_id)
    {
        $this->db->select('t1.*, t2.*');
		$this->db->from('discussion_projects_tbl t1');
		$this->db->join('project_tbl t2', 't2.project_id=t1.proj_id', 'left');
		$this->db->where('t1.disc_id', $disc_id);
    	$this->db->order_by('t1.disc_id', 'ASC');
		$query = $this->db->get();
		$result = $query->result_array();		
		return $result;
    }
    
    public function get_disccussion_details($discussion_id)
    {
        $this->db->select('t1.*, t2.*');
        $this->db->from('discussion_tbl t1');
        $this->db->join('discussion_projects_tbl t2', 't1.discussion_id=t2.disc_id');
        $this->db->where('t1.discussion_id', $discussion_id);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
        
        
    }
    

}
