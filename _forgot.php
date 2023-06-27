<?php
session_start();
include('server/server.php');
$mailvalid=false;

$mailnotvalid=false;
$notvaliduser=false;
$resetsuccess=false;
$resetfailed=true;
date_default_timezone_set("Asia/Kolkata");
$todaytime=date('H:i:s');
// if(isset($_POST['sendmail'])){
if(isset($_POST['checksendotp'])){
    $username=$_POST['username'];
    $sql="SELECT * FROM user_details where username='$username'";
    $result=mysqli_query($conn,$sql);
    if($result->num_rows<1){
        $notvaliduser=true;
    }
    else{
    $row=mysqli_fetch_assoc($result);
   
    if(($row["mailid"]!="N/A")){
        $mailvalid=true;
    }
    else{
        $mailnotvalid=true;
    }

}

if($mailvalid){
    $send_otp=rand(1111,9999);
    $_SESSION['otp']=$send_otp;

   
include('smtp/PHPMailerAutoload.php');
$mail = new PHPMailer(); 
//$mail->SMTPDebug=3;
	include("server/mailconfig.php");
    $mail->Subject = "Your OTP for Reset Password";
	$mail->Body = "Your Verification Code is ".$send_otp." Dont Share With Anyone. If You Not send Any Request Reguarding OTP Ignore this";

	$mail->AddAddress($row['mailid']);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
        echo "Something Went Wrong";
		// echo $mail->ErrorInfo;
	}else{
        echo "Your OTP is send to ". $row['mailid']." If OTP Not Received Wait Some Time(2 Minutes)";
        

		
	}
}
elseif($mailnotvalid){
    echo "Your Mail Id Is Not Valid Contact Admin";
}
elseif($notvaliduser){
    echo "Your id Is Not Exist Please Contact Admin";
}

}


if(isset($_POST['validateotp'])){
  $otp=$_POST['otp'];
  $pass=md5($_POST['pass']);
  $username=$_POST['username'];
 $sql="SELECT * from user_details where username = '$username'";
 $result=mysqli_query($conn,$sql);
 if($result){
    $row=mysqli_fetch_assoc($result);
    if($result->num_rows<1){

        $notvaliduser=true;
    }
    if($result->num_rows>0){
        
        if($_SESSION['otp']==$otp){
            $sql="UPDATE `user_details` SET `pass` = '$pass' WHERE `user_details`.`username` = '$username';";
            $result=mysqli_query($conn,$sql);
            $resetsuccess=true;
        }
    //     if($row['forgotpassotp']!=$otp){
    //     $resetfailed=true;
    // }
    if($notvaliduser){
        echo "Your id Is Not Exist Please Contact Admin";
    }
    elseif($resetsuccess){
        
        echo "Password Changed Successfully";
        unset($_SESSION['otp']);

    }
    elseif($resetfailed){
        echo "Please Enter The Correct Otp";
    }
    }
    if($notvaliduser){
        echo "Your id Is Not Exist Please Contact Admin";
    }
 }
}
