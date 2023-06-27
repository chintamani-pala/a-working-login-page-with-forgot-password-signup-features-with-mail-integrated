
<?php
//change servername,username,password,databases  only
$servername='localhost';
 $username='root';
 $password='';
 $database='login';
 $conn=mysqli_connect($servername,$username,$password,$database);
 date_default_timezone_set("Asia/Kolkata");
 $todaytime=date('H:i:s');
 ?>