<?php
// 資料夾位置
require __DIR__ . '/parts/__connect_db.php';

// query直接執行MySQL語法
// pdo是php連接資料庫的一個方法

// ->是php呼叫query這個方法
// stament
$stmt = $pdo->query('SELECT * FROM address_book');

// 用SELECT才能用fetch()
// fetch()拿一筆，fetchAll()拿全部(資料太多時不要用)
// $row = $stmt->fetch();
// echo json_encode($row,JSON_UNESCAPED_UNICODE); json物件，JSON_UNESCAPED_UNICODE row data中文能正常顯示


//   拿一筆fetch()設定給row，重複此動作，拿到最後沒東西NULL，空植迴圈結束
while ($row = $stmt->fetch()) {
    // 拿到的變數叫做$row
    echo "{$row['sid']} {$row['name']} <br>";
}
