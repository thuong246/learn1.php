<?php
// câu 1 Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
echo "Câu 1: ";
function checkEven($number){
    return $number;}
{
    $number=10;
if($number % 2 == 0){
    echo "Số" . $number  . "  là số chẵn ";
}
else{
    echo "Số" . $number  . "  là số lẻ ";
   
}
}
echo "<br>";
//câu 2 Viết chương trình PHP để tính tổng của các số từ 1 đến n
echo "Câu 2: ";
function calcSum($n){
    $sum=0;
    for ($i=1; $i<=$n; $i++)
    $sum+=$i;
    return $sum;
}
$n=3;
echo "Tổng: ". calcSum($n);
echo "<br>";
//câu 3 Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10
echo "câu 3: ";
function multiplicationTable(){
    for($i = 1; $i <=10; $i ++) {
        for($j = 1; $j <= 10; $j ++) {
            $result = $i*$j;
            echo "$i x $j = $result";
            echo "<br>";
        }
    }
}
multiplicationTable();
//câu 4:Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không
echo "Câu 4; ";
function checkWord($string, $string1) {
    
    $position = strpos($string, $string1);
    if ($position !== false) {
        echo "Chuỗi '$string' chứa từ '$string1'";
    } else {
        echo "Chuỗi '$string' không chứa từ '$string1'";
    }
}
echo checkWord("Hello world", "world");
echo "<br>";
//câu 5: Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng
echo "Câu 5: ";
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
//câu 6 Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần
echo "Câu 6: ";
function sortElement($numbers) {
    return $numbers;
}
$numbers = [3, 4, 1, 2, 8];
sort($numbers);
echo "Mảng sau khi sắp xếp tăng dần: ";
foreach ($numbers as $number) {
    echo $number . "\n ";
    echo "<br>";
}
//câu 7 Viết chương trình PHP để tính giai thừa của một số nguyên dương
echo "Câu 7: ";
function calcFactorial ($x){
    return $x;
}
    $n=7;
    $x=1;
    for ($i=1; $i<=$n-1; $i++){
        $x*=($i+1);
    }
    echo "Giai thừa của $n = $x". "<br>";
   // Câu 8: Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
