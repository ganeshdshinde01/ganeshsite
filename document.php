<?php

              $db=mysqli_connect("localhost","root","");
              mysqli_select_db($db,"personal");
              if(isset($_REQUEST["submit"]))
              {
                $file=$_FILES["file"]["name"];
                $tmp_name=$_FILES["file"]["tmp_name"];
                $path="documents/".$file;
                $file1=explode(".",$file);
                $ext=$file1[1];
                $allowed=array("jpg","png","jpeg","pdf","zip","tar","doc");
                if(in_array($ext,$allowed))
                {
                  move_uploaded_file($tmp_name,$path);
                  mysqli_query($db,"insert into documents(file)values('$file')");
                }

              }


          ?>

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
<title>Ganesh Shinde | Document</title>
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
     
      <h2>personal <span>Data</span></h2>
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



          
                              <div>&nbsp;</div>  <div>&nbsp;</div>
               <div>&nbsp;</div>  <div>&nbsp;</div>

          <form enctype="multipart/form-data" method="POST">
            <label><strong>Upload Documents</strong></label><br>
             <div>&nbsp;</div>

            <input type="file" name="file">
            <input type="submit" name="submit" value="upload">



          </form>

               <div>&nbsp;</div>  
               <div>&nbsp;</div>  
               <div>&nbsp;</div>  


           <?php

              mysql_connect("localhost","root","");
              mysql_select_db("personal");
              $query=mysql_query("select * from documents");
              $rowcount=mysql_num_rows($query);
              ?>
          
              <table border="2" >
                <tr >
                  <th>Download Douments</th>
                </tr>
              <?php

              for($i=1;$i<=$rowcount;$i++)
              {
                $row=mysql_fetch_array($query);


              ?>
                <tr>
                   <td><a href="documents/<?php echo $row["file"]?>"> <?php echo $row["file"] ?></a></td>
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
