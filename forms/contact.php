<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set your email address here
    $receiving_email_address = 'youngsoja24@gmail.com';

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Create the email body content
    $email_subject = "Message from: $name";
    $email_body = "You have received a new message from your website contact form.\n\n".
                  "Name: $name\n".
                  "Email: $email\n".
                  "Subject: $subject\n\n".
                  "Message:\n$message";

    // Create email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email
    if (mail($receiving_email_address, $email_subject, $email_body, $headers)) {
        echo "Your message has been sent. Thank you!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
