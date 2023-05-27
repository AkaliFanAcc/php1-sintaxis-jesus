<?php 
  $host = "localhost";
  $user = "root";
  $pass = "";

  //Crear conexión
  $conn = new mysqli($host, $user, $pass);

  //Chequeo de conexión
  if($conn -> connect_errno){
    die("Error de conexión: ".$conn -> connect_errno);
  } else {
    echo "Conectado satisfactoriamente";
  }

  //Cerrar conexión
  //$conexion -> close();
?>