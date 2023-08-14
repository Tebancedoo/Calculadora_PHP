<?php

class usuario

{

    public function listar_en_tabla()

    {

        include ('conexion.php');


        $sql = "SELECT * FROM mascotas"; //Primera consulta a la tabla mascotas
        if (!$result = $db->query($sql))
        {
            die ('Hay un error en la consulta o los datos no se han podido encontrar [' . $db->error .  ']');
        }

        //imprimo una tabla

        echo "<br>";

        echo '<table border="5px" cellpadding="10rem">';

        echo "<thead>";
        echo "<tr>";

        echo "<th> Nombres dueño </th>";
        echo "<th> Apellidos dueño </th>";
        echo "<th> Nombre mascota </th>";
        echo "<th> Documento dueño </th>";

        echo "</tr>";
        echo "<thead>";

        echo "<tbody>";


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
                
                echo "<tr> <td> $nnombres_dueño </td> <td> $aapellidos_dueño </td> <td> $nnombre_mascota </td> <td> $ddocumento_dueño </td>";

            }//fin de la subconsulta


            ///////////////////////////////////// Fin de la sub consulta

        }//fin de la consulta principal

        echo "</tbody>";

        echo '</table>';

    }

}

$final = new usuario();
$final->listar_en_tabla();

?>