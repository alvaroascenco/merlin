<?php

//arquivo de conex�o com o banco de dados

  $server_name = "localhost";
  $db_user = "root";
  $db_password = "";
  $db_name = "merlindb";

  $conn = mysqli_connect($server_name, $db_user, $db_password, $db_name);

  if(!$conn){
    die("N�o foi poss�vel conectar ao banco de dados".mysqli_connect_error());
  }

 ?>
