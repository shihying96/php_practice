<?php include __DIR__ . '/parts/config.php'; ?>
<!-- 在config檔要設session_start(); -->

<?php
$title = '登入';

if (isset($_POST['account']) and isset($_POST['password'])) {
    if ($_POST['account'] == 'shin' and $_POST['password'] == '12345') {
        $_SESSION['account'] = 'shin';
    } else {
        $msg = '帳號或密碼錯誤';
    }
}

?>


<?php include __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>
<div class="container">
    <div class="row">
        <?php if (isset($msg)) : ?>
            <!-- 錯誤警告視窗 -->
            <div class="alert alert-danger" role="alert">
                <?= $msg ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['account'])) : ?>
            <!-- 跳登入成功視窗 -->
            <div class="alert alert-success" role="alert">
                <?= $_SESSION['account'] . ' 您好' ?>
            </div>
            <!-- 連到08的檔，登出後回到登入表格畫面 -->
            <div><a href="a20210412-08-logout.php">登出</a></div>
        <?php else : ?>
            <div class="col-md-6">
                <form name="form1" method="post">
                    <div class="form-group">
                        <label for="account">account address</label>
                        <input type="text" class="form-control" id="account" name="account">

                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>
        <?php endif; ?>

    </div>


</div>

<?php include __DIR__ . '/parts/scripts.php'; ?>
<?php include __DIR__ . '/parts/html-foot.php'; ?>