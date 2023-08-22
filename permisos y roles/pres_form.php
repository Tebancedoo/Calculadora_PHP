<style>
.formulario input{
    font-size:20px;

}    

</style>

<?php

echo '<h1>Formulario</h1>'; echo '<br>';

echo '<form class="formulario">';

echo '<input value="Documento" type="text">'; echo '<br>';
echo '<input value="Nombres" type="text">'; echo '<br>';
echo '<input value="Apellidos" type="text">'; echo '<br>';
echo '<input value="Enviar" type="submit">'; echo '<br>';

echo '</form>';

//en la capa de registrar insertar los datos en la tabla usuarios 
//y hacer otro insert con el documento y le rol por default(usuario)

?>