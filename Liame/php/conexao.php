<?php
<<<<<<< HEAD
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "liame";
  $mysqli = new mysqli($host, $user, $pass, $db);

if($mysqli -> connect_errno)
    echo "Falha na Conexão: (".$mysqli -> connect_errno.")" .$mysqli ->connect_error;
=======
  <?php
  $link = mysqli_connect("localhost", "root", "", "liame");
   
  if (!$link) {
      echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
      echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
      echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
      exit;
  }
   
  echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;
   
 
  ?> 
>>>>>>> af00506ed8f874e407710a7357ab4d7ae69e00a7

?>
