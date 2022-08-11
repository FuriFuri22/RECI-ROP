<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./pagina.css">
    <link rel="shortcut icon" href="./imagenes/logoReciRop.jpeg" type="image/x-icon">

  </head>
  <body> 
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


<!--//*===================CHAT===================*//-->
      <div class="modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Chat Guia</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="">
                    <div>
                      <table>
                        <thead>
                          <tr>
                            <th>Hola ¿En qué puedo ayudarte?</th>
                          </tr>
                        </thead>
                        <tbody id="chatHelp">
                        
                        </tbody>
                      </table>
                    </div>
                    
                  </form>
                </div>
                <div class="input-group mb-3">
                  <input id="msjHelp" type="text" class="form-control" placeholder="Ingrese un mensaje"  aria-describedby="enviar">
                  <button class="btn btn-outline-secondary" type="button" id="enviar" onclick="leerMensaje()"><img src="../media/enviar.png" class="img-fluid" width="15" alt=""></button>
              </div>
                <div class="modal-footer">
                  
                </div>
              </div>
            </div>
      </div>

<!--//*===================ELECCIONES DONAR===================*//-->
<div class="container col-lg-12 text-center">
      <h1 class="mt-5">Aquí comienza tu <span class="text-danger">Donación</span></h1>
</div>


 <!--Seccion de para crear una donacion-->
<div class="container pb-5 pt-5">
  <p>
    <a class="btn btn-light btn-outline-danger mx-auto d-block pt-3 pb-3 w-50 fs-5" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
      DONAR
    </a>
  </p>
  <div class="collapse pt-5" id="collapseExample">
    <div class="card card-body" id="pasodos">
     <h3 class="text-danger">Paso 1</h3>
     <form action="" class="form" id="donacionLista">
        <div class="form-group pt-2 pb-2">
          <h3><span class="h4 form-label text-center ">Elija  el tipo de producto que desea donar</span>
          </h3>
          <select class="form-select" name="" id="productoDonar" onchange="progreForm()">
            <option selected>Elija</option>
            <option value="ropa"><button type="button">Ropas</button></option>
            <option value="Material Reciclable">Materiales Reciclables</option>
            <option value="otro"><button type="button">Otro</button></option>
          </select>
        </div>
        <div id="siOtro">

        </div>
        <div class="form-group pd-2 pb-2">
          <h3><span class="h4  form-label text-center">Elija un metodo de Entrega</span></h3>
          <select class="form-select" name="" id="entrega" onchange="progreEntrega()">
            <option value="Punto de encuentro">Punto de encuentro</option>
            <option value="Sucursal">Sucursal</option>
          </select>
        </div>
        
        <div id="siSucur"></div>
        <div class="container pt-2">
          <button type="submit" class="btn btn-danger  mx-auto d-block pt-3 pb-3 w-25" >Listo</button>
        </div>
     </form>
    </div>
  </div>
</div>

    <script>
      
