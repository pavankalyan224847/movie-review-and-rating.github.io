<?php
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $feedback = $_POST['feedback'];

  // Save feedback to file (you can modify this to store in database)
  $filename = 'feedback.txt';
  $file = fopen($filename, 'a');
  fwrite($file, "Name: $name\nEmail: $email\nFeedback: $feedback\n\n");
  fclose($file);

  // Redirect to thank you page
  header("Location: thank-you.html");
?>
