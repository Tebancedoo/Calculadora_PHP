<?php

    include ('pres_banner.php');

    class usuario
    {
        public function registrar($nombres,$apellidos,$documento,$nacimiento)
        {
            include('conexion.php');

            date_default_timezone_set("America/Bogota");//utilizo la zona horario de bogota
            $hoy = date("Y-m-d H:i:s");  //guardo la fecha y hora actual en una variable
            $datetime1 = new DateTime($nacimiento);//fecha nacimiento
            $datetime2 = new DateTime($hoy);//fecha hoy
            $interval = $datetime1->diff($datetime2);
            $date = $interval->format('%R%a');//date toma el valor de la edad
            $date =  round($date / 365); //divido la edad de dias pa que salga en años

            if ($date >= 18)
            {

            mysqli_query($db,"INSERT INTO usuarios (nombres,apellidos,documento,nacimiento) VALUES ('$nombres', '$apellidos','$documento','$nacimiento')") or die(mysqli_error($db));
            echo "Usted ha sigo registrado correctamente";     

            }else {

                echo "Usted no puede ingresar, debido a que es menor de edad";
            
            }// fin del metodo
        }//fi del objeto
    }//fin de la clase


    $final = new usuario();
    $final->registrar($_POST["nombres"],$_POST["apellidos"],$_POST["documento"],$_POST["nacimiento"]);
    
    echo "<a href='index.php'> Regresar </a>";

    include ('pres_footer.php');
?>
