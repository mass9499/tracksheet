<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masters_model extends CI_Model {

	
    public function update_leave_type($data, $leave_type_id)
    {
        $this->db->where('leave_type_id', $leave_type_id);
        $this->db->update('leave_types_tbl', $data);
        return true;
    }
    

}