<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$recipient = $_POST['recipient'];

// Set the email subject
$subject = "Message from $name";

// Build the email message
$body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

// Set the email headers
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/".phpversion();

// Send the email
if (mail($recipient, $subject, $body, $headers)) {
    echo "Thank you for your message!";
} else {
    echo "Oops! Something went wrong. Please try again later.";
}
?>
