<?php include __DIR__ . '/parts/config.php';

$sid = intval($_GET['sid']);

// $_SERVER['HTTP_REFERER']刪除資料時，讓畫面停在原本的頁面(不會跳回第一頁)
// $_SERVER['HTTP_REFERER']可能會沒有
// ex:第七頁只有一筆資料時，會跳到第六頁(雖然顯示還是寫7)

$come_form = $_SERVER['HTTP_REFERER'] ?? 'ab-list.php';

// 如果不是空的
if (!empty($sid)) {
    $sql = "DELETE FROM `address_book` WHERE `sid`=$sid ";
    $pdo->query($sql);
}

header('Location: ' . $come_form);
// 停在原本的頁面
