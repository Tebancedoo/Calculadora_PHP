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

input,select{

font-size: 25px;
margin: 15px;
border: none;
background: none;
outline: none;
border-radius: 5px;
width: 100%;
color: gray;

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

p{

    font-size: 25px;
    color: #fff;
    width: 77%;
}

</style>

<?php

include ('conexion.php');

echo '<div class="content">';

echo '<form method="post" action="neg_registrar_user.php">';

echo '<p> Registrar usuario </p>';

echo '<input type="text" placeholder="Ingrese sus nombres" required name="nombres_dueño" >'; echo"<br>";

echo '<input type="text" placeholder="Ingrese sus apellidos" required name="apellidos_dueño" >'; echo"<br>";

echo '<input type="number" placeholder="Ingrese su documento" required name="documento_dueño" >'; echo"<br>";

echo '<input type="number" placeholder="Ingrese su celular" required name="numero_celular" >'; echo"<br>";

echo '<input type="submit" class="btn" value="Enviar">';

echo '</form>';

echo '</div>';

?>