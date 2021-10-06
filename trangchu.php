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
        <link rel="stylesheet" type="text/css" href="main/hhomepage.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    </head>
    <body>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <a href="spnoibat.php"><img src="banner/banner1.jpg" style="width:100%" height="400px"></a>
            </div>

            <div class="mySlides fade">
                <a href="spnoibat.php"><img src="banner/banner2.jpg" style="width:100%" height="400px"></a>
            </div>

            <div class="mySlides fade">
                <a href="spnoibat.php"><img src="banner/banner3.jpg" style="width:100%" height="400px"></a>
            </div>
        </div>
        <br>

        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
        <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>
        
        <div class="noibat">
        <?php
            $link = mysqli_connect("localhost","root","") or die ("khong the ket noi");
            mysqli_set_charset($link, 'UTF8');
            mysqli_select_db($link,"vietbook");
            $sql="SELECT * FROM sach where noibat='co' and masach<'55'";
            $result = mysqli_query($link,$sql);
            echo '<table class="bangspnb" border = "1" width="100%" cellspacing = "0">';
            echo '<h2 class="spnoibat"> Sảm phẩm nổi bật </h2>';

            while ($row=  mysqli_fetch_array($result))
            {
                echo  
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
                    <img src="'.$row['hinhanh'].'" width="80" height="100" style="margin-left: 30px;">
                    <br>'.$row['tensach'].'</a></br>
                    <p>'.$row['gia'].'</p>
                </td>';
               
            }
            echo '<input type=button value=""Chi tiết>';
            echo '</table>';
            if(isset($_SESSION['status']))
                            { echo'
                    <a href="spnoibat.php"><input class="btspnoibat" type=button value="Xem thêm"></a>';
                            }
 else {
     echo'
                    <a href="sachnbvl.php"><input class="btspnoibat" type=button value="Xem thêm"></a>';
 }
                    mysqli_free_result($result);
                    mysqli_close($link);
        ?>
        </div>
    </body>
</html>
