<style>

div{

display: flex;
justify-content: center;
align-items: center;
height: 600px;

}

form{

box-shadow: -3px -3px 9px #706B6A,
3px 3px 7px rgba(147, 149, 151, 0.671);

}

input{

font-size: 25px;
margin: 15px;
border: none;

}

.btn{


}

</style>

<?php

echo '<div>';

echo '<form>';


echo '<input placeholder="Ingrese sus nombres" required name="nombres_dueño" >'; echo"<br>";

echo '<input placeholder="Ingrese sus apellidos" required name="apellidos_dueño" >'; echo"<br>";

echo '<input placeholder="Ingrese su documento" required name="documento_dueño" >'; echo"<br>";

echo '<input placeholder="Ingrese su celular" required name="numero_celular" >'; echo"<br>";

echo '<input placeholder="Ingrese nombre mascota" required name="nombre_mascota" >'; echo"<br>";

echo '<input placeholder="Ingrese el tipo mascota" required name="tipo_mascota" >'; echo"<br>";

echo '<input placeholder="Ingrese el documento " required name="documento_mascota" >'; echo"<br>";

echo '<input type="submit" class="btn" value="Enviar">';

echo '</form>';

echo '</div>';

?>