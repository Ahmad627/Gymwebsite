<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    // Basic validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email format');
    }

    // Process the form (e.g., send an email, save to database)
    // Example: mail($recipient, $subject, $message, $headers);

    // Redirect to thank you page
    header('Location: thank_you.php');
    exit();
}

