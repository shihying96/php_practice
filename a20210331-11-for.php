<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <?php for ($i = 0; $i < 10; $i++) : ?>
            <tr>
                <?php for ($k = 0; $k < 10; $k++) : ?>
                    <td><?= sprintf('%s * %s = %s', $i + 1, $k + 1, ($i + 1) * ($k + 1)); ?></td>
                <?php endfor; ?>
            </tr>

        <?php endfor; ?>
    </table>


    <pre>
<?php
//sprintf() 輸出字串
// printf() 直接輸出到頁面
printf('%s * %s = %s', 2, 4, 8);
echo "\n";

// 十進位轉十六進位
printf('%X', 255);

?>
</pre>


</body>

</html>