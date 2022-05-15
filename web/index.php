<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>一二三木頭人</title>
    <style>
        .box{

            height: 400px;
            width: 400px;
        }
        body{
            background-image: url("../img/17.jpg");
            width: 100%;
            height: 100%;
            background-repeat: ;
        }

    </style>
</head>
<body  >
<?php include("model.php") ?>

<table>
    <tr>
        <th class="box" >
            <!--suppress CheckImageSize --><a href="https://ubuntu.com/" target="_blank">
                <!--suppress CheckImageSize -->
                <img class="headPicture" src="../img/linux.jpg" width="350px" height="350px" style="border-radius: 20px" alt="linux">
            </a>
        </th >
        <th class="box">

            <a href="https://www.minecraft.net/en-us/download/server" target="_blank"><!--suppress CheckImageSize -->
            <img src="../img/minecraft.jpg" width="350px" height="350px" style="border-radius: 20px" alt="minecraft">
            </a>
        </th>
        <th class="box">
            <img src="../img/2.jpg" width="350px" height="350px" style="border-radius: 20px" alt="dog">
        </th>
        <th class="box">
            <!--suppress CheckImageSize -->
            <img src="../img/-1.jpg" width="350px" height="350px" style="border-radius: 20px" alt="cat">
        </th>
    </tr>
</table>
<div>
    <div style="margin-top: 30px; margin-left: 450px">
        <?php
        $color1 = rand(0,255);
        $color2 = rand(0,255);
        $color3 = rand(0,255);
        echo "<p ><b style=\"font-size: 20px; color: rgb($color1,$color2,$color3)\">&emsp;&emsp;&emsp;&emsp;----規 劃 出 的 架 構 圖 ----</b></p>"
        ?>
    </div>
    <div style="position: relative;float: right; margin-right: 200px; font-size: 40px; font-family: 'Comic Sans MS',serif">
        <b>當前時間為 : <?php echo  date("h:i:sa"); ?></b>
    </div>
</div>

<div>
    <!--suppress CheckImageSize -->
    <img src="../img/Linux.png" width="800px" alt="linux" style="margin-left: 250px">;
</div>

</body>
</html>