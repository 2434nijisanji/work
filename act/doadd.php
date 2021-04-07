<?php

session_start();

require_once "../database/connet.php";
require_once '../database/mysqlconfig.php';

$id = $_SESSION["uid"];
$title = $_POST["title"];
$author = $_POST["author"];
$_SESSION["authorl"] = $author;
$content = $_POST["content"];
$ip = $_SERVER["REMOTE_ADDR"];
$ma1 = new Database();
$link = $ma1->connect();
$sql = "insert into tbl_ms1 (user, title, author, ip, message, time) values('$id', '$title', '$author', '$ip', '$content' ,now())";

if ($title != null) {
    if ($author != null) {
        $res = $ma1->insertl($link, $sql);
    };
    if ($author == null) {
        echo "<script>alert('請輸入留言者！'); location = '../view/addmessage.php'; </script>";
    };
};
if ($title == null) {
    echo "<script>alert('請輸入留言標題！'); location = '../view/addmessage.php'; </script>";
};
