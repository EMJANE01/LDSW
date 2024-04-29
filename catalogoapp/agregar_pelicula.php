<!DOCTYPE html>
<html>
<head>
    <title>Agregar Nueva Película</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Agregar Nueva Película</h2>
        <form action="guardar_pelicula.php" method="post">
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="form-group">
                <label for="sinopsis">Sinopsis:</label>
                <textarea class="form-control" id="sinopsis" name="sinopsis" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="anio">Año:</label>
                <input type="number" class="form-control" id="anio" name="anio" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Guardar Película</button>
        </form>
    </div>
</body>
</html>