echo "Câu 8: ";
function findPrime1 ($n){
    for ($i=2; $i<= sqrt($n); $i++){
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}
function findPrime2($x, $y){
    echo " Các số nguyên tố cho sẵn là:";
    for ($i=$x; $i<=$y; $i++){
        if (findPrime1($i))
        echo $i. "\n";
    }
echo "<br>";
}
echo findPrime2(1,30);

// câu 9: Viết chương trình PHP để tính tổng của các số trong một mảng
// 
echo "Câu 9: "; 
function calcTotal ($array){
    return $sum;
}
$arrays = [1,2,3];
$sum = 0;
echo "Tổng của mảng là: " ;
 {
foreach($arrays as $array){
    $sum+=$array;
}
echo $sum. "";
}
echo "<br>";
// câu 10: Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước
echo "Câu 10: ";
function printFibonacci($x, $y) {
    $fib1 = 0;
    $fib2 = 1;
    $fib = $fib1 + $fib2;
    echo "Các số Fibonacci trong khoảng cho trước là: ";
    while ($fib <= $y) {
        if ($fib >= $x) {
            echo $fib . " ";
        }
        $fib1 = $fib2;
        $fib2 = $fib;
        $fib = $fib1 + $fib2;
    }
}
$x = 1; // Thay đổi giá trị của số bắt đầu khoảng ở đây
$y = 50; // Thay đổi giá trị của số kết thúc khoảng ở đây
printFibonacci($x, $y);
echo "<br>";
//Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không
// Số A là số có tổng các chữ số của nó bằng số đó
echo "Câu 11: ";
function checkArmstrong($number){
    $sum = 0;
    $numbers = $number;
// Tính tổng lũy thừa các chữ số
    while ($number > 0) {

        $val = $number % 10;
        $sum += pow($val,  strlen($numbers));
        $number = (int)($number / 10);
    }

 // Kiểm tra nếu tổng lũy thừa các chữ số bằng số ban đầu
    if ($sum ==  $numbers) {
        return true;
    } else {
        return false;
    }
}

// Sử dụng hàm để kiểm tra số Armstrong
$number = 153;
if (checkArmstrong($number)) {
    echo $number . " là số Armstrong.";
} else {
    echo $number . " không phải là số Armstrong.";
}
echo "<br>";
// Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ
// sử dụng hàm array splice( )
echo "Câu 12: ";
function insertElement($array, $element, $location) {
    array_splice($array, $location, 0, $element);
    return $array;
}
$array = [2,4,6,8];
$element = 10;
$location = 5;
print_r( insertElement($array, $element, $location));
echo "<br>";
//câu 13: dùng array_unique để loại bỏ các phần tử giống nhau
echo "Câu 13: ";
function removeDuplicateElement($array){
return $array;
}
$array=[2,4,6,8,8];

$result = array_unique($array);
print_r($result);
echo "<br>";
// câu 14: Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng
echo "Câu 14: ";
function findElementLocation($arr, $element)
{
    $location = array_search($element, $arr);
    if ($location !== false) {
        return $location; 
    } else {
        return -1;
    }
}
// Mảng ban đầu
$array = [1, 2, 3, 4, 5];
$element = 3;
$location = findElementLocation($array, $element);

if ($location !== -1) {
    echo "Vị trí của phần tử $element là $location";
} else {
    echo "Không tìm thấy phần tử $element trong mảng";
}
echo "<br>";
// câu 15: Viết chương trình PHP để đảo ngược một chuỗi.
echo "Câu 15: ";
function reverseString($string){
    $n = strlen($string);
 if($n == 1)
   {
    return $string;
   }
 else
   {
   $n;
   return reverseString(substr($string,1, $n)) . substr($string, 0, 1);
   }
}
print_r(reverseString('1234'));
echo "<br>";
// Câu 16: Viết chương trình PHP để tính số lượng phần tử trong một mảng.
echo "Câu 16: ";
function countElements($array)
{
    $count = count($array);
    return $count;
}
$array = [2,4,6,8];
$elementCount = countElements($array);
echo "Số lượng phần tử trong mảng là: " . $elementCount;
echo "<br>";
//câu 17: Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không
echo "Câu 17: ";
function checkPalindrome($string){
    $reversedString = strrev($string);

    if($reversedString === $string){
        echo"Đây là chuỗi Palindrome";
    }else{
        echo"Đây không phải là chuỗi Palindrome";
    }
}
$string = '123456';
echo checkPalindrome($string);
echo "<br>";
//câu 18: Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng
echo "Câu 18: ";
function countOccurrences($array, $element)
{
    $count = 0;
    foreach ($array as $value) {

        if ($value === $element) {

            $count++;
        }
    }

    return $count;
}
$array = [1,2,3,1,2,3];
$elementToCount = 2;
$occurrences = countOccurrences($array, $elementToCount);

// Hiển thị số lần xuất hiện
echo "Số lần xuất hiện của phần tử " . $elementToCount . " trong mảng là: " . $occurrences;
echo "<br>";
//câu 19: Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
echo "Câu 19: ";
function sortDescending($arr)
{
    rsort($arr);
    return $arr;
}
$array = [2,4,6,8];
$array = sortDescending($array);
print_r($array);
echo "<br>";
//câu 20: Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng
echo "Câu 20: ";
function addElement($array, $element, $position)
{
    if ($position == "start") {
        array_unshift($array, $element);
    } else {
        array_push($array, $element);
    }
    return $array;
}
$array = ["2", "3", "4"];
$newElement = "5";
$array = addElement($array, $newElement, "end");
$array = addElement($array, $newElement, "start");
print_r($array);
echo "<br>";
//câu 21: Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
echo "Câu 21: ";
function findSecondLargest($arr)
{
    rsort($arr);
    return $arr[1];
}
$array= [2,4,6,8];
$secondLargest = findSecondLargest($array);
echo "Số lớn thứ hai trong mảng là: " . $secondLargest;
echo "<br>";
//câu 22: Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương
echo "Câu 22: ";
function findCommonDiv($a, $b)
{
    if ($b == 0) {
        return $a;
    } else {
        return findCommonDiv($b, $a % $b);
    }
}
function findCommonMul($a, $b)
{
    return ($a * $b) /  findCommonDiv($a, $b);
}
$num1 = 10;
$num2 = 20;
echo "Ước số chung lớn nhất của " . $num1 . " và " . $num2 . " là: " .  findCommonDiv($num1, $num2) . "<br>";
echo "Bội số chung nhỏ nhất của " . $num1 . " và " . $num2 . " là: " . findCommonMul($num1, $num2);
echo "<br>";
//câu 23: Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không
echo "Câu 23: ";
function checkPerfectNumber($num)
{
    $sum = 0;
    for ($i = 1; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $sum += $i;
        }
    }
    if ($sum == $num) {
        return true;
    } else {
        return false;
    }
}
$num = 38;
if (checkPerfectNumber($num)) {
    echo $num . " là số hoàn hảo";
} else {
    echo $num . " không phải là số hoàn hảo";
}
echo "<br>";
//câu 24: Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng
echo "Câu 24: ";
function findLargestOdd($arr)
{
    $largestOdd = null;
    foreach ($arr as $num) {
        if ($num % 2 != 0 && ($largestOdd == null || $num > $largestOdd)) {
          $largestOdd = $num;
        }
    }
    return $largestOdd;
}
$array = [3,5,7,9];
$largestOdd = findLargestOdd($array);
echo "Số lẻ lớn nhất trong mảng là: " . $largestOdd;
echo"<br";
//câu 25:Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
echo "Câu 25: "; 
function isPrime($number) {
    if ($number < 2) {
        return false;
    }    
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }    
    return true;
}
$number = 19; 
if (isPrime($number)) {
    echo "$number là số nguyên tố.";
} else {
    echo "$number không phải là số nguyên tố.";
}
echo "<br>";
//câu 26: Viết chương trình PHP để tìm số dương lớn nhất trong một mảng
echo "Câu 26: ";
function findLargestPositive($arr)
{
    $largestPositive = null;
    foreach ($arr as $num) {
        if ($num > 0 && ($largestPositive == null || $num > $largestPositive)) {
            $largestPositive = $num;
        }
    }
    return $largestPositive;
}

