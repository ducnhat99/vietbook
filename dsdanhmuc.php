<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cập nhật danh mục</title>
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
                  <h1 style="margin-left: 500px; color: #f46523">Tất cả danh mục</h1>
                  <a href="themdm.php"><input style="width: 200px;
    height: 35px;
    background: #f46523;
    border:none;
    margin-left: 250px;
    margin-top: 40px;
    margin-bottom: 10px;
    border-radius: 15px;
    color: #FAFAFA;" type="button" value="Thêm danh mục"></a>
                  <table class="dh" border='1' WIDTH='100%' style="margin-left: 250px;"> 
                    <tr>
                    <TD style="color:darkgreen" WIDTH='5%'><b><u>Mã danh mục</u></b></TD>
                    <TD style="color:darkgreen" WIDTH='5%'><b><u>Tên danh mục</u></b></TD>
                    <TD style="color:darkgreen" WIDTH='5%'><b><u>Sửa</u></b></TD>
                    <TD style="color:darkgreen" WIDTH='5%'><b><u>Xóa</u></b></TD>
                    </tr>
                    
                    <?php     
                    if(isset($_SESSION['status']))
                    {
                    $conn = mysqli_connect("localhost","root","") or die ("khong the ket noi");
                    mysqli_set_charset($conn, 'UTF8');
                    mysqli_select_db($conn,"vietbook");
                    $sql="SELECT * FROM danhmuc";
                    $result = mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result))
                            {
                            echo '<tr>
                                                    <td>'.$row['madm'].'</td>
                                                    <td>'.$row['tendm'].'</td>
                                                    <td><a href=suadanhmuc.php?sid='.$row['madm'].'>Sửa</td>
                                                    <td><a href=xulixoadm.php?sid='.$row['madm'].'>Xóa</td>                 
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
