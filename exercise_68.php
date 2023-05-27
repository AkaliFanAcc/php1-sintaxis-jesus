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

   $query = "SELECT id, nombre, apellido FROM usuario ORDER BY nombre";
   $resultado = $conexion -> query($query);

   if ($resultado -> num_rows > 0) {
      while($fila = $resultado -> fetch_assoc()) {
         echo "id: " . $fila["id"] . " - nombre: " . $fila["nombre"] . " - apellido: " . $fila["apellido"] . "<br>";
      }
   } else {
      echo "0 resultados";
   }

   $conexion -> close();
?>