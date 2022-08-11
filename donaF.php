<?php
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
  <p class="h4 text-dark">El objeto que usted desesa donar es: </p>
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
  function siCorrecto(){
    let indice = REGISTRODEDONACIONES.length - 1;
    
    $.post('../php/donacion.php',{don:REGISTRODEDONACIONES[indice].don, typeDon:REGISTRODEDONACIONES[indice].tipo, des:REGISTRODEDONACIONES[indice].descripcion, entre:REGISTRODEDONACIONES[indice].entrega}, function (data){
       if(data!=null){
         alert('Datos Enviados');
       }else{alert('Datos no enviados');}
    });
  
  }
  
  let enviar = document.getElementById("donacionLista");
  enviar.addEventListener(`submit`, evento =>{
    evento.preventDefault();
    registrarDonacion();
  });
  ?>