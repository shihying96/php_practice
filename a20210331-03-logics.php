<?php

echo 5 || 7; // bool
echo '<br>';

$a = 5 or $b = 6; // or 的優先權比 = 還低

$c = 5 || $d = 6; // || 只會得到bool  01 ,||的優先權比 = 要高

echo "\$a=$a , \$b=$b<br>";
echo "\$c=$c , \$d=$d<br>";
