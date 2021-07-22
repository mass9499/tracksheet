<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bugsheet_model extends CI_Model {

	public function get_all_bugsheets()
	{
		$this->db->select('t1.*, t2.*');
		$this->db->from('bugsheets_tbl t1');
		$this->db->join('project_tbl t2', 't2.project_id=t1.project');
		$this->db->order_by('bugsheet_created_date', 'DESC');
		$query=$this->db->get();
		$result = $query->result_array();
		return $result;
		
	}
	
	public function get_all_googlesheets()
	{
		$this->db->select('t1.*, t2.*');
		$this->db->from('googlesheets_tbl t1');
		$this->db->join('project_tbl t2', 't2.project_id=t1.project');
		$this->db->order_by('googlesheet_created_date', 'DESC');
		$query=$this->db->get();
		$result = $query->result_array();
		return $result;
		
	}
	
	
    

}