<?php

//Esta es la capa de negocio 

class operacion  // defino la clase
{

    public function restar($dato1,$dato2)// los parametros de la funcion son los atributos 
    {
        $resultado = $dato1 - $dato2; 
        echo "El resultado es: ";
        echo $resultado;
    }// fin del metodo

}// fin de la clase

$final = new operacion(); // a la variable le asigno la operacion de arriba 
$final -> restar($_POST['dato1'],$_POST['dato2']); // la variable final toma los valores de dato1 y dato2 

echo '<br>';
echo '<a href="index.php" >Volver al inicio </a>';
?>