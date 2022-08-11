<?php
        $bd = 'mysql:host=localhost;dbname=recirop';
        $user = 'root';
        $pass = '';

        try {
        $conn = new PDO($bd, $user, $pass);
        //echo 'Lo lograste hijo de perra';

        }catch (PDOException $e) {
        print "¡Error!: " . $e ->getMessage() . "<br/>";
        die();
        }


        //  if(!empty($_POST)){
          
//           $name= ($_POST['name']);
//           $usuario= ($_POST['usuario']);
//           $email=($_POST['email']);
//           $password=($_POST['pass']);
        
//           $sql= 'INSERT INTO  `usuario`(`Nombre`,`Usuario`,`Email`,`Contraseña`) VALUES (?,?,?,?)';
//     $inser=$conn->prepare($sql);
//     //$arrdata= array();
//     $inser->execute (array($name,$usuario,$email,$password));
//    // echo"funciona";

//            }
          
?>