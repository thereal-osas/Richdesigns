<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$title= $_POST['subject'];
$message= $_POST['message'];
$to = "richdesignsglobal@gmail.com";
$subject = "Mail From richdesigns";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject = " . $title . "\r\n Message =" . $message;
$headers = "From: noreply@richdesigns.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>