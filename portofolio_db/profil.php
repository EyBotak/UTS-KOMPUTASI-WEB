<?php include 'config/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Profil - Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-4">
        <h1>Profil</h1>
        <?php
        $sql = "SELECT nama, deskripsi FROM profil";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='card mb-3'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . $row['nama'] . "</h5>";
                echo "<p class='card-text'>" . $row['deskripsi'] . "</p>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "No profile found.";
        }
        ?>
    </div>
</body>
</html>
