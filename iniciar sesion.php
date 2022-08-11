
<?php
include "./conexion.php";
// echo "funca";

    if (isset($_POST['btnsubmit'])){
           
        $name = ($_POST['userregistrado']); //Nombre de Usuario
        $password = ($_POST['passregistrada']); //Password

        $usuario = $conn->query("Select * From `usuario` Where usuario = '{$name}' and contraseña = '{$password}'")->fetch(PDO::FETCH_ASSOC);
      //  header('Location: index.php');   
    
      if($usuario == false){
            echo 'Eh eh que te pasa gil, registrate';       
        }
        else {
                session_start();
                $_SESSION['isLogged'] = true;
                $_SESSION['usuario'] = $name;

                header('Location: ./iniciopagina.php');
                // echo 'vamo lo pibe';
              

                // $name="";
                // $password="";
        }

    }
    
    
    // if (is_array($usuario) And $usuario['activo'] == 1) {
    //     $titulo = "Bienvenido " . $usuario['nombre'];        
    //     $mensaje = "Has iniciado sesión correctamente!.";        
    //     $enlace = '<a href="login.html" class="btn btn-success btn-block">OK</a>';        
    //     $icon = '<i class="material-icons">&#xE876;</i>'; //Success                
    //     $fondo = "#82ce34;"; //Success  
    //     $_SESSION['usuario'] = $usuario['nombre'];      
    // } else {        
    //     $titulo = "Ups!";        
    //     $mensaje = "Algo no ha salido bien. Intenta nuevamente.";
    //     $enlace = '<a href="login.html" class="btn btn-success btn-block">Iniciar Sesión</a>';             
    //     $icon = '<i class="material-icons">&#xE5CD;</i>'; //Error
    //     $fondo = "#e85e6c;"; //Error          
    // }

   // include "confirmar.php";

?>