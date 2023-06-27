<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Gietu Leave </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div id="formparent" class="content" style="width: 360px;">
    <marquee style="color: #9c9388a1;" direction="left" scrollamount="3">If You Having Any Problem Contact With <a href="mailto:chintamanipala67@gmail.com">chintamanipala67@gmail.com</a> </marquee>
    <div class="text">Forgot Password</div>
    <form id="form" onsubmit="return false;" method="POST">
      <div class="field">
        <div style="width:220px;margin-right: 10px;">
          <span class="fa fa-user"></span>
          <input class="username" name="username" type="text" placeholder="username" required>
        </div>
        <div style="color:#f1f0ef70;border: solid;width:85px;border-radius: 8px;align-self: center;padding-bottom: 10px;padding-top: 10px;">
          <img src="assets/image/send.png" width="40" height="40" id="sendotp" style="margin: 1px" />
        </div>
      </div><br>
      
    </form>
    <div class="icon-button">
        <i><a href="index.php" style="
    text-decoration: none; color:#6c859cc2
">Goto Login</a> </i>

      </div>
  </div>

  <script src="assets/js/forgot.js"></script>
  <script src="assets/js/security/security.js"></script>

</body>

</html>