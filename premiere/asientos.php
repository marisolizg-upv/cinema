<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
     <link rel="shortcut icon" href="img/icono.jpg" />
  <title>Cinema Premiere</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<meta name="viewport" content="width=device-width">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">



      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="css/style.css">
      <link href="css/bootstrap.min.css" rel="stylesheet">
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
      <h1 align="center">Asientos</h1>
         <div class="container-fluid" style="padding-left:50px;">
           <div class="row">
             <div class="card-container col-sm-4">
                <img src="img/p2.jpg" alt="Avatar" width="300" height="auto">
              </div>
            <div class="col-sm-4">
              <h3 align="center" style="padding-top:50px;">PANTALLA</h3>
              <div class="plane">
                <li class="row row--A">
                  <ol class="seats" type="A">
                    <li class="seat">
                      <input type="checkbox" id="A1" />
                      <label for="A1">A1</label>
                    </li>
                    <li class="seat">
                      <input type="checkbox" id="A2" />
                      <label for="A2">A2</label>
                    </li>
                    <li class="seat">
                      <input type="checkbox" id="A3" />
                      <label for="A3">A3</label>
                    </li>
                    <li class="seat">
                      <input type="checkbox" id="A4" />
                      <label for="A4">A4</label>
                    </li>
                    <li class="seat">
                      <input type="checkbox" id="A5" />
                      <label for="A5">A5</label>
                    </li>
                  </ol>
                </li>
                <li class="row row--B">
                  <ol class="seats" type="B">
                    <li class="seat">
                      <input type="checkbox" id="B1" />
                      <label for="B1">B1</label>
                    </li>
                    <li class="seat">
                      <input type="checkbox" id="B2" />
                      <label for="B2">B2</label>
                    </li>
                    <li class="seat">
                      <input type="checkbox" id="B3" />
                      <label for="B3">B3</label>
                    </li>
                    <li class="seat">
                      <input type="checkbox" id="B4" />
                      <label for="B4">B4</label>
                    </li>
                    <li class="seat">
                      <input type="checkbox" id="B5" />
                      <label for="B5">B5</label>
                    </li>
                  </ol>
                </li>
                <li class="row row--C">
                  <ol class="seats" type="C">
                    <li class="seat">
                      <input type="checkbox" id="C1" />
                      <label for="C1">C1</label>
                    </li>
                    <li class="seat">
                      <input type="checkbox" id="C2" />
                      <label for="C2">C2</label>
                    </li>
                    <li class="seat">
                      <input type="checkbox" id="C3" />
                      <label for="C3">C3</label>
                    </li>
                    <li class="seat">
                      <input type="checkbox" id="C4" />
                      <label for="C4">C4</label>
                    </li>
                    <li class="seat">
                      <input type="checkbox" id="C5" />
                      <label for="C5">C5</label>
                    </li>
                  </ol>
                </li>
                <li class="row row--D">
                  <ol class="seats" type="D">
                    <li class="seat">
                      <input type="checkbox" id="D1" />
                      <label for="D1">D1</label>
                    </li>
                    <li class="seat">
                      <input type="checkbox" id="D2" />
                      <label for="D2">D2</label>
                    </li>
                    <li class="seat">
                      <input type="checkbox" id="D3" />
                      <label for="D3">D3</label>
                    </li>
                    <li class="seat">
                      <input type="checkbox" id="D4" />
                      <label for="D4">D4</label>
                    </li>
                    <li class="seat">
                      <input type="checkbox" id="D5" />
                      <label for="D5">D5</label>
                    </li>
                  </ol>
                </li>
              </div>
          </div>
          <div class="col-sm-4">
            <div align="center">
              <br><br><br><br><br>
              <a href="confirmacion.php" class="btn btn-success" role="button">Finalizar</a>
            </div>

          </div>
        </div>
      </div>
    </div>

  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <!-- Menu Toggle Script-->
  <script>
  $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
  });
  </script>

</body>

</html>
