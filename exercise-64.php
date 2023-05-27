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
  $query = "INSERT INTO usuario(
    nombre, apellido, email) VALUES ('ño', 'Juana', 'cuacuas@mail.com');";
  $query .= "INSERT INTO usuario(
    nombre, apellido, email) VALUES ('ñi', 'Castro', 'añañin@mail.com');";
  $query .= "INSERT INTO usuario(
    nombre, apellido, email) VALUES ('ñe', 'Fernandez', 'lolimoli@mail.com');";

  if($conn->multi_query($query)===TRUE){
    echo "Se insertó la data";
  } else {
    "Error al insertar datos".$query. "<br>". $conn -> error;
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