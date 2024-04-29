<?php
// Verificar si se recibió el ID del registro por GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Aquí puedes mostrar un formulario con los campos para editar la información
    // de acuerdo al registro con el ID proporcionado
    // Puedes prellenar los campos con los datos actuales del registro
    // y permitir al usuario enviar el formulario para actualizar la información en la base de datos
    // Ejemplo:
    // Conectarte a la base de datos y obtener los datos del registro
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "catalogo";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM catalogo WHERE ID = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Aquí puedes mostrar un formulario con los campos para editar
        // y enviar los datos a un script de procesamiento para actualizar la base de datos
        echo "<h3>Editar Información</h3>";
        echo "<form method='post' action='actualizar.php'>";
        echo "<input type='hidden' name='id' value='" . $row["ID"] . "'>";
        echo "Título: <input type='text' name='titulo' value='" . $row["tittle"] . "'><br>";
        echo "Sinopsis: <textarea name='sinopsis'>" . $row["synopsis"] . "</textarea><br>";
        echo "Año: <input type='number' name='anio' value='" . $row["year"] . "'><br>";
        echo "<button type='submit' class='btn btn-primary'>Guardar Cambios</button>";
        echo "</form>";
    } else {
        echo "Registro no encontrado.";
    }

    $conn->close();
} else {
    echo "ID de registro no especificado.";
}
?>