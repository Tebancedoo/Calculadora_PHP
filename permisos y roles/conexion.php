<?php

header("Content-Type: text/html charset=utf-8");
$db new mysqli('localhost', 'root','', 'pruebaspermisos');
$acentos = $db->query("SET NAMES 'utf8'");

?>

