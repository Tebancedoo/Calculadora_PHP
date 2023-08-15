<?php

class usuario

{

    public function listar_en_tabla()

    {

        include ('conexion.php');


        $sql = "SELECT * FROM usuarios_mascotas"; //Primera consulta a la tabla mascotas
        if (!$result = $db->query($sql))
        {
            die ('Hay un error en la consulta o los datos no se han podido encontrar [' . $db->error .  ']');
        }

        //imprimo una tabla

        echo "<h3>Tabla eliminar<h3>";

        echo '<table border="5px" cellpadding="10rem"  >';

        echo "<thead>";
        echo "<tr>";

        echo "<th> Nombres dueño </th>";
        echo "<th> Apellidos dueño </th>";
        echo "<th> Documento dueño </th>";
        echo "<th> Nombre mascota </th>";
        echo "<th> Documento mascota </th>";
        echo "<th> Tipo mascota </th>";
        echo "<th> Eliminar registro </th>";

        echo "</tr>";
        echo "<thead>";

        echo "<tbody>";


        while ($row = $result->fetch_assoc())
        {
            $ddocumento_dueño=stripslashes($row["documento_dueño"]); // Traigo el documento del dueño de la mascota
            $ddocumento_mascota=stripslashes($row["documento_mascota"]); //Traigo el documento de la mascota

                $sql2 = "SELECT * FROM usuarios WHERE documento_dueño ='$ddocumento_dueño'"; //Segunda consulta a la tabla mascotas
                if (!$result2 = $db->query($sql2))
                {
                    die ('Hay un error en la consulta o los datos no se han podido encontrar [' . $db->error .  ']');
                }

                while ($row2 = $result2->fetch_assoc())
                {
                    $nnombres_dueño=stripslashes($row2["nombres_dueño"]); // Traigo los nombres del dueño de la mascota
                    $aapellidos_dueño=stripslashes($row2["apellidos_dueño"]); // Traigo los apellidos del dueño de la mascota
                    

                        $sql3 = "SELECT * FROM mascotas WHERE documento_mascota ='$ddocumento_mascota'"; //Tercera consulta a la tabla mascotas
                        if (!$result3 = $db->query($sql3))
                        {
                            die ('Hay un error en la consulta o los datos no se han podido encontrar [' . $db->error .  ']');
                        }

                        while ($row3 = $result3->fetch_assoc())
                        {
                            $nnombre_mascota=stripslashes($row3["nombre_mascota"]); // Traigo los nombres de la mascota 
                            $ttipo_mascota=stripslashes($row3["tipo_mascota"]); // Traigo los tipos de mascotas


                            $sql4 = "SELECT * FROM tipo_mascotas WHERE id_mascota ='$ttipo_mascota'"; //Cuarta consulta a la tabla mascotas
                            if (!$result4 = $db->query($sql4))
                            {
                                die ('Hay un error en la consulta o los datos no se han podido encontrar [' . $db->error .  ']');
                            }

                            while ($row4 = $result4->fetch_assoc())
                            {
                                $mmascota=stripslashes($row4["mascota"]); // Traigo el tipo de mascota 
                                

                                    echo "<tr>

                                        <td> $nnombres_dueño </td>
                                        <td> $aapellidos_dueño </td>
                                        <td> $ddocumento_dueño </td> 
                                        <td> $nnombre_mascota </td>
                                        <td> $ddocumento_mascota </td>
                                        <td> $mmascota </td>
                                        

                                        <td> <form method='post' action='neg_eliminar_registro.php'> 
                                        <input type='text' value='$ddocumento_dueño' hidden name='documento_dueño'> 
                                        <input type='text' value='$ddocumento_mascota' hidden name='documento_mascota'> 
                                        <input type='submit' value='Eliminar'>
                                        </form>
                                        </td>

                                    </tr>";
                                    
                            }
                        }
                }
        }//fin de la consulta 

        //hacer un boton para eliminar los registros, crear una capa para eliminar los registros, separar la consulta (crar una nueva consulta para hacer el eliminar y no en el ultimo ya existente)

        echo "</tbody>";

        echo '</table>';

    }

}

$final = new usuario();
$final->listar_en_tabla();

?>