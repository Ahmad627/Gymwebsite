<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Platina Gym</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your external stylesheet -->
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('Images/bc_contact.jpg') no-repeat center center;
            background-size: cover;
            color: #333;
            min-height: 100vh; /* Ensure the body covers the entire viewport height */
            display: flex;
            flex-direction: column;
            overflow-x: hidden; /* Prevent horizontal scroll */
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #333;
            padding: 1rem;
            color: #fff;
            z-index: 2; /* Ensure the navbar stays on top */
        }

        .navbar .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .navbar .nav-links {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .navbar .nav-links li {
            margin-left: 1.5rem;
        }

        .navbar .nav-links a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            padding: 0.5rem 1rem;
            transition: color 0.3s;
        }

        .navbar .nav-links a:hover {
            color: #f0a500;
        }

        .navbar .nav-links button {
            color: #fff;
            font-size: 1rem;
            background-color: #f0a500;
            border: none;
            border-radius: 5px;
            padding: 0.5rem 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .navbar .nav-links button:hover {
            background-color: #d48f00;
        }

        .contact {
            padding: 2rem;
            position: relative;
            z-index: 2; /* Ensure content is on top */
            background: rgba(0, 0, 0, 0.7); /* Darker semi-transparent background for readability */
            border-radius: 8px;
            max-width: 800px;
            margin: 2rem auto; /* Center the contact section */
            color: #fff; /* Ensure text color stands out */
        }

        .contact h1 {
            font-size: 2rem;
            color: #f0a500;
            margin-bottom: 1rem;
            text-align: center;
        }

        .contact p {
            color: #ddd;
            margin-bottom: 1rem;
        }

        .contact form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .contact form input,
        .contact form textarea {
            padding: 0.75rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
        }

        .contact form input[type="text"],
        .contact form input[type="email"] {
            background: #fff;
            color: #333;
        }

        .contact form textarea {
            background: #fff;
            color: #333;
            resize: vertical;
        }

        .contact form button {
            padding: 0.75rem;
            border: none;
            border-radius: 5px;
            background-color: #f0a500;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .contact form button:hover {
            background-color: #d48f00;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }
            .navbar .nav-links {
                flex-direction: column;
                width: 100%;
            }
            .navbar .nav-links li {
                margin: 0.5rem 0;
                width: 100%;
            }
            .navbar .nav-links a,
            .navbar .nav-links button {
                width: 100%;
                text-align: left;
            }
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="contact">
        <h1>Contact Us</h1>
        <p>If you have any questions or need assistance, feel free to reach out to us using the contact form below. We’re here to help!</p>
        
        <form action="send_contact.php" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</body>
</html>
