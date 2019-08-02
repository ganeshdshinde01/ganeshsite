<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="personal";

$db = mysqli_connect($servername,$username,$password,$dbname);


if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];
    $city=$_POST['city'];
    $email=$_POST['email'];
    $passwd=$_POST['passwd'];
    $mobile=$_POST['mobile'];

   $sql = "INSERT INTO `register`( `name`, `address`, `gender`, `course`, `city`, `email`, `passwd`, `mobile`) VALUES ('$name', '$address', '$gender', '$course', '$city', '$email', '$passwd', '$mobile')";
   $res=mysqli_query($db,$sql);
   
   header("location:index.php");
  

}


?>