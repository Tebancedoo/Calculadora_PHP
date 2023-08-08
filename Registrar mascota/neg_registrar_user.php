<?php

include ('pres_banner.php');

class usuario
 {

    public function registrar($nombres_dueño,$apellidos_dueño,$documento_dueño,$numero_celular)
    {

        include ('conexion.php');

        mysqli_query($db,"INSERT INTO usuarios (nombres_dueño,apellidos_dueño,documento_dueño,numero_celular) VALUES ('$nombres_dueño', '$apellidos_dueño','$documento_dueño','$numero_celular')") or die(mysqli_error($db));
        echo "Usted ha sigo registrado correctamente"; 

        //fin del metodo

    }//fin del objeto

}//Fin de la clase

$final = new usuario();
$final->registrar($_POST["nombres_dueño"],$_POST["apellidos_dueño"],$_POST["documento_dueño"],$_POST["numero_celular"]);

echo "<a href='pres_form_pet.php'>Click para continuar </a>";

include ('pres_footer.php');

?>