<?php

class usuario

{
    public function eliminar($ddocumento_dueño,$ddocumento_mascota)
    {

        include("conexion.php");

        mysqli_query($db,"DELETE FROM usuarios_mascotas WHERE documento_dueño = '$ddocumento_dueño' AND documento_mascota = '$ddocumento_mascota'"); //elimino los datos
        
        header("Location:tabla_eliminar.php"); 
    }


}

$final = new usuario();
$final->eliminar($_POST["documento_dueño"],$_POST["documento_mascota"]);


?>