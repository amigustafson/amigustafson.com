<?php
  $firstname = $_POST['firstname'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = 'amigustafson.com';
  $email_subject = 'New Message';
  $email_body = "First name: $firstname.\n".
                "Surname: $surname.\n".
                "Email: $email.\n".
                "Message: $message.\n";

  $to = "info@amigustafson.com";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $email \r\n";

  mail($to,$email_subject,$email_body,$headers);
  header("location: message-sent.html");
?>
