<?php include 'config/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Home - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('images/abu abu.png');
            background-size: cover;
            color: white;
        }
        .jumbotron {
            background: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            padding: 2rem;
            margin-bottom: 2rem;
        }
        .card {
            background: rgba(0, 0, 0, 0.5);
            border: none;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .feature-icon {
            font-size: 3rem;
            color: #007bff;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-4">
        <div class="jumbotron text-center">
            <h1 class="display-4">Welcome to My Portofolio!</h1>
            <p class="lead">Showcasing my work and projects</p>
            <hr class="my-4">
            <p>Explore the links above to learn more about me.</p>
        </div>

        <div class="row text-center mb-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <i class="feature-icon fas fa-laptop-code"></i>
                        <h5 class="card-title">Web Development</h5>
                        <p class="card-text">Creating responsive and user-friendly websites.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <i class="feature-icon fas fa-mobile-alt"></i>
                        <h5 class="card-title">Mobile Apps</h5>
                        <p class="card-text">Building apps for both iOS and Android platforms.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <i class="feature-icon fas fa-paint-brush"></i>
                        <h5 class="card-title">Design</h5>
                        <p class="card-text">Crafting beautiful and functional designs.</p>
                    </div>
                </div>
            </div>
        </div>
        <h2>Latest Projects</h2>
        <div class="row">
        <?php
        $sql = "SELECT content FROM home"; // Ganti dengan query yang sesuai
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='col-md-4 mb-4'>";
                echo "<div class='card'>";
                echo "<img src='images/twibbon.png' class='card-img-top' alt='Project Image'>"; // Ganti dengan gambar proyek Anda
                echo "<div class='card-body'>";
                echo "<p class='card-text'>" . $row['content'] . "</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "No content found.";
        }
        ?>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!-- Menambahkan Font Awesome -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
