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
                                    echo '<a href="#">Xin chào: '.$_SESSION['tnd'].'</a>'; 
                            }
                    ?>
            </div>
            <div class="choose-registration">
                <a href="xulidangxuat.php">ĐĂNG XUẤT</a>       
            </div>
        </div>
        <div class="header">
            <a href="indexad.php"><h1><img src="images/logo.png"></h1></a>
        </div>
        <nav>
            <ul class="nav-kh-list">
                <a href="indexad.php"><li class="nav-kh-item">TRANG CHỦ</li></a>
                <a href="sachad.php"><li class="nav-kh-item">CẬP NHẬT SÁCH</li></a>
                <a href="dsnguoidung.php"><li class="nav-kh-item">CẬP NHẬT NHÂN VIÊN</li></a>
                <a href="dsdonhang.php"><li class="nav-kh-item">XỬ LÍ ĐƠN HÀNG</li></a>
                <a href="dsdanhmuc.php"><li class="nav-kh-item">CẬP NHẬT DANH MỤC</li></a>
                <a href="dsnxb.php"><li class="nav-kh-item">CẬP NHẬT NHÀ XUẤT BẢN</li></a>
            </ul>
        </nav>
    </body>
</html>
