<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $db_link = mysqli_connect("localhost", "webuser", "", "web1") or die("連接失敗 : " . mysqli_connect_error());
    if (isset($_POST["name"]) && isset($_POST["account"]) && isset($_POST["password"]) && isset($_POST["mail"])) {
        $name = $_POST["name"];
        $account = $_POST["account"];
        $password = $_POST["password"];
        $mail = $_POST["mail"];

        $sql = "INSERT INTO 'account' ('name','account','password','mail') VALUE ('$name',$account,$password,$mail)";

        $query = mysqli_query($db_link,$sql);
        if ($query)
        {
            echo "成功註冊";
        }else{
            echo "失敗";
        }
    }

}