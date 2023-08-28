<?php

session_start();

if ($_SESSION["vendedor"] != "1")
{
    header("Location: salir.php");
}

?>