<?php 
$name = $_POST['name'];
$visitor_mail = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['php'];

$email_from = 'info@yashsharma29103.github.io';

$email_subject = 'New Form Submission';

$email_body = "User Name : $name.\n",
                "User Email : $visitor_mail.\n",
                "User Subject : $subject.\n",
                "User Message : $message";

$to = "yashsharma29103@gmail.com";

$headers = "from : $email_from";
$headers .= "reply to : $visitor_mail";

mail($to,$email_subject,$email_body,$headers);

header("Location : contact.html");
?>