<?


$ch = curl_init('https://track.thailandpost.co.th/?trackNumber=EE993673545CN');
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Authorization: Token HLH|N&UiJMA0FXE^KoNpRuZ!S;RwCFD+N|UNM\TxPxA6I8OxH/HIUnNCD+QqUIXzI&IdR-ObLlJ&V#E^IgNANdP?E9IxEIWeA=EZ '
                ));
                $result = curl_exec($ch);
                curl_close($ch);
                $resultData = json_decode($result, true);
                echo $result;

?>
