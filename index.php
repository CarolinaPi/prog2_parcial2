<?PHP

require_once "classes/Juguete.php";

$secciones_validas = [
  "home" => [
    "titulo" => "Bienvenidos"
  ],
  "quienes_somos" => [
    "titulo" => "Gracias por visitarnos, me presento..."
  ],
  "juguetes" => [
    "titulo" => "Juegos Montessori"
  ],
  "envios" => [
    "titulo" => "Detalles del envío"
  ],
  "producto" => [
    "titulo" => "Detalle del producto"
  ],
];


//null coalesce
$vis = $_GET['vis'] ?? "home";


if (!array_key_exists($vis, $secciones_validas)) {
  $ver = 404;
  $titulo = "404 NOT FOUND";
} else {
  $ver = $vis;
  $titulo = $secciones_validas[$vis]['titulo'];
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thomy :: <?= $titulo ?> </title>
  <link rel="icon" type="image/png" href="images/favicon.png" />
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,200&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,200&family=Shantell+Sans:wght@500&display=swap" rel="stylesheet">
  <!--  CSS local -->
  <link rel="stylesheet" href="./css/style.css ">
</head>

<body>

  <!-- Nav -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand font-weight-bold">THOMY</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php?vis=home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?vis=quienes_somos">Quienes somos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="index.php?vis=juguetes" role="button" data-bs-toggle="dropdown">
              Juguetes
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="index.php?vis=juguetes&jgo=encastre">Encastre</a></li>
              <li><a class="dropdown-item" href="index.php?vis=juguetes&jgo=pizarra">Pizarras</a></li>
              <li><a class="dropdown-item" href="index.php?vis=juguetes&jgo=rompecabezas">Rompecabezas</a></li>
              <li><a class="dropdown-item" href="index.php?vis=juguetes&jgo=linea_sensorial">Linea sensorial</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php?vis=envios">Registro</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>

  <main>

    <!-- Contenido dinamico -->

    <?php


    require_once file_exists("views/$ver.php") ? "views/$ver.php" : "views/404.php";
    ?>;


  </main>
  <footer class=" mt-5 pt-5 pb-5 footer text-center">
    <div class="container">
      <div class="row">
        <div>
          <h2>THOMY</h2>
          <p class="pr-5 text-white-30">'El arte de aprender jugando ♥' </p>

        </div>

        <div>
          <h3 class="mt-lg-0 mt-sm-4">Mar del Plata</h3>
          <p>Manuela Pedraza 2330</p>
          <p class="mb-0">(223) 6-351585</p>
          <p><i class="fa fa-envelope-o mr-3"></i>thomas@tienda.com</p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col copyright">
          <p class=""><small class="text-white-50"> © 2023. Todos los derechos reservados.</small></p>
        </div>
      </div>
    </div>
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>