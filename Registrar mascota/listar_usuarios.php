<?php

include ('conexion.php');


$sql = "SELECT * FROM usuarios";
if (!$result = $db->query($sql))
{
    die ('Hay un error en la consulta o los datos no se han podido encontrar [' . $db->error .  ']');
}

while ($row = $result->fetch_assoc())
{
    $nnombres_dueño=stripslashes($row["nombres_dueño"]);
    $aapellidos_dueño=stripslashes($row["apellidos_dueño"]);
    
    echo $nnombres_dueño, " ", $aapellidos_dueño; echo "<br>";
}//fin de la consulta


$sql = "SELECT * FROM mascotas";
if (!$result = $db->query($sql))
{
    die ('Hay un error en la consulta o los datos no se han podido encontrar [' . $db->error .  ']');
}

while ($row = $result->fetch_assoc())
{
    $nnombre_mascota=stripslashes($row["nombre_mascota"]);
    
    echo "El nombre de la mascota es: ", $nnombre_mascota; echo "<br>";
}//fin de la consulta

?>