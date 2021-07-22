<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {

	public function __construct()
	{
	    date_default_timezone_set('Asia/Kolkata');
	    parent::__construct();
	    $this->load->model('sales_model');
		$this->load->database();
		if($this->session->userdata('loggedin') != '1')
		{
		    redirect('login');
		}
	}

	public function index()
	{
		$data['title'] = 'Sales Updates';
		$data['subtitle'] = 'Sales list';
		
		$id = $this->session->userdata('userid');
		
		
		
		$sales = $this->db->order_by('login_id')->get('sales')->result();
		
		foreach($sales as $key => $sale) {
		    $user = $this->db->get_where('login_tbl', array('login_id' => $sale->created_by))->row_array();
		    $sale->user = $user['first_name'].' '.$user['last_name'];
		}
		
		$data['details'] = json_decode(json_encode($sales), true);
		
		
		foreach($data['details'] as $key => $details)
		{
		    $follow_ups  = $this->db->order_by('follow_id', 'DESC')->get_where('follow_table', array('sales_id' => $details['login_id']))->result_array();
		    $data['details'][$key]['follow_ups'] = $follow_ups;
		    if(!empty($follow_ups)) {
		        $data['details'][$key]['follow_count'] = count($follow_ups);
		    } else {
		        $data['details'][$key]['follow_count'] = 0;
		    }
		    
		}
		
	   // $data['counts'] = $this->sales_model->get_count();

		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/sales', $data);
		$this->load->view('admin/templates/footer');
	}


	public function addsales()
	{
		$data['title'] = 'Client Details';
		$data['subtitle'] = 'Add Details';
		
		$id = $this->session->userdata('userid');		
	
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/addsales');
		$this->load->view('admin/templates/footer');

	}

	public function edit_sales_view($login_id)
	{
	    $data['title'] = 'Sales Updates';
		$data['subtitle'] = 'Edit Sales';
		$data['user'] = $this->db->get_where('sales', array('login_id'=>$login_id))->row_array();
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/editsales', $data);
		$this->load->view('admin/templates/footer');
	}
	public function addsalessave()
	{
	    
	   // print_r($this->session->userdata('userid')); die;
	    
	   // $userdata = $this->db->get_where('login_tbl', array('login_id' => $this->session->userdata('userid')))->row_array();
	    
		$udata['date']    		= $this->input->post('date');
		$udata['poa']     		= $this->input->post('poa');
		$udata['institution']   = $this->input->post('institution');
		$udata['contactperson'] = $this->input->post('contactperson');
		$udata['designation']   = $this->input->post('designation');
		$udata['phone']			= $this->input->post('phone');
		$udata['mode'] 			= $this->input->post('mode');
		$udata['notes'] 		= $this->input->post('notes');
		$udata['potentional'] 	= $this->input->post('potentional');
		$udata['nextpoa'] 		= $this->input->post('nextpoa');


		$udata['type'] = 'user';
		$udata['status']=1;
		$id = $this->session->userdata('userid');	
		$udata['created_time'] = date('Y-m-d H:i:s');
		$udata['created_by'] = $this->session->userdata('user_id');
		
		if($this->db->insert('sales', $udata)) {
	        $this->session->set_flashdata('sales_add_success', 'Sales created successfully!');   
	        
	        $userdata = $this->db->get_where('login_tbl', array('login_id' => $this->session->userdata('userid')))->row_array();
            
                // 1063419819:AAHZAZIbcRUV53wi3741AcLd5CwIGtfnDzA
                // chatname : @aflbotchannel | chatid : -1001294878484
            
                $token = "1355880416:AAGmJ7AxkwpegNVx2Z4cdmB4gzYN3irpkts";
                $chatid = "-328570035";
                $user = $this->session->userdata('user_name');
                $msg = $user." added sales entry in office management";
                
                $this->sendTgMessage($chatid, $msg, $token);
	        
	    } else {
	        $this->session->set_flashdata('sales_add_failed', 'Failed to create Sales!');   
	    }
		redirect('sales');
		
	}
	
	public function editsalessave($login_id)
	{
	    if($this->session->userdata['user_id'] = 73 || $this->session->userdata['user_id'] = 75) {
	        date_default_timezone_set('Asia/Kolkata');
	    } else {
	        date_default_timezone_set('Australia/Sydney');
	    }
	    
	    $user_id = $this->input->post('user_id');
	    $userrow = $this->db->get_where('sales', array('login_id'=>$user_id))->row_array();
	    
		$udata['date']    		= $this->input->post('date');
		$udata['poa']     		= $this->input->post('poa');
		$udata['institution']   = $this->input->post('institution');
		$udata['contactperson'] = $this->input->post('contactperson');
		$udata['designation']   = $this->input->post('designation');
		$udata['phone']			= $this->input->post('phone');
		$udata['mode'] 			= $this->input->post('mode');
		$udata['notes'] 		= $this->input->post('notes');
		$udata['potentional'] 	= $this->input->post('potentional');
		$udata['followupdate'] 	= $this->input->post('followupdate');
		$udata['numoffollow'] 	= $this->input->post('numoffollow');
		$udata['nextpoa'] 		= $this->input->post('nextpoa');

		$udata['type'] = 'user';
		$udata['status']=1;
		$id = $this->session->userdata('userid');	
// 		$udata['created_time'] = date('Y-m-d H:i:s');
// 		$udata['created_by'] = $this->session->userdata('user_id');

// print_r($udata); die;

		$this->db->update('sales', $udata, array('login_id' => $login_id));
			
			$userdata = $this->db->get_where('login_tbl', array('login_id' => $this->session->userdata('userid')))->row_array();
            
                // 1063419819:AAHZAZIbcRUV53wi3741AcLd5CwIGtfnDzA
                // chatname : @aflbotchannel | chatid : -1001294878484
            
                $token = "1355880416:AAGmJ7AxkwpegNVx2Z4cdmB4gzYN3irpkts";
                $chatid = "-328570035";
                $user = $this->session->userdata('user_name');
                $msg = $user." updated sales entry of ".$udata['institution'];
                $this->sendTgMessage($chatid, $msg, $token);
	        
				
		redirect('sales');
		
	   }

		public function sales_view($login_id)
		{   
			$data['title'] = 'Sales';
			$data['subtitle'] = ''; 

			$data['project_data'] = $this->db->get_where('sales', array('login_id' => $login_id))->row_array();
			$data['counts']  = $this->sales_model->get_count();

			$this->load->view('admin/templates/header',$data );
			$this->load->view('admin/sales_view', $data);
			$this->load->view('admin/templates/footer');

		}

		public function next_follow()
		{

		$data['sales_id'] =	$this->input->post('sales_id');
		$data['follow_date'] =	$this->input->post('follow_date');
		$data['follow_notes'] =	$this->input->post('follownotes');
		$this->db->insert('follow_table',$data);
		
		    $insrow = $this->db->get_where('sales', array('login_id' => $data['sales_id']))->row_array();
		
			$userdata = $this->db->get_where('login_tbl', array('login_id' => $this->session->userdata('userid')))->row_array();
            
                // 1063419819:AAHZAZIbcRUV53wi3741AcLd5CwIGtfnDzA
                // chatname : @aflbotchannel | chatid : -1001294878484

                $token = "1355880416:AAGmJ7AxkwpegNVx2Z4cdmB4gzYN3irpkts";
                $chatid = "-328570035";
                $user = $this->session->userdata('user_name');
                // $msg = $user." added a new followup for the institution ".$udata['institution'];
                $msg = $user." added a new followup for the institution ".$insrow['institution'];
                
                $this->sendTgMessage($chatid, $msg, $token);
	        
		redirect('sales');
		}
		
		public function get_followdate()
		{
		    
		$data['followdate']= $this->db->order_by('follow_id', 'DESC')->get_where('follow_table')->result_array();
		$this->load->view('sales' ,$data);
		 
		}

		public function sendTgMessage($chatID, $messaggio, $token) {
            //echo "sending message to " . $chatID . "\n";
        
            $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
            $url = $url . "&text=" . urlencode($messaggio);
            $ch = curl_init();
            $optArray = array(
                    CURLOPT_URL => $url,
                    CURLOPT_RETURNTRANSFER => true
            );
            curl_setopt_array($ch, $optArray);
            $result = curl_exec($ch);
            curl_close($ch);
            
            return true;
            
        }

    
	    
	




















}
