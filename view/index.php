<html>

<head>
    <title>登陸</title>
    <meta charset="UTF-8">
    <style>
        body {
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="index_01">
        <table style="width: 100%;height:100%;">
            <tr>
                <td>
                    <table width=350 height=230; class="index_table">
                        <form method="POST" action="../act/doloadling.php" name="frmLogin">
                            <tr style="font-size: 25px; ">
                                <td colspan="2" style="font-size: 35px; ">使用者登入</td>
                            </tr>
                            <tr>
                                <td style="font-size: 25px; ">使用者名稱</td>
                                <td><input type="name" maxlength="30" name="uid" placeholder="請輸入賬號" style="width: 180px; font-size: 20px; border-radius: 8px; "></td>
                            </tr>
                            <tr>
                                <td style="font-size: 25px; ">密 碼</td>
                                <td><input name="password" type="password" maxlength="30" placeholde r="請輸入密碼" style="width: 180px; font-size: 20px; border-radius: 8px; "></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="denglu" value="登入" class="btn">
                                    <input type="reset" name="rs" value="重置" class="btn">
                                    <input type="button" name="zu" value="註冊" onclick="window.location.href = '../view/register.php'" class="btn">
                                </td>
                            </tr>
                        </form>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>