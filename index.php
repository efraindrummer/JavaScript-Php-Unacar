<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/united/bootstrap.min.css">
    <title>Games</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="assets/icons/icon-principal.png" width="30" height="30" alt="" loading="lazy"> VideoGames
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Juegos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="clientes/cliente.html">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Listado de juegos por categoria</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <main role="main">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/dantesf.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/fifa.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/halo5.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/legues.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <section class="jumbotron text-center">
            <div class="container">
                <h1>Game Store</h1>
                <p class="lead text-muted">
                    Bienvenido a la tienda online, donde podras tener la oportunidad de comprar lo videojuego de ultima generacion y los mas famosos del mercado.
                </p>
                <p>
                    <a href="./game.html" class="btn btn-primary my-2">Ver Listado de Juegos</a>
                    <a href="#" class="btn btn-danger my-2">Comprar</a>
                </p>
            </div>
        </section>

        <div class="album py-5 bg-info">
            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="assets/img/dantesf.jpeg" focusable="false" role="img" aria-label="Placeholder: FIFA 20">
                            <title>DANTES INFERNO</title>
                            <div class="card-body">
                                <p class="card-text">Dante's Inferno (en español El Infierno de Dante) es un videojuego de acción perteneciente al género secundario hack and slash desarrollado por Visceral Games y publicado por Electronic Arts para PlayStation 3, Xbox 360
                                    (en la cual fue censurado por un año) y PlayStation Portable.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-link">Ver</button>
                                    </div>
                                    <small class="text-muted">2010</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="assets/img/theking.jpg" focusable="false" role="img" aria-label="Placeholder: FIFA 20">
                            <title>Placeholder</title>
                            <div class="card-body">
                                <p class="card-text">The King of Fighters (ザ・キング・オブ・ファイターズ Za Kingu Obu Faitāzu?), abreviada KOF, y traducida como El rey de los luchadores, es una saga de videojuegos de lucha inicialmente para el sistema Neo Geo desarrollada por la compañía
                                    SNK. El primer juego de la serie, The King Of Fighters, fue The King Of Fighters '94.
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-link">Ver</button>
                                    </div>
                                    <small class="text-muted">1994</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="assets/img/halo5.png" focusable="false" role="img" aria-label="Placeholder: FIFA 20">
                            <title>Placeholder</title>
                            <div class="card-body">
                                <p class="card-text">Halo 5 Guardians es un videojuego de disparos en primera persona de la popular saga de videojuegos Halo exclusivo para la consola Xbox One, el cual salió el 27 de octubre de 2015 desarrollado por 343 Industries y publicado
                                    por Microsoft Studios. El juego sigue la línea argumental de Halo 4.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-link">Ver</button>
                                    </div>
                                    <small class="text-muted">2015</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="assets/img/mariokart.jpg" focusable="false" role="img" aria-label="Placeholder: FIFA 20">
                            <title>Placeholder</title>
                            <div class="card-body">
                                <p class="card-text">Mario Kart 64 (マリオカート６４ Mario Kāto Rokuyon?) es un videojuego de carreras desarrollado y distribuido por Nintendo para la consola Nintendo 64. Es el sucesor de Super Mario Kart, de la consola SNES y la segunda entrega de
                                    la serie Mario Kart. Como su predecesor, es un juego de conducción de karts protagonizado por personajes famosos de Nintendo del Universo Mario, en el cual se tiene que vencer las copas en las distintas cilindradas.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-link">Ver</button>
                                    </div>
                                    <small class="text-muted">2007</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="assets/img/gta.jpg" focusable="false" role="img" aria-label="Placeholder: FIFA 20">
                            <title>Placeholder</title>
                            <div class="card-body">
                                <p class="card-text">Grand Theft Auto V es un videojuego de acción-aventura de mundo abierto desarrollado por el estudio Rockstar North y distribuido por Rockstar Games. Fue lanzado el 17 de septiembre de 2013 para las consolas PlayStation
                                    3 y Xbox 360.​ Grand Theft Auto Online llega a la aventura de acción de Rockstar North y Rockstar Games, Grand Theft Auto V, como un modo multijugador con infinidad de posibilidades para hasta 30 jugadores; disponible
                                    mediante actualización para PlayStation 3, PlayStation 4, Xbox 360, Xbox One, PC, PlayStation 5 y Xbox Series X.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-link">Ver</button>
                                    </div>
                                    <small class="text-muted">2013</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="assets/img/Gears-of-war-4.jpg" focusable="false" role="img" aria-label="Placeholder: FIFA 20">
                            <title>Placeholder</title>
                            <div class="card-body">
                                <p class="card-text">Gears of War 4 o Gears 4 es un videojuego de acción y shooter en tercera persona desarrollado por The Coalition y distribuido por Microsoft lanzado el 11 de octubre de 2016 para Xbox One y Windows 10. Es el primer videojuego
                                    de la saga del que es propietario Microsoft y el primero para su consola de octava generación.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-link">Ver</button>
                                    </div>
                                    <small class="text-muted">2016</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="text-muted bg-dark">
        <div class="container text-center">
            <p>Desarrollo de Aplicaciones con Javascript - Mtro: Jesus Alejandro Flores</p>
            <p>Efrain May Mayo - 170869 - ing. en computacion <a href="https://efraindrummer-page-pwa.web.app/" target="_blank">Visita Mi Pagina</a></p>
            <p>Alex Xander Del Carmen Velueta Magaña - 161148 - ing. en sistemas computacionales</p>
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>