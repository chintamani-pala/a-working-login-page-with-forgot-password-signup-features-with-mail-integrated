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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- my css file  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</head>

<body>
    <div class="content">
        <!-- scroll bar of the login div -->
        <marquee style="color: #9c9388a1;" direction="left" scrollamount="3">If You Having Any Problem Contact With<a href="mailto:chintamanipala67@gmail.com"> chintamanipala67@gmail.com</a> </marquee>
        <div class="text">SignUp Form</div>
        <!-- form start here  -->
        <div class="parent" id="parent">
            <div class="field">
                <span class="fa fa-user"></span>
                <input class="Username" id="Username" name="Username" type="text" placeholder="UserName" required>

            </div>
            <br>
            <div class="field">
                <div style="width:220px;margin-right: 10px;">
                    <span class="fa fa-solid fa-envelope"></span>
                    <input class="mailid" id="mailid" name="mailid" type="text" placeholder="Enter mailid To Verify" required>
                </div>
                <div id="sendotp" style="color:#f1f0ef70;border: solid;width:85px;border-radius: 8px;align-self: center;padding-bottom: 10px;padding-top: 10px;">
                    <p>Send Otp</p>
                </div>
            </div><br>
            <div class="field">
                <span class="fa fa-regular fa-venus-mars fa-2xl"></span>
                <select id="gender" class="form-select signupselect" aria-label="Default select example">
                    <option value="male">male</option>
                    <option value="female">female</option>
                    <option value="other">other</option>
                </select>

            </div>
            <br>
            <div class="field">
                <span class="fa fa-lock"></span>
                <input name="pass" id="pass" type="password" placeholder="Password" required>
            </div>
            </div>
            <button name="login" id="signup">Sign Up</button>
            
            <div class="icon-button">
                <i><a href="forgot.php" style="text-decoration: none; color:#6c859cc2">Forgot Password??</a> </i>

            </div>
        
    </div>



   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="assets\js\signup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>