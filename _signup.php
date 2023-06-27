<?php
session_start();
include('server/server.php');
if (isset($_POST['sendotp'])) {
    $mailid = $_POST['mailid'];
    $_SESSION['mailid'] = $mailid;
    $send_otp = rand(1111, 9999);
    $_SESSION['otp'] = $send_otp;
    include('smtp/PHPMailerAutoload.php');
    $mail = new PHPMailer();
    //$mail->SMTPDebug=3;
    include("server/mailconfig.php");
    $mail->Subject = "Your OTP for SignUp";
    $mail->Body = "Your Verification Code is " . $send_otp . " Dont Share With Anyone. If You Not send Any Request Reguarding OTP Ignore this";

    $mail->AddAddress($mailid);
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => false
        )
    );
    if (!$mail->Send()) {
        echo "Something Went Wrong";
        // echo $mail->ErrorInfo;
    } else {
        echo "Your OTP is send to " . $mailid . " If OTP Not Received Wait Some Time(2 Minutes)";
    }
}
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $mailid = $_POST['mailid'];
    


        $gender = $_POST['gender'];
        $password = md5($_POST['password']);
        $otp = $_POST['otp'];
        if ($_SESSION['otp'] != $otp) {
            echo "Incorect OTP";
        } else {
            if ($_SESSION['mailid'] != $mailid) {
                echo "please dont change mail after send otp";
            } else {
            $sql = "select * from user_details where username='$username'";
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                echo "Username Is Already Resistered Please try another";
            }
            $sql = "select * from user_details where mailid='$mailid'";
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                echo "Mailid Is Already Resistered Please try another";
            } else {
                if ($username == "" || $mailid == "" || $gender == "" || $password = "" || $otp == "") {
                    echo "Fill All The inputs";
                } else {

                    $sql = "INSERT INTO `user_details` (`id`, `username`, `mailid`, `name`, `gender`, `pass`) VALUES (NULL, '$username', '$mailid', '$username', '$gender', '$password');";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        echo "SignUp Successfull";
                        unset($_SESSION['otp']);
                    }
                }
            }
        }
    
}
}
// echo "Some Error Occured";
