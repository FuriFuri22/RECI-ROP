<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenido a ReciRop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./pagina.css">
    <link rel="icon" href="./imagenes/logoReciRop.jpeg" type="image/x-icon">
  </head>
  <body> 


  <?php
include("conexion.php");
?>
    <!-- < -->
    <?php
   // include("iniciar sesion.php")
    ?>
 

    
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
        <?php
          session_start();
          if( isset($_SESSION['usuario']) ){
            ?>
          
                <h3 id="saludousuario" class="text-danger my-auto">Hola  <?php echo $_SESSION['usuario'];?> </h3>
                
                <button class="btn btn-outline" type="button" ><a href="./cerrarsesion.php"> Cerrar Sesión</a></button>
            <?php
          }else{
            ?>
             
            <?php
          }       
       ?>
       
      </nav>

<!--//*===================SLIDER IMAGENES===================*//-->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

      <div class="carousel-item active" data-bs-interval="3000">
        <img src="./imagenes/slide1.jpeg" class="d-block w-100" alt="slide1">
      </div>

      <div class="carousel-item">
        <img src="./imagenes/slide2.jpeg" class="d-block w-100" alt="slide2">
      </div>

      <div class="carousel-item">
        <img src="./imagenes/slide3.jpeg" class="d-block w-100" alt="slide3">
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<!--//*===================INTRO===================*//-->
<section class="w-50 mx-auto text-center pt-5" id="intro">
    <h1 class="p-3 fs2 border-top border-3">Una empresa que está
        <span class="text-danger">para ayudar</span>
    </h1>
    <p class="p-3 fs-4"><span class="text-danger">ReciRop</span> es la agencia donde podes donar o recibir una ayuda
    de mano de otras personas.
    </p>
</section>

<!--//*===================SERVICIOS===================*//-->
<section class="container-fluid">
    <div class="row w-75 mx-auto mb-1 servicio_fila">

        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono_wrap">
            <img src="./imagenes/donaciones.jpeg" alt="donaciones" width="180" height="175">
            <div>
                <h3 class="fs-4 mt-3 px-4 pb-0">Donaciones</h3>
                <p class="px-2 mx-3">Nuestra empresa recolecta donativos para brindar una ayuda a quien lo necesite. 
                    Esto gracias a los donativos de personas y/o empresas.
                </p>
            </div>
        </div>
        

        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono_wrap">
            <img src="./imagenes/publicidad - copia.jpeg" alt="publicidad" width="180" height="175">
            <div>
                <h3 class="fs-4 mt-3 px-4 pb-1">Publicidad</h3>
                <p class="px-2 mx-3">Nuestra empresa tambien brinda propaganda a las empresas que aporten a nuestra causa. Buscamos el beneficio mutuo para todo publico
            </div>
        </div>

    </div>
</section>

<!--//*===================ACERCA DE NOSOTROS===================*//-->
<section>
    <div class="w-75 m-auto text-center " id="equipo">
        <h1 class="mb-5 fs-2">Equipo pequeño <span class="text-danger">con Grandes Resultados</span>
        </h1>
        <div class="mt-5 mb-5 w-50 d-block mx-auto " >
          <p class="fs-4">
            Buscamos una <span class="text-danger">solución</span> para todos
        </p>
          <img class="img-fluid " src="./imagenes/grupo.jpeg" alt="grupo">
        </div>
    </div>
    
</section>
<script>


<!--//*===================BOOTSTRAP===================*//-->
<script src="./donaF.php"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>