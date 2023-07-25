<?php
/*


            $nacimiento = '11-02-2005';
            date_default_timezone_set("America/Bogota");//utilizo la zona horario de bogota
            $hoy = date("Y-m-d H:i:s");  //guardo la fecha y hora actual en una variable
            $datetime1 = date_create($hoy);
            $datetime2 = date_create($nacimiento);
            $interval = date_diff($datetime1, $datetime2);
            echo $interval->format('%R%a días');
            */

            $nacimiento = '11-02-2005';
            date_default_timezone_set("America/Bogota");//utilizo la zona horario de bogota
            $hoy = date("Y-m-d H:i:s");  //guardo la fecha y hora actual en una variable
            $datetime1 = new DateTime($nacimiento);//fecha nacimiento
            $datetime2 = new DateTime($hoy);//fecha hoy
            $interval = $datetime1->diff($datetime2);
            echo $interval->format('%R%a dias');
            
            
?>