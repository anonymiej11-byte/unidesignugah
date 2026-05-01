<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'mbnigeria@gmail.com'; /*it should be your domain name */

$email_subject = 'New Form Submission'; /*write anything */

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";
      
$to = 'anonymiej11@gmail.com'; /*where you wnt to receive the email */            

$headers = "From: $email_from \r\n";

$headers .= "Reply_To: visitor_email \r\n";

email($to,$email_subject,$email_body,$headers); /*it will send all the info to the email id */

header("Location: contact.html"); /*where you want to direct the user after submitting the form */

?>