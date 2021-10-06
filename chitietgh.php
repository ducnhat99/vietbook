<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Chi tiết đơn hàng</title>
        <link rel="stylesheet" type="text/css" href="main/donhang.css"/>
    </head>
    <body>
        <div>
            <?php session_start();               
                    include ("headernvgh.php");
            ?>
        </div>

        <div class="noidung">
            <div class="homepage" >
                  <h1 style="margin-left: 500px; color: #f46523">Tất cả đơn hàng</h1>
                  <table class="dh" border='1' WIDTH='100%' style=" margin-top: 10px; margin-left: 200px;margin-bottom: 100px;"> 
                    <tr>
                    <TD style="color:darkgreen; width: 20px;" ><b><u>Mã đơn hàng</u></b></TD>
                    <TD style="color:darkgreen; width: 20px;" ><b><u>Mã chi tiết đơn hàng</u></b></TD>
                    <TD style="color:darkgreen; width: 300px;"><b><u>Tên sách</u></b></TD>
                    <TD style="color:darkgreen"><b><u>Số lượng</u></b></TD>
                    <TD style="color:darkgreen"><b><u>Thành tiền</u></b></TD>
                    </tr>
                    
                    <?php     
                    if(isset($_SESSION['status']))
                    {
                    
                    $conn = mysqli_connect("localhost","root","") or die ("khong the ket noi");
                    mysqli_set_charset($conn, 'UTF8');
                    mysqli_select_db($conn,"vietbook");
                    $madhg=$_REQUEST['mdh'];
                    $sql="SELECT * FROM chitietdonhang inner join sach on sach.masach = chitietdonhang.masach where madh = $madhg";
                    $result = mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result))
                            {

                            echo '<tr>
                                <form action="nvghk.php" method="POST">';
                                             echo'       <td style="height:70px;"><input type="text" name="madonk" value="'.$row['madh'].'" style="width:50px;border:none;background:none;"></td>
                                                    <td style="height:70px;"><input type="text" name="madonk" value="'.$row['mactdh'].'" style="width:50px;border:none;background:none;"></td>
                                                    <td>'.$row['tensach'].'</td>
                                                    <td>'.$row['soluongdat'].'</td>
                                                    <td>'.$row['thanhtien'].'</td>
                                             </form>
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
