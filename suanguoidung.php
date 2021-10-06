<?php
 session_start();
 extract($_POST);
 extract($_SESSION);
     $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den MySQL");
if(isset($submit)){
    $db_selected = mysqli_select_db($link, "vietbook");
    $mnd=$_REQUEST['sid'];
    $sql = "Update nhanvien set tennv = '$tndung', diachi='$dcchi', sdt='$sdthoai', email='$eml', ngaysinh='$nsinh', gioitinh='$gtinh' where manv='$mnd'";
    mysqli_set_charset($link, 'UTF8');
    $rs = mysqli_query($link, $sql);
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
        <title>Sửa người dùng</title>
        <link rel="stylesheet" type="text/css" href="main/indexkh.css"/>
    </head>
    <body>
        <div>
            <?php 
                include("headerad.php");
            ?>
        </div>

        <div class="noidung">
                
                <form method="POST" >
                    <h1 style="margin-left: 310px;margin-top: 20px; margin-bottom: 10px;color: #f46523">CHỈNH SỬA THÔNG TIN NGƯỜI DÙNG</h1>
                    <fieldset style="margin-left:330px;"> 
                    <h4>Tên nhân viên</h4>
                    <input class="tx" type="text" id="s" style="width:90%; height:50px; margin-left: 5px;" name="tndung" value="" placeholder="Tên người dùng" />
                    <h4>Địa chỉ</h4>
                    <input class="tx" type="text" id="s" style="width:90%; height:50px ; margin-left: 5px;" name="dcchi" value="" placeholder="Địa chỉ"/>
                    <h4>Số điện thoại</h4>
                    <input class="tx" type="tell" id="s" style="width:90%; height:50px ; margin-left: 5px;" name="sdthoai" value="" placeholder="Số điện thoại"/></br></br>
                    <h4>Email</h4>
                    <input class="tx" type="email" id="s" style="width:90%; height:50px ; margin-left: 5px;" name="eml" value="" placeholder="Email"/></br></br>
                    <h4>Ngày sinh</h4>
                    <input class="tx" type="date" id="s" style="width:90%; height:50px ; margin-left: 5px;" name="nsinh" value="" placeholder="Ngày sinh"/></br></br>
                    <h4>Giới tính</h4>
                    <input class="tx" type="text" id="s" style="width:90%; height:50px ; margin-left: 5px;" name="gtinh" value="" placeholder="Giới tính"/></br></br>
                    <input class="bt" type="submit" name="submit" id="x" value="Cập nhật" style="width: 200px;
    height: 35px;
    background: #f46523;
    border:none;
    margin-left: 150px;
    margin-bottom: 10px;
    border-radius: 15px;
    color: #FAFAFA;"/>
                    </fieldset>
            </form>
                    ';

        </div>
        <div>
            <?php
                include("footerad.php");
            ?>
        </div>
    </body>
</html>
