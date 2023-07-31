<style>

.content{

display: flex;
justify-content: center;
align-items: center;
height: 900px;



}

form{

box-shadow: -4px -4px 10px #706B6A, 4px 4px 8px rgba(147, 149, 151, 0.671);
background: none;
flex-direction: column;
background: #000000;



}

input{

font-size: 25px;
margin: 15px;
border: none;
background: none;
outline: none;
border-radius: 5px;
color: #fff;
width: 100%;

}

.btn{

    width: 90%;
    height: 45px;
    border-radius: 55px;
    background: rgba(255, 255, 255, 0.137);
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    border: none;
    margin-bottom: 1rem;
    cursor: pointer;
    transition: all 0.4s ease-in-out;

}

.btn:hover{
    box-shadow: 0px 0px 8px #ffffffa4;
}

</style>

<?php

echo '<div class="content">';

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