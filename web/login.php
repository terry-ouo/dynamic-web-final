<?php
include_once ("connect_database.php");
$account = addslashes($_POST['account']);
$password = addslashes($_POST['password']);
$loginSQL = "select * from users where userName='$account' and password='$password'";
echo $loginSQL;
$resultLogin = mysqli_query($loginSQL);
if ($resultLogin > 0) {
    echo "登入成功";
} else {
    echo "登入失敗";
}
closeConnect();