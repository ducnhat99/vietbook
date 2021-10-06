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
        <link rel="stylesheet" type="text/css" href="main/headerkh.css"/>
    </head>
    <body>
        <div class="login-bar">
            <div class="choose-login">
                <a href="trangdangnhap.php">ĐĂNG NHẬP</a>
            </div>
            <div class="choose-registration">
                <a href="trangdangky.php">ĐĂNG KÝ</a>       
            </div>
        </div>
        <header>
            <a href="index.php"><h1><img src="images/logo.png"></h1></a>
        </header>
        <nav>
            <ul class="nav-kh-list">
                <a href="index.php"><li class="nav-kh-item">TRANG CHỦ</li></a>
                <a href="sachvl.php"><li class="nav-kh-item">SÁCH</li></a>
                <a href="sachnbvl.php"><li class="nav-kh-item">SÁCH NỖI BẬT</li></a>
                <a href="trangdangnhap.php"><li class="nav-kh-item">ĐĂNG NHẬP</li></a>
                <a href="#lh"><li class="nav-kh-item">LIÊN HỆ</li></a>
            </ul>
            <div class="search">
                <form method="GET" action="xulitkvl.php">
                    <input class="txtk" type="text" name="tk" placeholder="Tìm kiếm">
                    <input class="bttk" type="submit" name="bttk" value="Tìm kiếm">
                </form>              
            </div>
        </nav>
    </body>
</html>
