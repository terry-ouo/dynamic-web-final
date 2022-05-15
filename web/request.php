<html>
<head>
</head>
<body>
<?php
$fname = $_REQUEST['fname'];
$name = $_REQUEST['name'];
if (empty($fname) || empty($name))
{
    echo "資料輸入錯誤！";
}else
{
    var_dump($_REQUEST);
//    echo "你好".$fname.$name;
}

?>
</body>
</html>