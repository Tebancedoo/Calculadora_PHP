<?php

include ('conexion.php');

//Listar usuarois con la mascota}

$sql = "SELECT * FROM mascotas"; //Inicia la primera consulta
if (!$result = $db->query($sql))
{
    die ('Hay un error en la consulta o los datos no se han podido encontrar [' . $db->error .  ']');
}

while ($row = $result->fetch_assoc())
{
    $nnombre_mascota=stripslashes($row["nombre_mascota"]); //Traigo el nombre de la mascota
    $ddocumento_dueño=stripslashes($row["documento_dueño"]); // Traigo el documento del dueño de la mascota

/////////////////////////////////////////// Inicia la subconsulta

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

}//fin de la subconsulta

///////////////////////////////////// Fin de la sub consulta

}//fin de la consulta principal



//Inicio tabla que me imprime los valores de la base de datos

echo "<h3>Tabla usuarios</h3>";

$sql3 = "SELECT * FROM usuarios"; 
if (!$result3 = $db->query($sql3))
{
    die ('Hay un error en la consulta o los datos no se han podido encontrar [' . $db->error .  ']');
}

    echo '<table border="5px" cellpadding="10rem" >';

    echo "<thead>";
    echo "<tr>";
    echo "<th> Nombres </th>";
    echo "<th> Apellidos </th>";
    echo "<th> Documento </th>";
    echo "<th> Celular </th>";
    echo "</tr>";
    echo "<thead>";

    echo "<tbody>";

while ($row3 = $result3->fetch_assoc())
{
    $nnombres_dueño=stripslashes($row3["nombres_dueño"]);
    $aapellidos_dueño=stripslashes($row3["apellidos_dueño"]);
    $ddocumento_dueño=stripslashes($row3["documento_dueño"]);
    $nnumero_celular=stripslashes($row3["numero_celular"]);
    

    //echo $nnombres_dueño, " ", $aapellidos_dueño; echo "<br>";
    echo "<tr><td> $nnombres_dueño </td> <td> $aapellidos_dueño </td> <td> $ddocumento_dueño </td> <td> $nnumero_celular </td> </tr>";

}


    echo "</tbody>";

    echo '</table>';

//Fin de la tabla


//Inicio tabla que me imprime los valores de la base de datos de mascotas

echo "<h3>Tabla mascotas</h3>";

$sql3 = "SELECT * FROM mascotas"; 
if (!$result3 = $db->query($sql3))
{
    die ('Hay un error en la consulta o los datos no se han podido encontrar [' . $db->error .  ']');
}

    echo '<table border="5px" cellpadding="10rem"  >';

    echo "<thead>";
    echo "<tr>";

    echo "<th> Documento dueño </th>";
    echo "<th> Nombre mascota </th>";
    echo "<th> Tipo mascota </th>";
    echo "<th> Documento mascota </th>";

    echo "</tr>";
    echo "<thead>";

    echo "<tbody>";

while ($row3 = $result3->fetch_assoc())
{
    $ddocumento_dueño=stripslashes($row3["documento_dueño"]);
    $nnombre_mascota=stripslashes($row3["nombre_mascota"]);
    $ttipo_mascota=stripslashes($row3["tipo_mascota"]);
    $ddocumento_mascota=stripslashes($row3["documento_mascota"]);
    
    echo "<tr><td> $ddocumento_dueño </td> <td> $nnombre_mascota </td> <td> $ttipo_mascota </td> <td> $ddocumento_mascota </td></tr>";

}

    echo "</tbody>";

    echo '</table>';

//Fin de la tabla


//Tabla donde aparezca una mascota y el dueño de la mascota



?>