<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td {
            width: 50px;
            height: 50px;
        }
    </style>
</head>

<body>
    <?php for ($i = 0; $i < 16; $i++) : ?>
        <table>
            <tr>
                <?php for ($k = 0; $k < 16; $k++) :
                    $c = sprintf('#%X%X%X0%X0', $k, $k, $i, $i);
                ?>
                    <td style="background-color: <?= $c ?>;">&nbsp;</td>
                <?php endfor; ?>
            </tr>
        </table>
    <?php endfor; ?>
</body>

</html>