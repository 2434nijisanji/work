<?php

require_once "../database/connet.php";
require_once '../database/mysqlconfig.php';

header('Content-type: text/html; charset=utf-8');
session_start();

$database = new Database();
$link = $database->connect();
$username = $_SESSION['username'];

if (!isset($username)) {
    echo "<script>
        alert('請登入或註冊');
        location = '../view/login.php';
    </script>";
    exit();
}

$sessin_id = file_get_contents('session_id/' . $username);

if (session_id() != $sessin_id) {
    unset($_SESSION['username']);
    echo "<script>
        alert(您已在別處登入， 請重新登入);
        location = '../view/login.php';
    </script>";
    exit();
}

echo "<script>
        alert('歡迎您：' . $username);
        location = '../view/addmessage.php';
</script>";
