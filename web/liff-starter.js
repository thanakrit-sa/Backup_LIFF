/// event เมื่อโหลดหน้าเพจเรียบร้อยแล้ว ให้ใช้คำสั่ง liff.init() สำหรับเตรียมความพร้อมใช้คำสั่ง LIFF ต่างๆ
window.onload = function () {
    liff.init(function () { // คำสั่ง init() คืนค่าข้อมูลของ LIFF app 
        initializeApp(); // เมื่อ liff พร้อมทำงาน เรียกฟังก์ชั่น initializeApp ส่งข้อมูล LIFF ไปแสดง
    });
};
