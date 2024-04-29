<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Catálogo</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>
<body>
    <h2 class="mt-4 mb-3">Tabla de Catálogo</h2>

    <a href="index.php" class="btn btn-primary">Ir a Página Principal</a><br><br>
    <div class="mb-3">
        <a href="agregar_pelicula.php" class="btn btn-success">Agregar Nueva Película</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Sinopsis</th>
                    <th>Año</th>
                    <th>Portada</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

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

                $sql = "SELECT ID, tittle, synopsis, year, cover FROM catalogo";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["ID"] . "</td>";
                        echo "<td>" . $row["tittle"] . "</td>";
                        echo "<td>" . $row["synopsis"] . "</td>";
                        echo "<td>" . $row["year"] . "</td>";
                        echo "<td><img src='" . $row["cover"] . "' width='100'></td>";
                        echo "<td>";
                        echo "<a href='subir_imagen.php?id=" . $row["ID"] . "' class='btn btn-primary btn-sm'>Subir Imagen</a> ";
                        echo "<a href='editar.php?id=" . $row["ID"] . "' class='btn btn-info btn-sm'>Editar</a> ";
                        echo "<a href='eliminar.php?id=" . $row["ID"] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"¿Estás seguro que desea eliminar esta pelicula?\")'>Eliminar</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No se encontraron resultados</td></tr>";
                }

                $conn->close();
                ?>

            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>