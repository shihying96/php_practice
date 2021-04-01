<?php
// 把json字串宣告成變數，裡面有雙引號(json格式)，所以外面要加單引號
$str = '{"name":"大衛","age":"25","gender":"male"}';

$ar = json_decode($str);

// 第一種寫法
// -> 相當於JS的.  .style 
echo "<br> {$ar->name}";
echo "<br> {$ar->age}";


// 第二種寫法
// json_decode可以把json轉換為原本的格式(ex:陣列...)
$ar2 = json_decode($str, true);
// 不用鍵頭->，用[]->
echo "<br> {$ar2['name']}";
echo "<br> {$ar2['age']}";
