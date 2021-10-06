<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="main/hdad.css"/>
    </head>
    <body>
        <div class="login-bar">
            <div class="choose-login">
                    <?php 
                            if(isset($_SESSION['status']))
                            {
                                    echo '<a href="ttcnnvk.php">Xin chào: '.$_SESSION['tnd'].'</a>'; 
                            }
                    ?>
            </div>
            <div class="choose-registration">
                <a href="xulidangxuat.php">ĐĂNG XUẤT</a>       
            </div>
        </div>
        <div class="header">
            <a href="indexnvk.php"><h1><img src="images/logo.png"></h1></a>
        </div>
        <nav>
            <ul class="nav-kh-list">
                <a href="khohang.php" ><li class="nav-kh-item" >XEM SÁCH</li></a>
                <a href="phieunhap.php" ><li class="nav-kh-item" >XEM PHIẾU NHẬP</li></a>
                <a href="xemdsdonhangduyet.php" ><li class="nav-kh-item" >XEM DANH SÁCH ĐƠN HÀNG</li></a>
                <a href="dsdonhangduyet.php" ><li class="nav-kh-item" >CẬP NHẬT DANH SÁCH ĐƠN HÀNG</li></a>
                <a href="nhapsach.php" ><li class="nav-kh-item" >NHẬP SÁCH</li></a>
            </ul>
        </nav>
    </body>
</html>
