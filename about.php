<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us - Afro Stars Vienna</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
          background: #272c33;
          padding: 25px;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .hero-section {
            background: url('https://cdn.pixabay.com/photo/2016/11/29/07/06/bleachers-1867992_1280.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-shadow: 2px 2px 4px #000000;
        }
        .hero-section h1 {
            font-size: 3rem;
        }
        .content-section {
            padding: 60px 0;
        }
        .card-container {
            transition: transform 0.3s;
        }
        .card-container:hover {
            transform: scale(1.05);
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            background: #272c33;
            color: white;
        }
        .team-section {
            background-color: #272c33;
            padding: 60px 0;
            color: white;
        }
        .team-section h2 {
            font-size: 2.5rem;
            margin-bottom: 40px;
        }
        .team-member {
            text-align: center;
            margin-bottom: 30px;
        }
        .team-member img {
            border-radius: 50%;
            margin-bottom: 20px;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
        .team-member h4 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .team-member p {
            font-size: 1rem;
            color: white;
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
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
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
            <h1>About Afro Stars Vienna</h1>
        </div>
    </div>

    <!-- History, Mission, Vision Section -->
    <div class="container content-section">
        <div class="row">
            <div class="col-md-4">
                <div class="card-container">
                    <div class="card">
                        <h2>History</h2>
                        <p>Founded in 2010, our club has a rich history rooted in unity, enjoyment, and fitness. Our goal is to bring together the community through the joy of sports, fostering unity while promoting active and healthy lifestyles. Join us in our journey to strengthen bonds and stay fit together!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-container">
                    <div class="card">
                        <h2>Mission</h2>
                        <p>Our mission is to unite the Afro community in Austria through football and our regular Saturday gatherings, which include food and drinks. These events are opportunities for families to come together, allowing children to bond and play together.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-container">
                    <div class="card">
                        <h2>Vision</h2>
                        <p>Our vision is to unite our children in Vienna with their roots and culture, fostering a deep connection to their heritage. Through engaging activities and community involvement, we aim to nurture a strong sense of identity and belonging among our youth.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="container team-section">
        <h2 class="text-center">Our Team</h2>
        <div class="row">
            <div class="col-md-4 team-member">
                <img src="images/team-member1.jpg" alt="Team Member 1">
                <h4>Denka</h4>
                <p>Head Coach</p>
            </div>
            <div class="col-md-4 team-member">
                <img src="images/team-member2.jpg" alt="Team Member 2">
                <h4>Ibori</h4>
                <p>Assistant Coach</p>
            </div>
            <div class="col-md-4 team-member">
                <img src="images/team-member3.jpg" alt="Team Member 3">
                <h4>Shola</h4>
                <p>Team Captain</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
