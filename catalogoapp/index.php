<!DOCTYPE html>
<html lang="es">
<head>
    <title>Catálogo de Películas - Descripción</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">CINEPOLITO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="catalogo.php">Catálogo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tabla.php">Registros</a>
                </li>
              
            </ul>
        </div>
    </nav>

   <br>
   <div class="container mt-4">
    <center>
        <h2>Bienvenido a CINEPOLITO</h2>
        <p>Este es un catálogo de películas donde puedes explorar y descubrir nuevas películas emocionantes. ¡Disfruta de tu experiencia! :D</p>
        <p>//Jeanette Dotor//</p>
        </center>
    </div>
         
    <!-- Carruseles de Imágenes -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-4">
                <div id="carouselLeft" class="carousel slide" data-ride="carousel">
                    <!-- Contenido del carrusel izquierdo -->
                    <img src="https://cl2.buscafs.com/www.tomatazos.com/public/uploads/images/170592/170592.jpg" class="d-block w-100" alt="...">
                    
                </div>
            </div>
            
            <div class="col-lg-4">
                <div id="carouselCenter" class="carousel slide" data-ride="carousel">
                    <!-- Contenido del carrusel central -->
                   
                    <img src="https://i.pinimg.com/236x/15/e1/8e/15e18e1aa97f2195e5e715268cce6dfe.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            
            <div class="col-lg-4">
                <div id="carouselRight" class="carousel slide" data-ride="carousel">
                    <!-- Contenido del carrusel derecho -->
                    <img src="https://www.mubis.es/media/users/2514/306037/te-gustan-las-peliculas-de-terror-poster-de-scream-la-original-l_cover.jpg" class="d-block w-100" alt="...">
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Contenido Principal -->
   

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>