$array = [-2,-1,0,1,2];
$largestPositive = findLargestPositive($array);
echo "Số dương lớn nhất trong mảng là: " . $largestPositive;
echo "<br>";
//câu 27: Viết chương trình PHP để tìm số âm lớn nhất trong một mảng
echo "Câu 27: ";
function findLargestNegative($arr)
{
    $largestNegative = null;
    foreach ($arr as $num) {
        if ($num < 0 && ($largestNegative == null || $num > $largestNegative)) {
            $largestNegative = $num;
        }
    }
    return $largestNegative;
}
$array =[-2,-1,0,1,2];
$largestNegative = findLargestNegative($array);
echo "Số âm lớn nhất trong mảng là: " . $largestNegative;
echo "<br>";
//câu 28: Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n
echo "câu 28: ";
function sumOddNumbers($n)
{
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 != 0) {
            $sum += $i;
        }
    }
    return $sum;
}
$n = 5;
$sum = sumOddNumbers($n);
echo "Tổng các số lẻ từ 1 đến " . $n . " là: " . $sum;
echo "<br>";
//câu 29: Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước
echo "Câu 29: ";
function findPerfectSquares($x, $y)
{

    $perfectSquares = array();

    for ($i = $x; $i <= $y; $i++) {

        if (sqrt($i) == floor(sqrt($i))) {

            array_push($perfectSquares, $i);
        }
    }

    return $perfectSquares;
}

$x = 1;
$y = 10;
$perfectSquares = findPerfectSquares($x, $y);
echo "Các số chính phương trong khoảng từ " . $x . " đến " . $y . " là: ";
foreach ($perfectSquares as $num) {
    echo $num . " ";
}
echo "<br>";
echo "Câu 30: ";
function isSubstring($string, $string1)
{
    if (strpos($string, $string1) !== false) {

        return true;
    } else {

        return false;
    }
}
$string = "Hello world";
$string1 = "world";
if (isSubstring($string, $string1)) {
    echo "Chuỗi '" . $string1 . "' là chuỗi con của chuỗi '" . $string . "'";
} else {
    echo "Chuỗi '" . $string1 . "' không phải là chuỗi con của chuỗi '" . $string . "'";
}
?>
