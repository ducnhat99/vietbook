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
                                     echo '<a href="ttcngh.php">Xin chào: '.$_SESSION['tnd'].'</a>'; 
                            }
                    ?>
            </div>
            <div class="choose-registration">
                <a href="xulidangxuat.php">ĐĂNG XUẤT</a>       
            </div>
        </div>
        <div class="header">
            <a href="indexnvgh.php"><h1><img src="images/logo.png"></h1></a>
        </div>
        <nav>
            <ul class="nav-kh-list">
                <a href="indexnvgh.php"><li class="nav-kh-item">TRANG CHỦ</li></a>
                <a href="xemdsdonhanggiao.php"><li class="nav-kh-item">XEM ĐƠN HÀNG</li></a>
                <a href="dsdonhanggiao.php"><li class="nav-kh-item">CẬP NHẬT ĐƠN HÀNG</li></a>
                <a href="ttcngh.php"><li class="nav-kh-item">CẬP NHẬT THÔNG TIN CÁ NHÂN</li></a>
            </ul>
        </nav>
    </body>
</html>
