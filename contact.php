<?php
$subject = 'New Contact Message'; 
$to = 'kamranislam8@gmail.com'; 

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$msg = $_POST['message'] ?? '';

$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$name." <".$email.">" . "\r\n";
$headers .= "Return-Path: ".$email . "\r\n";

$message  = 'Name: ' . $name . "<br>";
$message .= 'Email: ' . $email . "<br>";
$message .= 'Phone: ' . $phone . "<br>";
$message .= 'Message: ' . $msg . "<br>";

if (mail($to, $subject, $message, $headers)) {
    echo 'sent';
} else {
    echo 'failed';
}
?>
