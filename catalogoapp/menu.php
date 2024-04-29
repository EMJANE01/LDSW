<!DOCTYPE html>
<html lang="es">
<head>
    <title>Catálogo de Películas - Descripción</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
            background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnfkO4dofjAgGv9T9vx5NM59MSW5PW2VF2Xo73zLERhexsTjw2fSZITx0FazOj0C-oAMM&usqp=CAU);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .carrusel {
            position: relative;
            width: 100%; /* Ancho completo de la columna */
            margin-bottom: 20px; /* Espacio entre carruseles */
        }

        .carrusel img {
            width: 100%;
            height: auto;
        }

        .carrusel-caption {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <!-- Contenedor de Filas -->
    <div class="container">
        <div class="row">
            <!-- Carrusel 1 -->
            <div class="col-lg-4">
                <div id="carouselExampleIndicators1" class="carousel slide carrusel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://cl2.buscafs.com/www.tomatazos.com/public/uploads/images/170617/170617.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
            <!-- Carrusel 2 (más grande) -->
            <div class="col-lg-4">
                <div id="carouselExampleIndicators2" class="carousel slide carrusel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/movie-poster-template-ebfefbf4ede371be0f6f9148ccd4d393_screen.jpg?ts=1698538444" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
            <!-- Carrusel 3 -->
            <div class="col-lg-4">
                <div id="carouselExampleIndicators3" class="carousel slide carrusel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://i.pinimg.com/236x/3c/37/ed/3c37ed0f3649c627263073d09225d3ee.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenido Principal -->
    <center>
    <div class="container mt-4">
        <h2>Bienvenido al Catálogo de Películas</h2>
        <p>Este es un catálogo de películas donde puedes explorar y descubrir nuevas películas emocionantes. ¡Disfruta de tu experiencia!</p>
        <a href="tabla.php" class="btn btn-primary">Ir al Catálogo</a>
    </div>
    </center>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>