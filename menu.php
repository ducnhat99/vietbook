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
        <link rel="stylesheet" type="text/css" href="main/left-menu.css"/>
    </head>
    <body>
        <?php
        $link = mysqli_connect("localhost","root","") or die ("khong the ket noi");
        mysqli_set_charset($link, 'UTF8');
        mysqli_select_db($link,"vietbook");
        $sql="SELECT * FROM danhmuc";
        $result = mysqli_query($link,$sql);
        echo '<table class=table border="1px">';
        echo '<TR><TH class="danhmuc">Danh mục</TH></TR>';
//        echo '<TH background="#f46523" color="#fff">';
        while ($row=  mysqli_fetch_array($result))
        {
            if(isset($_SESSION['status']))
                            {
                                    echo 
            '<TR><TD class="tendm"><a href="sachdm.php?madm='.$row['madm'].'">'.$row['tendm'].'</a></TD></TR>';
                            }
            else{
                echo 
            '<TR><TD class="tendm"><a href="sachdmvl.php?madm='.$row['madm'].'">'.$row['tendm'].'</a></TD></TR>';  
            }
                      
        }
        echo '</table>';
        mysqli_free_result($result);
        mysqli_close($link);
        ?>
    </body>
</html>
