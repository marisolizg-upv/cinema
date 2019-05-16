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
                <div class="container">

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
