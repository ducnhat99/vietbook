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
        <link rel="stylesheet" type="text/css" href="main/allsachh.css"/>
    </head>
    <body>

                <?php 
                    $conn=mysqli_connect("localhost","root","","")or die("Can't Connect...");
                    mysqli_set_charset($conn, 'UTF8');
                    mysqli_select_db($conn,"vietbook");
                    $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:15;
                    $current_page = !empty($_GET['page'])?$_GET['page']:1;
                    $offset = ($current_page - 1) * $item_per_page;
                    $madm=$_GET['madm'];
                    $q="select * from sach where madm=$madm order by masach asc LIMIT ".$item_per_page." OFFSET ".$offset."";
                    $totalRecords = mysqli_query($conn, "SELECT * FROM sach where madm=$madm");
                    $totalRecords = $totalRecords->num_rows;
                    $totalPages = ceil($totalRecords / $item_per_page);
                    $res=mysqli_query($conn,$q) or die("Can't Execute Query..");
                    $row=mysqli_fetch_assoc($res);
                    echo '<table class="bangspnb" border = "1" width="100%" cellspacing = "0">';
                    echo '<h2 class="spnoibat">Tất cả sách</h2>';
                    $count=0;
                    while ($row=  mysqli_fetch_array($res))
                    {
                        if($count==0)
                        {
                                echo '<tr>';
                        }
                        echo 
        //                '<TR><TD>'.$row['hinhanh'].'</TD><TD>'.$row['tensach'].'</TD></TR>';     
                        '<td class="cotspnoibat">';
                if(isset($_SESSION['status']))
                    { echo'
                    <a href="chitietsach.php?id='.$row['masach'].'">';
                            }
 else {
     echo'
                    <a href="chitietsachvl.php?id='.$row['masach'].'">';
 }
                    echo'
                            <img src="'.$row['hinhanh'].'" width="80" height="100">
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
                    include ("pagination.php");
                ?>
    </body>
</html>
