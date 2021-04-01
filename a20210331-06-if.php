<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if</title>
</head>

<body>

    <!-- ?=是簡寫，這意盎不用多寫echo回傳 -->
    <!--  ?php $s = isset($_GET['age']...    echo $s-->
    <h2><?php $s =  isset($_GET['age']) ? "年齡: {$_GET['age']}" : "沒有給年齡";
        echo $s ?>
    </h2>

    <!-- <?php $s = isset($_GET['age']) ? "年齡: {$_GET['age']}" : "沒有給年齡"
            ?>


    <h2><?php echo $s ?></h2> -->




    <?php
    // echo $s
    if (isset($_GET['age']) && intval($_GET['age']) >= 18) {
    ?>
        <img src="./images/file-20200618-41213-iu7wbs.jpg" alt="">
    <?php
    } else {
    ?>
        <img src="./images/dog-puppy-on-garden-royalty-free-image-1586966191.jpg" alt="">

    <?php
    }
    ?>



</body>

</html>