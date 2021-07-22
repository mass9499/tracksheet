<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_model extends CI_Model {
    
    public function get_count()
    {
        $this->db->select('*');
        $this->db->from('follow_table');
        $rows = $this->db->get()->num_rows();
        return $rows;
        
    }

	




	
}