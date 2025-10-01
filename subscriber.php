<?php
//get data from form  

$w3lName = $_POST['email'];


$to = "sales@ndegeinsurance.com";
$subject = "Mail From website | NEW SUBSCRIBER";
$txt = "Name = " . $w3lName . "\r\n Subject =" . $subject;
$headers = "From: noreply@ndegeinsurance.com";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}

//redirect
header("Location: index.html");
