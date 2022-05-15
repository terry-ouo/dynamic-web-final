<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php include("model.php") ?>
<div>
    <div style="margin-top: 30px; margin-left: 450px">
        <?php
        $color1 = rand(0,255);
        $color2 = rand(0,255);
        $color3 = rand(0,255);
        echo "<p ><b style=\"font-size: 20px; color: rgb($color1,$color2,$color3)\">----規 劃 出 的 架 構 圖 ----</b></p>"
        ?>
    </div>
    <div style="position: relative;float: right; margin-right: 200px; font-size: larger">
        當前時間為 : <?php echo  date("h:i:sa"); ?>
    </div>
</div>

<div>
    <!--suppress CheckImageSize -->
    <img src="../img/Linux.png" width="800px" alt="linux">;
</div>

</body>
</html>