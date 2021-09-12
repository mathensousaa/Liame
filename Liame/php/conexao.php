<?php
$link = mysqli_connect("localhost:3306", "root", "", "Liame");

  /*$link = mysqli_connect("localhost: 66", "root", "", "liame");*/
  /*$link = mysqli_connect("localhost", "root", "", "liame");*/
  if (!$link) {
      echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
      echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
      echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
      exit;
  }

  echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;
?>