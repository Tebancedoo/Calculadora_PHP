<?php

include ('pres_banner.php');

class mascota
 {

    public function registrar($documento_dueño,$nombre_mascota,$tipo_mascota,$documento_mascota)
    {

        include ('conexion.php');

        mysqli_query($db,"INSERT INTO mascotas (documento_dueño,nombre_mascota,tipo_mascota,documento_mascota) VALUES ('$documento_dueño','$nombre_mascota','$tipo_mascota','$documento_mascota')") or die(mysqli_error($db));
        echo "Su mascota ha sigo registrada correctamente"; 

        //fin del metodo

    }//fin del objeto

}//Fin de la clase

$final = new mascota();
$final->registrar($_POST["documento_dueño"],$_POST["nombre_mascota"],$_POST["tipo_mascota"],$_POST["documento_mascota"]);

echo "<br>"; echo "<a href='index.php'> Regresar </a>";

include ('pres_footer.php');

?>