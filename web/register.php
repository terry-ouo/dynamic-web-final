<html lang="en">
<head>
    <title>註冊帳號</title>
</head>
<body>
<?php include("model.php") ?>
<div style="margin-top: 100px; margin-left: 40%">
    <form action="mysql_register.php" method="post">
        <label>
            姓名:
            <input type="text" name="name" required>
        </label><br>
        <label>
            帳號:
            <input type="text" name="account" required>
        </label><br>
        <label>
            密碼:
            <input type="password" name="password" required>
        </label><br>
        <label>
            信箱:
            <input type="text" name="mail" required>
        </label><br>
        <input type="submit" name="submit" value="提交">
    </form>
</div>

</body>
</html>