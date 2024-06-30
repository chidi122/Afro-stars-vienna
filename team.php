<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Team - Afro Stars Vienna</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #272c33;
        }
        .navbar {
          background: #272c33;
          padding: 25px;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .hero-section {
            background: url('https://cdn.pixabay.com/photo/2015/09/09/17/18/stadium-931975_1280.jpg') no-repeat center center;
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
        .team-member {
            margin-bottom: 30px;
        }
        .team-member img {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            object-fit: cover;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .team-member .card {
            border: none;
            text-align: center;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .team-member .card-body {
            padding: 20px;
        }
        .team-member h5 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .team-member p {
            font-size: 1rem;
            color: #555;
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
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item active">
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
            <h1>Meet Our Team</h1>
        </div>
    </div>

    <!-- Team Members Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="team-member">
                    <div class="card">
                        <img src="images/team-member1.jpg" class="card-img-top" alt="Team Member 1">
                        <div class="card-body">
                            <h5 class="card-title">Denka</h5>
                            <p class="card-text">Head Coach</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <div class="card">
                        <img src="images/team-member2.jpg" class="card-img-top" alt="Team Member 2">
                        <div class="card-body">
                            <h5 class="card-title">Ibori</h5>
                            <p class="card-text">Assistant Coach</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <div class="card">
                        <img src="images/team-member3.jpg" class="card-img-top" alt="Team Member 3">
                        <div class="card-body">
                            <h5 class="card-title">Shola</h5>
                            <p class="card-text">Team Captain</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
