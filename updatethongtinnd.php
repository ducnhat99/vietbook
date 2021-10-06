<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Thông tin cá nhân</title>
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
                <?php
                if(isset($_SESSION['status']))
                    {
                    echo '
                <h1 style="margin-left: 340px;margin-top: 20px; color: #f46523">THÔNG TIN CÁ NHÂN</h1>
                <form method="POST" action="xuliupdatethongtinnd.php" style="margin-left: 280px; width: 500px; margin-top: 30px; ">
                    <fieldset style="height:600px;"> 
                    <h4>Tên người dùng</h4></br>
                    <input class="tx" type="text" id="s" name="tnd" value="'.$_SESSION['tnd'].'" placeholder="Tên người dùng" style="width:90%;height:30px;"/></br>
                    </br><h4>Địa chỉ</h4></br>
                    <input class="tx" type="text" id="s" name="dc" value="'.$_SESSION['dc'].'" placeholder="Địa chỉ" style="width:90%;height:30px;"/></br>
                    </br><h4>Số điện thoại</h4></br>
                    <input class="tx" type="tell" id="s" name="sdt" value="'.$_SESSION['sdt'].'" placeholder="Số điện thoại" style="width:90%;height:30px;"/></br></br>
                    <h4>Email</h4></br>
                    <input class="tx" type="email" id="s" name="em" value="'.$_SESSION['em'].'" placeholder="Email" style="width:90%;height:30px;"/></br></br>
                    <h4>Ngày sinh</h4></br>
                    <input class="tx" type="date" id="s" name="ns" value="'.$_SESSION['ns'].'" placeholder="Ngày sinh" style="height:30px;"/></br></br>
                    <h4>Giới tính</h4></br>
                    <input class="tx" type="text" id="s" name="gt" value="'.$_SESSION['gt'].'" placeholder="Giới tính" style="width:90%;height:30px;"/></br></br>
                    <input class="bt" type="submit" id="x" value="Lưu" style="width: 140px;
    height: 35px;
    background: #f46523;
    border:none;
    margin-left: 180px;
    margin-top: 10px;
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

