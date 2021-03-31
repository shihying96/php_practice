<?php

// 是不是空值，是的話回傳'0'，不是的話回傳'值',intval是整數
// ex: a=5&b=1.1會回傳6
// intval()      js轉換整數的是parseInt()
// floatval()    js轉換浮點數的是parseFloat()
//stringval()    js轉換字串的是"+
// $a = isset($_GET['a']) ? $_GET['a'] : 0;
// $b = isset($_GET['b']) ? $_GET['b'] : 0;

$a = empty($_GET['a']) ? 0 : intval($_GET['a']);
$b = empty($_GET['b']) ? 0 : intval($_GET['b']);


// $a = empty($_GET['a']) ? 0 : floatval($_GET['a']);
// $b = empty($_GET['b']) ? 0 : floatval($_GET['b']);


// $a = empty($_GET['a']) ? 0 : stringval($_GET['a']);
// $b = empty($_GET['b']) ? 0 : stringval($_GET['b']);

echo ($a + $b) . '<br>';  // . 做字串串接

// $c = [];

// echo empty($c) ? '空的' : '不是';
