<?php 
  $host = "localhost";
  $dbname = "ejemplo_jesus";
  $user = "root";
  $pass = "";

  //Crear conexión
  $conn = new mysqli($host, $user, $pass, $dbname);

  //Chequeo de conexión
  if($conn -> connect_errno){
    die("Error de conexión: ".$conn -> connect_errno);
  } else {
    echo "Conectado satisfactoriamente";
    echo "<br>";
  }

  //Crear tabla
  $query = "CREATE TABLE usuario(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    regdate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

  if($conn->query($query)===TRUE){
    echo "La tabla ha sido creada satisfactoriamente";
  } else {
    "Error al crear la tabla".$conn -> error;
  }

  /* 

  if(mysqli_query($conn, $query)){
    echo "La tabla fue creada";
  } else {
    echo "Error, la tabla no pudo ser creada" . $conn->error;
  }
   
  */

  $conn->close();

?>