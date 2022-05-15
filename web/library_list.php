<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>圖書館-書籍清單</title>
</head>
<body>
<?php include("model.php") ?>
<div style="margin-left: 400px; margin-top: 50px">
    <?php
    $db_link = mysqli_connect("localhost", "webuser", "webuser@413", "web1") or die("連接失敗 : " . mysqli_connect_error());
    $sql ="SELECT * FROM `library`";
    $result = $db_link->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "書名: " . $row["name"]. " - 作者: " . $row["author"]. " 類型: " . $row["type"].  " 入庫日期: " . $row["date"]."<br>";
        }
    } else {
        echo "0 results";
    }
    ?>
</div>
</body>
</html>