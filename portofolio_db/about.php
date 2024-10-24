<?php include 'config/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>About - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-4">
        <h1>About</h1>
        <?php
        $sql = "SELECT title, description FROM about";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='card'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . $row['title'] . "</h5>";
                echo "<p class='card-text'>" . $row['description'] . "</p>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "No about info found.";
        }
        ?>
    </div>
</body>
</html>
