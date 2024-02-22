<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "bhragugaur77@gmai.com";  // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    $email_message = "Name: $fullname\n\nEmail: $email\n\nMessage:\n$message";

    mail($to, $subject, $email_message, $headers);
}
?>
