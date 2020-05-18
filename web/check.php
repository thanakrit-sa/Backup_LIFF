<?
    $lineID = $_GET['lineID'];
    $data = array(
        "line_userid" => "$lineID",
    );
    $data_string = json_encode($data);
    
    $ch = curl_init('https://e-sport.in.th/ssdev/ecom/dashboard/api/member/linelogin');
     
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',));
     
    $result = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($result, true);
    echo $data["resultMgs"];

    // if($result == "not found line user id") {
    //     echo '<A HREF = "http://www.thaiseoboard.com "> Thaiseoboard </A>';
    // }
    // else {
    //     echo "not";
    // }
?>