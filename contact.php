<?php
if(isset($_POST['submit'])) {
  // Get the user's input
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Set the recipient email address
  $to = "blckcrypt@gmail.com";

  // Set the subject line and message body
  $subject = "New Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  // Send the email
  if(mail($to, $subject, $body)) {
    echo "Your message has been sent!";
  } else {
    echo "There was a problem sending your message. Please try again in a few minutes.";
  }
}
?>