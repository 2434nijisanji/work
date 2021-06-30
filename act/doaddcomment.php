<?php

session_start();

require_once "../database/connet.php";
require_once '../database/mysqlconfig.php';

$database = new Database();
$link = $database->connect();


$id =  $_SESSION["uid"];
$con = @mysqli_connect("127.0.0.1", "root", "YiUMq6P1D8e1HU7I", "my1");
$query_sql = "select * from tbl_ms1 where user = '$id'";
$result = mysqli_query($con, $query_sql);
$res = mysqli_fetch_array($result);
$uid = $_SESSION["id"];
$content = $_POST["comment"];
$ip = $_SERVER["REMOTE_ADDR"];
$num = $_SESSION['num'];
$sql = "insert into tbl_ms2 (id, uid, ip, comment, time) values('$num','$uid', '$ip', '$content' ,now())";
if (mysqli_query($link, $sql)) { ?>
    <script>
        alert('留言成功!');
        location = '../view/showmessage.php?id=<?php echo $num ?>'
    </script>
<?php
} else {
    echo "Error insert data: " . $link->error;
}
