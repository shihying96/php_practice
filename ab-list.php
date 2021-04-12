<?php include __DIR__ . '/parts/config.php'; ?>
<!-- config.php檔案要加require __DIR__ . '/__connect_db.php'; -->
<?php
$title = '列表';

$perPage = 2;
$t_sql = 'SELECT COUNT(1) FROM address_book';
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$totalPages = ceil($totalRows / $perPage);
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;





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
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                            <li class="page-item">
                                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                            </li>
                        <?php endfor; ?>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
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