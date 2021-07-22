<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client_model extends CI_Model {

        	public function client_porject_list_get($client_id)
        	{
        	    
                $this->db->select('t1.*'); 
                $this->db->from('client_requirement_tbl t1');
                $this->db->where('t1.log_user_id', $client_id);
                $query = $this->db->get();
        	    $result = $query->result_array();
        	    return $result;
  
        	}
        	
           public function client_porject_progress_bar($user_id, $client_project_id){
         
        	    
                $this->db->select('t1.*,t2.*,t3.*'); 
                $this->db->from('client_requirement_tbl t1');
                $this->db->join('project_tbl t2', 't2.client_pro_id = t1.cr_id');
                $this->db->join('tasks t3', 't3.project_id = t2.project_id');
                $this->db->where('t2.client_pro_id', $client_project_id);
                $query = $this->db->get();
        	    $result = $query->result_array();
        	    return $result;
  
        	}
        		
           public function client_porject_progress_bar_totaltimeline($user_id, $client_project_id){
         
        	    
                $this->db->select('t1.*,t2.*,t3.*'); 
                $this->db->from('client_requirement_tbl t1');
                $this->db->join('project_tbl t2', 't2.client_pro_id = t1.cr_id');
                $this->db->join('tasks t3', 't3.project_id = t2.project_id');
                $this->db->where('t2.client_pro_id', $client_project_id);
                $query = $this->db->get();
        	    $result = $query->row_array();
        	    return $result;
  
        	}
        	
        	
        	public function get_client_projects()
        	{
        	    
                $this->db->select('t1.*'); 
                $this->db->from('client_requirement_tbl t1');
                $this->db->where('t1.log_user_type', 'client');
                $query = $this->db->get();
        	    $result = $query->result_array();
        	    return $result;
  
        	}
        	
        	public function client_porject_list_edit($project_id){
        	    
        	     $this->db->select('t1.*'); 
                $this->db->from('client_requirement_tbl t1');
                $this->db->where('t1.cr_id', $project_id);
                $query = $this->db->get();
        	    $result = $query->row_array();
        	    return $result;
        	    
        	    
        	}
	      
	      public function project_update($pro_id, $data){

                $this->db->where('cr_id', $pro_id);
                $this->db->update('client_requirement_tbl', $data);
                 return true;
           	          
	      }
	      
	      public function get_client_list(){
	          
	                $this->db->select('t1.*');
	                $this->db->from('login_tbl t1');
	                $this->db->where('t1.role', '40');
	                $query = $this->db->get();
	                $result = $query->result_array();
	                return $result;
	      }
	     
	     public function get_client_project_list_admin($client_id){
	         
	                $this->db->select('t1.*,t2.*');
	                $this->db->from('login_tbl t1');
	                $this->db->join('client_requirement_tbl t2','t2.log_user_id = t1.login_id');
	                $this->db->where('t2.log_user_id', $client_id);
	                $query = $this->db->get();
	                $result = $query->result_array();
	                return $result;
	     }
	     public function get_client_project_admin_accept($client_id, $data){
	         
	            
	                $this->db->where('t1.log_user_id', $client_id);
	                $this->db->update('client_requirement_tbl t1', $data);
	                return true;
	     }
	     

	
}