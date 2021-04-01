<pre>
<?php

// 關聯式陣列
$ar1 = [
    'name' => 'Bill',
    'age' => 27,
    'gender' => 'male',
];
//print_r($ar1);


// 索引式陣列
$ar2 = [2, 4, 6, 9, 15];

foreach ($ar1 as $k => $v) {
    echo "$k : $v<br>";
}

echo "-----------------------<br>";

foreach ($ar2 as $k => $v) {
    echo "$k : $v<br>";
}









?>
</pre>