<?php
session_start();
$rowchecked=false;
include("./server/server.php");
// after click login btn  
if (isset($_POST['login'])) {
  $Username = $_POST["Username"];
  $password = md5($_POST["pass"]);
  $sql = "SELECT * FROM user_details WHERE username='$Username' and pass='$password'";
  $result = mysqli_query($conn, $sql);
  $rowcheck = $result->num_rows > 0;


  if ($rowcheck) {
    $_SESSION['userloged']=$username;
    header("location: welcome.php");
    
      } else {
        //id pass wrong message flag
        $rowchecked=true;
      }
    
  }
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gietu Leave </title>
  <!-- jquery cdn  -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <!-- sweet alert cdn  -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- font awesome cdn for icons  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- my security file  -->
  <script src="assets/js/security/security.js"></script>
  <!-- my css file  -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="content">
    <!-- scroll bar of the login div -->
    <marquee style="color: #9c9388a1;" direction="left" scrollamount="3">If You Having Any Problem Contact With <a href="mailto:chintamanipala67@gmail.com">chintamanipala67@gmail.com</a> </marquee>
    <div class="text">Login Form</div>
    <!-- form start here  -->
    <form action="index.php" method="POST">
      <div class="field">
        <span class="fa fa-user"></span>
        <input name="Username" type="text" placeholder="UserName" required>

      </div>
      <div class="field">
        <span class="fa fa-lock"></span>
        <input name="pass" type="password" placeholder="Password" required>
      </div>
      <button name="login">Log in</button>
      <div class="icon-button">
        <i><a href="forgot.php" style="text-decoration: none; color:#6c859cc2">Forgot Password??</a> </i><br>
        <i><a href="signup.php" style="text-decoration: none; color:#6c859cc2">I dont have account?</a> </i>

      </div>
    </form>
  </div>
  <!-- show error alert if id password is not correct -->
  <?php
  if ($rowchecked) {
    echo '<script type="text/javascript"> swal("Access Denied", "Please Provide A Valid Username And Password", "error");</script>';
  }
  ?>
</body>

</html>