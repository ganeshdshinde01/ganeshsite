<!DOCTYPE html>
<html lang="en">
<head>
<title>Ganesh Shinde | Events</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/styleE.css" type="text/css" media="all">

<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 7]>
<link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen">
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, footer, header nav ul li a, .nav-bg, .list li img');</script>
<![endif]-->
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
</head
<body id="page3">
<!-- START PAGE SOURCE -->
<div class="wrap">
 <?php

include 'header.php';

?>
  <div class="container">
    <aside>
       <?php
      
       include 'category.php';

      ?>
               <div>&nbsp;</div><div>&nbsp;</div>

      <ul class="news">
        <img style="width: 230px;height: 380px" src="images/img2.jpg">
      </ul>
    </aside>
    <section id="content">

      <div id="banner">
        <?php

       include 'imageslider.php';

        ?>
      </div>
      <div class="inside">
        
         <!--  ==========================================
          ========================================== -->

          <div>&nbsp;</div>
          <h2 style="color: purple"><strong>Events</strong></h2>
 


<div class="slideshow-container">

<div class="mySlides1 fade">
  <div class="numbertext">1 / 6</div>
  <img src="images/E1.jpg" style="width:100%;height: 350px">
  <div class="text" style="color:black">Traditional Day</div>
</div>

<div class="mySlides1 fade">
  <div class="numbertext">2 / 6</div>
  <img src="images/E2.jpg" style="width:100%;height: 350px">
  <div class="text" style="color:black">Teachers Day</div>
</div>

<div class="mySlides1 fade">
  <div class="numbertext">3 / 6</div>
  <img src="images/E3.jpg" style="width:100%;height: 350px">
  <div class="text" style="color:black">Deploma Trip</div>
</div>
<div class="mySlides1 fade">
  <div class="numbertext">4 / 6</div>
  <img src="images/E4.jpg" style="width:100%;height: 350px">
  <div class="text" style="color:black">Engineering Friends</div>
</div>
<div class="mySlides1 fade">
  <div class="numbertext">5 / 6</div>
  <img src="images/E5.jpg" style="width:100%;height: 350px">
  <div class="text" style="color:black">NES Trip</div>
</div>
<div class="mySlides1 fade">
  <div class="numbertext">6 / 6</div>
  <img src="images/E6.jpg" style="width:100%;height: 350px">
  <div class="text" style="color:black">OS3 Training</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides1");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>





          


      </div>
    </section>
  </div>
</div>
<?php

include 'footer.php';

?>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
