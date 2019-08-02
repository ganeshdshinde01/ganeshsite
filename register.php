<!DOCTYPE html>
<html lang="en">
<head>
<title>Ganesh Shinde | Articles</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/styleR.css" type="text/css" media="all">

<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>


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
        <div>&nbsp;</div><div>&nbsp;</div> <div>&nbsp;</div>   
        <div>&nbsp;</div> <div>&nbsp;</div> 
        <div>&nbsp;</div> <div>&nbsp;</div> 
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
      <div class="inside">
        
        
         
         <!--  ==========================================
          ========================================== -->
          <div style="float: center">
            <center>
                
                 <div>&nbsp;</div>

          <h2 style="font-size: 30px;color:#0099ff"><b>Registration form</b></h2>
          <form action="regi.php" method="POST" name="StudentRegistration" class="login" onSubmit="return(validate());">
      <label style="float: left">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input type="text" name="name" class="login-input"  >
      <label style="float: left">Address&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input type="text" name="address" class="login-input"  >
      <label style="float: left">Gender</label>
      <input type="radio" name="gender" value="male" size="10">Male
      <input type="radio" name="gender" value="Female" size="10">Female <br>
      <div>&nbsp;</div>
       <label style="float: left">Course&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input type="text" name="course" class="login-input"  >
         <label style="float: left">City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input type="text" name="city" class="login-input" >
     
       <label style="float: left">Email Id&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input type="email" name="email" class="login-input"   required="">
       <label style="float: left">Password&nbsp;&nbsp;</label>
      <input type="password" name="passwd" class="login-input"   required="">
       <label style="float: left">Mobile No&nbsp;</label>
      <input type="text" name="mobile" class="login-input"  >
      <input type="submit" name="submit" class="login-input" value="Submit" autofocus style="width: 130px;background-color:#f4f8f9">

 </form>
</center>
</div>

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
