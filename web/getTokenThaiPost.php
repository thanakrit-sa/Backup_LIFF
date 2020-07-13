<?


$headers = getallheaders(); // ได้ค่า array ของส่วน Headers ที่ถูกส่งมา
if(isset($headers) && isset($headers["Host"]) && $headers["Host"]=="https://floating-coast-17079.herokuapp.com"){
    if(isset($_POST)){ // เมื่้อมีการส่งข้อมูลกลับมา
        $result = json_decode(file_get_contents('php://input'),TRUE); // แปลงข้อมูลเป็น array
        // จะได้ array ของข้อมูล
         if(!is_null($result) && array_key_exists('items',$result)){
             foreach($result['items'] as $key=>$data){ // วนลูปนำข้อมูลไปใช้งาน 
                 echo $data['barcode']."\r\n"; // ทดสอบแสดงข้อมูล
             }
         }
    }
}

?>