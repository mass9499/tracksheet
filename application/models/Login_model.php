<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    
    
    public function signvalidation($data){
        
        $this->db->insert('login_tbl', $data);
        return $this->db->insert_id();
        
    }

	public function login($username,$password)
	{
		//$query = $this->db->get_where('admin_master_tbl',array("username"=>$username,"password"=>md5($password)));
		//$query = $this->db->get_where('admin_master_tbl',array("email"=>$username,"password"=>md5($password)));
		
		/*$query = $this->db->get_where('login_tbl',array("email"=>$username,"password"=>md5($password)));
		$login = $query->row_array();
		if(!empty($login)){
			return true;
		}else{
			return false;
		}*/
		// $this->db->join('login_tbl t2', 't2.employee_id=t1.id','left');
		
		$this->db->where('email',$username);
		$this->db->where('password',md5($password));
		$this->db->select('*');
		$this->db->from('login_tbl');
		$query=$this->db->get();
		$log = $query->row_array();
		
		if(!empty($log)){
			return true;
		}else{
			return false;
		}
		
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
}
