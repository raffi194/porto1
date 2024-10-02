<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the message from the form
    $message = htmlspecialchars($_POST['message']);

    // Define the email parameters
    $to = "raffii450@gmail.com";
    $subject = "Send Message!";
    $headers = "From: your-email@example.com\r\n";
    $headers .= "Reply-To: your-email@example.com\r\n";
    $headers .= "Content-type: text/html\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message sending failed!";
    }
} else {
    echo "Invalid request.";
}
?>
