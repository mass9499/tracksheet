<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model {

       public function get_recordset($table)
	   {
		   $recordset = $this->db->get($table)->result_array();
		   return $recordset;
	   }

	   public function get_where_recordset($table,$where)
	   {
		   $recordset = $this->db->get_where($table,$where)->result_array();
		   return $recordset;
	   }
	   
	   public function get_record($table,$where)
	   {
		   $record = $this->db->get_where($table,$where)->row_array();
		   return $record;
	   }
	   

	   public function get_recordset_selected_fields($table,$fields)
	   {
		   $this->db->select($fields);
		   $this->db->from($table);
		   $recordset = $this->db->get()->result_array();
		   return $recordset;
	   }

	   public function get_record_selected_fields($table,$where,$fields)
	   {
		   $this->db->select($fields);
		   $this->db->from($table);
		   $this->db->where($where);
		   $record = $this->db->get()->row_array();
		   return $record;
	   }

	   public function insert($table,$data)
      {
		   $this->db->insert($table, $data);
		   $insert_id = $this->db->insert_id();
           return $insert_id;
	   }

	   public function update($table,$where,$data)
	   {
		   $this->db->where($where);
		   $update = $this->db->update($table, $data);
		   return $update;
	   }

	  public function delete_row($table,$where)
	  {
	   $this->db->where($where);
	   $delete = $this->db->delete($table);
	   return $delete;
	  }
	  
	 public function getgradeedit($id)
    {
		$this->db->where('id',$id);  
		$this->db->select('t1.*,t2.*');
		$this->db->from('employee_tbl t1');
		$this->db->join('grade_tbl t2','t2.grade_id = t1.grade');        
		$query=$this->db->get();
		$result=$query->row_array();
		return $result;
    }
	
	public function getbudgetedit($id)
    {		
		$this->db->select('t1.*,t1.id as uid,t2.id as bid,t2.grade_name,t2.mia');
		$this->db->from('employee_tbl t1');		
		$this->db->join('budget_category_tbl t2','t2.id = t1.category', 'left');        
		$this->db->where('t1.id',$id);  
		$query=$this->db->get();
		$result=$query->row_array();
		return $result;
    }
	
    public function getsalid($id)
    {
    	$this->db->where('emp_id',$id);  
    	$this->db->select('id');
    	$this->db->from('salary_tbl');     
    	$query=$this->db->get();
    	$result=$query->row_array();
    	return $result;
    }
    public function update_sal_data($data,$id)
    {	
		$query = $this->db->query('UPDATE salary_tbl SET basic_pay='.$data.' WHERE id='.$id.'');
		return $result;
    }
    
    public function get_user_permissions($roleid)
    {
        $this->db->where('role_id', $roleid);
    	$this->db->select('*');
    	$this->db->from('user_permissions');     
    	$query=$this->db->get();
    	$result=$query->result_array();
    	return $result;
    }
    
    public function get_screen_permissions($screen, $roleid)
    {
        $this->db->where('screen_code', $screen);
        $this->db->where('role_id', $roleid);
    	$this->db->select('*');
    	$this->db->from('user_permissions');     
    	$query=$this->db->get();
    	$result=$query->row_array();
    	return $result;
    }
    
    public function get_view_permissions($perm, $roleid)
    {
        $this->db->where('screen_enabled', 1);
        $this->db->where('screen_code', $perm);
        $this->db->where('role_id', $roleid);
    	$this->db->select('*');
    	$this->db->from('user_permissions');     
    	$query=$this->db->get();
    	$result=$query->row_array();
    	return $result;
    }
    
    public function get_add_permissions($perm, $roleid)
    {
        $this->db->where('screen_enabled', 1);
        $this->db->where('screen_code', $perm);
        $this->db->where('role_id', $roleid);
    	$this->db->select('*');
    	$this->db->from('user_permissions');     
    	$query=$this->db->get();
    	$result=$query->row_array();
    	return $result;
    }
    
    public function get_edit_permissions($perm, $roleid)
    {
        $this->db->where('screen_enabled', 1);
        $this->db->where('screen_code', $perm);
        $this->db->where('role_id', $roleid);
    	$this->db->select('*');
    	$this->db->from('user_permissions');     
    	$query=$this->db->get();
    	$result=$query->row_array();
    	return $result;
    }
    
    public function get_approve_permissions($perm, $roleid)
    {
        $this->db->where('screen_enabled', 1);
        $this->db->where('screen_code', $perm);
        $this->db->where('role_id', $roleid);
    	$this->db->select('*');
    	$this->db->from('user_permissions');     
    	$query=$this->db->get();
    	$result=$query->row_array();
    	return $result;
    }
    
    public function get_delete_permissions($perm, $roleid)
    {
        $this->db->where('screen_enabled', 1);
        $this->db->where('screen_code', $perm);
        $this->db->where('role_id', $roleid);
    	$this->db->select('*');
    	$this->db->from('user_permissions');     
    	$query=$this->db->get();
    	$result=$query->row_array();
    	return $result;
    }

    
}
