<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Películas Registradas</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <a href="tabla.php" class="btn btn-primary">Regresar</a><br><br>
</head>
<?php
// Verificar si se recibió el ID del registro por GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Conectarte a la base de datos y ejecutar la consulta para eliminar el registro
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "catalogo";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consulta SQL para eliminar el registro con el ID proporcionado
    $sql = "DELETE FROM catalogo WHERE ID = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro eliminado correctamente.";
    } else {
        echo "Error al eliminar el registro: " . $conn->error;
    }

    $conn->close();
} else {
    echo "ID de registro no especificado.";
}
?>