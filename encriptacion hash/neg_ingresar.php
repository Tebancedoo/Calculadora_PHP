<?php

class usuario
{

    public function ingresar($nombre,$contrasena)
    {

        include("conexion.php");

        $cont = "0";//creo un contador y lo inicializo en 0

        $sql = "SELECT contrasena_usuario FROM usuarios";//hago el select from desde la tabla con el documento

        if (!$result = $db->query($sql))
        {
            die('Hay un error corriendo en la consulta o los datos no se encontraron!!! [' . $db->error . ']');
        }

        while ($row = $result->fetch_assoc())
        {
            $ccontrasena_usuario = stripslashes($row["contrasena_usuario"]); //codigo que trae los campos de la tabla
        }

        if (password_verify($contrasena, $ccontrasena_usuario))
        {
            $cont = "1";
        }

        if ($cont == "0")
        {

            echo "Usted no se encuentra registrado"; echo "<a ='pres_form.php'>Favor registrese</a>";

        }else
        {
            echo "Ha ingresado correctamente";
        }
        
    }

}

$final = new usuario();
$final->ingresar($_POST["nombre"],$_POST["contrasena"]);

?>