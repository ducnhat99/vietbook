<?php
$conn=mysqli_connect("localhost","root","","vietbook")or die("Can't Connect...");
 session_start();
        $query ="";
	$search=$_GET['tk'];
        mysqli_set_charset($conn, 'UTF8');
        if(isset($search)){
            $query="select * from sach where tensach like '%$search%'";
        }
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
        $num = mysqli_num_rows($res);
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
        <title>Tất cả sách</title>
        <link rel="stylesheet" type="text/css" href="main/tkiemsach.css"/>
    </head>
    <body>
        <div>
            <?php
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
                <div class="menu">
                    <?php
                        include("menu.php");
                    ?>
                </div>
                <div>
                    <?php
                        include ("tkncid.php");
                    ?>
                </div>
            </div>
            <div class="hhomepage">
                        <?php
                        if($num > 0){
                        echo '<table class="bangspnb" border = "1" width="100%" cellspacing = "0">';
                        echo '<h2 class="spnoibat">Kết quả trả về với từ khóa: '.$search.'</h2>';
                                $count=0;
                                while($row=mysqli_fetch_assoc($res))
                                {
                                        if($count==0)
                                        {
                                                echo '<tr>';
                                        }

                                        echo '<td class="cotspnoibat">';
                if(isset($_SESSION['status']))
                    { echo'
                    <a href="chitietsach.php?id='.$row['masach'].'">';
                            }
 else {
     echo'
                    <a href="chitietsachvl.php?id='.$row['masach'].'">';
 }
                    echo'
                                        <img src="'.$row['hinhanh'].'" width="80" height="100" style="margin-left:35px;">
                                        <br>'.$row['tensach'].'</a></br>
                                        <p>'.$row['gia'].'</p>
                                        </td>';
                                        $count++;							

                                        if($count==5)
                                        {
                                                echo '</tr>';
                                                $count=0;
                                        }
                                }
                                echo '</table>';
                        }
                        else{
                            echo '<h2 class="kcokq">Không có kết quả trả về với từ khóa: '.$search.'</h2>';
                        }
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