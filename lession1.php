
<?php
// câu 1 Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().

echo"câu 1: ";
function countCharacter($string) {
    return strlen($string);
}
echo countCharacter("Hello!");
echo"<br>";
// câu 2 Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().

echo"câu 2: ";
function countWord($string) {
    return str_word_count($string);
}
echo countWord("Hello Word !");
echo"<br>";
// câu 3 Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().

echo"câu 3: ";
function reverseString($string) {
    return strrev($string);
}
echo reverseString ("Hello World");
echo"<br>";
// câu 4 Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
echo"câu 4: ";
function findWord ($word, $word2) {
   return strpos($word, $word2);
}
echo findWord ("Hello World!", "World");
echo "<br>";
// câu 5 Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().

echo "Câu 5: ";
function replaceSubstring($word, $word1, $word2){
    return str_replace($word, $word1, $word2);
}
echo replaceSubstring("world", "guy", "Hello world");
echo "<br>";
 // câu 6 Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().

echo"Câu 6: ";
$str = 'abcd';
$strCheck = 'abcded adc';
$poisition = Strpos($strCheck, $str);
var_dump($poisition);
echo"<br>";
// câu 7 Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().

echo"Câu 7: ";
function convertString($string){
    return strtoupper($string);
}
echo convertString("hello world");
echo"<br>";
// câu 8 Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().

echo"Câu 8: ";
function convertString1($string){
    return strtolower($string);
}
echo convertString1("HELLO WORLD");
echo"<br>";
// câu 9 Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().

echo"Câu 9: ";
function convertString2($string){
    return ucwords($string);
}
echo convertString2("hello world");
echo "<br>";
// câu 10 Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().

echo "Câu 10: ";
function removeWhitespace($string){
    return trim($string);
}
echo removeWhitespace("   Hello world   ");
echo "<br>";
// câu 11 Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().

echo"Câu 11: ";
function removeFirstCharacter($string){
    return ltrim($string, "H");
}
echo removeFirstCharacter("Hello world");
echo "<br>";
// câu 12 Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().

echo"Câu 12: ";
function removeLastCharacter($string,){
    return rtrim($string, "d");
}
echo removeLastCharacter("Hello world");
echo "<br>";
// câu 13 Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().

echo"Câu 13: ";
function splitString($string){
    return explode($string);
}
print_r(explode(" ", "Tách chuỗi thành mảng"));
echo"<br>";
// câu 14 Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().

echo "Câu 14: ";
function connectElement($string){
    return implode($string);
}
echo implode(" ", array('Vũ', 'Thị', 'Thương'));
echo"<br>";
//câu 15 Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().

echo"Câu 15: ";
function addString($string, $string1){
    return str_pad($string, 13, $string1, STR_PAD_RIGHT);
}
echo addString("Hello world", "Hi");
echo "<br>";
// câu 16 Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().

//Hàm strrchr() sẽ tìm kiếm vị trí cuối cùng của kí tự xuất hiện trong chuỗi nguồn.
//Nếu kí tự tìm kiếm là 1 chuỗi sẽ chỉ có kí tự đầu tiên của chuỗi được sử dụng.
//Hàm trả về chuỗi con bắt đầu tự vị trí tìm thấy kí tự đến vị trí cuối chuỗi nguồn. Nếu không tìm thấy hàm trả về FALSE.
echo"Câu 16: ";
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
// câu 17 Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().

// Nếu $type = TRUE chuỗi trả về sẽ lấy từ đầu chuỗi gốc đến vị trí xuất hiện đầu tiên của $char trong chuỗi gốc và không bao gồm $char.
// Nếu $type = FALSE chuỗi trả về sẽ lấy từ vị trí đầu tiên xuất hiện của $char trong chuỗi gốc đến cuối chuỗi gốc và lấy luôn cả $char.
echo "Câu 17: ";
function checkString1($string){
    return strstr($string);
}
if (strstr ("Hello world","World")) { 
    echo "true"; 
    } 
    else { 
    echo "false"; 
    }
echo "<br>";
// câu 18: Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
//$pattern là chuỗi regex mà các bạn muốn tìm kiếm.
//$replacement là chuỗi thay thế cho chuỗi regex tìm được.
//$subject là chuỗi mà các bạn cần tìm kiếm và thay thế.

echo "Câu 18: ";
function replaceCharacter($pattern, $replacement, $subject){ 
    return preg_replace($pattern, $replacement, $subject);  
} 
echo replaceCharacter("/-/","/","Hello-world");
echo "<br>";
// câu 19:Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
echo "Câu 19: ";
function checkInteger($var){
    return is_int($var);
}
if (is_int(25)){
    echo "true";
}
else {
    echo "false";
}
echo "<br>";
// câu 20: Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
echo "Câu 20: ";
function checkMail($email){
    return filter_var($email);
}
if(filter_var('vuthuonganmy@gmail.com', FILTER_VALIDATE_EMAIL)){
    echo "Email hợp lệ";
}
else {
    echo "Email không hợp lệ";
}
echo "<br>";
$number=10;
if($number % =0){
    echo "Số".$number."là số chẵn";
}
else{
    echo "Số".$number."là số lẻ";
}
?>   
