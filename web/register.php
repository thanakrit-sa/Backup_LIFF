<?

$name = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$address = $_POST['address'];

// echo $name;
// echo $password;
// echo $email;
// echo $tel;
// echo $address;

$data = array(
    "username" => "$name", 
    "password" => "$password",
    "address" => "$address",
    "email" => "$email",
    "tel" => "$tel",
    "line_userid" => "udsfdslfs"
); //ข้อมูลที่ต้องการโพส
$data_string = json_encode($data); //ทำให้เป็น json ด้วยฟังก์ชัน json_encode
 echo $data_string;
// $ch = curl_init('https://e-sport.in.th/ssdev/ecom/dashboard/api/member/register'); //ตรงนี้อย่าลืมเปลี่ยนเป็น url ที่ต้องการส่งค่าไปนะครับ
 
// //ในกรณีที่ต้องการส่งเป็น method อื่น เช่น DELETE, PUT, HEAD ก็เปลี่ยนได้ที่นี่ครับ
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
 
// curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//     'Content-Type: application/json', //ระบุว่าค่าที่ส่งไปเป็นแบบ json
//     'Content-Length: ' . strlen($data_string))  //บอกขนาดของ json ที่ส่งไปด้วย
// );
 
// $result = curl_exec($ch);
// curl_close($ch);
