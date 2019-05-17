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
          <h1 align="center">Confirmar compra</h1>
            <div class=container style="padding-top:50px;">
              <div class="row">
                <div class="col-sm-6">
                  <p class="lead" ><img src="img/p2.jpg" width="250" height="auto" align="right"> </p>
                </div>
                <div align="center">
                  <div class="col-sm-6">
                    <div class="card" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title">Pokémon: Detective Pikachu</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Cine: </h6><p></p>
                        <h6 class="card-subtitle mb-2 text-muted">Hora y día: </h6><p></p>
                        <p class="card-subtitle mb-2 text-muted">Asientos: </p><p></p>
                        <a href="asientos.php" class="card-link">Regresar</a>
                        <a href="ticket.php" class="card-link">Confirmar</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!--Termina contenido de la pagina-->

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
