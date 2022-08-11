<?php
include ("conexion.php");
// echo"funca";

          if(isset($_POST['registro'])){
          $name= ($_POST['name']);
          $usuario= ($_POST['usuario']);
          $email=($_POST['email']);
          $password=($_POST['pass']);
          $fecha_reg= date ("y/m/d");
        
          $sql= 'INSERT INTO  `usuario`(`Nombre`,`Usuario`,`Email`,`Contraseña`,`Fecha_Registro`) VALUES (?,?,?,?,?)';
          $inser=$conn->prepare($sql);
    //$arrdata= array();
          $inser->execute (array($name,$usuario,$email,$password,$fecha_reg));

          
          session_start();
          $_SESSION['isLogged'] = true;
          $_SESSION['usuario'] = $name;
         
          header('location: iniciopagina.php');
         
  
}
       
?>


