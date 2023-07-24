<?php
//banner cuerpo footer, base de datos normalizada

header("Content-Type: text/html;charset-utf-8");
$db = new mysqli('locahost', 'root', '', 'pruebas1');
$acenos = $db-> query("SET NAMES 'utf8'");

if($db->connect_error > 0)
{

    die('Unable to connect to database [' . $db->connect_error . ']');
}

?>