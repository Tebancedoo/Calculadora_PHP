<?php

session_start();

if ($_SESSION["supervisor"] != "1")
{
    header("Location: salir.php");
}

?>