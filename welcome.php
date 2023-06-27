<?php
session_start();
if(!isset($_SESSION['userloged'])){
    header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>You Have LoggedIn successfully</h1>
    <a href="logout.php"><button>logout</button></a>
</body>
</html>