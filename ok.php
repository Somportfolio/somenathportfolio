<?php

//get data from form

$name = $_POST['name'];

$email= $_POST['email'];

$subject= $_POST['subject'];

$message = $_POST[ 'message'];

$to = "somenathportfolio@gmail.com";

$txt="Name : ". $name ."\r\n Email :" .$email. "\r\n subject :". $subject ."

\r\n  message :" . $message;

$headers = "From: Somenath Ghosh". "\r\n" .

"CC: somenathportfolio@gmail.com";

if($email!=NULL) {
mail ($to,$subject, $txt, $headers);

header ("Location: thankyou.html");

}

//redirect

?>