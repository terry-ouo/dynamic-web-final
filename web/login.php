<?php
$database_name = "localhost";
$database_table = "web1";
$account = "webuser";
$password = "webuser@413";
global $database_connect_status;
$database_connect_status = mysqli_connect($database_name, $account, $password, $database_table);
$user_account = addslashes($_POST['account']);
$user_password = addslashes($_POST['password']);
$sql = "select * from users where account='$user_account' and password='$user_password'";
$result = $database_connect_status->query($sql);
$row = mysqli_num_rows($result);
if ($row) {
    echo "登入成功，請稍等3秒鐘ヽ(〃･ω･〃)ﾉ☆ﾟ♪";
    header("Refresh:3;url=http://120.110.112.126/phpmyadmin/");
    exit;
} else {
    echo "登入失敗";


}
