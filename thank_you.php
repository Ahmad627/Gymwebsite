<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | Platina Gym</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your external stylesheet -->
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('Images/bc_thank_you.jpg') no-repeat center center;
            background-size: cover;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .thank-you {
            background: rgba(0, 0, 0, 0.7);
            padding: 2rem;
            border-radius: 8px;
            color: #fff;
        }

        .thank-you h1 {
            font-size: 2rem;
            color: #f0a500;
        }

        .thank-you p {
            font-size: 1.2rem;
            color: #ddd;
        }

        .thank-you a {
            color: #f0a500;
            text-decoration: none;
            font-size: 1rem;
            margin-top: 1rem;
            display: inline-block;
            padding: 0.5rem 1rem;
            border: 1px solid #f0a500;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .thank-you a:hover {
            background-color: #f0a500;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="thank-you">
        <h1>Thank You!</h1>
        <p>Your message has been sent successfully. We will get back to you soon.</p>
        <a href="index.php">Return to Home</a>
    </div>
</body>
</html>
