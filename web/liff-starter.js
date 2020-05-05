/// event เมื่อโหลดหน้าเพจเรียบร้อยแล้ว ให้ใช้คำสั่ง liff.init() สำหรับเตรียมความพร้อมใช้คำสั่ง LIFF ต่างๆ
window.onload = function (e) {
    liff.init(function (data) { // คำสั่ง init() คืนค่าข้อมูลของ LIFF app 
        initializeApp(data); // เมื่อ liff พร้อมทำงาน เรียกฟังก์ชั่น initializeApp ส่งข้อมูล LIFF ไปแสดง
    });
};
 
//ฟังก์ชั่นสำหรับสลับซ่อนหรือแสดงค่า Access Token
function toggleAccessToken() {
    toggleElement('accesstokendata');
}
 
//ฟังก์ชั่นสำหรับสลับซ่อนหรือแสดงข้อมูลบัญชีผู้ใช้
function toggleProfileData() {
    toggleElement('profileinfo');
}
 
//ฟังกืชั่นสำหรับ สลับการซ่อนหรือแสดง html element ต่างๆ ตามค่าตัว element ที่ส่งมา
function toggleElement(elementId) {
    const elem = document.getElementById(elementId);
    if (elem.offsetWidth > 0 && elem.offsetHeight > 0) {
        elem.style.display = "none";
    } else {
        elem.style.display = "block";
    }
}