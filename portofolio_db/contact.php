<?php include 'config/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-4">
        <h1>Contact</h1>
        <?php
        $sql = "SELECT email, phone, message, instagram, twitter, linkedin, github FROM contact";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='card'>";
                echo "<div class='card-body'>";
                echo "<p>Email: " . $row['email'] . "</p>";
                echo "<p>Phone: " . $row['phone'] . "</p>";
                echo "<p>Message: " . $row['message'] . "</p>";

                // Menampilkan link media sosial
                if (!empty($row['instagram'])) {
                    echo "<p>Instagram: <a href='" . $row['instagram'] . "' target='_blank'>" . $row['instagram'] . "</a></p>";
                }
                if (!empty($row['twitter'])) {
                    echo "<p>Twitter: <a href='" . $row['twitter'] . "' target='_blank'>" . $row['twitter'] . "</a></p>";
                }
                if (!empty($row['linkedin'])) {
                    echo "<p>LinkedIn: <a href='" . $row['linkedin'] . "' target='_blank'>" . $row['linkedin'] . "</a></p>";
                }
                if (!empty($row['github'])) {
                    echo "<p>GitHub: <a href='" . $row['github'] . "' target='_blank'>" . $row['github'] . "</a></p>";
                }

                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "No contact information found.";
        }
        ?>
    </div>
</body>
</html>
