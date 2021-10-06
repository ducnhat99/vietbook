<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cập nhật nhà xuất bản</title>
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
                  <h1 style="margin-left: 500px; color: #f46523">Tất cả nhà xuất bản</h1>
                  <a href="themnxb.php"><input style="margin-left: 100px;width: 200px;height: 35px;background: #f46523;border:none;margin-top: 20px;margin-bottom: 10px;border-radius: 15px;color: #FAFAFA;" type="button" value="Thêm nhà xuất bản"></a>
                  <table class="dh" border='1' WIDTH='100%' style="margin-left: 100px;"> 
                    <tr>
                    <TD style="color:darkgreen" WIDTH='5%'><b><u>Mã nhà xuất bản</u></b></TD>
                    <TD style="color:darkgreen" WIDTH='5%'><b><u>Tên nhà xuất bản</u></b></TD>
                    <TD style="color:darkgreen" WIDTH='5%'><b><u>Địa chỉ nhà xuất bản</u></b></TD>
                    <TD style="color:darkgreen" WIDTH='5%'><b><u>Số điện thoại NXB</u></b></TD>
                    <TD style="color:darkgreen" WIDTH='5%'><b><u>Email NXB</u></b></TD>
                    <TD style="color:darkgreen" WIDTH='5%'><b><u>Sửa</u></b></TD>
                    <TD style="color:darkgreen" WIDTH='5%'><b><u>Xóa</u></b></TD>
                    </tr>
                    
                    <?php     
                    if(isset($_SESSION['status']))
                    {
                    $conn = mysqli_connect("localhost","root","") or die ("khong the ket noi");
                    mysqli_set_charset($conn, 'UTF8');
                    mysqli_select_db($conn,"vietbook");
                    $sql="SELECT * FROM nhaxuatban";
                    $result = mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result))
                            {
                            echo '<tr>
                                                    <td>'.$row['manxb'].'</td>
                                                    <td>'.$row['tennxb'].'</td>
                                                    <td>'.$row['diachinxb'].'</td>
                                                    <td>'.$row['sdtnxb'].'</td>
                                                    <td>'.$row['emailnxb'].'</td>
                                                    <td><a href=suanxb.php?sid='.$row['manxb'].'>Sửa</td>
                                                    <td><a href=xulixoanxb.php?sid='.$row['manxb'].'>Xóa</td>                 
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
