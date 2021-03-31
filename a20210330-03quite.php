<!-- 雙引號知道$是變數，單引號只會把$(文字)印出來 -->
<?php
$name = "Shih";

echo "Hello $name <br>";
echo "Hello $name 123 <br>";
echo "Hello $name <br>";
echo 'Hello $name <br>';
echo "Hello ${name} <br>";
echo "Hello {$name} <br>";
?>