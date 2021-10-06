<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Đăng ký</title>
        <link rel="stylesheet" type="text/css" href="main/dky.css"/>
        <script src="js/dangky.js"></script>
    </head>
    <body>
        <form action="xulidangky.php" name="f1" method="post">
                <div class="dangky">
                <h1>ĐĂNG KÝ</h1>
                <div class="textbox">
                    Tên tài khoản:
                    <input type="text" id="usn" size="20" name="tk" placeholder="Username" ></br>
                    Mật khẩu:
                    <input type="password" id="pw" size="20" name="mk" placeholder="Password"> </br>
                    Nhập lại mật khẩu:
                    <input type="password" id="pwa" size="20" name="nlmk" placeholder="Password"> </br>
                    Tên người dùng:
                    <input type="text" id="tnd" size="20" name="tnd" placeholder="Tên người dùng"></br>
                    Số điện thoại:
                    <input type="tell" id="sdt" size="20" name="sdt" placeholder="Số điện thoại"></br>
                    Địa chỉ:
                    <input type="text" id="dc" size="20" name="dc" placeholder="Địa chỉ" ></br>
                    Email:
                    <input type="email" id="em" size="20" name="em" placeholder="Email"></br>
                    Ngày sinh:
                    <input type="date" id="ns" size="20" name="ns"></br>
                    Giới tính:
                    <input type="text" id="gt" size="20" name="gt" placeholder="Giới tính" >
                </div>
                <input class="btn" tabindex="7" type="submit" name="s1" value="ĐĂNG KÝ" onclick="saveInfo()">
                <label id="errorMessage"></label>
                </div>
        </form>
    </body>
</html>
