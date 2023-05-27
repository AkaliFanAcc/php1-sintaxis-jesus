<?php
   $nombreServidor = "localhost";
   $nombreUsuario = "root";
   $password = "";
   $baseDatos = "ejemplo_aristides";

   //crear conexion
   $conexion = new mysqli($nombreServidor, $nombreUsuario, $password, $baseDatos);

   //Chequeo de conexion
   if ($conexion -> connect_errno) {
      die("Conexion fallida: " . $conexion -> connect_errno);
   }

   $query = "UPDATE usuario SET apellido = 'zambrano' WHERE id = 2";
   
   if ($conexion -> query($query) === TRUE) {
      echo "Registro actualizado";
   } else {
      echo "Error actualizando registro: " . $conexion -> error;
   }

   $conexion -> close();
?>