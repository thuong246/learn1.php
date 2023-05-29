<?php
//1
function checkNumber($number)
{
    if ($number % 2 == 0) {

        return  "số " . $number . " là số chẵn" . "<br/>";
    } else {

        return  "số " . $number . " là số lẻ" . "<br/>";
    }
}

echo checkNumber(5);
echo checkNumber(6);

//2
function checkRank($diemGiuaKy, $diemCuoiKy)
{
    $dtb = $diemGiuaKy * (30 / 100) + $diemCuoiKy * (70 / 100);

    if ($dtb >= 9) {

        return  "Xếp hạng xuất sắc" . "<br/>";
    } else if ($dtb >= 7 && $dtb < 9) {

        return  "Xếp hạng  giỏi" . "<br/>";
    } else if ($dtb >= 5 && $dtb < 7) {

        return  "Xếp hạng  khá" . "<br/>";
    } else if ($dtb < 5) {

        return  "Xếp hạng  yếu" . "<br/>";
    }
}

echo checkRank(7, 10);


//3
$year = date(('Y'));

if ($year % 2 === 0) {

    echo "Năm " . $year . "là năm chẵn" . "<br/>";
} else {

    echo "Năm " . $year . "là năm lẻ" . "<br/>";
}

//4
echo "Câu 4: ";
function printNumber(){
    for($i=1; $i<=100; $i++){
        echo $i. "\n";
    }
}
return printNumber();
echo "<br>";
//5
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
return printNumber1();
echo "<br>";
//6
echo "Câu 6: ";
function cau6()
{
    $nam = array(1990, 1991, 1992, 1993, 1994, 1995);

    foreach ($nam as $item) {
        echo $item . "\n>";
    }
}
cau6();