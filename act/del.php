<?php
header("content-type: text/html; charset = utf-8");
session_start();
require_once "../database/connet.php";
require_once '../database/mysqlconfig.php';
$ma1 = new DB();
$link = $ma1->connect();
$id = $_GET['id'];
if ($link) {
    $sql = "DELETE FROM `tbl_ms` WHERE `tbl_ms`.`username` = '$id'";
    $que = mysqli_query($link, $sql);
    if ($que) {
        echo "<script>alert('刪除成功，返回首頁'); location = '../view/show.php'; </script>";
    } else {
        echo "<script>alert('刪除失敗'); location = '../view/show.php' </script>";
        exit;
    }
}