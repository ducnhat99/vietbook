<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Trang chủ</title>
        <link rel="stylesheet" type="text/css" href="main/chitietsach.css"/>
    </head>
    <body>
        <div>
            <?php session_start();
                if(isset($_SESSION['status']))
                {
                       include("header.php");
                }
                else {
                    include ("header-kh.php");
                }
            ?>
        </div>

        <div class="noidung">
            <div class="left-menu">
                <div>
                    <?php
                        include("cnkh.php");
                    ?>
                </div>
                <div class="menu">
                    <?php
                        include("menu.php");
                    ?>
                </div>
                
            </div>
            <div class="homepage">
                <?php 
                    $conn=mysqli_connect("localhost","root","","")or die("Can't Connect...");
                    mysqli_set_charset($conn, 'UTF8');
                    mysqli_select_db($conn,"vietbook");
                    $id=$_GET['id'];
                    $q="select * from sach where masach=$id";
                    $res=mysqli_query($conn,$q) or die("Can't Execute Query..");
                    $row=mysqli_fetch_assoc($res);
                    echo '<h2 class="name" >'.$row['tensach'].'</h2>';
                    echo '	<table border="0" width="100%">
                                    <tr>
                                           <td><hr color="#f46523"></td>
                                   </tr>
                                    <tr align="center" bgcolor="#f46523">
                                            <td>Thông tin sách</td>
                                   </tr>
                                   <tr>
                                           <td><hr color="#f46523"></td>
                                   </tr>
                            </table>

                           <table border="0"  width="100%" bgcolor="#F2F2F2">
                                   <tr> 

                                           <td width="15%" rowspan="3">
                                                   <img src="'.$row['hinhanh'].'" width="150px">

                                           </td>
                                   </tr>

                                   <tr> 
                                           <td width="100%" height="100%">
                                                   <table border="0"  width="100%" height="100%">
                                                           <tr valign="top" height="20px">
                                                                   <td align="right" width="30%">Tên sách</td>
                                                                   <td width="6%">: </td>
                                                                   <td align="left">'.$row['tensach'].'</td>
                                                           </tr>


                                                           <tr height="20px">
                                                                   <td align="right">Tên tác giả</td>
                                                                   <td>: </td>
                                                                   <td align="left">'.$row['tentacgia'].'</td>

                                                           </tr>


                                                           <tr height="20px">
                                                                   <td align="right">Năm xuất bản </td>
                                                                   <td>: </td>
                                                                   <td align="left">'.$row['namxb'].'</td>

                                                           </tr>

                                                           <tr height="20px"> 
                                                                   <td align="right">Số lượng còn</td>
                                                                   <td>: </td>
                                                                   <td align="left">'.$row['soluong'].'</td>

                                                           </tr>

                                                           <tr height="20px">
                                                                   <td align="right">Giá</td>
                                                                   <td>: </td>
                                                                   <td align="left">'.$row['gia'].'</td>

                                                           </tr>
                                                   </table>


                                           </td>
                                   </tr>
                           </table>
                           <table border="0" width="100%">
                                    <tr>
                                           <td><hr color="#f46523"></td>
                                   </tr>
                                    <tr align="center" bgcolor="#f46523">
                                            <td>Lựa chọn</td>
                                   </tr>
                                   <tr>
                                           <td><hr color="#f46523""></td>
                                   </tr>

                            </table>

                            <tr><td colspan=2><hr color="#f46523""></td></tr>

                           <table border="0" width="100%">
                                    <tr align="center" bgcolor="#EEE9F3">';

                                    if(isset($_SESSION['status']))
                                    {
                                           echo ' <a href="xulictsachgh.php?ts='.$row['tensach'].'&id='.$row['masach'].'&ttg='.$row['tentacgia'].'&gia='.$row['gia'].'">
                                                   <input class="btgh" type="button" value="Thêm vào giỏ hàng">
                                           </a></td>';
                                   }
                                   else
                                   {
                                           echo '<td><a href="trangdangnhap.php"> <h4>Vui lòng đăng nhập</h4></a></td>';
                                   }
                                   echo '</tr>
                           </table>';
                ?>
            </div>
        </div>
        <div>
            <?php
                include("footer.php");
            ?>
        </div>
    </body>
</html>
