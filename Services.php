<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services | Platina Gym</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your external stylesheet -->
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            background: linear-gradient(to bottom, #2c3e50, #3498db);
            animation: gradientAnimation 15s ease infinite;
            background-size: 400% 400%;
            min-height: 100vh; /* Ensure the body covers the entire viewport height */
            display: flex;
            flex-direction: column;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
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

        .services {
            padding: 2rem;
            background: url('Images/bc_service.jpg') no-repeat center center;
            background-size: cover;
            position: relative;
            overflow: hidden;
            flex: 1; /* Allow the services section to grow and fill the available space */
        }

        .services::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4); /* Semi-transparent overlay */
            z-index: 1;
        }

        .services-content {
            position: relative;
            z-index: 2;
            color: #fff; /* Text color to contrast the background */
        }

        .services h1 {
            font-size: 2rem;
            color: #f0a500;
            margin-bottom: 1rem;
            text-align: center;
        }

        .services-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem; /* Space between items */
            justify-content: space-between; /* Distribute space between items */
        }

        .service-section {
            background: rgba(0, 0, 0, 0.7); /* Dark background for better contrast */
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            flex: 1;
            min-width: 300px; /* Minimum width of each section */
            max-width: 100%; /* Prevent from exceeding container width */
        }

        .service-section h2 {
            margin-top: 0;
            color: #f0a500; /* Heading color */
        }

        .service-section p {
            margin: 0.5rem 0;
            color: #ddd; /* Lighter text color for readability */
        }

        .service-section img {
            width: 100%;
            height: auto; /* Maintain aspect ratio */
            border-radius: 8px;
            margin-bottom: 1rem;
            object-fit: cover; /* Cover the container without distorting */
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

            .services-container {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="services">
        <div class="services-content">
            <h1>Our Services</h1>

            <div class="services-container">
                <div class="service-section">
                    <img src="Images/personal_train.jpg" alt="Personal Training">
                    <h2>Personal Training</h2>
                    <p>Our certified personal trainers offer one-on-one sessions to help you reach your fitness goals. Whether you're aiming for weight loss, muscle gain, or overall fitness improvement, our trainers provide customized workout plans and guidance.</p>
                </div>

                <div class="service-section">
                    <img src="Images/group.jpg" alt="Group Classes">
                    <h2>Group Classes</h2>
                    <p>Join our exciting group classes for a fun and motivating workout experience. We offer a variety of classes including Yoga, HIIT, Pilates, and more. Classes are designed for all fitness levels, so you'll find something that suits you.</p>
                </div>

                <div class="service-section">
                    <img src="Images/nutrition.jpg" alt="Nutrition Counseling">
                    <h2>Nutrition Counseling</h2>
                    <p>Our nutrition experts provide personalized dietary advice to complement your fitness routine. Get help with meal planning, understanding nutritional needs, and making healthier food choices to support your fitness journey.</p>
                </div>

                <div class="service-section">
                    <img src="Images/test.jpg" alt="Fitness Testing">
                    <h2>Fitness Testing</h2>
                    <p>Track your progress with our comprehensive fitness testing services. We assess your current fitness level, monitor improvements, and adjust your workout plan based on the results. Regular testing helps in setting realistic goals and achieving them efficiently.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
