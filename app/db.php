<?php
  session_start();

  $connect_db = mysqli_connect(
    "localhost",
    "root",
    "",
    "wc_db"
  );

  // if(!$connect_db) {
  //   echo "Error al conectarse a la base de datos";
  // } else {
  //   echo "Conexión establecida";
  // }
?>
