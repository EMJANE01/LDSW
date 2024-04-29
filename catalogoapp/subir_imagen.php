<!DOCTYPE html>
<html>
<head>
    <title>Subir Imagen - Catálogo</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>
<body>
    <h2 class="mt-4 mb-3">Subir Imagen</h2>

    <div class="container">
        <?php
        // Verificar si se recibió el ID del registro por GET
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Procesar la subida de la imagen (ejemplo básico)
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['imagen'])) {
                $nombreArchivo = $_FILES['imagen']['name'];
                $rutaTemporal = $_FILES['imagen']['tmp_name'];

                // Ruta donde se guardará la imagen (cambia según tu estructura de carpetas)
                $rutaDestino = 'carpeta_destino/' . $nombreArchivo;

                // Mueve el archivo subido a una ubicación permanente en tu servidor
                if (move_uploaded_file($rutaTemporal, $rutaDestino)) {
                    // Conectarte a la base de datos y actualizar la columna 'cover' del registro
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "catalogo";

                    $conn = new mysqli($servername, $username, $password, $database);

                    if ($conn->connect_error) {
                        die("Conexión fallida: " . $conn->connect_error);
                    }

                    // Actualizar la columna 'cover' con la nueva ruta de la imagen
                    $sql = "UPDATE catalogo SET cover = '$rutaDestino' WHERE ID = $id";

                    if ($conn->query($sql) === TRUE) {
                        echo '<div class="alert alert-success" role="alert">Imagen subida exitosamente.</div>';
                    } else {
                        echo '<div class="alert alert-danger" role="alert">Error al subir la imagen: ' . $conn->error . '</div>';
                    }

                    $conn->close();
                } else {
                    echo '<div class="alert alert-danger" role="alert">Error al mover el archivo subido.</div>';
                }
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">ID de registro no especificado.</div>';
        }
        ?>

        <!-- Formulario para subir la imagen -->
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="imagen">Seleccionar Imagen:</label>
                <input type="file" class="form-control-file" name="imagen" id="imagen" required>
            </div>
            <button type="submit" class="btn btn-primary">Subir Imagen</button>
        </form>

        <!-- Botón de Regresar a tabla.php -->
        <a href="tabla.php" class="btn btn-secondary mt-3">Regresar a la Tabla</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>