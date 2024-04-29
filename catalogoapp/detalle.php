<!DOCTYPE html>
<html>
<head>
    <title>Detalles de Película</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }
        .movie-image {
            height: 400px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <?php include 'menu.php'; ?>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "catalogo";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT ID, title, synopsis, year, cover FROM movies WHERE ID = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo '<div class="card">';
            echo '<img src="' . $row["cover"] . '" class="card-img-top movie-image" alt="' . $row["title"] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row["title"] . ' (' . $row["year"] . ')</h5>';
            echo '<p class="card-text">' . $row["synopsis"] . '</p>';
            echo '<p class="card-text"><small class="text-muted">ID: ' . $row["ID"] . '</small></p>';
            echo '</div>';
            echo '</div>';
        } else {
            echo '<p>No se encontró la película.</p>';
        }
    } else {
        echo '<p>No se especificó una película.</p>';
    }

    $conn->close();
    ?>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>