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

  //Crear base de datos desde PHP
  $query = "CREATE DATABASE ejemplo_jesus";
  if($conn->query($query)===TRUE){
    echo "La base de datos ha sido creada satisfactoriamente";
  } else {
    "Error al crear la base de datos".$conn -> error;
  }
  $conn -> close();
?>