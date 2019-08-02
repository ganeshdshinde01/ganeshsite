<?php
session_start();
if ($_SESSION["email"]==true) {

  
}
else
{
  header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Ganesh Shinde</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
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
</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="wrap">
  
<?php

include 'header.php';

?>


  <div class="container">
    <aside>
     <?php

       include 'categoryAdmin.php';

        ?>
     
    </aside>
    <section id="content">
      <div id="banner">
        <?php

       include 'imageslider.php';

        ?>
      
      </div>
      
    </section>
    <div>&nbsp;</div>
    <h2 style="font-size: 35px"><B>Gallery</B></h2>
<div style="float: left">
  <div class="responsive">
    <div class="gallery">
      <a href="images/1.jpg" target="_blank">
        <img src="images/1.jpg" alt="1"/>
      </a>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a href="images/2.jpg" target="_blank">
        <img src="images/2.jpg" alt="2"/>
      </a>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a href="images/3.jpg" target="_blank">
        <img src="images/3.jpg" alt="3"/>
      </a>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a href="images/4.jpg" target="_blank">
        <img src="images/4.jpg" alt="4"/>
      </a>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a href="images/5.jpg" target="_blank">
        <img src="images/5.jpg" alt="5"/>
      </a>
    </div>
  </div>
  <div class="responsive">
    <div class="gallery">
      <a href="images/6.jpg" target="_blank">
        <img src="images/6.jpg" alt="6"/>
      </a>
    </div>
  </div>
   <div class="responsive">
    <div class="gallery">
      <a href="images/2.jpg" target="_blank">
        <img src="images/2.jpg" alt="6"/>
      </a>
    </div>
  </div>
   <div class="responsive">
    <div class="gallery">
      <a href="images/4.jpg" target="_blank">
        <img src="images/4.jpg" alt="6"/>
      </a>
    </div>
  </div>

  <div class="clearfix"></div>
  </div>

    </div>

 
   

  </div>

</div>








<?php

include 'footer.php';

?>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
