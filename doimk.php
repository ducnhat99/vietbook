<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Đổi mật khẩu</title>
        <link rel="stylesheet" type="text/css" href="main/indexkh.css"/>
        <script src="js/dmk.js"></script>
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
                <?php
                if(isset($_SESSION['status']))
                    {
                    echo '
                <h1 style="margin-left: 340px;margin-top: 20px; color: #f46523">ĐỔI MẬT KHẨU</h1>
                <form method="POST" action="xulidoimk.php" style="margin-left: 280px; width: 500px; margin-top: 30px">
                    <fieldset tyle="height:500px;"> 
                    <h4>Nhập mật khẩu mới</h4></br>
                    <input class="tx" id="mkm" type="password"  name="mkm" value="" placeholder="Nhập mật khẩu mới" style="width:90%;height:30px;" /></br>
                    </br><h4>Nhập lại mật khẩu mới</h4></br>
                    <input class="tx" id="mkmnl" type="password"  name="mkmnl" value="" placeholder="Nhập lại mật khẩu mới" style="width:90%;height:30px;"/></br>
                    <input class="bt" type="submit" id="x" value="Đổi mật khẩu" onclick="doimk()" style="width: 140px;
    height: 35px;
    background: #f46523;
    border:none;
    margin-left: 180px;
    margin-top: 10px;
    margin-bottom: 10px;
    border-radius: 15px;
    color: #FAFAFA;"/>
                    </fieldset>
            </form>
            
                    ';
                    }
                        ?>
            </div>
        </div>
        <div>
            <?php
                include("footer.php");
            ?>
        </div>
    </body>
</html>

