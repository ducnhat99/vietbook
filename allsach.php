<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="main/allsachh.css"/>
    </head>
    <body>
        <?php
            $link = mysqli_connect("localhost","root","") or die ("khong the ket noi");
            mysqli_set_charset($link, 'UTF8');
            mysqli_select_db($link,"vietbook");
            $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:15;
            $current_page = !empty($_GET['page'])?$_GET['page']:1;
            $offset = ($current_page - 1) * $item_per_page;
            $sql="SELECT * FROM sach order by masach asc LIMIT ".$item_per_page." OFFSET ".$offset." ";
            $totalRecords = mysqli_query($link, "SELECT * FROM sach");
            $totalRecords = $totalRecords->num_rows;
            $totalPages = ceil($totalRecords / $item_per_page);
            $result = mysqli_query($link,$sql);
            echo '<table class="bangspnb" border = "1" width="100%" cellspacing = "0">';
            echo '<h2 class="spnoibat"> Tất cả sách </h2>';
            $count=0;
            while ($row=  mysqli_fetch_array($result))
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
                    mysqli_free_result($result);
                    mysqli_close($link);
        ?>
        
    </body>
</html>
