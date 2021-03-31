<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for迴圈</title>
</head>

<body>

    <table border="1">
        <?php for ($i = 0; $i < 10; $i++) : ?>

            <tr>
                <td><?= $i + 1 ?></td>
            </tr>
        <?php endfor; ?>
    </table>


</body>

</html>