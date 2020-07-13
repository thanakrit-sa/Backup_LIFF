<?
$headers = getallheaders(); // ได้ค่า array ของส่วน Headers ที่ถูกส่งมา
// ทดสอบเก็บส่วนของข้อมูลลงในไฟล์ เพื่อดูว่า มีการส่งค่ากลับมาหรือไม่ และส่งค่าอะไรกลับมา
file_put_contents('headers.txt',json_encode($headers, JSON_PRETTY_PRINT)); // ส่วนสำหรับใช้ตรวจสอบเพิ่มเติม
file_put_contents('body.txt',file_get_contents('php://input')); // ส่วนของ body เป็นส่วนที่จะใช้งานถ้ามีข้อมูล
?>