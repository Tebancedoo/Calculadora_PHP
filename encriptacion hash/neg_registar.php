<?php


class usuario

{

    public function registrar($nombre,$contrasena)
    {
        include ("conexion.php");

        $password = password_hash($contrasena, PASSWORD_DEFAULT);
        
        mysqli_query($db,"INSERT INTO usuarios (id_usuario,nombre_usuario,contrasena_usuario) VALUES ('NULL','$nombre','$password')") or die(mysqli_error($db));
        echo "Usted ha sigo registrado correctamente"; 



    }

}

$final = new usuario();
$final->registrar($_POST["nombre"],$_POST["contrasena"]);

?>