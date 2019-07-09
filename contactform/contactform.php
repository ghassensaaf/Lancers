<?php
  $name = $_POST['name'];
  $email_from = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $email_subject = "$subject";
  $email_body =   "User name: $name. \n".
                  "User Email: $email. \n".
                  "Message: $message. \n"

  $to = "saafghassen@gmail.com";
  $headers = "From: $email_from. \r\n";
  $headers = "Reply-to : $email_from \r\n";
  
  mail($to,$email_subject,$email_body,$headers);
  header("Location: index.html");
?>
