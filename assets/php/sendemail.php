<?php
if(isset($_POST["submit"])) {
$recipient = "rubensancor@gmail.com"; //my email
echo $subject = $_POST ["subject"];
echo $name = $_POST ["name"];
echo $email = $_POST["email"];
echo  $message = $_POST["message"];

 $mailBody="Name: $name\nEmail: $email\n\n$message"; 

 mail($recipient, $subject, $mailBody, "From: $name <$email>");

echo $thankYou="<p>Thank you! We will be in contact with you shortly.</p>";

}
?>