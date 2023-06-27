let otpbtn = document.getElementById("sendotp");
let parent=document.getElementById("form");
// console.log(parent)
var flagsucesssendotp=false;
otpbtn.addEventListener("click", (e) => {
  otpbtn.src = "assets/image/loading.gif";
  e.preventDefault();
});






var sendotpclickcount=0;
function aftersendotp(){
  if(flagsucesssendotp){
    // console.log("flagsucesssendotp activated")
  let submit_reset = document.getElementById("submit_reset");
  
  submit_reset.addEventListener("click", () => {
    submit_reset.innerHTML = "Loading...";
    console.log(submit_reset)
  });
  submit_reset.addEventListener("click", () => {
    var username = $(".username").val();
    console.log(username)
    var otp = $(".otp").val();
    console.log(otp)
    var pass = $(".pass").val();
    console.log(pass)
    $.ajax({
      type: "POST",
      url: "_forgot.php",
      data: {
        validateotp: true,
        username: username,
        otp: otp,
        pass: pass,
      },
  
      success: function (response) {
        submit_reset.innerHTML = "Reset My Password";
        // console.log(response)
        if (response.match("id Is Not Exist Please Contact Admin")) {
          // console.log("id Is Not Exist Please Contact Admin");
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "id Is Not Exist Please Contact Admin",
          });
        }
        if (response.match("Password Changed Successfully")) {
          // console.log("Password Changed Successfully");
          Swal.fire({
            icon: "success",
            title: "Password Changed Successfully",
            text: "Your Password Reset Success You can Login Now",
          });
        }
        if (response.match("Please Enter The Correct Otp")) {
          // console.log("Please Enter The Correct Otp");
          Swal.fire({
            icon: "error",
            title: "Please Enter The Correct Otp",
            // text: response,
          });
        }
      },
    });
  });
  }
}






otpbtn.addEventListener("click", () => {
  var username = $(".username").val();
  console.log(username)
  $.ajax({
    type: "POST",
    url: "_forgot.php",
    data: {
      checksendotp: true,
      username: username,
    },

    success: function (response) {
      otpbtn.src = "assets/image/send.png";

      if (response.match("id Is Not Exist Please Contact Admin")) {
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "id Is Not Exist Please Contact Admin",
        });
      }
      else if (response.match("Mail Id Is Not Valid Contact Admin")) {
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Mail Id Is Not Valid Contact Admin",
        });
      }
      else if (response.match("You Have Reached Your Maximum Reset limit")) {
        Swal.fire({
          icon: "warning",
          title: "Try Next day",
          text: "You Have Reached Your Maximum Reset limit",
        });
      }
      else if (response.match("Your OTP is send to")) {

        Swal.fire({
          icon: "success",
          title: "OTP Send Sucessfully",
          text: response,
        });
        if(sendotpclickcount>0){

        }else{

          let newelemet=document.createElement("div");
          flagsucesssendotp=true;
          let passinbox=`<div class="field">
          <span class="fa fa-lock"></span>
          <input class="otp" id="otp" name="pass" type="text" maxlength="4" placeholder="Enter Varification Code" required>
      </div>
      <div class="field" style="margin-top:10px">
        <span class="fa fa-lock"></span>
        <input class="pass" name="cpass" type="password" placeholder="Confirm Password" required>
      </div>
      <button id="submit_reset" name="login">Reset My Password</button>`;
        newelemet.innerHTML=passinbox;
        parent.append(newelemet);
        sendotpclickcount=sendotpclickcount+1;
        aftersendotp()
      }
      }
      else{
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Something Went Wrong Try After Some Time",
        });
      }
    },
  });
});
// submit_reset

