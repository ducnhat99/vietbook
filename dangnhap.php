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
        <link rel="stylesheet" type="text/css" href="main/dangnhap.css"/>
        <script src="js/login.js"></script>
    </head>
    <body>
        <form action="xulilogin.php" name="f1" method="post">
                <div class="login-box">
                <h1>ĐĂNG NHẬP</h1>
                <div class="textbox">
                    <input type="text" id="usn" size="20" name="tk" placeholder="Username" >
                    <input type="password" id="ps" size="20" name="mk" placeholder="Password"> 
                </div>
                <input class="btn" type="submit" name="s1" value="ĐĂNG NHẬP" onclick="login()">
                <a class="dk" href="trangdangky.php">Đăng ký</a>
                </div>
        </form>
    </body>
</html>
