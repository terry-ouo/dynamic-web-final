<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $db_link = mysqli_connect("localhost", "webuser", "webuser@413", "web1") or die("連接失敗 : " . mysqli_connect_error());
    if (isset($_POST["name"]) && isset($_POST["author"]) && isset($_POST["type"]) && isset($_POST["date"])) {
        $name = $_POST["name"];
        $author = $_POST["author"];
        $type = $_POST["type"];
        $date = $_POST["date"];

        $sql ="INSERT INTO `library`(`name`, `author`, `type`, `date`) VALUES ('$name','$author','$type','$date')";
        $query = mysqli_query($db_link,$sql);
        if ($query)
        {
            echo "成功紀錄書籍";
        }else{
            echo "失敗(´；ω；`)";
        }
    }

}