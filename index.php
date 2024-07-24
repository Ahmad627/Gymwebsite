<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platina Gym</title>
    <link rel="icon" type="image/svg+xml" href="Images/gym.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            color: white;
            background-color: black;
        }

        .bc-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1; 
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: linear-gradient(to right, #333, #444);
            padding: 1rem 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar .logo {
            color: #fff;
            font-size: 1.8rem;
            font-weight: bold;
            text-transform: uppercase;
        }

        .navbar .nav-links {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .navbar .nav-links li {
            margin-left: 2rem;
        }

        .navbar .nav-links a {
            color: #fff;
            text-decoration: none;
            font-size: 1.1rem;
            padding: 0.5rem 0;
            transition: color 0.3s, transform 0.3s;
        }

        .navbar .nav-links a:hover {
            color: #f0a500;
            transform: translateY(-2px);
        }

        .navbar .nav-links button {
            color: #fff;
            font-size: 1rem;
            background-color: #f0a500;
            border: none;
            border-radius: 5px;
            padding: 0.5rem 1rem;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .navbar .nav-links button:hover {
            background-color: #d48f00;
            transform: translateY(-2px);
        }

        .hero {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

        .hero h1 {
            font-size: 4rem;
            margin: 0;
            animation: fadeInDown 1s ease-out;
        }

        .hero p {
            font-size: 1.5rem;
            margin: 20px 0;
            animation: fadeInUp 1s ease-out;
        }

        .hero .join-now-button {
            display: inline-block;
            padding: 1rem 2rem;
            margin-top: 1rem;
            font-size: 1.2rem;
            color: black;
            background-color: #f0a500;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .hero .join-now-button:hover {
            background-color: #d48f00;
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .services, .testimonials, .cta {
            padding: 2rem;
            text-align: center;
        }

        .services h2, .testimonials h2, .cta h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #f0a500;
        }

        .services .service, .testimonials .testimonial {
            display: inline-block;
            width: 30%;
            margin: 1rem;
            padding: 1rem;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
        }

        .service-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #f0a500;
        }

        @media (max-width: 768px) {
            .services .service, .testimonials .testimonial {
                width: 90%;
            }
        }

        .cta-button {
            display: inline-block;
            padding: 0.8rem 1.6rem; /* Adjust padding for a smaller button */
            font-size: 1rem; /* Slightly smaller font size */
            color: #fff;
            background: linear-gradient(45deg, #f0a500, #d48f00);
            text-decoration: none;
            border-radius: 25px; /* Adjust border radius for a rounded but smaller button */
            transition: background 0.3s, transform 0.3s;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2); /* Smaller shadow */
            margin: 1.5rem auto; /* Adjust margin for better spacing */
            display: block;
            text-align: center;
        }

        .cta-button:hover {
            background: linear-gradient(45deg, #d48f00, #f0a500);
            transform: translateY(-3px); /* Slightly reduced lift effect */
            box-shadow: 0 6px 9px rgba(0, 0, 0, 0.3); /* Adjust shadow on hover */
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <img class="bc-image" src="Images/bc_gym.jpg" alt="Background Image">

    <div class="hero">
        <div class="content">
            <h1 class="name">Gym</h1>
            <p>Build your Dream Physique</p>
            <h1>Unlock Your Potential Today</h1>
            <a href="signup.php" class="join-now-button">Join Now</a>
        </div>
    </div>

    <section class="services">
        <h2>Our Services</h2>
        <div class="service">
            <i class="fas fa-dumbbell service-icon"></i>
            <h3>Weight Training</h3>
            <p>Build strength with our comprehensive weight training programs.</p>
        </div>
        <div class="service">
            <i class="fas fa-running service-icon"></i>
            <h3>Cardio</h3>
            <p>Boost your endurance with our state-of-the-art cardio equipment.</p>
        </div>
        <div class="service">
            <i class="fas fa-spa service-icon"></i>
            <h3>Wellness</h3>
            <p>Relax and rejuvenate with our wellness and spa services.</p>
        </div>
    </section>

    <section class="testimonials">
        <h2>Testimonials</h2>
        <div class="testimonial">
            <p>"Platina Gym has transformed my life. The trainers are excellent and the environment is motivating."</p>
            <h4>- John Doe</h4>
        </div>
        <div class="testimonial">
            <p>"A fantastic place to work out and meet like-minded fitness enthusiasts."</p>
            <h4>- Jane Smith</h4>
        </div>
    </section>

    <section class="cta">
        <h2>Ready to Get Started?</h2>
        <a href="signup.php" class="cta-button">Join Now</a>
    </section>
</body>
</html>
