<style>
    
*{
    background-color: #fff;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

h1{
    font-size:40;
    text-align: center;
}

.form-register{
    font-size: 25px;
    background-color: #D3CDCC;
    text-align: center;
    padding: 20px;
    flex-direction: column;
    box-shadow: #000;
}

.register{
    font-size: 25px;
    background-color: #D3CDCC;
    margin-left: 34%;
    padding: 20px;
    flex-direction: column;
    width: 30%;
}


</style>

<?php

    echo "<h1>Formulario </h1>";

    echo "<form class='register'>";

    echo "<div class='form-register'>";
    echo "Nombres: <input type='text' placeholder='Ingrese sus nombres' >";
    echo "<br/>";
    echo "Apelllidos: <input type='text' placeholder='Ingrese sus apellidos' >";
    echo "<br/>";
    echo "documento: <input type='text' placeholder='Ingrese su documento ' >";
    echo "<br/>";
    echo "Fecha nacimiento: <input type='text' placeholder='Ingrese su fecha nacimiento' >";

    echo "</form>";
    echo "</div>";

?>