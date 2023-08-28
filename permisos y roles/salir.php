<?php

session_start();

$_SESSION["documento"] = "0";
$_SESSION["admin"] = "0";
$_SESSION["usuario"] = "0";
$_SESSION["vendedor"] = "0";
$_SESSION["supervisor"] = "0";

header("Location: index.php");

?>