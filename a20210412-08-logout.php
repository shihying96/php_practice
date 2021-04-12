<?php
session_start();

unset($_SESSION['account']);

header('Location: a20210412-06-login.php');
