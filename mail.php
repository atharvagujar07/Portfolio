<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $recipient_email = "atharvagujar.789@gmail.com"; // Change this to your recipient's email address

    // Compose the email message
    $to = $recipient_email;
    $subject = $subject;
    $headers = "From: $name <$email>";
    $message_body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

    // Send the email
    $mail_success = mail($to, $subject, $message_body, $headers);

    if ($mail_success) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
