<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_name'])) {
    header('Location: login.php');
    exit();
}

// Assuming user information is stored in session after login
$user_name = $_SESSION['user_name'];
$user_email = $_SESSION['user_email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard | Platina Gym</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('Images/wall.jpg') no-repeat center center fixed; /* Set background image */
            background-size: cover; /* Ensure image covers the whole page */
            color: #333;
            position: relative;
        }

        /* Darken the background */
        .background-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Darker overlay */
            z-index: -1; /* Place behind other content */
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #333;
            padding: 1rem;
            color: #fff;
            z-index: 1; /* Ensure navbar stays on top */
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

        .dashboard {
            padding: 2rem;
            background: rgba(0, 0, 0, 0.8); /* Darker background */
            color: #fff; /* Ensure text is readable */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            position: relative;
            z-index: 1; /* Ensure content stays on top */
            overflow: auto; /* Ensure content is visible and scrollable if needed */
        }

        .welcome-message {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #fff; /* Ensure text is readable */
        }

        .dashboard-section {
            margin-bottom: 2rem;
        }

        .dashboard-section h3 {
            margin-bottom: 1rem;
            color: #f0a500;
        }

        .dashboard-section .content {
            background: #222; /* Slightly lighter than the section background */
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .upcoming-classes, .workout-plan {
            display: flex;
            justify-content: space-between;
            gap: 1rem;
        }

        .class, .workout-item {
            flex: 1;
            margin: 0 0.5rem; /* Adjust spacing */
            overflow: hidden;
            border-radius: 8px;
            background-color: #444; /* Darker background color for image frames */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); /* Darker shadow for frames */
            position: relative;
        }

        .class img, .workout-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .class p, .workout-item p {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 0.5rem;
            margin: 0;
            font-size: 1rem;
            color: #fff;
            background: rgba(0, 0, 0, 0.7); /* Darker semi-transparent background */
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="background-overlay"></div> <!-- Overlay for darkening -->
    <nav class="navbar">
        <div class="logo">Platina Gym</div>
        <ul class="nav-links">
            <li><a href="index.html">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
            <?php if (isset($_SESSION['user_name'])): ?>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li>
                    <form action="logout.php" method="post" style="display:inline;">
                        <button type="submit">Logout</button>
                    </form>
                </li>
            <?php else: ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Sign Up</a></li>
            <?php endif; ?>
        </ul>
    </nav>
    <div class="dashboard">
        <div class="welcome-message">Welcome back, <?php echo htmlspecialchars($user_name); ?>!</div>

        <div class="dashboard-section">
            <h3>Upcoming Classes</h3>
            <div class="content upcoming-classes">
                <div class="class">
                    <img src="Images/a.jpg" alt="Yoga Class">
                    <p>Pilates - Friday 9am</p>
                </div>
                <div class="class">
                    <img src="Images/b.jpg" alt="HIIT Training">
                    <p>HIIT Training - Wednesday 6pm</p>
                </div>
                <div class="class">
                    <img src="Images/yoga.jpg" alt="Pilates Class">
                    <p>Yoga Class - Monday 7am</p>
                </div>
            </div>
        </div>

        <div class="dashboard-section">
            <h3>Your Workout Plan</h3>
            <div class="content workout-plan">
                <div class="workout-item">
                    <img src="Images/klock.jpg" alt="Klock">
                    <p>Klock - Cardio Plan</p>
                </div>
                <div class="workout-item">
                    <img src="Images/carries_iron.jpg" alt="Carries Iron">
                    <p>Carries Iron - Strength Training</p>
                </div>
                <div class="workout-item">
                    <img src="Images/gm.jpg" alt="GM">
                    <p>GM - General Conditioning</p>
                </div>
            </div>
        </div>

        <div class="dashboard-section">
            <h3>Health and Fitness Tracking</h3>
            <div class="content workout-plan">
                <div class="workout-item">
                    <img src="Images/fruits.jpg" alt="Fruits">
                    <p>Healthy Eating</p>
                </div>
                <div class="workout-item">
                    <img src="Images/person_run.jpg" alt="Person Running">
                    <p>Running Progress</p>
                </div>
                <div class="workout-item">
                    <img src="Images/person_train.jpg" alt="Person Training">
                    <p>Training Sessions</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
