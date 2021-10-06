<?php session_start();
$conn=mysqli_connect("localhost","root","","vietbook")or die("Can't Connect...");
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
        <title>Giỏ hàng</title>
        <link rel="stylesheet" type="text/css" href="main/indexkh.css"/>
    </head>
    <body>
        <div>
            <?php 
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
                <h1 class="title" style="margin-bottom: 10px;
    text-align: center;
    color: #f46523;
    margin-left: 50px;
    font-size: 30px;">Giỏ hàng</h1>
                <div class="entry" style="margin-left: 70px">

                    <pre><?php
                    //	print_r($_SESSION);
                    ?></pre>

                    <form action="xulictsachgh.php" method="POST">
                        <table width="100%" border="0">
                                <tr >
                                    <Td style="width: 50px"> <b>STT</b></td>
                                    <td style="width: 300px"> <b>Tên sách</b></td>
                                    <td style="width: 100px"> <b>Tên tác giả</b></td>
                                    <td style="width: 100px"> <b>Số lượng </b></td>
                                    <td style="width: 100px"> <b>Giá </b></td>
                                    <td style="width: 100px"> <b>Tổng tiền</b></td>
                                    <td style="width: 100px"> <b>Xóa</b></td>
                                </tr>
                                <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>

                                <?php
                                if(isset($_SESSION['status']))
                                        {
                                        $tot = 0;
                                        $i = 1;
                                        if(isset($_SESSION['cart']))
                                        {

                                        foreach($_SESSION['cart'] as $id=>$x)
                                        {	
                                                echo '
                                                        <tr>
                                                        <Td width="50px"> '.$i.'</td>
                                                        <td width=300px> '.$x['ts'].'</td>
                                                        <td width="150px"> '.$x['ttg'].'</td>
                                                        <td> <input type="text" size="2" value="'.$x['qty'].'" name="'.$id.'">
                                                        <td width=100px> '.$x['gia'].'</td>
                                                        <td width="100px"> '.($x['qty']*$x['gia']).'</td>
                                                        <td width="100px"> <a href="xulictsachgh.php?id='.$id.'">Delete</a></td>
                                                </tr>
                                                ';

                                                $tot = $tot + ($x['qty']*$x['gia']);
                                                $i++;
                                        }
                                        }
                                        }					
                        ?>
                                <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>

                                                            <tr>
                                                            <td colspan="6" align="right">
                                                            <h4>Tổng tiền:</h4>

                                                            </td>
                                                            <td> <h4><?php echo $tot; ?> </h4></td>
                                                            </tr>
                                                            <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1; margin-bottom: 20px;"></tr>
                </TABLE>
                        <input type="submit" value="Lưu"  style="margin-left: 355px; width: 140px;height: 35px;background: #f46523;border:none;margin-top: 10px;border-radius: 15px;color: #FAFAFA;"> </br>
                    </form>      
                    <a href="sach.php"><input type="submit" value="Thêm sách"  style="margin-left: 355px; width: 140px;height: 35px;background: #f46523;border:none;margin-top: 10px;border-radius: 15px;color: #FAFAFA;"> </br></a>
                    <a href="dh.php"><input type="submit" value="Đặt hàng"  style="margin-left: 355px; width: 140px;height: 35px;background: #f46523;border:none;margin-top: 10px;border-radius: 15px;color: #FAFAFA;"> </br></a>
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
