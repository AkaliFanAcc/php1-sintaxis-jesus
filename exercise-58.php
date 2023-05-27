<?php 
  $miArchivo = fopen("ejemplo2.txt", "w") or die ("No se puede abrir el archivo");

  $texto = "Hola, cómo tas\n";
  fwrite($miArchivo, $texto);

  $texto = "Hola, gumorni\n";
  fwrite($miArchivo, $texto);



  fclose($miArchivo);
?>