<div>
    <?php
    // 如果不能直接在php ini改時區，用這個
    date_default_timezone_set('Asia/Taipei');
    // 在php ini(用apache開)檔案裡改timezone 改成台北
    echo time() . '<br>';
    echo date("Y-m-d H:i:s") . '<br>';
    echo date("Y-m-d H:i:s", time() + 2592000) . '<br>';
    echo date("Y-m-d H:i:s", time() + 30 * 24 * 60 * 60) . '<br>';

    $t = strtotime('4/3/21');
    echo $t . '<br>';
    echo date("Y-m-d H:i:s", $t) . '<br>';

    ?>
</div>