<?php
class DB
{
    function connect()
    {
        @$link = mysqli_connect("localhost","my_user","my_password","test");
        @$link = mysqli_connect(Host, User, Password); //連線資料庫
        $coo = mysqli_set_charset($link, Charset); //設定資料庫字型格式
        $coo = mysqli_select_db($link, Name) or die('資料庫開啟失敗'); //選擇資料庫
        if (mysqli_connect_errno()) {
            die('資料庫連線失敗 : ' . mysqli_connect_errno());
        }
        return $link;
    }
    function insert($link, $sql)
    {
        if (mysqli_query($link, $sql)) {
            echo "<script language = 'javascript'> alert('註冊成功!'); location = 'index.php'; </script>";
        } else {
            echo "Error insert data: " . $link -> error;
        }
    }
    function CheckUser($link, $sql)
    {
        $result = mysqli_query($link, $sql);
        $row = mysqli_num_rows($result);
        if ($row != 0) {
            return true;
        } else {
            return false;
        }
    }
    function insertl($link, $sql)
    {
        if (mysqli_query($link, $sql)) {
            echo "<script language = 'javascript'> alert('留言成功!'); location = 'show.php'; </script>";
        } else {
            echo "Error insert data: " . $link -> error;
        }
    }
    function print1($link, $sql)
    {
        $result = mysqli_query($link, $sql);
        $data = array();
        while ($row = mysqli_fetch_array($result)) {
            $data[] = $row;
        }
        if ($data) {
            return $data;
        } else {
            return false;
        }
    }
}
