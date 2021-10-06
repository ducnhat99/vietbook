<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Thêm sách</title>
        <link rel="stylesheet" type="text/css" href="main/indexkh.css"/>
    </head>
    <body>
        <div>
            <?php session_start();               
                    include ("headerad.php");
            ?>
        </div>

        <div class="noidung">
            <div class="homepage">
                  <h1 style="margin-left: 500px; color: #f46523">Thêm sách</h1>
            <div class="entry" >
                <form action='xulinhapkho.php' method='POST' enctype="multipart/form-data" style="margin-left: 300px;">

                                <br><b>Tên sách:</b><br>
                                <input type='text' name='tnsach' size='40'>
                                <br><br>

                                <b>Mã Danh mục:</b><br>
                                <select  name="dm" style="width: 300px;">
                                                <?php
									
										
			
											$link = mysqli_connect("localhost","root","") or die ("khong the ket noi");
                                                                                        mysqli_set_charset($link, 'UTF8');
                                                                                        mysqli_select_db($link,"vietbook");
                                                                                        $sql="SELECT * FROM danhmuc";
                                                                                        $result = mysqli_query($link,$sql);
											
											while ($row=  mysqli_fetch_array($result))
                                                                                        {
												
												
										echo '<option value="'.$row['madm'].'">  '.$row['tendm'];
												
													
												}
												
											
											mysqli_free_result($result);
                                                                                        mysqli_close($link);
								?>
                                </select>
                                <br><br>
                                <b>Mã NXB:</b><br>
                                <select  name="mnxb" style="width: 300px;">
                                                <?php
									
										
			
											$link = mysqli_connect("localhost","root","") or die ("khong the ket noi");
                                                                                        mysqli_set_charset($link, 'UTF8');
                                                                                        mysqli_select_db($link,"vietbook");
                                                                                        $sql="SELECT * FROM nhaxuatban";
                                                                                        $result = mysqli_query($link,$sql);
											
											while ($row=  mysqli_fetch_array($result))
                                                                                        {
												
												
										echo '<option value="'.$row['manxb'].'">  '.$row['tennxb'];
												
													
												}
												
											
											mysqli_free_result($result);
                                                                                        mysqli_close($link);
								?>
                                </select>
                                <br><br>
                                <b>Tên tác giả:</b><br>
                                <input type='text' name='ttg' size='40'>
                                <br><br>

                                <b>Năm xuất bản:</b><br>
                                <input type='text' name='nxb' size='40'>
                                <br><br>

                                <b>Giá:</b><br>
                                <input type='text' name='gia' size='40'>
                                <br><br>

                                <b>Hình ảnh:</b><br>
                                <input type=file name='image' size='40'>

                                <br><br>
                                <b>Nỗi bật:</b><br>
                                <input type='text' name='nb'  size='35'>
                                <br><br>

                                <input  type='submit' name="submit"  value='   Lưu   '  >
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
