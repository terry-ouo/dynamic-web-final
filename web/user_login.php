<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<?php include("model.php") ?>
<div style="margin-top: 100px; margin-left: 40%">
    <form action="login.php" method="post">
        <label>
            帳號 :
            <input type="text" name="account">
        </label><br>
        <label>
            密碼 :
            <input type="password" name="password">
        </label><br><br><br>
        <input type="submit"><button type="button" onclick="location.href='register.php'">帳號申請</button>
    </form>
</div>

</body>
</html>