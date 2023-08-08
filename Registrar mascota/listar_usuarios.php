<?php

include ('conexion.php');

$sql = "SELECT * FROM mascotas"; //Inicia la primera consulta
if (!$result = $db->query($sql))
{
    die ('Hay un error en la consulta o los datos no se han podido encontrar [' . $db->error .  ']');
}

while ($row = $result->fetch_assoc())
{
    $nnombre_mascota=stripslashes($row["nombre_mascota"]); //Traigo el nombre de la mascota
    $ddocumento_dueño=stripslashes($row["documento_dueño"]); // Traigo el documento del dueño de la mascota

/////////////////////////////////////////// Inicia la sub consulta

$sql2 = "SELECT * FROM usuarios WHERE documento_dueño='$ddocumento_dueño'";//Uso el documento del dueño para buscar el dueño
if (!$result2 = $db->query($sql2))
{
    die ('Hay un error en la consulta o los datos no se han podido encontrar [' . $db->error .  ']');
}

while ($row2 = $result2->fetch_assoc())
{
    $nnombres_dueño=stripslashes($row2["nombres_dueño"]);
    $aapellidos_dueño=stripslashes($row2["apellidos_dueño"]);
    
    echo  $nnombre_mascota; echo "--"; echo $nnombres_dueño, " ", $aapellidos_dueño; echo "<br>";

}//fin de la consulta

///////////////////////////////////// Fin de la sub consulta

}//fin de la consulta









?>