<?php

	$name = @trim(stripslashes($_POST['name'])); 
	$email = @trim(stripslashes($_POST['email']));  
	$subject = @trim(stripslashes($_POST['subject']));  
	$message = @trim(stripslashes($_POST['message'])); 

	$email_from = $email;
	$email_to = 'rubensancor@gmail.com'; //replace with your email

	$body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

	$success = @mail($email_to, $subject, $body);
	
?>

<!DOCTYPE HTML>
<html>
<head>
	<script>alert("Thank you for contact us. As early as possible  we will contact you.");</script>
	<meta charset="UTF-8" HTTP-EQUIV="REFRESH" content="0; url=https://rubensancor.github.io/test/index.html"> 
</head>