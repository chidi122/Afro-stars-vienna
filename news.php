<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News - Afro Stars Vienna</title>
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
          padding: 25px;
        }
        .navbar-brand {
            font-weight: bold;
            
        }
        .hero-section {
            background: url('https://cdn.pixabay.com/photo/2015/10/05/18/10/newspaper-973049_1280.jpg') no-repeat center center;
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
        .news-item {
            margin-bottom: 30px;
        }
        .news-item .card {
            border: none;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            
        }
        .news-item .card-body {
            padding: 20px;
            background: #272c33;
            color: white;
        }
        .news-item h5 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            
            
        }
        .news-item p {
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
                <li class="nav-item">
                    <a class="nav-link" href="schedule.php">Schedule</a>
                </li>
                <li class="nav-item active">
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
            <h1>Latest News</h1>
        </div>
    </div>

    <!-- News Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="news-item">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">New Signing: chigo Joins Afro Stars Vienna</h5>
                            <p class="card-text">In an exciting development in the world of soccer, rising star Chigo has signed a lucrative $1 million contract with Afro Stars Vienna. This monumental deal marks a significant milestone in Chigo's burgeoning career and is a testament to his exceptional talent and dedication to the sport..</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="news-item">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Upcoming Event: Charity Match</h5>
                            <p class="card-text">Excitement is building as the local community eagerly anticipates the upcoming Charity Match, set to take place this Saturday.This special event promises not only thrilling soccer action but also an opportunity to come together for a worthy cause, supporting various local charities and community initiatives.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
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
