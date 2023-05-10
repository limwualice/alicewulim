<?php
$honeypot = $_POST['honeypot']; // Retrieve the honeypot field value

if (!empty($honeypot)) {
    // Handle the bot submission (e.g., log, reject, or perform other actions).
    // You can choose to redirect or display an error message.
    header("Location: error.html");
    exit();
} else {
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'alice@alicewulim.com';
    $email_subject = 'New Form Submission';
    $email_body = "Username: $name.\n" .
        "User email: $visitor_email.\n" .
        "User message: $message.\n";
    $to = 'limwualice@gmail.com';

    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: contact.html");
    exit();
}
?>
