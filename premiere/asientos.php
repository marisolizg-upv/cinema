<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
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
                <div class="card-flip">
                    <div class="front card">
                        <!-- Card Contents Here -->
                        <img src="img/p2.jpg" alt="Avatar" width="350" height="auto">
                    </div>
                    <div class="back card">
                        <!-- Card Contents Here -->
                        <h6 class="card-title">Pokémon: Detective Pikachu</h6>
                        <p class="card-text"><h6>Sinopsis: </h6>Tim y Pikachu recopilarán pistas juntos a través de las calles de Ryme City, una  moderna metrópolis donde humanos y Pokemons viven en paz y armonía, y descubrirán un asombroso complot que podría destruir esta convivencia pacífica y amenazar de esta manera el universo Pokemon.</p>
                         <h6 class="card-text">Duración: </h6><p>104 minutos</p>
                         <h6 class="card-text">Clasificación: </h6><p>A</p>
                    </div>
                </div>
                <figure class="card card-flip">
                   <div class="card bg-dark text-white">
                      <img class="card-img img-fluid" src="img/p2.jpg" alt="">
                   </div>
                   <div class="card">
                      <div class="card-body d-flex justify-content-center align-items-center">
                        <h6 class="card-title">Pokémon: Detective Pikachu</h6>
                        <p class="card-text"><h6>Sinopsis: </h6>Tim y Pikachu recopilarán pistas juntos a través de las calles de Ryme City, una  moderna metrópolis donde humanos y Pokemons viven en paz y armonía, y descubrirán un asombroso complot que podría destruir esta convivencia pacífica y amenazar de esta manera el universo Pokemon.</p>
                         <h6 class="card-text">Duración: </h6><p>104 minutos</p>
                         <h6 class="card-text">Clasificación: </h6><p>A</p>
                      </div>
                   </div>
                </figure>
              </div>
            <div class="col-sm-4">
              <h3 align="center" style="padding-top:50px;">PANTALLA</h3>
              <div class="plane" style="padding-left:50px;">
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
                  </ol>
                </li>
                <li class="row row--E">
                  <ol class="seats" type="E">
                    <li class="seat">
                      <input type="checkbox" id="E1" />
                      <label for="E1">E1</label>
                    </li>
                    <li class="seat">
                      <input type="checkbox" id="E2" />
                      <label for="E2">E2</label>
                    </li>
                    <li class="seat">
                      <input type="checkbox" id="E3" />
                      <label for="E3">E3</label>
                    </li>
                    <li class="seat">
                      <input type="checkbox" id="E4" />
                      <label for="E4">E4</label>
                    </li>
                  </ol>
                </li>
              </div>
          </div>
          <div class="col-sm-4">
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
