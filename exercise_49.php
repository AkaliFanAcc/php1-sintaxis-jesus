<?php
  declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fecha y hora en PHP</title>
</head>
<body>
<?php
  /* 
    La función date() sirve para formatear fecha y hora 

    Obtener fechas

    - d -Representa el día del mes (01-31)
    - m -Representa un mes (01-12)
    - y -Representa un año (en cuatro dígitos)
    - l -Representa el día de la semana
  */
  echo "Hoy es: " . date("Y/M/D")."<br>";
  echo "Hoy es: " . date("Y.M.D")."<br>";
  echo "Hoy es: " . date("Y-M-D")."<br>"; 
  echo "Hoy es: " . date("l")."<br>";
  echo "<br>"
  
  ?>

  <?php
    /* 
      Obtener el tiempo 

      H -Formato de 24h de una hora (00 a 23)
      h -Formato de 12hh de una hora con ceros a la izquierda (01 a 12)
      i -Minutos con ceros a la izquierda (00 a 59)
      s -Segundos con ceros a la izquierda (00 a 59)
      a -am y pm en minúsculas
    */
    echo "La hora es: " . 
    date("h:i:sa");

    /* Obteniendo la zona horaria */
    echo "<br>";
    date_default_timezone_set("America/Los_Angeles");
    echo "La hora de LA: ".
    date("h:i:sa");
    echo "<br>";

    /* mktime(horas, minutos, segundos, mes, dia, año) */

    $date = mktime(11,14,35,5,25,2023);
    echo "La fecha creada es: ".date("y-m-d h:i:sa", $date);

    /* 
      strtotime(cadena de caracteres con fecha);
    */
    echo "<br>";
    $fechaHumana = strtotime("11:53am January 25 2010");
    echo "La fecha creada es ". date("y-m-d h:i:sa", $fechaHumana);
    echo "<br>";

    $ejemplo1 = strtotime("tomorrow");
    echo "El día de mañana es: ". date("y-m-d h:i:sa",$ejemplo1);
    echo "<br>";

    $ejemplo1 = strtotime("next wednesday");
    echo "El próximo domingo es: ". date("y-m-d h:i:sa",$ejemplo1);
    echo "<br>";

    $ejemplo1 = strtotime("+5 Months");
    echo "En los próximos 5 meses será: ". date("y-m-d h:i:sa",$ejemplo1);
    echo "<br>";

    /* Ejemplo de lógica de fechas */
    $fechaInicio = strtotime("Thursday");
    $fechaFin = strtotime("+8 Weeks", $fechaInicio);
    echo "<br>";

    while ($fechaInicio < $fechaFin){
      echo date("M d", $fechaInicio). "<br>";
      $fechaInicio = strtotime("+1 week", $fechaInicio);
    }

    /* Vamos a saber cuánto falta para una fecha en específico, en este caso hasta el 25 de diciembre */

    $fecha1=strtotime("December 25 ");
    $fecha2=ceil(($fecha1-time())/60/60/24);
    $fecha3=date("d-M h:i:sa", $fecha1);
    echo "<br>";
    echo "Hay ".$fecha2." días hasta el ".$fecha3;
    
  ?>


  <br><br>
  <!-- Para generar un copyright automático -->
  &copy; 2020-<?= date("Y");?>



</body>
</html>