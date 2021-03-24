<?php header('Content-type: text/html; charset = UTF8'); ?>
<html>

<head>
    <title>我的留言板.檢視留言</title>
</head>

<body style = "background-size: cover; background-attachment: fixed;">
    <div>
        <h2>我的留言板</h2>
        <input type = "button" value = "新增留言" onclick = "location.href = '../view/add.php'" class = "button">
        <input type = "button" value = "檢視留言" onclick = "location.href = '../view/show.php'" class = "button">
        <input type = "button" value = "退出登入" onclick = "location.href = '../view/index.php'; logout()" class = "button">
        <hr width = "70%">
    </div>
    <?php

    $con = @mysqli_connect("127.0.0.1", "root", "YiUMq6P1D8e1HU7I", "my1");
    if (!$con) {
        die("資料庫連線錯誤" . mysqli_connect_error());
    }
    mysqli_query($con, "set names'utf8'");

    $pagesize = 8;

    @$p = $_GET['p'] ? $_GET['p'] : 1;

    $offset = ($p - 1) * $pagesize;

    session_start();
    $id = $_SESSION["uid"];
    $query_sql = "select * from tbl_ms1 where user= '$id' order by user desc limit $offset,$pagesize";

    $result = mysqli_query($con, $query_sql);

    echo "<div style='margin-top:55px'>";
    while ($res = mysqli_fetch_array($result)) {
        echo "<div class = 'k'>";
        echo "<div class = 'ds-post-main'>";
        echo "<div class = 'ds-comment-body'>
                <span>{$res['author']}  於  {$res['time']}  給我留言</span>
                <span style = 'float: right'><a href = '../act/del.php?id=" . $res['user'] . "'><input type='submit' class = 'button1' value = '刪除'></input></a></span>
                <p>留言主題 : {$res['title']}</span></p>
                <hr width = 450px> 
                <p>{$res['message']}</p></div><br>";
        echo "</div>";
        echo "</div>";
    }
    echo "</div>";

    $count_result = mysqli_query($con, "select count(*) as count from tbl_ms1 where user = '$id'");
    $count_array = mysqli_fetch_array($count_result);


    $pagenum = ceil($count_array['count'] / $pagesize);

    echo "<center>";
    echo "<div style = 'display: inline-block; margin-right: 15px; margin-left: 15px; '>", '共', $count_array['count'], '條留言', '</div>';
    echo "<div style = 'display: inline-block; margin-right: 15px; margin-left: 15px; '>", '共', $pagenum, '頁', '</div>';

    if ($pagenum > 1) {
        for ($i = 1; $i <= $pagenum; $i++) {
            if ($i == $p) {
                echo "<div style = 'background: #e8ffc4; width: 25px; display: inline-block; margin-right: 10px;'>", $i, "</div>";
            } else {

                echo '<a href = "../view/show.php?p=', $i, '">', "<div style = 'width:25px;display: inline-block; margin-right: 10px; background: #FF9D6F'>", $i, '</div>', '</a>';
            }
        }
        echo "<div style = 'display: inline-block; margin-right: 10px;'>", '當前在 ', $p, ' 頁', "</center></div>";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "</div>";
    ?>
    <script type = "text/javascript">
        function logout() {
            session.invalidate();
        }
    </script>
</body>

</html>