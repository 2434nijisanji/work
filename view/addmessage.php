<?php header('Content-type: text/html; charset = UTF8') ?>
<html>

<head>
    <title>我的留言板.新增留言</title>
</head>

<body style = "background-size:cover;">
    <div>
        <h2>我的留言板</h2>
        <input type = "button" value = "新增留言" onclick = "location.href = 'addmessage.php'" class = "button">
        <input type = "button" value = "檢視留言" onclick = "location.href = '../index.php'" class = "button">
        <hr width = "100%">
    </div>

    <div class = "k1">
        <form action = "../act/doadd.php" method = "post">
            <div>
                <input type = "submit" value = "提交" class = "submit">
                <input type = "reset" value = "重置" class = "reset">
            </div>
            <label>
                <span>暱稱:</span>
                <input type = "text" name = "author" placeholder = "你的暱稱">
            </label>
            <label>
                <span>標題:</span>
                <input type = "text" name = "title" placeholder = "標題">
            </label>
            <label>
                <span>內容:</span>
                <textarea name = "content" placeholder = "內容"></textarea>
            </label>
        </form>
    </div>
</body>

</html>