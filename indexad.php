<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trang chủ</title>
        <link rel="stylesheet" type="text/css" href="main/indexad.css"/>
    </head>
    <body>
        <div>
            <?php session_start();
                include("headerad.php");
            ?>
        </div>
        <div class="banner">
            <img src="images/banner.jpg">
            <div class="wc">
                <h1>
                    Xin chào Admin
                </h1>
            </div>
        </div>

        <div class="ft">
            <?php
                include("footerad.php");
            ?>
        </div>
    </body>
</html>
