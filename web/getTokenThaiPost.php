<?


$ch = curl_init('https://track.thailandpost.co.th/?trackNumber=EE993673545CN');
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',));
                $result = curl_exec($ch);
                curl_close($ch);
                $resultData = json_decode($result, true);
                echo $resultData;

?>