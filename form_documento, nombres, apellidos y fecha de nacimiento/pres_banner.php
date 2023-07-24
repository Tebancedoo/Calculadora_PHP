<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> 
<!--Utilizo los estilos de bootstrap desde fuera de la etiqueta php-->

<?php

class banner
{

    public function imprimir()
    {
        echo '<nav class="navbar navbar-light bg-light"> <a class="navbar-brand" href="index.php"><img src="banner.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> Formulario</a></nav>';
        //fin del metodod

    }//Fin del objeto

}//Fin de la clase

$final = new banner();
$final ->imprimir();

?>
