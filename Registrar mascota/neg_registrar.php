<?php

include ('pres_banner.php');

class mascota
 {

    public function registrar($nombres_dueño,$apellidos_dueño,$documento_dueño,$numero_celular,$nombre_mascota,$tipo_mascota,$documento_mascota)
    {

        include ('conexion.php');

        mysqli_query($db,"INSERT INTO mascotas (nombres_dueño,apellidos_dueño,documento_dueño,numero_celular,nombre_mascota,tipo_mascota,documento_mascota) VALUES ('$nombres_dueño', '$apellidos_dueño','$documento_dueño','$numero_celular','$nombre_mascota','$tipo_mascota','$documento_mascota')") or die(mysqli_error($db));
        echo "Usted ha sigo registrado correctamente"; 

        //fin del metodo

    }//fin del objeto

}//Fin de la clase

$final = new mascota();
$final->registrar($_POST["nombres_dueño"],$_POST["apellidos_dueño"],$_POST["documento_dueño"],$_POST["numero_celular"],$_POST["nombre_mascota"],$_POST["tipo_mascota"],$_POST["documento_mascota"]);

echo "<a href='index.php'> Regresar </a>";

include ('pres_footer.php');

?>