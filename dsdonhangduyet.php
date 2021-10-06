<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tất cả đơn hàng</title>
        <link rel="stylesheet" type="text/css" href="main/donhang.css"/>
    </head>
    <body>
        <div>
            <?php session_start();               
                    include ("headernvk.php");
            ?>
        </div>

        <div class="noidung">
            <div class="homepage" >
                  <h1 style="margin-left: 500px; color: #f46523;">Tất cả đơn hàng</h1>
                  <table class="dh" border='1' WIDTH='100%' style=" margin-top: 10px;"> 
                    <tr>
                    <TD style="color:darkgreen; width: 20px;" ><b><u>Mã đơn hàng</u></b></TD>
                    <TD style="color:darkgreen; width: 150px;"><b><u>Tên khách hàng</u></b></TD>
                    <TD style="color:darkgreen; width: 150px;"><b><u>Địa chỉ</u></b></TD>
                    <TD style="color:darkgreen; width: 100px;"><b><u>Số điện thoại</u></b></TD>
                    <TD style="color:darkgreen; width: 200px;" ><b><u>Email</u></b></TD>
                    <TD style="color:darkgreen"><b><u>Tổng tiền</u></b></TD>
                    <TD style="color:darkgreen; text-align:center;" ><b><u>Gửi tặng</u></b></TD>
                    <TD style="color:darkgreen"><b><u>Ngày đặt hàng</u></b></TD>
                    <TD style="color:darkgreen" ><b><u>Người giao hàng</u></b></TD>
                    <TD style="color:darkgreen"><b><u>Trạng thái</u></b></TD>
                    <TD style="color:darkgreen"><b><u>Sửa trạng thái</u></b></TD>
                    <TD style="color:darkgreen; width:70px;"><b><u>Lưu</u></b></TD>
                    <TD style="color:darkgreen; width:70px;"><b><u>In hóa đơn</u></b></TD>
                    <TD style="color:darkgreen; width:70px;"><b><u>Chi tiết</u></b></TD>
                    </tr>
                    
                    <?php     
                    if(isset($_SESSION['status']))
                    {
                    $conn = mysqli_connect("localhost","root","") or die ("khong the ket noi");
                    mysqli_set_charset($conn, 'UTF8');
                    mysqli_select_db($conn,"vietbook");
                    $sql="SELECT * FROM khachhang inner join donhang on khachhang.makh=donhang.makh inner join nhanvien on donhang.manv=nhanvien.manv where tinhtrang !='Chờ duyệt' and tinhtrang !='Không nhận hàng - Hoàn tất đơn hàng' and tinhtrang !='Nhận hàng - Hoàn tất đơn hàng' ORDER BY tinhtrang ASC";
                    $result = mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result))
                            {
                                $madd = $row['madh'];
                            echo '<tr>
                                <form action="nvghk.php" method="POST">
                                                    <td style="height:70px;"><input type="text" name="madonk" value="'.$row['madh'].'" style="width:50px;border:none;background:none;"></td>
                                                    <td>';
                                                    $sql10="SELECT * FROM  guitang where madh =$madd ";
                                $result10 = mysqli_query($conn,$sql10);
                                                    if($row['guitang'] == 1){
                                                        while($row10=mysqli_fetch_array($result10))
                                { 
                                                echo'    '.$row10['tennn'].' ';
                                }
                                                    }
                                                    
                                                    if($row['guitang'] == 0){
                                                        
                                                echo'    '.$row['tenkh'].' ';
                                                    }
                                
                                                    echo'    </td>
                                                    <td>';
                                                    $sql10="SELECT * FROM  guitang where madh =$madd ";
                                $result10 = mysqli_query($conn,$sql10);
                                                    if($row['guitang'] == 1){
                                                        while($row10=mysqli_fetch_array($result10))
                                { 
                                                echo'    '.$row10['diachigt'].' ';
                                }
                                                    }
                                                    
                                                    if($row['guitang'] == 0){
                                                        
                                                echo'    '.$row['diachikh'].' ';
                                                    }
                                                    echo'    </td>
                                                    <td>';
                                                    $sql10="SELECT * FROM  guitang where madh =$madd ";
                                $result10 = mysqli_query($conn,$sql10);
                                                    if($row['guitang'] == 1){
                                                        while($row10=mysqli_fetch_array($result10))
                                { 
                                                echo'    '.$row10['sdtgt'].' ';
                                }
                                                    }
                                                    
                                                    if($row['guitang'] == 0){
                                                        
                                                echo'    '.$row['sdtkh'].' ';
                                                    }
                                                    echo'    </td>
                                                    <td>';
                                                    $sql10="SELECT * FROM  guitang where madh =$madd ";
                                $result10 = mysqli_query($conn,$sql10);
                                                    if($row['guitang'] == 1){
                                                        while($row10=mysqli_fetch_array($result10))
                                { 
                                                echo'    '.$row10['emailgt'].' ';
                                }
                                                    }
                                                    
                                                    if($row['guitang'] == 0){
                                                        
                                                echo'    '.$row['emailkh'].' ';
                                                    }
                                                    echo'    </td>
                                                    <td>'.$row['tongtien'].'</td>
                                                    <td style="text-align:center;">';
                                                    if($row['guitang'] == 1){
                                                    echo'    Có';
                                                    }
                                                    echo'    </td>
                                                    <td>'.$row['ngaydat'].'</td>
                                                    <td>'.$row['tennv'].'</td>
                                                    <td>'.$row['tinhtrang'].'</td>
                                                    <td> ';
                            if($row['tinhtrang'] == "Gói hàng"){
                                                echo'    <select name="trangthai" style="width: 210px; height: 30px;">
                                                    <option>
                                                    '.$row['tinhtrang'].'
                                                        </option>
                                                        <option>Đang vận chuyển</option>
                                                        </select> ';
                            }
                            else if($row['tinhtrang'] == "Đang vận chuyển"){
                                echo'    <select name="trangthai" style="width: 210px; height: 30px;">
                                                    <option>
                                                    '.$row['tinhtrang'].'
                                                        </option>
                                                        </select> ';
                            }
                            else if($row['tinhtrang'] == "Giao hàng thành công"){
                                echo'    <select name="trangthai" style="width: 210px; height: 30px;">
                                                    <option>
                                                    '.$row['tinhtrang'].'
                                                        </option>
                                                        <option>Nhận hàng - Hoàn tất đơn hàng</option>
                                                        </select> ';
                            }
                            else if($row['tinhtrang'] == "Không nhận hàng"){
                                echo'    <select name="trangthai" style="width: 210px; height: 30px;">
                                                    <option>
                                                    '.$row['tinhtrang'].'
                                                        </option>
                                                        <option>Không nhận hàng - Hoàn tất đơn hàng</option>
                                                        </select> ';
                            }
                                                    echo'    </td>
                                                    
                                             <td style="text-align: center;"><a href="luunvgh.php?"><input type="submit" value="Lưu"  style=" width: 40px;height: 30px;background: #f46523;border:none;margin-top: 10px;color: #FAFAFA;"></a></td>
                                             <td style="text-align: center;"><a href="inhd.php?tenkh='.$row['tenkh'].'&dc='.$row['diachikh'].'&sdt='.$row['sdtkh'].'&em='.$row['emailkh'].'&tnd='.$row['tennv'].'&mdh='.$row['madh'].'" style="text-decoration:none;">In</a></td>
                                             <td><a href="chitiet.php?mdh='.$madd.'">Chi tiết</a></td>
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
