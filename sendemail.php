<?php
  $to = "uniqueinnovator924@gmail.com";
  $subject = "Message from " . $_POST["email"];
  $message = $_POST["message"];
  $headers = "From: " . $_POST["email"];
  
  if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully";
  } else {
    echo "Failed to send email";
  }
?>