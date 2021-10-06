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
        <link rel="stylesheet" type="text/css" href="main/header.css"/>
    </head>
    <body>
        <div class="login-bar">
            <div class="choose-login">
                    <?php 
                            if(isset($_SESSION['status']))
                            {
                                    echo '<a href="updatethongtinnd.php">Xin chào: '.$_SESSION['tnd'].'</a>'; 
                            }
                    ?>
            </div>
            <div class="choose-registration">
                <a href="xulidangxuat.php">ĐĂNG XUẤT</a>       
            </div>
        </div>
        <div class="header">
            <a href="indexkh.php"><h1><img src="images/logo.png"></h1></a>
            <a href="giohang.php"><img class="cart" src="images/cart.png"></a>
        </div>
        <nav>
            <ul class="nav-kh-list">
                <a href="indexkh.php"><li class="nav-kh-item">TRANG CHỦ</li></a>
                <a href="sach.php"><li class="nav-kh-item">SÁCH</li></a>
                <a href="spnoibat.php"><li class="nav-kh-item">SÁCH NỖI BẬT</li></a>
                <a href="tknc.php"><li class="nav-kh-item">TÌM KIẾM NÂNG CAO</li></a>
                <a href="#lh"><li class="nav-kh-item">LIÊN HỆ</li></a>
            </ul>
            <div class="search">
                <form method="GET" action="xulitimkiem.php">
                    <input class="txtk" type="text" name="tk" placeholder="Tìm kiếm">
                    <input class="bttk" type="submit" name="bttk" value="Tìm kiếm">
                </form>              
            </div>
        </nav>
    </body>
</html>
