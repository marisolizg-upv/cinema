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
          <h1 align="center">Ticket</h1>
            <div class=container style="padding-top:50px;">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col"><img src="img/p2.jpg" width="250" height="auto" align="right"></th>
                    <th scope="col">Pokémon: Detective Pikachu
                    Código de compra:
                    <h2>XXXX</h2></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" align="right">Sala:</th>
                    <td>1</td>
                  </tr>
                  <tr>
                    <th scope="row" align="right">Día:</th>
                    <td>día despues de mañana</td>
                  </tr>
                  <tr>
                    <th scope="row" align="right">Hora:</th>
                    <td>las del panzon</td>
                  </tr>
                  <tr>
                    <th scope="row" align="right">Boletos:</th>
                    <td>mil</td>
                  </tr>
                  <tr>
                    <th scope="row" align="right">Asientos:</th>
                    <td>el que caiga alv</td>
                  </tr>
                  <tr>
                    <th scope="row" align="right">Cine:</th>
                    <td>tu puta madre</td>
                  </tr>
                </tbody>
              </table>
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
