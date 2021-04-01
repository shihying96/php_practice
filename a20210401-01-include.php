<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- require錯誤會跳error，include跳warning -->

<body>
    <?php
    $hi = 'Hello';
    require __DIR__ .  '/parts/table01.php';
    ?>
</body>

</html>