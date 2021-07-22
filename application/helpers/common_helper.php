<?php

    function get_screen_permission($roleid)
    {
        $CI = &get_instance();
    	$CI->load->database();
    	$CI->load->model('common_model');
    	$get_upermissions = $CI->db->get_where('role_permissions', array('role'=>$roleid))->result_array();
    	return $get_upermissions;
    }
    
    function getview($screen) {
        $CI = &get_instance();
		$CI->load->database();
        $CI->load->model('common_model');
        $CI->load->library('session');
		$roleid = $CI->session->userdata('user_role');
		$get_view_perm = $CI->db->get_where('role_permissions', array('role'=>$roleid,'screen_code'=>$screen))->row_array();
		return $get_view_perm['view_option'];
    }
    
    function getadd($screen) {
        $CI = &get_instance();
		$CI->load->database();
        $CI->load->model('common_model');
        $CI->load->library('session');
		$roleid = $CI->session->userdata('user_role');
		$get_add_perm = $CI->db->get_where('role_permissions', array('role'=>$roleid,'screen_code'=>$screen))->row_array();
		return $get_add_perm['add_option'];
    }
    
    function getedit($screen) {
        $CI = &get_instance();
		$CI->load->database();
        $CI->load->model('common_model');
        $CI->load->library('session');
		$roleid = $CI->session->userdata('user_role');
		$get_edit_perm = $CI->db->get_where('role_permissions', array('role'=>$roleid,'screen_code'=>$screen))->row_array();
		return $get_edit_perm['edit_option'];
    }
    
    function getapprove($screen) {
        $CI = &get_instance();
		$CI->load->database();
        $CI->load->model('common_model');
        $CI->load->library('session');
		$roleid = $CI->session->userdata('user_role');
		$get_approve_perm = $CI->db->get_where('role_permissions', array('role'=>$roleid,'screen_code'=>$screen))->row_array();
		return $get_approve_perm['approve_option'];
    }
    
    function getdelete($screen) {
        $CI = &get_instance();
		$CI->load->database();
        $CI->load->model('common_model');
        $CI->load->library('session');
		$roleid = $CI->session->userdata('user_role');
		$get_delete_perm = $CI->db->get_where('role_permissions', array('role'=>$roleid,'screen_code'=>$screen))->row_array();
		return $get_delete_perm['delete_option'];
    }
    