<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Xử lí đơn hàng</title>
        <link rel="stylesheet" type="text/css" href="main/donhang.css"/>
    </head>
    <body>
        <div>
            <?php session_start();               
                    include ("headerad.php");
            ?>
        </div>

        <div class="noidung">
            <div class="homepage" >
                  <h1 style="margin-left: 500px; color: #f46523">Tất cả đơn hàng</h1>
                  
                  <table class="dh" border='1' WIDTH='100%' style=" margin-top: 10px;"> 
                    <tr>
                    <TD style="color:darkgreen; width: 20px;" ><b><u>Mã đơn hàng</u></b></TD>
                    <TD style="color:darkgreen; width: 150px;"><b><u>Tên khách hàng</u></b></TD>
                    <TD style="color:darkgreen; width: 150px;"><b><u>Địa chỉ</u></b></TD>
                    <TD style="color:darkgreen; width: 100px;"><b><u>Số điện thoại</u></b></TD>
                    <TD style="color:darkgreen; width: 200px;" ><b><u>Email</u></b></TD>
                    <TD style="color:darkgreen"><b><u>Tổng tiền</u></b></TD>
                    <TD style="color:darkgreen"><b><u>Ngày đặt hàng</u></b></TD>
                    <TD style="color:darkgreen" ><b><u>Trạng thái</u></b></TD>
                    <TD style="color:darkgreen"><b><u>Người giao hàng</u></b></TD>
                    <TD style="color:darkgreen"><b><u>Lưu</u></b></TD>
                    <TD style="color:darkgreen"><b><u>Chi tiết</u></b></TD>
                    </tr>
                    
                    <?php     
                    if(isset($_SESSION['status']))
                    {
                    $conn = mysqli_connect("localhost","root","") or die ("khong the ket noi");
                    mysqli_set_charset($conn, 'UTF8');
                    mysqli_select_db($conn,"vietbook");
                    $sql="SELECT * FROM khachhang inner join donhang on khachhang.makh=donhang.makh  where tinhtrang ='Chờ duyệt' ORDER BY ngaydat DESC";
                    $result = mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result))
                            {
                                $madd = $row['madh'];
                                
                            echo '<tr>
                                <form action="luunvgh.php" method="POST">
                                                    <td style="height:70px;"><input type="text" name="madon" value="'.$row['madh'].'" style="width:50px;border:none;background:none;"></td>
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
                                                    <td>'.$row['ngaydat'].'</td>
                                                    <td>'.$row['tinhtrang'].'</td>
                                                        
                                                    <td>
                                    <select name="tennvgh">';
                            $sql1="SELECT * FROM nhanvien where phanquyen='nvgiaohang'";
                                $result1 = mysqli_query($conn,$sql1);
                                echo'    <option>.........</option>';
                                    while($row12=mysqli_fetch_array($result1))
                            { 
                                        
                                echo'    <option>'.$row12['tennv'].'</option>';
                                         
                                    
                            }
                                
                                echo'    </select>
                                    
                                    </td>
                                    <td style="width:100px; text-align:center;">
                            <a href="luunvgh.php?id='.$row['madh'].'& sid='.$row12['manv'].'"><input type="submit" value="Lưu"  style=" width: 40px;height: 35px;background: #f46523;border:none;margin-top: 10px;color: #FAFAFA;"></a>
                                        </td>  
                                         <td><a href="chitietad.php?mdh='.$madd.'">Chi tiết</a></td>
                                        </form>';
                                        
                                        echo'    </tr>';
                                            
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
