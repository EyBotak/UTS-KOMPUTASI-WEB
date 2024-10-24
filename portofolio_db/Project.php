<?php include 'config/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Portofolio - Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-4">
        <h1>Portofolio</h1>
        <div class="row">
        <?php
        $sql = "SELECT project_name, project_description FROM portofolio";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='col-md-4 mb-4'>";
                echo "<div class='card'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . $row['project_name'] . "</h5>";
                echo "<p class='card-text'>" . $row['project_description'] . "</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "No projects found.";
        }
        ?>
        </div>
    </div>
</body>
</html>