function progreForm(){
    let opciones = document.getElementById("productoDonar").value;
    let avance = document.getElementById("siOtro")
    if(opciones == "ropa"){
      avance.innerHTML = `<br>
        <span class="h4 form-label text-center">Tipo de Ropa</span>
        <select id="tipo" class="form-select">
             <option value="hombre">Para Hombre</option>
             <option value="mujer">Para Mujer</option>
             <option value="unisex">Unisex</option>
             <option value="bebe">Para Bebe</option>
             <option value="niño">Para Niño</option>
             <option value="niña">Para Niña</option>
        </select><br>
        <span class="h4 form-label text-center">Ingrese una breve descripción de la ropa a donar</span>
        <textarea class="form-control" planceholder="Escriba aqui" id="descrip"></textarea><br>
      `;
    }else if(opciones == "Material Reciclable"){
        avance.innerHTML = `<br>
        <span class="h4 form-label text-center">Tipo de Material</span>
        <select id="tipo" class="form-select">
            <option selected>Elije</option>
             <option value="tela">Telas</option>
             <option value="madera">Maderas</option>
             <option value="plastico">Plasticos</option>
             <option value="carton">Carton</option>
        </select><br>
      `;
    }else if(opciones == "otro"){
        avance.innerHTML = `<br>
        <span class="h4 form-label text-center">Ingrese el tipo de objeto que desea donar</span>
        <input id="tipo" class=" form-control" planceholder="Aquí puede escribir"><br>
      `;
    }
  }
  
  function progreEntrega(){
    let entrega = document.getElementById("entrega").value;
    let punto = document.getElementById("siSucur");
  if( entrega == "Punto de encuentro"){
     punto.innerHTML = `<br>
     <div>
        <span class="h4 form-label text-center">Ingrese la direccion del punto de encuentro(El punto de encuentro es su domicilio)</span>
        <input id="direccion" type="text" class="form-control" planceholder="Aquí puede escribir">
     </div><br>
     
     <div>
        <span class="h4 form-label text-center">Elija un horario en el cual desea concretar la entrega</span>
        <input id="horaE" type="time" class="col-6 form-control" planceholder="Aquí puede escribir">
     </div><br>
     `;
  } else if( entrega == "Sucursal"){
    punto.innerHTML = `<br>
    <p class="h4 text-danger">Bien puede pasar a concretar en la sucursal Av. Gutnisky ... de 9:00 a 11:30 hs y de 15:00 a 19:30 hs</p><br>
    `;
   
  }
  }
  
  const REGISTRODEDONACIONES = [];
  REGISTRODEDONACIONES.push({don: "ropa", tipo:"unisex", descripcion: "Buso canguro negro con corderito por dentro", entrega:`Se retira la donacion en la direccion "B 7 de Mayo Mz 11 C29" a las 17:20 hs`});
  function registrarDonacion(){
  let donacion = document.getElementById("productoDonar").value
  let tipoDon = document.getElementById("tipo").value;
  let descripcioDeRopa
  if(donacion == "ropa"){
   descripcioDeRopa = document.getElementById("descrip").value;
  }else{
    descripcioDeRopa = "No es ropa";
  }
  let modEntrega = document.getElementById("entrega").value;
  if (modEntrega =="Punto de encuentro"){
     modEntrega = `Se retira la donacion en la direccion ${document.getElementById("direccion").value} a las ${document.getElementById("horaE").value} hs`;
  } else if(modEntrega == "Sucursal"){
     modEntrega = `Se concreta la donación en la sucursal`;
  }
   
  for( let dona of REGISTRODEDONACIONES){
      if(dona.descripcion !== descripcioDeRopa){
        REGISTRODEDONACIONES.push({don: donacion, tipo: tipoDon, descripcion: descripcioDeRopa, entrega:modEntrega});
      }
  }
  pasoDos()
  }
  
  function pasoDos(){
  let indice = REGISTRODEDONACIONES.length - 1;
  
  let nextPaso = document.getElementById("pasodos");
  
  nextPaso.innerHTML = `
  <p class="h4 text-danger">Paso 2</p><br>
  <div>
  <p class="h4 text-dark">El objeto que usted desea donar es: </p>
  </div>
  <div>
    <p class="h5 text-danger" id="final">${REGISTRODEDONACIONES[indice].don} ${queTipo(REGISTRODEDONACIONES[indice].tipo)} ${REGISTRODEDONACIONES[indice].entrega} </p><br>
  </div>
  <div>
    <p class="h4 text-dark">¿Esto es correcto?</p>
    <button class="btn btn-secondary">No</button>
    <button type="subtmit" class="btn btn-danger">Si</button>
  </div>
  `;
  
  }
  
  
  function queTipo(elTipo){
    let indice = REGISTRODEDONACIONES.length - 1;
    if(elTipo == "hombre"|| elTipo == "mujer"|| elTipo == "unisex"|| elTipo == "niño"|| elTipo =="niña"|| elTipo=="bebe"){
      if(elTipo == "unisex"){
        return `${elTipo} descripta como: ${REGISTRODEDONACIONES[indice].descripcion}`;
      }else{
        return `para ${elTipo} descripta como: ${REGISTRODEDONACIONES[indice].descripcion}`;
      }
     
    }else if(elTipo == "madera"|| elTipo == "carton"|| elTipo == "plastico"|| elTipo == "tela"){
       return `de ${elTipo} `;
    }else{
     return `: ${elTipo}`;
    }
  }
  
  
  let enviar = document.getElementById("donacionLista");
  enviar.addEventListener(`submit`, evento =>{
    evento.preventDefault();
    registrarDonacion();
  });
  
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>