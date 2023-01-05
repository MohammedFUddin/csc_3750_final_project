<?php
//get data from form  
$name = $_POST['Name'];
$P.N. = $_POST['Number'];
$email= $_POST['Email'];
$message= $_POST['Extra text'];
$Appatizer= $_POST[' Appatizer'];
$to = "mu99231@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n phne number = " . $P. . "\r\n
 Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
