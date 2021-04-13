<?php include __DIR__ . '/parts/config.php'; ?>
<?php
$title = '新增資料';
$pageName = 'ab-insert';

?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>
<style>
    form .form-group small.error {
        color: red;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">
                    <!-- novalidate把表單裡的檢查功能全關掉 -->
                    <!-- return false把送表單的行為取消(如果沒填完表單的話)，因為要用ajax送，不要用傳統的方式送出 -->
                    <!-- return false = onsubmit="event.preeventDefault" -->
                    <form name="form1" method="post" novalidate onsubmit="checkForm();return false;">
                        <div class="form-group">
                            <label for="name">*姓名</label>
                            <!-- required為必填欄位 -->
                            <input type="text" class="form-control" id="name" name="name" required>
                            <small class="form-text error"></small>
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <!-- type="email"檢查是否有@ -->
                            <input type="email" class="form-control" id="email" name="email">
                            <small class="form-text error"></small>
                        </div>
                        <div class="form-group">
                            <label for="mobile">手機</label>
                            <!-- pattern 輸入數字的限制 -->
                            <!-- 09\d{2}-?\d{3}-?\d{3}  ?的意思是前面的字可有可無  ex:'-'可有可無 -->
                            <input type="text" class="form-control" id="mobile" name="mobile" pattern="09\d{2}-?\d{3}-?\d{3}">
                            <small class="form-text error"></small>
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

<script>
    const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;
    const $name = $('#name'),
        $email = $('#email'),
        $mobile = $('#mobile');
    const fileds = [$name, $email, $mobile];
    // const smalls = [$name.next(), $email.next(), $mobile.next()];


    // 檢查欄位有沒有填
    function checkForm() {


        // 回復原來的狀態，表格是灰色的框
        fileds.forEach(el => {
            el.css('border', '1px solid #CCCCCC');
            // 警示小字未出現
            el.next().text('');
        });

        let isPass = true;

        if ($name.val().length < 2) {
            isPass = false;
            $name.css('border', '1px solid red');
            // 這裡的next是<small>標籤，看html
            $name.next().text('請輸入正確的姓名');
        }
        if (!email_re.test($email.val())) {
            isPass = false;
            $email.css('border', '1px solid red');
            $email.next().text('請輸入正確的 email');
        }
        if (!mobile_re.test($mobile.val())) {
            isPass = false;
            $mobile.css('border', '1px solid red');
            $mobile.next().text('請輸入正確的手機號碼');
        }

        if (isPass) {
            // 送出表單
            $.post(
                'ab-insert-api.php',
                // serialize()序列化
                $(document.form1).serialize(),
                function(data) {
                    if (data.success) {
                        alert('資料新增成功');
                    }

                },
                'json'
            )

        }

    }
</script>



<?php include __DIR__ . '/parts/html-foot.php'; ?>