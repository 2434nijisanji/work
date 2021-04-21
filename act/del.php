<?php

require_once "../database/connet.php";
require_once '../database/mysqlconfig.php';

header("content-type: text/html; charset = utf-8");
session_start();

$database = new Database();
$link = $database->connect();
$id = $_POST['id'];

if ($link) {
    $sql = "DELETE FROM `tbl_ms1` WHERE `tbl_ms1`.`user`";
    $que = mysqli_query($link, $sql);
    if ($que) {
        echo "<script>alert('刪除成功'); location = '../view/index2.php'; </script>";
    } else {
        echo "<script>alert('刪除失敗'); location = '../view/index2.php' </script>";
        exit;
    }
}
