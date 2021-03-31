<?php

// echo $_GET['a'] + $_GET['b'];


// 不要跳出notice寫isset
$a = isset($_GET['a']) ? $_GET['a'] : 0;
$b = isset($_GET['b']) ? $_GET['b'] : 0;

// 另一種寫法php 7才有的
// $a = $_GET['a'] ?? 0; 
// $b = $_GET['b'] ?? 0;

echo $a + $b;
