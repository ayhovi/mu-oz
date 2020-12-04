<?php
  $host = 'localhost';
  $user = 'root';
  $password= '';
  $db= 'bd_trabajo';
  $conection= @mysqli_connect($host,$user,$password,$db);
  if (!$conection) {
    echo " No se a podidio establecer conexion " ;
  }
?>
