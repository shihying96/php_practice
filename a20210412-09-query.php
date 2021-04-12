<?php

require __DIR__ . '/parts/__connect_db.php';

// query直接執行MySQL語法
$stmt = $pdo->query('SELECT * FROM address_book');
// fetch()拿一筆，fetchAll()拿全部(資料太多時不要用)
// $row = $stmt->fetch();
// echo json_encode($row);

while ($row = $stmt->fetch()) {
    echo "{$row['sid']} {$row['name']} <br>";
}
