<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "liame";
  $mysqli = new mysqli($host, $user, $pass, $db);

if($mysqli -> connect_errno)
    echo "Falha na Conexão: (".$mysqli -> connect_errno.")" .$mysqli ->connect_error;

?>
