<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>圖書館-書籍清單</title>
</head>
<body>
<?php include("model.php") ?>
<?php
$db_link = mysqli_connect("localhost", "webuser", "webuser@413", "web1") or die("連接失敗 : " . mysqli_connect_error());
$sql ="SELECT * FROM `library`";
echo $sql;
?>
</body>
</html>