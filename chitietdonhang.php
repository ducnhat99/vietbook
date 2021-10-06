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
        <link rel="stylesheet" type="text/css" href="main/indexkh.css"/>
    </head>
    <body>
        <div>
            <?php session_start();
                include("header.php");
            ?>
        </div>

        <div class="noidung">
            <div class="left-menu">
                <div>
                    <?php
                        include("cnkh.php");
                    ?>
                </div>
                <div class="menu">
                    <?php
                        include("menu.php");
                    ?>
                </div>                
            </div>
            <div class="homepage">	
                <h1 style="color: #f46523; margin-left: 200px;">Chúc mừng bạn đã đặt hàng thành công</h1>
                <a href="indexkh.php"><input type="button" value="Trang chủ" style="width: 140px;
    height: 35px;
    background: #f46523;
    border:none;
    margin-left: 420px;
    margin-top: 20px;
    border-radius: 15px;
    color: #FAFAFA;"></a>
            </div>
            </div>
        </div>
        <div>
            <?php
                include("footer.php");
            ?>
        </div>
    </body>
</html>
