<?php
session_start();
session_destroy();
header("Location: index.php");
date_default_timezone_set("Asia/Kolkata");
$todaytime=date('H:i:s');
// echo gettype($todaytime); 
?>