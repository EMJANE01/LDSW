<?php
// Verificar si se recibió la información del formulario por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se recibió el ID y otros datos necesarios
    if (isset($_POST['id']) && isset($_POST['titulo']) && isset($_POST['sinopsis']) && isset($_POST['anio'])) {
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $sinopsis = $_POST['sinopsis'];
        $anio = $_POST['anio'];

        // Conectarse a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "catalogo";

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Preparar y ejecutar la consulta SQL para actualizar el registro
        $sql = "UPDATE catalogo SET tittle='$titulo', synopsis='$sinopsis', year='$anio' WHERE ID=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Registro actualizado correctamente.";
        } else {
            echo "Error al actualizar el registro: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "Faltan datos necesarios para actualizar el registro.";
    }
} else {
    echo "Acceso denegado.";
}
?>