<?php

    include ('pres_banner.php');

    class usuario
    {
        public function registrar($nombres,$apellidos,$documento,$nacimiento)
        {
            include('conexion.php');

            date_default_timezone_set("America/Bogota"); //utilizo la zona horario de bogota
            $hoy = date("Y-m-d H:i:s");  //guardo la fecha y hora actual en una variable
            $datetime1 = date_create($hoy);
            $datetime2 = date_create($nacimiento);
            $interval = date_diff($datetime1, $datetime2);
            echo $interval->format('días');


            if ($nacimiento)
            {

            }
        }
    }




    include ('pres_footer.php');
?>
