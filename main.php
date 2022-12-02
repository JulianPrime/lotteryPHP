<!-- php -->
<?php
session_start();
require("connect.php");
?>
<!-- html -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Lottery</title>
        <!-- icon-->
        <link rel="icon" type="icon" href="images/Emblem_of_Taoyuan_City.png" />
        <!-- CSS -->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <img src="images/englishDayPoster.jpg" alt="english day poster">
        <div>
            <h1>TAOYUAN ENGLISH DAY</h1>
            <h2>桃園市英語日</h2>
            <p>LET'S DO SOME ACTIVITIES！</p>
        </div>
        <a href="lotteryDrawer.php">Lottery Drawer</a>
    </body>
</html>