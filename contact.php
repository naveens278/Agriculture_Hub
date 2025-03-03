<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "your-email@example.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    if(mail($to, $subject, $message, $headers)) {
        echo "Message Sent Successfully!";
    } else {
        echo "Message Sending Failed.";
    }
}
?>
