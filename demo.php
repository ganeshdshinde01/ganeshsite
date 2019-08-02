



<?php

$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"personal");
$email=$_REQUEST["email"];
$query=mysqli_query("select * from register where email='$email'");
$row=mysqli_fetch_array($query);








if(isset($_POST['submit']))
{
   echo'clickd';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'].$row["passwd"];
  $comment = $_POST['comment'];
  $to = $row["email"];
  $headers = "from: $name<$email>";
   $message = "Name: $name \n\n sublect: $subject\n\nEmail:$email \n\n message: $comment ";
   
  if(mail($to, $subject, $message, $headers))
  {
   echo "<script type=\"text/javascript\">window.alert('please chech our mail your password has been send.');
    window.location.href = '/index.html';</script>";
    exit;
  }
  else
  {
   echo "<script type=\"text/javascript\">window.alert('this email is unregister.');
    window.location.href = '/index.html';</script>";
    exit;
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Ganesh shinde | Contact Us</title>
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
<body id="page5">
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
    
       <h2>Fresh <span>News</span></h2>
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
        <h2>Our <span>Contacts</span></h2>
        <div class="address">
          <address>
          <strong>Name:</strong>Ganesh Shinde<br>
          <strong>Email:</strong>sganesh767@gmail.com<br>
          <strong>Mobile No:</strong>7507062567<br>
          <strong>Website:</strong>ganeshdshinde01.000webhoastapp.com
          </address>
         <!-- . -->
        </div>
        <h2>Contact <span>Form</span></h2>
        <form id="contacts-form" action="" method="post">
          <fieldset>
            <div class="field">
              <label> Name:</label>
              <input type="text" name="name" value=""/>
            </div>
            <div class="field">
              <label> E-mail:</label>
              <input type="email" name="email" value=""/>
            </div>
            <div class="field">
              <label> Subject:</label>
              <input type="text" name="subject" value=""/>
            </div>
            <div class="field extra">
              <label> Message:</label>
              <textarea cols="1" rows="1" name="comment"></textarea><br>
            </div>
             <input type="submit" name="submit" value="submit" style="float: right;width: 100px">
          </fieldset>
        </form>
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
