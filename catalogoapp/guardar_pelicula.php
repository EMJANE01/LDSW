<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Películas Registradas</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <a href="tabla.php" class="btn btn-primary">Ir a Página Principal</a><br><br>
</head>
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

// Recibir datos del formulario
$titulo = $_POST['titulo'];
$sinopsis = $_POST['sinopsis'];
$anio = $_POST['anio'];
$portada = $_POST['portada'];

// Insertar nueva película en la base de datos
$sql = "INSERT INTO catalogo (tittle, synopsis, year, cover) VALUES ('$titulo', '$sinopsis', '$anio', '$portada')";

if ($conn->query($sql) === TRUE) {
    echo "Nueva película añadida correctamente.";
} else {
    echo "Error al añadir la película: " . $conn->error;
}

$conn->close();
?>