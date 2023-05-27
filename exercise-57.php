<?php 
  $miArchivo = fopen("ejemplo.txt", "r") or die ("No se puede abrir el archivo");

  echo fread($miArchivo, filesize("ejemplo.txt"));

  fclose($miArchivo);
?>