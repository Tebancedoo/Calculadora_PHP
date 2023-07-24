<?php

class footer 
{

    public function presentar()
    {
        echo '<footer class=" text-center "><div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)"><a class="text-dark" href="index.php">Form</a></div></footer>';
        //fin del metodo
    }//fin del objeto

}//fin de la clase  

$final = new footer();
$final -> presentar();

?>