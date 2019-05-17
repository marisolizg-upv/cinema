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
                <h1 align="center">Nombre de la película</h1>
                <p> </p>
                <div class="container" style="padding-left:100px;">
                  <br></br>
                  <p class="lead" ><img src="img/p2.jpg" width="250" height="auto" align="left" style="padding-right:20px;"> </p>
                  <div class="row">
                    <div class="card" style="width: 40rem;">
                      <div class="card-body" style="padding-left:10px;">
                       <p class="card-text"><h6>Sinopsis: </h6>Tim y Pikachu recopilarán pistas juntos a través de las calles de Ryme City, una  moderna metrópolis donde humanos y Pokemons viven en paz y armonía, y descubrirán un asombroso complot que podría destruir esta convivencia pacífica y amenazar de esta manera el universo Pokemon.</p>
                      <h6 class="card-subtitle mb-2 text-muted">Duración: </h6><p>104 minutos</p>
                      <h6 class="card-subtitle mb-2 text-muted">Clasificación: </h6><p>A</p>
                      </div>
                    </div>
                  </div>
                  <div class="col align-self-end">
                    <br><br><br>
                    <h3 align="right">Seleccione la hora deseada:</h3>
                     <!--<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">-->
                      <div class="d-flex flex-row-reverse" role="group" aria-label="First group">
                      <button type="button" class="btn btn-secondary">Hora</button>
                      <button type="button" class="btn btn-secondary">Hora</button>
                      <button type="button" class="btn btn-secondary">Hora</button>
                      <button type="button" class="btn btn-secondary">Hora</button>
                      </div>
                    </div>

                    <div align="right">
                      <br><br><br><br><br>
                      <a data-toggle="modal" data-target="#1-1" href=".." class="btn btn-primary" role="button">Continuar</a>
                    </div>
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
