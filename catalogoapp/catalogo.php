<!DOCTYPE html>
<html>
<head>
    <title>Galería de Catálogo</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }
        .movie-card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h2 class="mt-4 mb-3">Galería de Catálogo</h2>
    <a href="index.php" class="btn btn-primary">Ir a Página Principal</a><br><br>
    <div class="mb-3">
        <a href="agregar_pelicula.php" class="btn btn-success">Agregar Nueva Película</a>
    </div>

    <div class="row">
        <?php
        // Establecer conexión con la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "catalogo";

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        $sql = "SELECT ID, tittle,  year, cover FROM catalogo";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $title = $row["tittle"];
                $year = $row["year"];
                $cover = $row["cover"];
                $id = $row["ID"];
        ?>
                <div class="col-md-4">
                    <div class="card movie-card">
                        <img src="<?php echo $cover; ?>" class="card-img-top" alt="<?php echo $title; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $title; ?> (<?php echo $year; ?>)</h5>
                            <button class="btn btn-primary btn-sm" onclick="mostrarDetalles(<?php echo $id; ?>)">Vista Detallada</button>
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<p>No se encontraron películas.</p>";
        }

        $conn->close();
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function mostrarDetalles(id) {
            window.location.href = 'tabla.php?id=' + id; // Redirige a tabla.php con el ID
        }
    </script>
</body>
</html>