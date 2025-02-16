<?php
// Check if the form is submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form fields
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Basic validation: Check for empty fields
    if ($name === '' || $email === '' || $subject === '' || $message === '') {
        // Missing required fields, redirect back with an error
        header('Location: contact.php?error=missing_fields');
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Invalid email format
        header('Location: contact.php?error=invalid_email');
        exit;
    }

    // Prepare the email
    $to = 'Contact@srtechnicals.com'; // Replace with your actual email
    $subject_prefix = 'New Contact Form Message: ';
    $full_subject = $subject_prefix . $subject;

    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Attempt to send the email
    if (mail($to, $full_subject, $body, $headers)) {
        // On successful send, redirect to thank-you page
        header('Location: thank-you.php');
    } else {
        // Mail send failed
        header('Location: contact.php?error=mail_failed');
    }
} else {
    // Not a POST request, redirect to contact
    header('Location: contact.php');
    exit;
}
