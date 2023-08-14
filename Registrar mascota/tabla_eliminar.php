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

        echo "<th> Documento dueño </th>";
        echo "<th> Documento mascota </th>";
        echo "<th> Eliminar registro </th>";

        echo "</tr>";
        echo "<thead>";

        echo "<tbody>";


        while ($row = $result->fetch_assoc())
        {
            $ddocumento_dueño=stripslashes($row["documento_dueño"]); // Traigo el documento del dueño de la mascota
            $ddocumento_mascota=stripslashes($row["documento_mascota"]); //Traigo el documento de la mascota
                
                echo "<tr>

                    <td> $ddocumento_dueño </td> 
                    <td> $ddocumento_mascota </td>

                    <td> <form method='post' action='neg_eliminar_registro.php'> 
                    <input type='text' value='$ddocumento_dueño' hidden name='documento_dueño'> 
                    <input type='text' value='$ddocumento_mascota' hidden name='documento_mascota'> 
                    <input type='submit' value='Eliminar'>
                    </form>
                    </td>

                    </tr>";

        }//fin de la consulta 

        //hacer un boton para eliminar los registros, crear una capa para eliminar los registros, separar la consulta (crar una nueva consulta para hacer el eliminar y no en el ultimo ya existente)

        echo "</tbody>";

        echo '</table>';

    }

}

$final = new usuario();
$final->listar_en_tabla();

?>