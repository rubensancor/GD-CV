<?php
if(isset($_POST['submit'])){
	$name = $_POST['name']; 
	$email = $_POST['email'];  
	$subject = $_POST['subject'];  
	$message = $_POST['message']; 

	$email_from = $email;
	$email_to = 'rubensancor@gmail.com'; //replace with your email

	$success = mail("rubensancor@gmail.com", "asdf", "asdf");
}
?>
