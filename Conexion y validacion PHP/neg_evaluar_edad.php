<?php

include("banner.php");//incluyo una imagen como baner 
echo "<br/>";

?>
<?php

class usuario //defino una clase llamada usuario
{

    public function evaluar($documento,$edad)//defino un objeto con sus atributos
    {
        //Inicio del metodo

        if ($edad < 18)//valido si es mayor de edad

        {                                                          

            echo "Usted es menor de edad, no puede ingresar <br/>";
        }else/*if ($edad >= 18)*/ //tambien se puede hace con otro if, pero quise hacerlo con un else  
        {

            //Inicio registro en base de datos

            include("conexion.php");

            $cont="0";//creo un contador y lo inicializo en 0

            $sql = "SELECT * FROM usuarios WHERE documento='$documento'";//hago el select from desde la tabla con el documento

            if (!$result = $db->query($sql))
            {
                die('Hay un error corriendo en la consulta o los datos no se encontraron!!! [' . $db->error . ']');
            }

            while ($row = $result->fetch_assoc())
            {
                $iid_usuario = stripslashes($row["id_usuario"]); //las variables con doble letra al inicio, son las que vienen de la base de datos
                $ddocumento = stripslashes($row["documento"]); //esta variable tambien viene de la base de datos
                $cont = $cont + 1;
            }

            if ($cont == "0")
            {
                mysqli_query($db,"INSERT INTO usuarios (id_usuario, documento) VALUES (NULL, '$documento')") or die(mysqli_error($db));
                // si el contador es igual a cero me va a insertar los valores en la base de datos
                echo "Su documento ha sido registrado correctamente <br/>";
            }else /* if ($cont != "0")*/
            {
                echo "Este documento ya se encuentra registrado";
            }

            //Fin registro en base de datos

        }

        echo "El documento: $documento y la edad: $edad ";
        echo "<br/>";

    }//Fin de metodo

}//Fin de la clase

$final = new usuario();
$final->evaluar($_POST["documento"],$_POST["edad"]);

echo "<a href='pres_formulario_documento.php'> Regresar </a>";//link para devolverse 


?>