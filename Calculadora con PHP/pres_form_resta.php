<?php

    //Esta es la capa de presentacion 

    echo 'Digite los valores para realizar una resta';

    echo '<br/>';

    echo '<form name="resta" method="POST" action="neg_restando.php">';

    echo "<br>";

    echo 'Dato1: <input name="dato1" type"text" >';

    echo '<br/>';

    echo 'Dato2: <input name="dato2" type"text" >';

    echo '<br/>';

    echo '<input  name="resta" type="submit" value="Enviar" >';

    echo '</form>';

?>