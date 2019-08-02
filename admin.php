<?php
session_start();
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"personal");
if(isset($_REQUEST["submit"])){

  $email=$_REQUEST["email"];
  $password=$_REQUEST["password"];
  $query=mysqli_query($db,"select * from admin where email='$email' && password='$password'");
    $rowcount = mysqli_num_rows($query);
    if($rowcount==true){
      $_SESSION["email"]=$email;
      header('location:adminhome.php');
    
    }else 
    {
      echo"<script> alert('password and email is wrong')</script>";
      header("refresh:1;url=admin.php");
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Ganesh Shinde | Articles</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/styleA.css" type="text/css" media="all">
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
       <?php
      
       include 'category.php';

      ?>
       
       <div>&nbsp;</div><div>&nbsp;</div>
      <ul class="news">
        <img style="width: 220px;height: 380px" src="images/img2.jpg">
      </ul>
    </aside>
    <section id="content">
      <div id="banner">
        <?php

       include 'imageslider.php';

        ?>
      </div>
      <div class="inside" >
        
<div>&nbsp;</div><div>&nbsp;</div>
           <CENTER>
<!--             <h3 style="color: red">Admin Login</h3>
 -->            <form action="#" method="POST" class="login">
      
                    <h2 style=" font-size: 25px"><b>Admin Login</b></h2>
                    <div>&nbsp;</div>

        <input type="email" name="email" class="login-input" placeholder="Email Address" autofocus required="">
        <input type="password" name="password" class="login-input" placeholder="Password" required="">
        <input type="submit" name="submit" value="Login" class="login-submit">
        </form>
    </CENTER>
     


      </div>
    </section>
  </div>

<?php

include 'footer.php';

?>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
