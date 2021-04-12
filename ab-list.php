<?php include __DIR__ . '/parts/config.php'; ?>
<!-- config.php檔案要加require __DIR__ . '/__connect_db.php'; -->
<?php
$title = '列表';
// $perPage每一頁有幾筆
$perPage = 2;
$t_sql = 'SELECT COUNT(1) FROM address_book';
// (PDO::FETCH_NUM)返回以數字作為索引鍵(key)的陣列(array)，由0開始編號
// 0 : 1
// 1 : 王小明
// 2 : aaa@gmail.com
// 3 : 台南縣新化區中正路1號
// 4 : 第 1 筆資料


// PDO::FETCH_BOTH 返回 FETCH_ASSOC 和 FETCH_NUM 的結果，兩個都會列出
// 返回結果：
// sn : 1
// 0 : 1
// name : 王小明
// 1 : 王小明
// mail : aaa@gmail.com
// 2 : aaa@gmail.com
// home : 台南縣新化區中正路1號
// 3 : 台南縣新化區中正路1號
// message : 第 1 筆資料
// 4 : 第 1 筆資料

// 只有拿到一筆[0]
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
// ceil無條件進位，$totalPages總頁數
$totalPages = ceil($totalRows / $perPage);
// $totalRows總筆數，$perPage每一頁有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$pageName = 'ab-list';



// LIMIT索引值從%s開始0,2  2,2
$sql = sprintf("SELECT * FROM address_book LIMIT %s,%s", ($page - 1) * $perPage, $perPage);

$rows = $pdo->query($sql)->fetchAll();

?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>
<div class="container">
    <!-- <div><?= $totalRows ?></div>
    <div><?= $totalPages ?></div> -->

    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">

                       
                            <a class="page-link" href="?page=<?= $page - 1 ?>">
                                <i class="fas fa-arrow-circle-left"></i>
                            </a>
                        </li>
                        <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                            <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                               <!-- 做分頁， ?page=<?= $i ?>是get參數，滑上去按鍵，網頁左下角會顯示是第幾頁-->
                                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                            </li>
                        <?php endfor; ?>
                        <li class="page-item <?= $page >= $totalPages ? 'disabled' : '' ?>">
                            <a class="page-link" href="?page=<?= $page + 1 ?>">
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>






        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Address</th>
                    <th scope="col"><i class="fas fa-trash-alt"></i></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $r) : ?>
                    <tr>
                        <td><?= $r['sid'] ?></td>
                        <td><?= $r['name'] ?></td>
                        <td><?= $r['email'] ?></td>
                        <td><?= $r['mobile'] ?></td>
                        <td><?= $r['birthday'] ?></td>
                        <td><?= $r['address'] ?></td>
                        <td class="trash">
                            <a href="javascript:">
                                <!-- header要掛fontawesome -->
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php include __DIR__ . '/parts/scripts.php'; ?>

    <script>
        $('.trash').click(function() {

            $(this).parent().remove();
        });
    </script>
    <?php include __DIR__ . '/parts/html-foot.php'; ?>