
<?php
 session_start();
 extract($_POST);
 extract($_SESSION);
     $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den MySQL");
if(isset($submit)){
    $db_selected = mysqli_select_db($link, "vietbook");
    $query="insert into danhmuc(tendm)
			values('$tendmuc')";
    mysqli_set_charset($link, 'UTF8');
    $rs = mysqli_query($link, $query);
    header("Location:dsdanhmuc.php");
}

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
        <title>Thêm danh mục</title>
        <link rel="stylesheet" type="text/css" href="main/indexkh.css"/>
    </head>
    <body>
        <div>
            <?php             
                    include ("headerad.php");
            ?>
        </div>

        <div class="noidung" style="height: 400px;">
            <div class="homepage">
                  <h1 style="margin-left: 500px; color: #f46523">Thêm danh mục</h1>
            <div class="entry" >
                <form method='POST' enctype="multipart/form-data" style="margin-left: 300px;">

                    <br><b>Tên danh mục:</b><br></br>
                                <input type='text' name='tendmuc' size='40'>
                                <br><br>
                                <input  type='submit' name="submit"  value='   OK   '  >
                </form>
                </div>    
            
            </div>
        </div>
        <div>
            <?php
                include("footerad.php");
            ?>
        </div>
    </body>
</html>
