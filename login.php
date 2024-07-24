<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Database connection settings
    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "myfirstdatabase";

    // Create connection
    $conn = new mysqli($servername, $username, $dbpassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Validate user credentials
    $stmt = $conn->prepare("SELECT name, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($name, $hashed_password);

    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_name'] = $name;
            $_SESSION['user_email'] = $email;
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "No account found with that email.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In | Platina Gym</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('Images/iron.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }
        .login-form {
            background: rgba(255, 255, 255, 0.9); /* Slight transparency for better readability */
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .login-form h2 {
            margin-bottom: 1rem;
            color: #333;
        }
        .login-form label {
            display: block;
            margin-top: 1rem;
            font-weight: bold;
            text-align: left;
        }
        .login-form input {
            width: calc(100% - 2rem); /* Adjust width to account for padding */
            padding: 0.8rem;
            margin-top: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-form .password-field {
            position: relative;
            margin-top: 0.5rem;
        }
        .login-form .password-field input {
            width: calc(100% - 3rem); /* Adjust width to account for the icon and padding */
            padding-right: 2.5rem; /* Space for the toggle button */
        }
        .login-form .password-field button {
            position: absolute;
            top: 50%;
            right: 0.5rem;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }
        .login-form button[type="submit"] {
            margin-top: 1.5rem;
            padding: 0.8rem 1.5rem;
            background: #f0a500;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .login-form button[type="submit"]:hover {
            background: #d48f00;
        }
        .login-form .error {
            color: red;
            margin-top: 0.5rem;
        }
        .home-link {
            position: fixed;
            top: 20px;
            left: 20px;
            background-color: #f0a500;
            border: none;
            color: #fff;
            padding: 1rem 2rem;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
        }
        .home-link:hover {
            background-color: #d48f00;
        }
    </style>
</head>
<body>
    <a href="index.php" class="home-link">Go to Homepage</a>
    <div class="login-form">
        <h2>Log In</h2>
        <form id="loginForm" method="POST" action="login.php">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <div class="password-field">
                <input type="password" id="password" name="password" required>
                <button type="button" onclick="togglePasswordVisibility()">👁️</button>
            </div>
            
            <button type="submit">Log In</button>
        </form>
        <?php if (isset($error)): ?>
            <p class="error"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>
    </div>

    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("password");
            var passwordButton = passwordField.nextElementSibling;
            if (passwordField.type === "password") {
                passwordField.type = "text";
                passwordButton.innerText = "🙈";
            } else {
                passwordField.type = "password";
                passwordButton.innerText = "👁️";
            }
        }
    </script>
</body>
</html>
