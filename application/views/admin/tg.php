<?php

    // 1063419819:AAHZAZIbcRUV53wi3741AcLd5CwIGtfnDzA
    // chatname : @aflbotchannel | chatid : -1001294878484

    function sendMessage($chatID, $messaggio, $token) {
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
        
        if(!$result) {
            echo 0;
        } else {
            echo 1;
        }
    }

    $token = "1063419819:AAHZAZIbcRUV53wi3741AcLd5CwIGtfnDzA";
    $chatid = "-1001294878484";
    $user = 'Test Name';
    $msg = $user." updated task in office management.";
    sendMessage($chatid, $msg, $token);
    

?>