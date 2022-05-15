<?php
$database_connect_status = null;
function connect_database(): void
{
    $database_name = "localhost";
    $database_table = "web1";
    $account = "webuser1";
    $password = "webuser@413";
    global $database_connect_status;
    $database_connect_status = mysqli_connect($database_name, $account, $password, $database_table);
    if (!$database_connect_status) {
        echo "失敗";
    } else {
        echo "成功";
    }
}
function close_database():void
{
    global $database_connect_status;
    if ($database_connect_status)
    {
        mysqli_close($database_connect_status);
    }
}