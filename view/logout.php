<?php

session_start();

$id = $_SESSION['uid'];
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset = "utf-8" />
    <meta http-equiv = "X-UA-Compatible" content = "IE = edge,chrome = 1" />
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0, maximum-scale = 1.0">
    <title>兩步驟驗證 - 巴哈姆特</title>
    <link rel = "icon" type = "image/x-icon" href = "https://i2.bahamut.com.tw/anime/baha_s.png" />
    <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href = "../css/login.css" rel = "stylesheet" />

    <link rel = "stylesheet" type = "text/css" href = "../dist/components/reset.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/site.css">

    <link rel = "stylesheet" type = "text/css" href = "../dist/components/container.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/grid.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/header.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/image.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/menu.css">

    <link rel = "stylesheet" type = "text/css" href = "../dist/components/divider.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/segment.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/form.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/input.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/button.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/list.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/message.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/icon.css">

    <script src = "assets/library/jquery.min.js"></script>
    <script src = "../dist/components/form.js"></script>
    <script src = "../dist/components/transition.js"></script>
    <script src = "https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src = "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style type = "text/css">
        body {
            background-color: #DADADA;
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
    <nav class = "navbar navbar-expand-lg navbar-dark bg-dark">
        <div class = "container">
            <a class = "navbar-brand" href = "../index.php"><img class = "img-fluid" src = "https://i2.bahamut.com.tw/top_logo.svg" alt = "Logo" style = "width:100px;"></a>
            <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarResponsive" aria-controls = "navbarResponsive" aria-expanded = "false" aria-label = "Toggle navigation"><span class = "navbar-toggler-icon"></span></button>
        </div>
    </nav>
    <div class = "ui middle aligned center aligned grid">
        <div class = "column">
            <form class = "ui large form" method = "POST" action = "../act/dologout.php" name = "frmLogin">
                <div class = "ui stacked segment">
                    <br>
                    <h1>
                        <div class = "content">
                            訊息
                        </div>
                    </h1>
                    <p>
                        <?php echo"$id"?>，確定要登出嗎？
                        或 點此 <a href = "alltitle.php" class = "blue">返回</a>
                        繼續使用
                    </p>
                    <input type = "button" name = "getmail" class = "huge ui blue button" value = "確定" onclick = "location.href  =  '../act/dologout.php'" style = "width: 100%;">
                    <br>
                    <br>
                </div>
            </form>
        </div>
    </div>

</body>

</html>