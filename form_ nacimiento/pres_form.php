<style>
    
*{
    font-family: 'Sans-serif';
}

h1{
    font-size: 40;
    text-align: center;
    background: none;
}

.div-register{
    background-color: #D3CDCC;
    text-align: center;
    padding: 20px;
    flex-direction: column;
    
}

.register{
    background-color: #D3CDCC;
    margin-left: 34%;
    padding: 20px;
    flex-direction: column;
    width: 30%;
    border-radius: 20px;
    box-shadow: 10px 5px 5px black;
    margin-top: 8%;

}

.element {
    padding: 4px;
    border: none;
    background-color: #D3CDCC;
    cursor: auto;
    font-size: 16px;
    border-radius: 10px;
    color: #000;
    margin: 5 10;
}

.btn{
    background: black;
    cursor: pointer;
    border: none;
    padding: 6px;
    margin: 8px;
    color: #fff;
    font-size: 20px;
    position: relative;
    border-radius: 12px;
    box-shadow: 10px 5px 5px gray;
}


</style>

<?php

    echo "<form class='register' action='neg_registrar.php' method='post'>";

    echo "<h1>Registro </h1>";

    echo "<div class='div-register'>";
    
    echo "Nombres: <input type='text' placeholder='Ingrese sus nombres' name='nombres' class='element'required >";
    echo "<br/>";
    echo "Apelllidos: <input type='text' placeholder='Ingrese sus apellidos'  name='apellidos' class='element' required >";
    echo "<br/>";
    echo "Documento: <input type='number' placeholder='Ingrese su documento'  name='documento' class='element' required >";
    echo "<br/>";
    echo "Fecha nacimiento: <input type='date' name='nacimiento' class='element' required >";
    echo "<input type='submit' value='Enviar' class='btn'>";

    echo "</div>";
    echo "</form>";

?>