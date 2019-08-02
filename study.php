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
<title>Ganesh Shinde | Articles</title>
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
<body id="page3">
<!-- START PAGE SOURCE -->
<div class="wrap">
 <?php

include 'header.php';

?>
  <div class="container">
    <aside>
       <h3 style="font-size:20px">Categories</h3>
        <div>&nbsp;</div>
        <ul class="categories">
        <li><span><a href="Introduction.php">Self Introduction</a></span></li>
        <li><span><a href="project.php">Academic Projects</a></span></li>
        <li><span><a href="achievement.php">Achievements</a></span></li>
        <!-- <li><span><a href="#">Descriptions</a></span></li> -->
       <!-- <li><span><a href="study.php">Study Material</a></span></li> -->
        <li><span><a href="academic.php">Academic Details</a></span></li>
         <li><span><a href="event.php">Events</a></span></li>
        <li><span><a href="admin.php">Admin login</a></span></li>
        <li><span><a href="register.php">Registration</a></span></li>
        <li><span><a href="logout.php">Logout</a></span></li>

        
      </ul>



      <h2>Study <span>Materials</span></h2>
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
                <div>&nbsp;</div>

        <div>&nbsp;</div>

        
         <!--  ==========================================
          ========================================== -->
           
             <?php

              $db=mysqli_connect("localhost","root","");
              mysqli_select_db($db,"personal");
              $query=mysqli_query($db,"select * from fileupload");
              $rowcount=mysqli_num_rows($query);
              ?>
          
              <table border="2" >
                <tr >
                  <th>Download</th>
                </tr>
              <?php

              for($i=1;$i<=$rowcount;$i++)
              {
                $row=mysqli_fetch_array($query);


              ?>
                <tr>
                   <td><a href="upload/<?php echo $row["file"]?>"> <?php echo $row["file"] ?></a></td>
                </tr>

              <?php  
               }
              
            ?>
           </table>
           <style type="text/css">
     table,th,td
     {
      border: 1px solid black;
            height: 10px;
/*         // border-collapse: collapse;
*/      border-spacing: 0px;
           background-color: #f1f1c1;
           text-align: center;
         </style>
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
