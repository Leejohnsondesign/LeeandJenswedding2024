<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get form data
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $attend = $_POST['attend'];
  $dietary_requirements = $_POST['dietary_requirements'];
  $song1 = $_POST['song1'];
  $song2 = $_POST['song2'];
  $song3 = $_POST['song3'];

  // Build email message
  $to = 'leeejohnsonn@hotmail.com';
  $subject = 'RSVP form submission';
  $message = "First name: $first_name\n"
           . "Last name: $last_name\n"
           . "Attending: $attend\n"
           . "Dietary requirements: $dietary_requirements\n"
           . "Songs:\n$song1\n$song2\n$song3\n";

  // Send email
  mail($to, $subject, $message);

  // Redirect to thank-you page
  header(Location: 'rsvp.html');
  exit;
}
?>