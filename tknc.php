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
        <link rel="stylesheet" type="text/css" href="main/tknc.css"/>
    </head>
    <body>
        
    </body>
</html>
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
        <link rel="stylesheet" type="text/css" href="main/chitietsach.css"/>
    </head>
    <body>
        <div>
            <?php session_start();
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
                <div class="tknc" id="tk" style="margin-left: 300px;">
            <h2 class="tk">Tìm kiếm nâng cao</h2>
            <form method="GET" action="xulitknc.php">
                    <fieldset>
                    <h4>Tên sách</h4>
                    <input class="tx" type="text" id="s" name="sn" value="" placeholder="Tên sách"/>
                    <h4>Tác giả</h4>
                    <input class="tx" type="text" id="s" name="s" value="" placeholder="Tác giả"/>
                    <h4>Năm xuất bản</h4>
                    <input class="tx" type="text" id="s" name="se" value="" placeholder="Năm xuất bản"/></br></br>
                    <input class="bt" type="submit" id="x" value="Tìm kiếm" />
                    </fieldset>
            </form>
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


