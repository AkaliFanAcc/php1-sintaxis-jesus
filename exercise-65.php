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
  $sentencia = $conn -> prepare("INSERT INTO usuario (nombre, apellido, email) VALUES (?,?,?)");

  $sentencia -> bind_param("sss", $nombre, $apellido, $email);

  //parametros
  $nombre="Andrea";
  $apellido="Artiaga";
  $email="andrea@gmail.com";
  $sentencia->execute();

  $nombre="Julia";
  $apellido="Ramona";
  $email="lito@gmail.com";
  $sentencia->execute();

  $nombre="Nicolas";
  $apellido="Chanfles";
  $email="recorchoolis@gmail.com";
  $sentencia->execute();

  $nombre="ñaa";
  $apellido="pinga";
  $email="cawe@gmail.com";
  $sentencia->execute();

  echo "Nuevos registros creados satisfactoriamente";


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
  $sentencia->close();
  $conn->close();

?>