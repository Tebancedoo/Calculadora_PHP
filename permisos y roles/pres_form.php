<style>
.formulario input{
    font-size:20px;

}    

</style>

<?php

echo '<h1>Formulario</h1>'; echo '<br>';
echo "fhfhfhfg";
echo '<form class="formulario" action="neg_registrar.php" method="post">';

echo '<input placeholder="Documento" type="number" required name="documento" >'; echo '<br>';
echo '<input placeholder="Nombres" type="text" required name="nombre">'; echo '<br>';
echo '<input placeholder="Apellidos" type="text" required name="apellido">'; echo '<br>';
echo '<input value="Enviar" type="submit">'; echo '<br>';

echo '</form>';

//en la capa de registrar insertar los datos en la tabla usuarios 
//y hacer otro insert con el documento y le rol por default(usuario)

/*hacer un inserta a la tabla usuarios y luego otro insert a la tabla permisos con el permiso 2(usuario) por default */
?>