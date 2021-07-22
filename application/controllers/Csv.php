<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Csv extends CI_Controller {

	public function __construct()
	{
	    date_default_timezone_set('Asia/Kolkata'); 
	    parent::__construct();
		$this->load->database();
        if($this->session->userdata('loggedin') != '1')
		{
		    redirect('login');
		}
	}
    public function index()
    {
        $data['title'] = 'CSV';
        $data['subtitle'] = 'csv';
        $this->load->view('admin/templates/header', $data);
		$this->load->view('admin/csv');
		$this->load->view('admin/templates/footer');
    }
    
    public function importcsv() 
    {
    
            $file_path =  getcwd().'/assets/csv/testcsv.csv';
    
            if ($this->csvimport->get_array($file_path)) 
            {
    
                    $csv_array = $this->csvimport->get_array($file_path);
                    foreach ($csv_array as $row) 
                    {
        
                        $mid=$row['mid'];
        
                        $insert_data = array(
                            'mid'=>$mid,
                            'category'=>$row['category'],
                            'name'=>$row['name'],
                            'price'=>$row['price'],
                            'description'=>$row['description'],
                        );
                        
                        print_r($insert_data);die;
                        
                        $this->db->insert('csvdata', $insert_data);
                     //$this->AdminModel->insert_csv($insert_data);
        
                }
    
    
            }  else {
                $data['error'] = "Error occured";
                $this->load->view('csvindex', $data);
            }
    
    }
        
        
}