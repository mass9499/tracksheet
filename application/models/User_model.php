<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function check_email_exists($email)
	{
		$this->db->where('email',$email);
		$this->db->select('*');
		$this->db->from('login_tbl');
		$query=$this->db->get();
		$result = $query->row_array();
		return $result;
		/*$log = $query->row_array();
		if(!empty($log)){
			return true;
		}else{
			return false;
		}*/
		
	}
	
	public function edit_user_details($udata, $user_id)
	{
	    $this->db->where('login_id', $user_id);
        $this->db->update('login_tbl', $udata);
        return true;
	}
	
	public function update_temp_password($data, $email)
	{
	    $this->db->where('email', $email);
        $this->db->update('login_tbl', $data);
        return true;
	}
	
	public function get_roles()
	{
	    $this->db->select('t1.*');
	    $this->db->from('roles_tbl t1');
	    if($this->session->userdata('user_role') != 1) {
	        $this->db->where('t1.role_id!=',1);
	    }
	    $query=$this->db->get();
		$result = $query->result_array();
		return $result;
	}
    
    public function get_user_profile($user_id)
    {
        $this->db->select('t1.*,t2.*');
	    $this->db->from('login_tbl t1');
	    $this->db->join('roles_tbl t2', 't2.role_id=t1.role');
	    $this->db->where('t1.login_id', $user_id);
	    $query=$this->db->get();
		$result = $query->row_array();
		return $result;
    }
    
    public function update_profile($data, $user_id)
    {
        $this->db->where('login_id', $user_id);
        $this->db->update('login_tbl', $data);
        return true;
    }


}