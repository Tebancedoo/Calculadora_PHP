<?php
class usuario

{ 

    public function listar_mascotas()

    { 

        //Inicio tabla que me imprime los valores de la base de datos de mascotas

        include ('conexion.php');

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

        //hacer esto con POO

    }

}

$final = new usuario();
$final->listar_mascotas();

?>