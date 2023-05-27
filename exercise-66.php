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

  //Insertar data
  $query = "SELECT id, nombre, apellido FROM usuario";
  $resultado = $conn -> query($query);

  if ($resultado -> num_rows > 0){
    while($fila = $resultado -> fetch_assoc()){
      echo "id: ".$fila["id"]." - nombre: ". $fila["nombre"]. " - apellido: ". $fila["apellido"]. "<br>";
    }
  } else {
    echo "0 resultados";
  }

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
  //$sentencia->close();
  $conn->close();

?>