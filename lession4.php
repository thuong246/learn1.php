<?php
// bài 1: Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ
echo "Bài 1: ";
function checkEven ($number){
    if ($number%2==0){
    echo " Số " . $number . " là số chẵn";
    }
    else {
    echo " Số " . $number . " là số lẻ";
    }
}
echo checkEven(5);
echo checkEven(6);
echo "<br>";
// Bài 2:  Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ.
echo "Bài 2: ";
function checkRank($midterm, $endterm)
{
    $average = $midterm * (30 / 100) + $endterm * (70 / 100);

    if ($average >= 9.0) {
        return  "Xếp hạng xuất sắc" . " ";
    } else if ($average >= 7.0 && $average < 9.0) {
        return  "Xếp hạng  giỏi" . " ";
    } else if ($average >= 5.0 && $average < 7.0) {
        return  "Xếp hạng  khá" . " ";
    } else if ($average < 5.0) {
        return  "Xếp hạng  trung bình- yếu" . " ";
    }
}
echo checkRank(5, 10);
echo "<br>";
//bài 3: Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ
echo "Câu 3: ";
function checkYear(){
$year = date(('Y'));

if ($year % 2 === 0) {

    echo "Năm " . $year . " là năm chẵn" ;
} else {

    echo "Năm " . $year . " là năm lẻ" ;
}
}
checkYear(); 
echo "<br>";
//câu 4: Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100.
echo "Câu 4: ";
function printNumber(){
    for($i=1; $i<=100; $i++){
        echo $i. "\n";
    }
}
printNumber();
echo "<br>";
//câu 5: Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường
echo "Bài 5: ";
function printNumber1(){
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 === 0) {
            echo "<strong>" . $i . "</strong> " . "\n";
        } else {
            echo  $i  . "\n";
    }
}
}
printNumber1();
echo "<br>";
//câu 6: Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây
echo "Bài 6:";
function printYear()
{
    $nam = array(1990, 1991, 1992, 1993, 1994, 1995);
    foreach ($nam as $item) {
        echo $item . "\n";
    }
}
printYear();
?>