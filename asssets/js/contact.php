<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Validate form data (you can add more validation here)
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Please fill out all the fields.";
        exit;
    }

    // Send the email
    $to = "contact@example.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // You can customize the email content as per your requirement
    $emailContent = "Name: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $emailContent, $headers)) {
        echo "Thank you for your message. We'll get back to you soon!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>


