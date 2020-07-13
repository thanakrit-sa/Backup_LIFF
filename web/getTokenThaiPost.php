<?


$ch = curl_init('https://trackapi.thailandpost.co.th/post/api/v1/authenticate/token');
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Authorization: Token OqRMQVW#PZLnW*YbS_OCY6DeDAQdWtIAB9MjVdBwLwL2PND;QBESS$NgEnW:Z8KOXMBpP~JDD/J+EJY@Q-H&KhY2W1PETeU:DqEf'
                ));
                $result = curl_exec($ch);
                curl_close($ch);
                $resultData = json_decode($result, true);
                echo $result;

?>
