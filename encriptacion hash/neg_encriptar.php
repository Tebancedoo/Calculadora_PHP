<?php
//supongo una variable contraseña
$x = '123';

$password = password_hash($x, PASSWORD_DEFAULT);
echo '<br/>';

echo "La variale encriptada es: $password";

echo '<br/>';

$count = '0';

$y = '123';

if (password_verify($y, $password))
{
    $count = "1";
}
if($count == "1")
{
    echo "SON IGUALES";
}
else 
{
    echo "Son diferentes";
}

?>