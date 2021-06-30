<?php
header('Content-type: text/html; charset = UTF8');

session_start();

require_once "../database/connet.php";
require_once '../database/mysqlconfig.php';

$id_ = $_GET['id'];

$database = new Database();
$link = $database->connect();
$con = @mysqli_connect("127.0.0.1", "root", "YiUMq6P1D8e1HU7I", "my1");
$query_sql = "select * from tbl_ms1 where id = '$id_'";
$result = mysqli_query($con, $query_sql);
$res = mysqli_fetch_array($result);
$query_sql_2 = "select * from tbl_ms2 where id = '$id_'";
$result_2 = mysqli_query($con, $query_sql_2);
?>
<html>

<head>
    <meta charset = "utf-8" />
    <meta http-equiv = "X-UA-Compatible" content = "IE = edge,chrome = 1" />
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0, maximum-scale = 1.0">
    <title><?php echo $res['title']?> @場外休憩區  哈啦板 - 巴哈姆特</title>
    <link rel = "icon" type = "image/x-icon" href = "https://i2.bahamut.com.tw/anime/baha_s.png" />
    <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href = "css/index.css" rel = "stylesheet" />

    <link rel = "stylesheet" type = "text/css" href = "../dist/components/reset.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/site.css">

    <link rel = "stylesheet" type = "text/css" href = "../dist/components/container.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/grid.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/header.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/image.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/menu.css">

    <link rel = "stylesheet" type = "text/css" href = "../dist/components/divider.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/table.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/dropdown.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/segment.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/form.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/input.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/button.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/list.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/message.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/icon.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/transition.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/popup.css">

    <script src = "../assets/library/jquery.min.js"></script>
    <script src = "../dist/components/form.js"></script>
    <script src = "../dist/components/transition.js"></script>
    <script src = "https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src = "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style type = "text/css">
        body {
            background-color: #000000;
        }

        body>.grid {
            height: 100%;
        }

        .image {
            margin-top: -100px;
        }

        .column {
            max-width: 450px;
        }
    </style>
</head>

<body>
    <div style = "top: 120px; position:relative;">
        <div class = "container">
            <div class = "row">
                <div class = "col-3">
                    <img class = "img-fluid" src = "../pic/sm-1.jpg" width = "200" height = "100" style="float:right;">
                </div>
                <div class = "col-6">
                    <div class = "ui container segment" style = "background-color:#272727; margin-bottom: 0px;">
                        <h1 style = "color: white;"><?php echo $res['title']?></h1>
                        <p style = "color: white;">樓主:<?php echo $res['author']?>&nbsp&nbsp<?php echo $res['user']?></p>
                        <p style = "color: white;"><?php echo $res['time']?></p>
                        <br>
                        <br>
                        <br>
                        <p style = "color: white;"><?php echo $res['message']?></p>
                        <button class = "ui inverted orange icon button">
                            <i class = "thumbs up icon"></i>
                        </button>
                        <button class = "ui inverted blue icon button">
                            <i class = "thumbs down icon"></i>
                        </button>
                    </div>
                    <div style = 'margin-top:0px'>
                        <table class = "ui inverted grey unstackable table">
                            <tbody>
                                <?php
                                while ($res_2 = mysqli_fetch_array($result_2)) {
                                    ?>
                                    <tr>
                                        <td>
                                            <p><?php echo $res_2['uid'] ?></p>
                                        </td>
                                        <td>
                                            <p><?php echo $res_2['comment'] ?></p>
                                        </td>
                                        <td class = "right aligned">
                                            <p><?php echo $res_2['time'] ?></p>
                                        </td>
                                    </tr>    
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class = "ui container segment" style = "background-color:#383838; margin-top: 0px;">
                        <form action = "../act/checklogin.php" method = "post">
                                <div>
                                    <input type = "submit" value = "提交" class = "submit">
                                </div>
                                <label>
                                    <input type = "text" name = "title" size = "65" style = "height: 35;" placeholder = "留言...">
                                </label>
                            </form>
                    </div>
                </div>
                <div class = "col-3">
                    <div class = "ui container segment" style = "background-color:#272727">
                        <span style = "color:white;">版務人員:
                            <img class = "img-fluid" src = "https://avatar2.bahamut.com.tw/avataruserpic/e/d/edfrmpc44ic/edfrmpc44ic_s.png">
                            <img class = "img-fluid" src = "https://avatar2.bahamut.com.tw/avataruserpic/y/u/yunski/yunski_s.png">
                            <img class = "img-fluid" src = "https://avatar2.bahamut.com.tw/avataruserpic/j/o/johnny860726/johnny860726_s.png">
                            <hr  style = 'background-color:grey;' width = 100%>
                            <img class = "img-fluid" src = "https://p2.bahamut.com.tw/B/GUILD/f/8/0000006458.PNG">
                            <p>
                                7971 筆精華，前天 更新
                                一個月內新增 140 筆
                                歡迎加入共同維護。
                            </p>
                        </span>
                    </div>
                    <img class = "img-fluid" src = "../pic/index-6.jpg">
                </div>
            </div>
        </div>
    </div>
    <div style = "top: 0px; position:fixed; width:100%;">
        <div class = "ui teal inverted menu" style = "margin-bottom: 0px;">
            <div class = "ui container">
                <img img class = "img-fluid" src = "https://i2.bahamut.com.tw/top_logo.svg" alt = "Logo" style = "width:100px;">
                <a href = "#" class = "item">
                    <div class = "ui inverted left icon input">
                        <input type = "text" placeholder = "輸入1或多字元來找文章...">
                        <i class = "search link icon"></i>
                    </div>
                </a>
                <a class = "item right aligned">
                    <i class = "question circle link icon"></i>
                </a>
                <a href = "login.php" class = "item">
                    <div class = "ui inverted right icon input" style = "color:white;">
                        <p>我要登入</p>
                    </div>
                </a>
                <a href = "register.php" class = "item">
                    <div class = "ui inverted right icon input" style = "color:white;">
                        <p>註冊</p>
                    </div>
                </a>
                <a class = "item">
                    <i class = "bars link icon"></i>
                </a>
            </div>
        </div>
        <div class = "ui blue inverted menu" style = "margin-top: 0px;">
            <div class = "container">
                <a class = "nav-link" style = "color: white;" href = "#"><b>哈啦區</b></a>
                <a class = "nav-link" style = "color: white;" href = "#"><b>場外休憩區</b></a>
                <a class = "nav-link" style = "color: white;" href = "../index.php"><b>文章列表</b></a>
                <a class = "nav-link" style = "color: white;" href = "#"><b>精華區</b></a>
                <a class = "nav-link" style = "color: white;" href = "#"><b>版規</b></a>
                <a class = "nav-link" style = "color: white;" href = "#"><b>水桶</b></a>
                <a class = "item right aligned">
                    <i class = "inverted tag link icon"></i>
                </a>
                <a class = "item">
                    <i class = "inverted ellipsis horizontal link icon"></i>
                </a>
                <a href = "alltitle.php" class = "item">
                    <div class = "ui inverted right icon input" style = "color:white;">
                        <button class = "small pink ui button">回列表</button>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>

</html>