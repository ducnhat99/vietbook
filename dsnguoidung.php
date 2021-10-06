<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cập nhật người dùng</title>
        <link rel="stylesheet" type="text/css" href="main/donhang.css"/>
    </head>
    <body>
        <div>
            <?php session_start();               
                    include ("headerad.php");
            ?>
        </div>

        <div class="noidung">
            <div class="homepage">
                  <h1 style="margin-left: 500px; color: #f46523">Tất cả nhân viên</h1>
                  <a href="themnguoidung.php"><input style="width: 200px;
    height: 35px;
    background: #f46523;
    border:none;
    margin-top: 20px;
    margin-bottom: 10px;
    border-radius: 15px;
    color: #FAFAFA;" type="button" value="Thêm nhân viên"></a>
                  <table class="dh" border='1' WIDTH='100%'> 
                    <tr>
                    <TD style="color:darkgreen" WIDTH='5%'><b><u>Mã nhân viên</u></b></TD>
                    <TD style="color:darkgreen" WIDTH='25%'><b><u>Tên nhân viên</u></b></TD>
                    <TD style="color:darkgreen" WIDTH='20%'><b><u>Usename</u></b></TD>
                    <TD style="color:darkgreen" WIDTH='10%'><b><u>Password</u></b></TD>
                    <TD style="color:darkgreen" WIDTH='15%'><b><u>Địa chỉ</u></b></TD>
                    <TD style="color:darkgreen" WIDTH='10%'><b><u>Số điện thoại</u></b></TD>
                    <TD style="color:darkgreen" WIDTH='10%'><b><u>Email</u></b></TD>
                    <TD style="color:darkgreen" WIDTH='5%'><b><u>Ngày sinh</u></b></TD>
                    <TD style="color:darkgreen" WIDTH='5%'><b><u>Giới tính</u></b></TD>
                    <TD style="color:darkgreen" WIDTH='5%'><b><u>Ngày đăng ký</u></b></TD>
                    <TD style="color:darkgreen" WIDTH='5%'><b><u>Phân quyền</u></b></TD>
                    <TD style="color:darkgreen" WIDTH='5%'><b><u>Sửa</u></b></TD>
                    <TD style="color:darkgreen" WIDTH='5%'><b><u>Xóa</u></b></TD>
                    </tr>
                    
                    <?php     
                    if(isset($_SESSION['status']))
                    {
                    $conn = mysqli_connect("localhost","root","") or die ("khong the ket noi");
                    mysqli_set_charset($conn, 'UTF8');
                    mysqli_select_db($conn,"vietbook");
                    $sql="SELECT * FROM nhanvien";
                    $result = mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result))
                            {
                            echo '<tr>
                                                    <td>'.$row['manv'].'</td>
                                                    <td>'.$row['tennv'].'</td>
                                                    <td>'.$row['usename'].'</td>
                                                    <td>'.$row['password'].'</td>
                                                    <td>'.$row['diachi'].'</td>
                                                    <td>'.$row['sdt'].'</td>
                                                    <td>'.$row['email'].'</td>
                                                    <td>'.$row['ngaysinh'].'</td>
                                                    <td>'.$row['gioitinh'].'</td>
                                                    <td>'.$row['ngaydangky'].'</td>
                                                    <td>'.$row['phanquyen'].'</td>
                                                    <td><a href=suanguoidung.php?sid='.$row['manv'].'>Sửa</td>
                                                    <td><a href=xulixoanguoidung.php?sid='.$row['manv'].'>Xóa</td>                 
                                            </tr>';
                            }
                            }
                    ?>
            </TABLE>
            </div>
        </div>
        <div>
            <?php
                include("footerad.php");
            ?>
        </div>
    </body>
</html>
