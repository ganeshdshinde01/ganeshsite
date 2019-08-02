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
<title>Ganesh Shinde | Adminhome</title>
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
       <?php
      
       include 'categoryAdmin.php';

      ?>
     
      <h2>Update <span>Records</span></h2>
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
        <h2>Upload Books</h2>
                       <div>&nbsp;</div>  <div>&nbsp;</div>
               <div>&nbsp;</div>  <div>&nbsp;</div>

        <ul class="articles">

          <?php

             $db=mysqli_connect("localhost","root","");
              mysqli_select_db($db,"personal");
              if(isset($_REQUEST["submit"]))
              {
                $file=$_FILES["file"]["name"];
                $tmp_name=$_FILES["file"]["tmp_name"];
                $path="upload/".$file;
                $file1=explode(".",$file);
                $ext=$file1[1];
                $allowed=array("jpg","png","jpeg","pdf","zip","tar");
                if(in_array($ext,$allowed))
                {
                  move_uploaded_file($tmp_name,$path);
                  mysqli_query($db,"insert into fileupload(file)values('$file')");
                }

              }


          ?>

          <form enctype="multipart/form-data" method="POST">
            <input type="file" name="file">
            <input type="submit" name="submit" value="upload">



          </form>


           <div>&nbsp;</div>  <div>&nbsp;</div>
                          <div>&nbsp;</div>  <div>&nbsp;</div>


           <h2>Delete Registration Records </h2>
           
           <div>&nbsp;</div>  <div>&nbsp;</div>
                          <div>&nbsp;</div>  <div>&nbsp;</div>

               <div>&nbsp;</div>


            <h2>Delete Enquiry Records</h2>



          







          
        </ul>
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
