<?php

        // $to = "afluencesoftechseo2@gmail.com";
        // $subject = "Test Mail";
        // $message = "Testing mail function.";
        
        // $headers = "From: Afluence Softech <admin@business360.co.in>\r\n";
        // $headers .= "Reply-To: afluencesoftechseo1@example.com\r\n";
        // $headers .= "Return-Path: afluencesoftechseo1@example.com\r\n";
        
        //   if ( mail($to,$subject,$message,$headers) ) {
        //   echo "The email has been sent!";
        //   } else {
        //   echo "The email has failed!";
        //   }
        
        
        $servername = "localhost";
        $username = "business_office";
        $password = "-D5h=2z91-Em";
        $dbname = "business_office";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        
        $sql_users = "SELECT * from login_tbl WHERE (role = 17 OR role = 18) AND status = 1";
        $result = $conn->query($sql_users);
        
        if ($result->num_rows > 0) {
          
          while($user = $result->fetch_assoc()) {
            
            date_default_timezone_set('Asia/Kolkata');
            
            $curdate = date('Y-m-d');   $curtime = date('H:i:s');
              
            $sql_task = "SELECT * from tasks WHERE task_date = '".$curdate."' AND user_id = '".$user['login_id']."' ORDER BY created_date DESC LIMIT 1";
            $taskresult = $conn->query($sql_task);
            
                if ($taskresult->num_rows > 0) {
                    
                    while($taskrow = $taskresult->fetch_assoc()) {
                        
                        if((date('D') == 'Sat' || date('D') == 'Sun') || ($curtime < '11:00:00' && $curtime > '20:00:00')) {
                
                            echo "Today is ".date('DD');
                            echo '<br><br>';
                            
                        } else {
                            
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
                            
                    
                        }
                        
                    }
                    
                } else if($taskresult->num_rows == 0) {
                    
                    if($curtime > '01:15:00') {
                        
                        // 1063419819:AAHZAZIbcRUV53wi3741AcLd5CwIGtfnDzA
                        // chatname : @aflbotchannel | chatid : -1001294878484
                    
                        $token = "1063419819:AAHZAZIbcRUV53wi3741AcLd5CwIGtfnDzA";
                        $chatid = "-1001294878484";
                        $user = $user['first_name'].' '.$user['last_name'];
                        $msg = $user." has not updated the morning task yet.";
                        //$this->sendTgMessage($chatid, $msg, $token);
                        echo $msg;
                        echo '<br><br>';
                        
                    } else {
                        
                        $user = $user['first_name'].' '.$user['last_name'];
                        $msg = $user." updated the morning task recently.";
                        echo $msg;
                        echo '<br><br>';
                        
                    }
                    
                } else {
                    
                    echo "No tasks found!";
                    
                }
              
          }
        } else {
            
          echo "No users found!";
          
        }
        
        $conn->close();
        
        die;
        
        
?>