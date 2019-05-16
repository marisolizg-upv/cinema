<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="shortcut icon" href="img/icono.jpg" />
    <title>Cinema Premiere</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/estilo.css" rel="stylesheet">
  </head>

  <body>


    <?php
      include 'navbar.html';
      include 'sidebar.html';
      include 'numboletos.php';
     ?>

        <!--Contenido de la pagina-->
        <div id="page-content-wrapper">
                <h1 align="center">Cartelera</h1>
                <p> </p>
                <div class="container">
                  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" id="carrusel">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="img/b1.jpg">
                      </div>
                      <div class="carousel-item" >
                        <img class="d-block w-100" src="img/b2.jpg" >
                      </div>
                      <div class="carousel-item" >
                        <img class="d-block w-100" src="img/b3.jpg" >
                      </div>
                      <div class="carousel-item" >
                        <img class="d-block w-100" src="img/b4.jpg" >
                      </div>
                      <div class="carousel-item" >
                        <img class="d-block w-100" src="img/b5.jpg" >
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
                <p> </p>
                <p> </p>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-4">Avengers: Endgame</h1>
                <p class="lead" ><img src="img/p1.jpg" width="100" height="auto" style="padding-right:10px;" align="left" id="peli">
                  La culminación de 22 películas interconectadas.
                  La cuarta entrega de la saga Avengers atraerá al público para
                  presenciar el momento crucial de este viaje épico. Nuestros
                  queridos héroes comprenderán realmente cuán frágil es esta
                  realidad y los sacrificios que se deben hacer para mantenerla. </p>
                  <a class="btn btn-primary" href="horarios.php" role="button" align="right">Horarios</a>
                  <hr class="my-4">
              </div>
              <p> </p>
              <div class="container">
                <h1 class="display-4">Pokémon: Detective Pikachu</h1>
                <p class="lead" ><img src="img/p2.jpg" width="100" height="auto" style="padding-right:10px;" align="left" id="peli">
                  Tim y Pikachu recopilarán pistas juntos a
                  través de las calles de Ryme City, una moderna metrópolis
                  donde humanos y Pokemons viven en paz y armonía, y descubrirán
                  un asombroso complot que podría destruir esta convivencia
                  pacífica y amenazar de esta manera el universo Pokemon. </p>
                  <a class="btn btn-primary" href="horarios.php" role="button" align="right">Horarios</a>
                  <hr class="my-4">
              </div>
              <p> </p>
              <div class="container">
                <h1 class="display-4">Nosotros</h1>
                <p class="lead" ><img src="img/p3.jpg" width="100" height="auto" style="padding-right:10px;" align="left" id="peli">
                  Adelaide y su esposo viajan a la casa en la que ella creció
                  junto a la playa. Tiene un presentimiento siniestro que precede
                  a un encuentro espeluznante: cuatro enmascarados se presentan
                  ante su casa. Lo aterrador viene cuando muestran sus rostros. </p>
                  <a class="btn btn-primary" href="horarios.php" role="button" align="right">Horarios</a>
                  <hr class="my-4">
              </div>
              <p> </p>
              <div class="container">
                <h1 class="display-4">John Wick 3</h1>
                <p class="lead" ><img src="img/p4.jpg" width="100" height="auto" style="padding-right:10px;" align="left" id="peli">
                  John Wick (Keanu Reeves) está huyendo por dos razones: lo
                  persiguen por una recompensa global de 14 millones de dólares
                  por su cabeza y por romper una regla central, la de asesinar
                  a alguien en los dominios del Hotel Continental. La víctima
                  era un miembro de la Mesa Suprema que ordenó el asesinato del protagonista.</p>
                  <a class="btn btn-primary" href="horarios.php" role="button" align="right">Horarios</a>
                  <hr class="my-4">
              </div>
              <p> </p>
              <div class="container">
                <h1 class="display-4">Brightburn</h1>
                <p class="lead" ><img src="img/p5.jpg" width="100" height="auto" style="padding-right:10px;" align="left" id="peli">
                  ¿Qué pasa si un niño de otro mundo aterrizó en la Tierra,
                  pero en lugar de convirtiéndose en un héroe para la humanidad,
                  demostró ser algo mucho más siniestro? </p>
                  <a class="btn btn-primary" href="horarios.php" role="button" align="right">Horarios</a>
                  <hr class="my-4">
              </div>
            </div>
        </div>
        <!--Termina contenido de la pagina-->

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script-->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>



  </body>


</html>
