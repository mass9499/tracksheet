<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cron_notification extends CI_Controller {

	public function __construct()
	{
	    date_default_timezone_set('Asia/Kolkata'); 
	    parent::__construct();
		$this->load->database();
	}
    
    public function index()
    {
        
        $to = "afluencesoftechseo2@gmail.com";
        $subject = "Test Mail";
        $message = "Testing mail function.";
        
        $headers = "From: Afluence Softech <admin@business360.co.in>\r\n";
        $headers .= "Reply-To: afluencesoftechseo1@example.com\r\n";
        $headers .= "Return-Path: afluencesoftechseo1@example.com\r\n";
        
           if ( mail($to,$subject,$message,$headers) ) {
           echo "The email has been sent!";
           } else {
           echo "The email has failed!";
           }
        
        /*
        $this->db->select('*');
        $this->db->from('login_tbl');
        $this->db->where('role', 17);
        $this->db->or_where('role', 18);
        $this->db->where('status', 1);
        $query = $this->db->get();
        $users = $query->result_array();
        
        foreach($users as $user) {
            
            $taskrow = $this->db->order_by('created_date', 'DESC')->limit(1)->get_where('tasks', array('task_date' => date('Y-m-d'), 'user_id' => $user['login_id']))->row_array();
        
            $curdate = date('Y-m-d');   $curtime = date('H:i:s');
            
            if(date('D') == 'Sat' || date('D') == 'Sun') {
                
                echo "Today is ".date('DD');
                echo '<br><br>';
                
            } else {
            
                if(empty($taskrow)) {
                     
                    if($curtime > '01:15:00') {
                        
                        // 1063419819:AAHZAZIbcRUV53wi3741AcLd5CwIGtfnDzA
                        // chatname : @aflbotchannel | chatid : -1001294878484
                    
                        $token = "1063419819:AAHZAZIbcRUV53wi3741AcLd5CwIGtfnDzA";
                        $chatid = "-1001294878484";
                        $user = $user['first_name'].' '.$user['last_name'];
                        $msg = $user." has not updated the task yet.";
                        //$this->sendTgMessage($chatid, $msg, $token);
                        echo $msg;
                        echo '<br><br>';
                        
                    } else {
                        
                        $user = $user['first_name'].' '.$user['last_name'];
                        $msg = $user." updated the task recently.";
                        echo $msg;
                        echo '<br><br>';
                        
                    }
                    
                } else if(!empty($taskrow)) {
                   
                   $next_task_hour = date("Y-m-d H:i:s", strtotime('+2 hours', strtotime($taskrow['created_date'])));
                  
                  if($curtime > date('H:i:s', strtotime($next_task_hour))) {
                       
                       // 1063419819:AAHZAZIbcRUV53wi3741AcLd5CwIGtfnDzA
                        // chatname : @aflbotchannel | chatid : -1001294878484
                    
                        $token = "1063419819:AAHZAZIbcRUV53wi3741AcLd5CwIGtfnDzA";
                        $chatid = "-1001294878484";
                        $user = $user['first_name'].' '.$user['last_name'];
                        $msg = $user." has not updated the task yet.";
                        //$this->sendTgMessage($chatid, $msg, $token);
                        echo $msg;
                        echo '<br><br>';
                       
                  } else {
                      
                        $user = $user['first_name'].' '.$user['last_name'];
                        $msg = $user." updated the task recently.";
                        echo $msg;
                       echo '<br><br>';
                       
                  }
                   
                } else {
                    
                    echo "No update";
                    echo '<br><br>';
                    
                }
            
            }
            
        }
        */
        
    }
    
    
}