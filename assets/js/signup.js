let signup = document.getElementById("signup");
let username = document.getElementById("Username")
let mailid = document.getElementById("mailid");
let gender = document.getElementById("gender");
let pass = document.getElementById("pass");
let sendotp = document.getElementById("sendotp");
let parent = document.getElementById("parent");
var sendotpclickcount = 0;
console.dir(sendotp)
var sendotpcount=0;
sendotp.addEventListener("click", () => {
    
    sendotp.innerHTML="<b>sending...</b>"
    let mailidval = mailid.value;
    
    console.log(mailid.value)
    $.ajax({
        type: "POST",
        url: "_signup.php",
        data: {
            sendotp: true,
            mailid: mailidval,

        },

        success: function (response) {
            sendotp.innerHTML="Send Again"
            if (response.match("Something Went Wrong")) {

                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Something Went Wrong",
                });
            }
            if (response.match("Your OTP is send")) {

                Swal.fire({
                    icon: "success",
                    title: "wow",
                    text: response,

                });
                if (sendotpclickcount > 0) {

                } else {
                    let newelemet = document.createElement("div");
                    flagsucesssendotp = true;
                    let passinbox = `<br><div class="field">
                            <span class="fa fa-lock"></span>
                            <input class="otp" id="otp" name="pass" type="text" maxlength="4" placeholder="Enter Varification Code" required>
                            </div>`;
                            newelemet.innerHTML=passinbox;
                            parent.append(newelemet);
                            sendotpclickcount=sendotpclickcount+1;
                            sendotpcount=sendotpcount+1;
                            
                }
            }
        }
    })
})
signup.addEventListener("click", (e) => {
    if(sendotpcount<=0){
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "SendOtp First Then SignUp",
    
        });
    }else{
    let otpbtn=document.getElementById("otp")
    e.preventDefault()
   let mailval=mailid.value
   let userval=username.value
   let genderval=gender.value
   let passwordval=pass.value
   let otpval=otpbtn.value
   if(mailval=="" || userval=="" || genderval=="" || passwordval=="" || otpval=="" ){
    Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Fill All The Fields",

    });
   }else{
    $.ajax({
        type: "POST",
        url: "_signup.php",
        data: {
            signup: true,
            mailid: mailval,
            username: userval,
            gender: genderval,
            password: passwordval,
            otp: otpval,
    
        },
    
        success: function (response) {
            if(response.match("Incorect OTP")){
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Incorect OTP",
            
                });
            }
            if(response.match("Fill All The inputs")){
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Fill All The inputs",
            
                });
            }
            if(response.match("Username Is Already Resistered Please try another")){
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Username Is Already Resistered Please try another",
            
                });
            }
            if(response.match("Some Error Occured")){
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Some Error Occured",
            
                });
            }
            if(response.match("SignUp Successfull")){
                Swal.fire({
                    icon: "success",
                    title: "SignUp Success",
                    text: "SignUp Successfull go and login",
            
                });
            }
            if(response.match("Mailid Is Already Resistered Please try another")){
                Swal.fire({
                    icon: "error",
                    title: "Opps...",
                    text: "Mailid Is Already Resistered Please try another",
            
                });
            
        }
        if(response.match("please dont change mail after send otp")){
            Swal.fire({
                icon: "error",
                title: "Opps...",
                text: "please dont change mail after send otp",
        
            });
        }
        }
    })
   }
}
})
