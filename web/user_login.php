<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        #login{
            border-radius: 4px;
            border:2px solid skyblue;
            width: 20%;
            padding: 10px;
            margin: 10px;
        }
        #login:focus{
            background: #12c2e9;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #f64f59, #c471ed, #12c2e9);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            padding: 14px;

        }
    </style>
</head>
<body>
<?php include("model.php") ?>
<div style="margin-top: 100px; margin-left: 40%;">
    <form action="login.php" method="post">
        <label for="login">帳號 : </label><input type="text" placeholder="input your account" id= "login" name="account">
        <br>
        <label>密碼 : </label>
        <input type="password" placeholder="input your password" id= "login" name="password"><br>
        <input type="submit"><button type="button" onclick="location.href='register.php'">帳號申請</button>
    </form>
</div>


</body>
</html>