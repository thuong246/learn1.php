<?php
$dbh = mysqli_connect('localhost', 'root', ''); 
// Kết nối với MySQL Server

if (!$dbh)     
die("Unable to connect to MySQL: " . mysqli_error()); 
// Thông báo lỗi nếu kết nối thất bại 

if (!mysqli_select_db($dbh, 'qlsinhvien'))     
die("Unable to select database: " . mysql_error()); 
// Thông báo lỗi nếu chọn CSDL thất bại

// Create table
$sql_stmt  = "CREATE TABLE IF NOT EXISTS `sinhvien` (
    `MaSV` VARCHAR(10) NOT NULL PRIMARY KEY,
    `HOTEN` VARCHAR(40) NOT NULL,
    `NGAYSINH` DATE NOT NULL,
    `LOPHOC` VARCHAR(40) NOT NULL,
    `DiemTB` FLOAT(10) NOT NULL

)";
$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL

if (!$result) {
    die("Adding failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Creat success";
};
// Insert data
$sql_stmt = "INSERT INTO `sinhvien`(`MaSV`, `HOTEN`, `NGAYSINH`, `LOPHOC`, `DiemTB`)"; 
$sql_stmt .= "VALUES('SV001', 'Nguyen Van A','2002/02/02','a1','8.2'),
                    ('SV002', 'Nguyen Thi B','2002/02/02','a2','8.5'),
                    ('SV003', 'Nguyen Nhu C','2002/02/02','a3','8.0'),
                    ('SV004', 'Nguyen Hong D','2002/02/02','a4','8.3'),
                    ('SV005', 'Nguyen Van E','2002/02/02','a5','8.8')"; 
$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL

if (!$result) {
    die("Adding failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Add success";
};
//Update data
$sql_stmt = "UPDATE `sinhvien` SET `DiemTB` = '8.5'";
$sql_stmt .= "WHERE `MaSV` = 'SV001'";

$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL

if (!$result) {
    die("Update failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Update success: ";
};

//Delete data
$sql_stmt = "DELETE FROM `sinhvien` WHERE `MaSV` = 'SV003'"; 
// Câu lệnh SQL Delete

$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL

if (!$result) {
    die("Delete failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Delete success";
};

?>