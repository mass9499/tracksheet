<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leaves_model extends CI_Model {

    public function get_leave_types()
	{
	    /*
	    $this->db->select('t1.*, t2.*');
	    $this->db->select('SUM(t1.total_days) as taken_days');
		$this->db->from('leaves_tbl t1');
		$this->db->join('leave_types_tbl t2', 't2.leave_type_id=t1.leave_type');
		$this->db->group_by('t1.leave_type');
		$this->db->where('MONTH(from_date)', date('m'));
		$query=$this->db->get();
		$result = $query->result_array();
		return $result;
		*/
		
		$this->db->select('t1.*');
		$this->db->from('leave_types_tbl t1');
		$query=$this->db->get();
		$leavetypes = $query->result();
		
		foreach($leavetypes as $type) {
		    
    	    $this->db->select('SUM(t1.total_days) as taken_days');
    		$this->db->from('leaves_tbl t1');
    		$this->db->where('leave_type', $type->leave_type_id);
    		$this->db->where('MONTH(to_date)', date('m'));
    		$query=$this->db->get();
    		$type->total = $query->row_array();
		}
		
		$result = json_decode(json_encode($leavetypes), true);
		
		return $result;
	}

	public function get_leaves_by_id($user_id)
	{
	    $this->db->select('t1.*, t2.*');
		$this->db->from('leaves_tbl t1');
		$this->db->join('leave_types_tbl t2', 't2.leave_type_id=t1.leave_type', 'left outer');
		$this->db->where('user_id',$user_id);
		$this->db->order_by('leave_id', 'DESC');
		$query=$this->db->get();
		$result = $query->result_array();
		return $result;
	}
	

}