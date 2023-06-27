<?php 
//dont change anything here otherwise the forgot page mail sending will not work , only change Username,Password,SetFrom thats all
$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = "587"; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "Your emailid ";
	$mail->Password = "your email's password";
	$mail->SetFrom("Your emailid");
    ?>