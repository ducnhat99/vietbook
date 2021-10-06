<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Đơn hàng</title>
        <link rel="stylesheet" type="text/css" href="main/donhang.css"/>
    </head>
    <body>
        <div>
            <?php session_start();
                include("header.php");
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
                  <div class="homepage" >
                  <h1 style="margin-left: 400px; color: #f46523">Đơn hàng</h1>
                  <table class="dh" border='1' WIDTH='100%' style=" margin-top: 10px; margin-left: 20px;"> 
                    <tr>
                    <TD style="color:darkgreen; text-align:center;width: 50px;" ><b><u>Mã đơn hàng</u></b></TD>
                    <TD style="color:darkgreen; text-align:center; width: 500px;" ><b><u>Tên sách</u></b></TD>
                    <TD style="color:darkgreen; text-align:center; width: 50px;" ><b><u>Số lượng đặt</u></b></TD>
                    <TD style="color:darkgreen; text-align:center; width: 80px;" ><b><u>Thành tiền</u></b></TD>
                    <TD style="color:darkgreen; text-align:center; width: 100px;" ><b><u>Ngày đặt hàng</u></b></TD>
                    <TD style="color:darkgreen; text-align:center;" ><b><u>Gửi tặng</u></b></TD>
                    <TD style="color:darkgreen; text-align:center;" ><b><u>Trạng thái</u></b></TD>
                    <TD style="color:darkgreen; text-align:center; width: 70px;" ><b><u>Sửa</u></b></TD>
                    <TD style="color:darkgreen; text-align:center;" ><b><u>Hủy đơn hàng</u></b></TD>
                    </tr>
                    
                    <?php     
                    if(isset($_SESSION['status']))
                    {
                    $conn = mysqli_connect("localhost","root","") or die ("khong the ket noi");
                    mysqli_set_charset($conn, 'UTF8');
                    $mnd=$_SESSION['mnd'];
                    mysqli_select_db($conn,"vietbook");
                        $sql="SELECT * FROM donhang inner join chitietdonhang on donhang.madh =  chitietdonhang.madh inner join sach on sach.masach = chitietdonhang.masach where makh =$mnd and tinhtrang='Chờ duyệt' ORDER BY ngaydat DESC";
                    $result = mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result))
                            {
                            echo '<tr style="height: 60px;">
                                                    <td style="text-align:center;">'.$row['madh'].'</td>
                                                    <td>'.$row['tensach'].'</td>
                                                    <td style="text-align:center;">'.$row['soluongdat'].'</td>
                                                    <td style="text-align:center;">'.$row['thanhtien'].'</td>
                                                    <td style="text-align:center;">'.$row['ngaydat'].'</td>
                                                    <td style="text-align:center;">';
                                                    if($row['guitang'] == 1){
                                                    echo'    Có';
                                                    }
                                                    echo'    </td>
                                                    <td style="text-align:center;">'.$row['tinhtrang'].'</td>
                                                    <td style="text-align:center;"><a href=suadh.php?sid='.$row['madh'].'&sld='.$row['soluongdat'].'&mas='.$row['masach'].'&mactdh='.$row['mactdh'].'><input type="button" value="Sửa" style= "width: 50px;height: 30px;background: #f46523;border:none;border-radius: 5px;color: #FAFAFA;"></td>
                             <td style="text-align:center;">';
                                                    if($row['tinhtrang']=='Chờ duyệt'){
                            echo'                       <a href=huydh.php?sid='.$row['madh'].'&sld='.$row['soluongdat'].'&mas='.$row['masach'].'&mactdh='.$row['mactdh'].'><input type="button" value="Hủy" style= "width: 50px;height: 30px;background: #f46523;border:none;border-radius: 5px;color: #FAFAFA;"></td>';           
                                            }
                        echo'        </tr>';
                            }
                            }
                    ?>
            </TABLE>
            </div>
            </div>
        </div>
        <div>
            <?php
                include("footer.php");
            ?>
        </div>
    </body>
</html>
