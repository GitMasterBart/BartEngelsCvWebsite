<?php

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Create email message
  $to = 'bartengels15@live.nl'; // Replace with your own email address
  $subject = 'New message from ' . $name . ' - ' . $subject;
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "X-Mailer: PHP/" . phpversion();

  // Set content type header
  $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

  // Send email
  if (mail($to, $subject, $body, $headers)) {
    echo 'success';
  } else {
    echo 'error';
  }

} else {
  echo 'error';
}

?>
