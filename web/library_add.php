<html lang="en">
<head>

    <title>圖書館-管理</title></head>
<body>
<?php include("model.php") ?>
<div style="margin-top: 50px; margin-left: 400px">
    <form action="mysql_library.php" method="post">
        <label>
            書本名稱:
            <input type="text" name="name">
        </label><br>
        <label>
            作者:
            <input type="text" name="author">
        </label><br>
        <label>
            類型:
            <input type="radio" name="type" value="web">
        </label>網頁
        <label>
            網頁
            <input type="radio" name="type" value="server">
        </label>伺服器
        <label>
            伺服器
            <input type="radio" name="type" value="app">
        </label>APP
        <label>
            APP
            <input type="radio" name="type" value="hacker">
        </label>駭客
        <br>
        <label>
            新增日期:
            <input type="date" name="date">
        </label><br>
        <input type="submit" name="submit" value="送出">
    </form>
</div>

</body>
</html>
