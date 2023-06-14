<?php
$DB_TYPE = "mysql";
$DB_HOST = "localhost";
$DB_NAME = "qlgiaodich";
$USER_NAME = "root";
$USER_PASSWORD = "";

$conn = new PDO("$DB_TYPE:host=$DB_HOST;dbname=$DB_NAME", $USER_NAME, $USER_PASSWORD);
// Create table
$stsm = $conn->prepare('CREATE TABLE IF NOT EXISTS `giaodich1` (
    `id` int(6) AUTO_INCREMENT PRIMARY KEY,
    `NgayGD` date NOT null, 
    `LoaiGD` varchar (50) ,
    `SoTien` float ,
    `MoTa` varchar(100)
)');
$result=$stsm-> execute();
if (!$result) {
    die("Adding failed: " . mysqli_error()); 
} else {
    echo "Adding success: ";
};
//Insert 
$stsm = $conn->prepare('INSERT INTO `giaodich1`(`NgayGD`, `LoaiGD`, `SoTien`, `MoTa`) 
VALUE (?, ?, ?, ?)');
$data = array('2023-07-05','Rut tien', '500','Rut tien ATM');

$result=$stsm-> execute($data);
if (!$result) {
    die("Adding failed: " . mysqli_error()); 
} else {
    echo "Adding success: ";
}
//Update data
$stsm = $conn->prepare("UPDATE giaodich1 SET SoTien = ?  WHERE id=?");
$data = [1000,1];

$result=$stsm-> execute($data);
if (!$result) {
    die("Adding failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Adding success: ";
}

//Delete data
$stsm = $conn->prepare("DELETE FROM giaodich1 WHERE id=?");
$data = [5];

$result=$stsm-> execute($data);
if (!$result) {
    die("Adding failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Adding success: ";
}

?>