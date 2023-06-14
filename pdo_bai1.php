<?php
$DB_TYPE = "mysql";
$DB_HOST = "localhost";
$DB_NAME = "qlsinhvien";
$USER_NAME = "root";
$USER_PASSWORD = "";

$conn = new PDO("$DB_TYPE:host=$DB_HOST;dbname=$DB_NAME", $USER_NAME, $USER_PASSWORD);
// Connect to database

// Create table
$stsm = $conn->prepare('CREATE TABLE IF NOT EXISTS `sinhvien1` (
  `MaSV` varchar(10) PRIMARY KEY NOT NULL,
  `Hoten` varchar(50) NOT NULL,
  `Ngaysinh` date NOT NULL,
  `Lophoc` varchar(20) NOT NULL,
  `DiemTB` float NOT NULL

)
');
$result=$stsm-> execute();
if (!$result) {
    die("Adding failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Adding success";
};
// insert
$stsm = $conn->prepare('INSERT INTO `sinhvien1`(`MaSV`, `Hoten`, `Ngaysinh`, `Lophoc`, `DiemTB`) 
VALUE (?, ?, ?, ?, ?)');
$data1 = array('SV001','Nguyen Van A', '2002-01-01', 'a1', '8.2');
$data2 = array('SV002','Nguyen Van B', '2002-02-02', 'a2', '8.3');
$data3 = array('SV003','Nguyen Van C', '2002-03-03', 'a3', '8.4');
$data4 = array('SV004','Nguyen Van D', '2002-04-04', 'a4', '8.5');
$data5 = array('SV005','Nguyen Van E', '2002-05-05', 'a5', '8.6');

$result=$stsm-> execute($data1);
if (!$result) {
    die("Adding failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Adding success";
}
$result2=$stsm-> execute($data2);
if (!$result2) {
    die("Adding failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Adding success";
}
$result3=$stsm-> execute($data3);
if (!$result3) {
    die("Adding failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Adding success";
}
$result4=$stsm-> execute($data4);
if (!$result4) {
    die("Adding failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Adding success";
}
$result5=$stsm-> execute($data5);
if (!$result5) {
    die("Adding failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Adding success";
};
//Update
$stsm = $conn->prepare("UPDATE sinhvien1 SET DiemTB = ?  WHERE MaSV=?");
$data1 = [8.5,'SV001'];

$result=$stsm-> execute($data1);
if (!$result) {
    die("Adding failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Adding success: ";
};

//Delete data
$stsm = $conn->prepare("DELETE FROM sinhvien1 WHERE MaSV=?");
$data1 = ['SV003'];

$result=$stsm-> execute($data1);
if (!$result) {
    die("Adding failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Adding success: ";
};
?>

