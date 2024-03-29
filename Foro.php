<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Foro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./pagina.css">
    <link rel="shortcut icon" href="./imagenes/logoReciRop.jpeg" type="image/x-icon">

  </head>
  <body> 
<!--//*===================ENCABEZADO===================*//-->
<header class="container-fluid bg-dark d-flex justify-content-center" >
        <p class="text-light mb-0 p-0 fs-6"> Contactanos 0800-2345-5007-404</p>
    </header>
    <nav class="navbar navbar-expand-lg bg-light p-2" id="menu_barra">
        <div class="container-fluid">

        <a class="navbar-brand" href="./iniciopagina.php" id="ReciRop">Reci<span class="text-danger">Rop</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./iniciopagina.php">Inicio</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="./Donar.php">Donar</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="./Recibir.php">Recibir</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="./Foro.php">Foro</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Usuario
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="./iniciar_sesion(conexion).php">Iniciar Sesion</a></li>
                <li><a class="dropdown-item" href="./registro.php">Registrarse</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Necesitas ayuda?</a></li>
              </ul>
            </li>

            </ul>
          </div>
        </div>
      </nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>