<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Afro Stars Vienna - Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            background: #272c33;
            padding: 25px 0;
        }
        .navbar-brand {
            font-weight: bold;
            margin: 0 auto;
            font-size: 1.5em;
        }
        .hero-section {
            background: url('https://cdn.pixabay.com/photo/2024/06/22/21/01/ai-generated-8847000_1280.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-shadow: 2px 2px 4px #000000;
        }
        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero-section p {
            font-size: 1.5rem;
        }
        .features-section {
            background: url('https://cdn.pixabay.com/photo/2018/06/12/20/17/soccer-3471402_1280.jpg') no-repeat center center fixed;
            background-size: cover;
            padding: 60px 0;
            color: white;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 30px rgba(255, 255, 255, 0.5);
            background: #272c33;
            color: white;
            padding: 20px;
        }
        .card-body {
            text-align: center;
        }
        .card-title {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .card-text {
            font-size: 1.1em;
            line-height: 1.5;
        }


        .social-links a {
            display: inline-block;
            color: #fff;
            font-size: 20px;
            margin-right: 15px;
            transition: color 0.3s ease;
        }
        .social-links a:hover {
            color: #007bff;
        }
        .footer {
            background-color: #272c33;
            color: #fff;
            padding: 40px 0;
            text-align: center;
            position: relative;
            width: 100%;
            bottom: 0;
        }
        .footer .social-links {
            margin-bottom: 20px;
        }
        .footer .social-links a {
            font-size: 30px;
            margin: 0 10px;
            color: #fff;
        }
        .footer .social-links a:hover {
            color: #007bff;
        }
        .footer p {
            margin: 0;
        }
        
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="index.php">Afro Stars Vienna</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="team.php">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="schedule.php">Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news.php">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="text-center">
            <h1>Welcome to Afro Stars Vienna</h1>
            <p>Excellence on and off the field</p>
            <a class="btn btn-dark btn-lg" href="about.php" role="button">Learn more about us</a>
        </div>
    </div>

    <!-- Features Section -->
    <div class="features-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Afro Stars Vienna</h3>
                            <p class="card-text">
                                <strong>Achievements:</strong> Discover our victories and milestones over the years.<br><br>
                                <strong>Our Team:</strong> Meet the players and staff who make it all happen.<br><br>
                                <strong>Schedule:</strong> Stay updated on upcoming matches and events.<br><br>
                                <strong>History:</strong> Since 2010, Afro Stars Vienna has been a pillar in the African community, especially among Nigerians. Our Saturday gatherings feature food, drinks, and football, fostering unity and joy. Join us to celebrate our culture and our love for the game.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="social-links">
                <a href="https://www.facebook.com/AfroStarsVienna" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/AfroStarsVienna" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.twitter.com/AfroStarsVienna" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.tiktok.com/@AfroStarsVienna" target="_blank"><i class="fab fa-tiktok"></i></a>
                <a href="https://www.linkedin.com/company/AfroStarsVienna" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.youtube.com/channel/AfroStarsVienna" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
            <p>&copy; 2024 Afro Stars Vienna. All rights reserved.</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
