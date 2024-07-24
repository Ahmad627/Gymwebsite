<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myfirstdatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$name = $email = $phone = $password = $confirm_password = $message = "";
$errors = [];
$registration_success = false;

// Retrieve form data and validate
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];
    $message = $_POST['message'];

    // Input validation
    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }

    if (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters long.";
    }

    if (empty($errors)) {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO users (name, email, phone, password, message) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $email, $phone, $hashed_password, $message);

        if ($stmt->execute()) {
            $registration_success = true;
        } else {
            $errors[] = "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #000; /* Background color of the page */
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
        }
        .success-message, .error-message {
            background: #333;
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
            max-width: 500px;
            width: 100%;
            transform: translateY(-50px);
            opacity: 0;
            animation: slideIn 1s forwards;
        }
        .success-message h1, .error-message h1 {
            color: #f0a500;
        }
        .success-message p, .error-message p {
            margin: 1rem 0;
            font-size: 1.2rem;
        }
        .success-message button, .error-message button {
            background-color: #f0a500;
            border: none;
            color: #fff;
            padding: 1rem 2rem;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .success-message button:hover, .error-message button:hover {
            background-color: #d48f00;
        }
        @keyframes slideIn {
            from { opacity: 0; transform: translateY(-50px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <?php if ($registration_success): ?>
        <div class="success-message">
            <h1>Registration Successful!</h1>
            <p>Thank you for registering. You can now go back to the homepage.</p>
            <a href="index.php"><button>Go to Homepage</button></a>
        </div>
    <?php else: ?>
        <?php if (!empty($errors)): ?>
            <div class="error-message">
                <h1>Registration Failed</h1>
                <?php foreach ($errors as $error): ?>
                    <p><?php echo htmlspecialchars($error); ?></p>
                <?php endforeach; ?>
                <a href="signup.php"><button>Go back to Signup</button></a>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
