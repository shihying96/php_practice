<?php include __DIR__ . '/parts/config.php'; ?>
<?php
$title = '新增資料';
$pageName = 'ab-insert';

?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">
                    <!-- novalidate把表單裡的檢查功能全關掉 -->
                    <form name="form1" method="post" novalidate>
                        <div class="form-group">
                            <label for="name">*姓名</label>
                            <!-- required為必填欄位 -->
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <!-- type="email"檢查是否有@ -->
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="mobile">手機</label>
                            <!-- pattern 輸入數字的限制 -->
                            <!-- 09\d{2}-?\d{3}-?\d{3}  ?的意思是前面的字可有可無  ex:'-'可有可無 -->
                            <input type="text" class="form-control" id="mobile" name="mobile" pattern="09\d{2}-?\d{3}-?\d{3}">
                        </div>
                        <div class="form-group">
                            <label for="birthday">生日</label>
                            <input type="date" class="form-control" id="birthday" name="birthday">
                        </div>
                        <div class="form-group">
                            <label for="address">地址</label>
                            <textarea class="form-control" id="address" name="address" cols="30" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">新增</button>
                    </form>
                </div>
            </div>


        </div>
    </div>



</div>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<?php include __DIR__ . '/parts/html-foot.php'; ?>