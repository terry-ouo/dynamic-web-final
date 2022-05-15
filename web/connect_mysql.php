<?php
ini_set('display_errors', 'l');
error_reporting(E_ALL);
$account = $_REQUEST["account"];
$password = $_REQUEST["password"];
$db_link = mysqli_connect("localhost", $account, $password, "web1");
if (!$db_link) {
    echo "失敗";
} else {
    echo "成功";
}
mysqli_close($db_link);