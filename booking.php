<?php
$subject = 'New Customer Order'; // Subject of your email
$to = 'contact@designesia.com';  //Recipient's E-mail

$emailTo = $_POST['email'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['message'];
$service = $_POST['service'];
$date = $_POST['date'];
$time = $_POST['time'];
$duration = $_POST['duration'];

$email_from = $name. ' ' . '<'.$email.'>';

$headers = "MIME-Version: 1.1";
$headers .= "Content-type: text/html; charset=iso-8859-1";
$headers .= "From: ".$name.'<'.$email.'>'."\r\n"; // Sender's E-mail
$headers .= "Return-Path:"."From:" . $email;

$message .= 'Name : ' . $name . "\n";
$message .= 'Email : ' . $email . "\n";
$message .= 'Phone : ' . $phone . "\n";
$message .= 'Service : ' . $service . "\n";
$message .= 'Date & Time : ' . $date . " " . $time . "\n";
$message .= 'Duration : ' . $duration . "\n";
$message .= 'Message : ' . $msg;

if (@mail($to, $subject, $message, $email_from))
{
	// Transfer the value 'sent' to ajax function for showing success message.
	echo 'sent';
}
else
{
	// Transfer the value 'failed' to ajax function for showing error message.
	echo 'failed';
}
?>