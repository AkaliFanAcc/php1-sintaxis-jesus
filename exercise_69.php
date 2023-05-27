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

   $query = "DELETE FROM usuario WHERE id = 8";
   
   if ($conexion -> query($query) === TRUE) {
      echo "Registro eliminado";
   } else {
      echo "Error eliminando registro: " . $conexion -> error;
   }

   $conexion -> close();
?>