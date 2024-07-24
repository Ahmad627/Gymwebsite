<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platina Gym</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">Platina Gym</div>
        <ul class="nav-links">
            <li><a href="index.php" class="nav-link">Home</a></li>
            <li><a href="services.php" class="nav-link">Services</a></li>
            <li><a href="contact.php" class="nav-link">Contact</a></li>
            <?php if (isset($_SESSION['user_name'])): ?>
                <li><a href="dashboard.php" class="nav-link">Dashboard</a></li>
                <li>
                    <form action="logout.php" method="POST" style="display: inline;">
                        <button type="submit" class="nav-button">Logout</button>
                    </form>
                </li>
            <?php else: ?>
                <li>
                    <form action="login.php" method="GET" style="display: inline;">
                        <button type="submit" class="nav-button">Login</button>
                    </form>
                </li>
                <li>
                    <form action="signup.php" method="GET" style="display: inline;">
                        <button type="submit" class="nav-button">Sign Up</button>
                    </form>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</body>
</html>
