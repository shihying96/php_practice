<?php
// db_host，連到哪一台電腦，同一台電腦用localhost就可以
$db_host = 'localhost';

// 資料庫名稱
$db_name = 'mytest';
// 連線資料庫帳號
$db_user = 'shihying';
// 連線資料庫密碼
$db_pass = 'localhost';

// dsn=data source name
$dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8', $db_host, $db_name);

$pdo_options = [
    // ATTR_ERRMODE屬性錯誤模式
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    // ASSOC關聯式陣列
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
];

try {
    $pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);
} catch (PDOException $ex) {
    echo 'Ex:' . $ex->getMessage();
}
