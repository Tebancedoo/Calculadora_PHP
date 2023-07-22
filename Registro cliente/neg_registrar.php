<?php

class usuario //clase
{

    public function registrar($nombre,$apellido,$documento,$genero)
    {
        include("conexion.php");

        $cont = "0";

        $sql = "SELECT * FROM usuarios WHERE documento='$documento'";

        if (!$result = $db->query($sql))
        {
            die('Hay un error corriendo en la consulta o los datos no se encontraron!!! [' . $db->error . ']');
        }

        while ($row = $result->fetch_assoc())
        {
            $nnombre = stripslashes($row["nombre"]);
            $aapellido = stripslashes($row["apellido"]);
            $ddocumento = stripslashes($row["documento"]);
            $ggenero = stripslashes($row["genero"]);
            $cont = $cont + 1;
        }

        if ($cont == "0")
        {
            mysqli_query($db,"INSERT INTO usuario (nombre,apellido,documento,genero) VALUES '$nombre', '$apellido','$documento','$genero')") or die(mysqli_error($db));
            echo "Usted ha sigo registrado correctamente";
        }else
        {
            echo "Usted ya se encuentra registrado en la base de datos";
        }
    }//fin del metodo
}//fin de la clase

$final = new usuario();
$final->registrar($_POST["nombre"],$_POST["apellido"],$_POST["documento"],$_POST["genero"]);

echo "<a href='index.php'> Regresar </a>";



?>