<?php

    include("banner.php");//incluyo una imagen como baner 
    
    echo "<br/>";
    echo '<form method="POST" action="neg_evaluar_edad.php" >';
    echo 'Documento: <input type="text" name="documento">';
    echo "<br/>";
    echo 'Edad: <input type="text" name="edad">';
    echo "<br/>";
    echo '<input type="submit" value="Enviar">';
    echo "</form>";

?>