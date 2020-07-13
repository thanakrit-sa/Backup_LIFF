<?

$data = array(
    "status" => "all",
    "language" => "TH",
    "barcode" => [
        "EF023395845TH"
   ],
);

$data_register = json_encode($data);

// echo $data_register;

$ch = curl_init('https://trackapi.thailandpost.co.th/post/api/v1/track');
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data_register);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Authorization: Token eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJpc3MiOiJzZWN1cmUtYXBpIiwiYXVkIjoic2VjdXJlLWFwcCIsInN1YiI6IkF1dGhvcml6YXRpb24iLCJleHAiOjE1OTczMzI1MDIsInJvbCI6WyJST0xFX1VTRVIiXSwiZCpzaWciOnsicCI6InpXNzB4IiwicyI6bnVsbCwidSI6IjJlZmMyMmQwYTdhYjNlNGMxZTJjNTQ5ODk1OTE0MGRhIiwiZiI6InhzeiM5In19.Y6hD3mfZ6yttF1FVLuY3yjoGp4FmwMG91CoNC8j1LRAoEdWU8ES7rvRyNMGLMLgoVCW2mlMTvOAy8DQRv7pc0w'
                ));
                $result = curl_exec($ch);
                curl_close($ch);
                $resultData = json_decode($result, true);
                echo $result;

                

?>