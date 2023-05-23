<?php
// 1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn không
// + chia hết cho 2
function checkEven($number){
if($number % 2 == 0){
    echo "Số".$number."là số chẵn";
}
else{
    echo "Số".$number."là số lẻ";
}
}
echo "<br>";
echo "Câu 2: ";
$n = 10; 
$tong = 0; 
for ($i = 1; $i <= $n; $i++) {
$tong += $i;
}
echo "Tổng là: $tong";
echo "<br>";
// /3.Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
echo "câu 4: ";
function checkString($string){ 
    return strrchr($string);  
}
if (strrchr ("Hello world","hello")) { 
echo "true"; 
} 
else { 
echo "false"; 
} 
echo "<br>";
echo "câu 5:";
function findMinMax($array) {
    $min = $array[0]; 
    $max = $array[0];

    foreach ($array as $value) {
        if ($value < $min) {
            $min = $value; 
        }
        if ($value > $max) {
            $max = $value; 
        }
    }

    echo "Giá trị nhỏ nhất: $min\n";
    echo "Giá trị lớn nhất: $max\n";
}

$array = [4, 2, 9, 7, 5, 1];
findMinMax($array);
echo "<br>";
//3.Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
echo "câu 3: ";
for($i = 1; $i < 10; $i ++) {
    echo "<td>";
    for($j = 1; $j <= 10; $j ++) {
        echo "$i x $j = " . ($i * $j);
        echo "<br>";
    }
    echo "</td>";
}
echo "Câu 6: ";
$numbers = array(1, 3, 2, 9, 11);
sort($numbers);
  
foreach( $numbers as $number) {
    echo "$number <br>";
}
?>