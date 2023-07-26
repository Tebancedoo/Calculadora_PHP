<style>

.form_div{
    background: #272221;
    color: #fff;
    padding: 2%;
    width: 30%;
    text-align: center;
    font-size: 20px;
    font-family: "Poppins", sans-serif;
    box-shadow: 3px 3px 3px 2px rgba(39, 34, 33, 0.5);
    border-radius:8px;
    align: center;
    align-items: center;
    margin-left: 32%;
    margin-top: 12%;

}

.element{
    padding: 1.5%;
    border: none;
    background: transparent;
    border: 0 solid;
    border-bottom: 1px solid rgba(white, .5);
    color: white;
    display: block;
    margin: 1rem;
    padding: .5rem;
    width: calc(100% - 3rem);
}

.element--items:hover{
    border-bottom: 1px solid #CFCCCB;
}

.btn{
    background: #F2F2F2;
    width: 100%;
    height: 5%;
    font-size: 20px;
    box-shadow: 3px 3px 3px 2px rgba(1, 1, 1, 0.9);
}

</style>

<?php

    echo "<div class='form_div'>";
    echo "<form method='post' action='neg_registrar.php'>";

    echo "<h2> Registro</h2>";

    echo 'Nombres: <input placeholder="Ingrese sus nombres" class="element element--items" type="text" required name="nombre">';
    echo "<br>";
    echo 'Apellidos: <input placeholder="Ingrese sus apellidos" class="element element--items" type="text" required name="apellido">';
    echo "<br>";
    echo 'Documento: <input placeholder="Ingrese su documento"  class="element element--items"type="number" required name="documento" >';
    echo "<br>";
    echo '<input type="submit" class="btn" value="Enviar">';
    echo "<br>";

    echo "</form>";
    echo "</div>";


?>