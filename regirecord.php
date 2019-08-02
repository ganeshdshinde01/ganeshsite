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
<title>Ganesh Shinde | Resistration Record</title>
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
      
       include 'categoryAdmin.php';

      ?>
     
      <h2>Registration <span>Record</span></h2>
      <ul class="news">
        <img style="width: 230px;height: 380px" src="images/img2.jpg">
      </ul>
    </aside>
    <section id="content">
      <div >
        <?php

       include 'imageslider.php';

        ?>
      </div>
      <div class="inside">  </div>
        
      <div>&nbsp;</div>
         <!--  ==========================================
          ========================================== -->
        
          <?php

              $db=mysqli_connect("localhost","root","");
              mysqli_select_db($db,"personal");
              $query=mysqli_query($db,"select * from register");
              $rowcount=mysqli_num_rows($query);
              ?>
          
              <table border="1" >
                <tr >
                  <th>id</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Gender</th>
                  <th>Course</th>
                  <th>City</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Mobile</th>
                </tr>
              <?php

              for($i=1;$i<=$rowcount;$i++)
              {
                $row=mysqli_fetch_array($query);


              ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["name"]?></td>
                    <td><?php echo $row["address"] ?></td>
                    <td><?php echo $row["gender"] ?></td>
                    <td><?php echo $row["course"] ?></td>
                    <td><?php echo $row["city"] ?></td>
                    <td><?php echo $row["email"] ?></td>
                    <td><?php echo $row["passwd"] ?></td>  
                    <td><?php echo $row["mobile"] ?></td>
                </tr>

              <?php  
               }
              
            ?>
           </table>


           <style type="text/css">
     table,tr
     {
      border: 2px solid black;
            height: 10px;
/*         // border-collapse: collapse;
*/      border-spacing: 0px;
           background-color: #f1f1c1;
           text-align: center;
          
      
     }

  </style>
         
    
    
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
