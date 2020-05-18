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

$url = 'http://localhost/sample/login_action.php'; 
$request = "[{'username' : '$name','password' : '$password'}]"; 
echo $request['username'];
// $ch = curl_init(); // เริ่มต้นใช้งาน cURL

// curl_setopt($ch, CURLOPT_URL, $url); // กำหนดค่า URL
// curl_setopt($ch, CURLOPT_POST, 1); // กำหนดรูปแบบการส่งข้อมูลเป็นแบบ $_POST
// curl_setopt($ch, CURLOPT_POSTFIELDS, $request); // กำหนดค่า HTTP Request
// curl_setopt($ch, CURLOPT_HEADER, 0); // กำให้ cURL ไม่มีการตั้งค่า Header
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // กำหนดให้ cURL คืนค่าผลลัพท์

// $response = curl_exec($ch); // ประมวลผล cURL
// curl_close($ch); // ปิดการใช้งาน cURL

// echo $response; // แสดงผลการทำงาน

