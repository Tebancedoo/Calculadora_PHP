<style>

p{
   font-size: 28px;
    text-align: center;
    align: center;
}

</style>

<?php

    include ('pres_banner.php');

    class usuario
    {

        public function registrar($nombre,$apellido,$documento) 
        {
            include ('conexion.php');

            $cont = "0";

            $sql = "SELECT * FROM usuarios WHERE documento='$documento'";

            if (!$result = $db->query($sql))
            {
                die ('Hay un error en la consulta o datos no encontrados [' . $db->error . ']');
            }

            while ($row = $result->fetch_assoc())
            {
                $nombre = stripslashes($row["nombre"]);
                $apellido = stripslashes($row["apellido"]);
                $documento = stripslashes($row["documento"]);
                $cont = $cont + 1;
            }

            if ($cont == "0")
            {

                mysqli_query($db, "INSERT INTO usuarios (nombre,apellido,documento) VALUES ('$nombre','$apellido','$documento')") or die(mysqli_error($db));
                echo "<p> Usted ha sido registrado correctamente </p>  ";
            }else
            {
                echo "<p> No se puede registrar en base de datos </p>";

            }//fin del metodo
        }//fin del ojeto
    }//fin de la clase 

    $final = new usuario();
    $final->registrar($_POST["nombre"],$_POST["apellido"],$_POST["documento"]);

    echo "<a href='index.php'> Regresar </a>";

    include ('pres_footer.php');

?>