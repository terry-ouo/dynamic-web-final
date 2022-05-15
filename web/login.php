<?php
include_once ("connect_database.php");
$account = addslashes($_POST['account']);
$password = addslashes($_POST['password']);
global $database_connect_status;
$sql = "select * from users where userName='$account' and password='$password'";
echo $sql;
$resultLogin = $database_connect_status->query($sql);
if ($resultLogin > 0) {
    echo "登入成功";
} else {
    echo "登入失敗";
}
closeConnect();