<?php
 session_start();
 extract($_POST);
 extract($_SESSION);
     $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den MySQL");
if(isset($submit)){
    $db_selected = mysqli_select_db($link, "vietbook");
    $mnxb=$_REQUEST['sid'];
    $sql = "Update nhaxuatban set tennxb = '$tnxb', diachinxb='$dcnxb', sdtnxb='$sdthoainxb', emailnxb='$emnxb' where manxb='$mnxb'";
    mysqli_set_charset($link, 'UTF8');
    $rs = mysqli_query($link, $sql);
    header("Location:dsnxb.php");
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
        <title>Sửa nhà xuất bản</title>
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
                    <h1 style="margin-left: 310px;margin-top: 20px; margin-bottom: 10px;color: #f46523">CHỈNH SỬA THÔNG TIN NHÀ XUẤT BẢN</h1>
                    <fieldset style="margin-left:330px;"> 
                    <h4>Tên nhà xuất bản</h4>
                    <input class="tx" type="text" id="s" style="width:90%; height:50px; margin-left: 5px;" name="tnxb" value="" placeholder="Tên nhà xuất bản" />
                    <h4>Địa chỉ nhà xuất bản</h4>
                    <input class="tx" type="text" id="s" style="width:90%; height:50px ; margin-left: 5px;" name="dcnxb" value="" placeholder="Địa chỉ"/>
                    <h4>Số điện thoại NXB</h4>
                    <input class="tx" type="tell" id="s" style="width:90%; height:50px ; margin-left: 5px;" name="sdthoainxb" value="" placeholder="Số điện thoại"/></br></br>
                    <h4>Email NXB</h4>
                    <input class="tx" type="email" id="s" style="width:90%; height:50px ; margin-left: 5px;" name="emnxb" value="" placeholder="Email"/></br></br>
                    <input class="bt" type="submit" name="submit" id="x" value="Lưu" style="width: 200px;
    height: 35px;
    background: #f46523;
    border:none;
    margin-left: 180px;
    margin-bottom: 10px;
    border-radius: 15px;
    color: #FAFAFA;"/>
                    </fieldset>
            </form>

        </div>
        <div>
            <?php
                include("footerad.php");
            ?>
        </div>
    </body>
</html>
