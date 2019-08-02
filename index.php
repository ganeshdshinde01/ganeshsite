<?php
session_start();
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"personal");
if(isset($_REQUEST["submit"])){

  $email=$_REQUEST["email"];
  $passwd=$_REQUEST["passwd"];
  $query=mysqli_query($db,"select * from register where email='$email' && passwd='$passwd'");
    $rowcount = mysqli_num_rows($query);
    if($rowcount==true){
      $_SESSION["email"]=$email;
      header('location:study.php');
    
    }else 
    {
      echo"<script> alert('password and email is wrong')</script>";
      header("refresh:1;url=index.php");
  }


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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
      
       include 'category.php';

      ?>
      
      <form action="#" id="newsletter-form">
        <fieldset>
          <div class="rowElem">
            <h2>Login</h2>
            <input type="text" name="email" placeholder="Enter Email">
            <input type="password" name="passwd" placeholder="Enter Password"><br>
            <input type="reset" name="reset" value="Reset" style="width: 90px;background-color:#ADD8E6;color: black">
            <input type="submit" name="submit" value="Login" style="width: 90px;background-color:#ADD8E6;color: black">
            <center>
             <p class="login-help" ><a href="index.php" style="color: white">Forgot password?</a></p> </center>
            <!-- <button style="position: left;width: 88px">Reset</button> -->
<!--              <button style="position: right;width: 88px">Login</button>
 -->           <!--  <div><a class="fright">Login</a></div> -->
          </div>
        </fieldset>
      </form>
     
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
        <h2>Recent <span>Projects</span></h2>
        <ul class="list">
          <li><span><img src="images/icon1.png"></span>
            <h4>Personal Website</h4>
            <p>This web site is personal website. it store the personnal information and this website is dynamic website </p>
          </li>
          <li><span><img src="images/icon2.png"></span>
            <h4>Mini project Bank Management </h4>
            <p>Bank Management project is mini Project using core java </p>
          </li>
          <li class="last"><span><img src="images/icon3.png"></span>
            <h4>Personal responsive Website</h4>
            <p>This web site is personal website. it store the personnal information .this web site are make using some Languages those are HTML,CSS,JavaScript,PHP</p>
          </li>
        </ul>
        <h2>Services<span></span></h2>
        <ul class="list">
          <li><span><p id="rcorners2"><i style="color:purple; font-size: 25px;">Website Design</i><span>A website must be attracive and to make unique I like using some creative designing.</span></p></span>

            
          </li>
          <li><span><p id="rcorners3"><i style="color:purple; font-size: 25px;">Software Development</i><span>Unique creative software development having interactive User Interface.</span></p></span>
            
          </li>
          <li class="last"><span><p id="rcorners4"><i style="color:purple; font-size: 25px;">Android Application Development</i><span>attractive and creative androind applications are developed </span></p></span>
            
          </li>
        </ul>
        

        <!-- <div><p id="rcorners2"></p>  <p id="rcorners3"></p></div> -->



    <style> 

          #rcorners2 {
          border-radius: 15px 50px 30px;
          background: #00ccff;
         /* #00ccff,#0099ff*/
          padding: 20px; 
          width: 150px;
          height: 150px; 
           }

           #rcorners3 {
          border-radius: 15px 50px 30px;
          background: #00ccff;
          padding: 20px; 
          width: 150px;
          height: 150px; 
           }
           #rcorners4 {
          border-radius: 15px 50px 30px;
          background:#00ccff;
          padding: 20px; 
          width: 150px;
          height: 150px; 
           }
 
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
