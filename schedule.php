<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Schedule - Afro Stars Vienna</title>
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
          background: black;
          padding: 25px;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .hero-section {
            background: url('https://cdn.pixabay.com/photo/2016/05/20/21/57/football-1406106_1280.jpg') no-repeat center center;
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
        .schedule-item {
            margin-bottom: 30px;
        }
        .schedule-item .card {
            border: none;
            text-align: center;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .schedule-item .card-body {
            padding: 20px;
            background-color: black;
            color: white;
        }
        .schedule-item h5 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .schedule-item p {
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
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="team.php">Team</a>
                </li>
                <li class="nav-item active">
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
            <h1>Upcoming Matches</h1>
        </div>
    </div>

    <!-- Schedule Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="schedule-item">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Match vs. Rivals FC</h5>
                            <p class="card-text">Date: January 15, 2025</p>
                            <p class="card-text">Time: 18:00</p>
                            <p class="card-text">Location: Stadium Name</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="schedule-item">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Friendly Match vs. City FC</h5>
                            <p class="card-text">Date: January 22, 2025</p>
                            <p class="card-text">Time: 19:30</p>
                            <p class="card-text">Location: City Stadium</p>
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
