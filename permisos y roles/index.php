<?php

session_start();

$_SESSION["documento"] = "0";
$_SESSION["admin"] = "0";
$_SESSION["usuario"] = "0";
$_SESSION["vendedor"] = "0";
$_SESSION["supervisor"] = "0";


include('pres_header.php');

include('pres_form.php');

include('pres_footer.php');

?>