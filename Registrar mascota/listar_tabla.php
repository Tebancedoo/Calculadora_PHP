<?php
class usuarios

{ 
    public function listar_dueños()

    { 

         //Inicio tabla que me imprime los dueños de la base de datos

        include ('conexion.php');

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

    }
}

$final = new usuarios();
$final->listar_dueños();

?>