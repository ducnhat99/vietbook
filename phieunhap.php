<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Phiếu nhập</title>
        <link rel="stylesheet" type="text/css" href="main/donhang.css"/>
    </head>
    <body>
        <div>
            <?php session_start();               
                    include ("headernvk.php");
            ?>
        </div>

        <div class="noidung">
            <div class="homepage">
                  <h1 style="margin-left: 500px; color: #f46523">Tất cả phiếu nhập</h1>
                  <table class="dh" border='1' WIDTH='100%'style="margin-left: 80px;"> 
                    <tr>
                    <TD style="color:darkgreen; width: 50px;"><b><u>Mã phiếu nhập</u></b></TD>
                    <TD style="color:darkgreen; width: 200px;"" ><b><u>Tên người nhập</u></b></TD>
                    <TD style="color:darkgreen; width: 400px;"" ><b><u>Tên sách</u></b></TD>
                    <TD style="color:darkgreen; width: 150px;"" ><b><u>Số lượng nhập</u></b></TD>
                    <TD style="color:darkgreen; width: 150px;"" ><b><u>Ngày nhập</u></b></TD>
                    </tr>
                    
                    <?php     
                    if(isset($_SESSION['status']))
                    {
                    $conn = mysqli_connect("localhost","root","") or die ("khong the ket noi");
                    mysqli_set_charset($conn, 'UTF8');
                    mysqli_select_db($conn,"vietbook");
                    $sql="SELECT * FROM phieunhap inner join sach on sach.masach=phieunhap.masach inner join nhanvien on nhanvien.manv=phieunhap.manv";
                    $result = mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result))
                            {
                            echo '<tr>
                                                    <td style="height:50px;">'.$row['manhap'].'</td>
                                                    <td>'.$row['tennv'].'</td>
                                                    <td>'.$row['tensach'].'</td>
                                                    <td>'.$row['soluongnhap'].'</td>
                                                    <td>'.$row['ngaynhap'].'</td>
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
