
<?php
 session_start();
 extract($_POST);
 extract($_SESSION);
     $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den MySQL");
if(isset($submit)){
    $db_selected = mysqli_select_db($link, "vietbook");
    $ndk= date('y-m-d');
    $query="insert into nhanvien(tennv,usename,password,diachi,sdt,email,ngaysinh,gioitinh,ngaydangky,phanquyen)
			values('$tennd','$usn','$pw','$diachi','$sodt','$email','$ngaysinh','$gioitinh','$ndk','$pq')";
    mysqli_set_charset($link, 'UTF8');
    $rs = mysqli_query($link, $query);
    header("Location:dsnguoidung.php");
}

?>	
	

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Thêm người dùng</title>
        <link rel="stylesheet" type="text/css" href="main/indexkh.css"/>
    </head>
    <body>
        <div>
            <?php             
                    include ("headerad.php");
            ?>
        </div>

        <div class="noidung">
            <div class="homepage">
                  <h1 style="margin-left: 500px; color: #f46523">Thêm người dùng</h1>
            <div class="entry" >
                <form method='POST' enctype="multipart/form-data" style="margin-left: 500px;">

                                <br><b>Tên nhân viên:</b><br>
                                <input type='text' name='tennd' size='40'>
                                <br><br>
                                
                                <b>Usename:</b><br>
                                <textarea cols="40" rows="6" name='usn' ></textarea>
                                <br><br>

                                <b>Password:</b><br>
                                <input type='password' name='pw' size='40'>
                                <br><br>

                                <b>Địa chỉ:</b><br>
                                <input type='text' name='diachi' size='40'>
                                <br><br>

                                <b>Số điện thoại:</b><br>
                                <input type='text' name='sodt' size='40'>
                                <br><br>

                                <b>Email:</b><br>
                                <input type='email' name='email' size='35'>
                                <br><br>


                                <b>Ngày sinh:</b><br>
                                <input type='date' name='ngaysinh'  size='35'>
                                <br><br>

                                <b>Giới tính:</b><br>
                                <input type='text' name='gioitinh' size='40'>
                                <br><br>
                                
                                <b>Phân quyền:</b><br>
                                <select name="pq" style="width: 300px;">
                                    <option>nvkho</option>
                                    <option>nvgiaohang</option>
                                </select>
<!--                                <input type='text' name='pq' size='40'>
-->                                <br><br>
                                <input  type='submit' name="submit"  value='   Thêm   '  style="width: 200px;
    height: 35px;
    background: #f46523;
    border:none;
    margin-bottom: 10px;
    border-radius: 15px;
    color: #FAFAFA;">
                </form>
                </div>    
            
            </div>
        </div>
        <div>
            <?php
                include("footerad.php");
            ?>
        </div>
    </body>
</html>
