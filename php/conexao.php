<?php
if($link = mysqli_connect("localhost:3307", "root", "", "liame")){
  //echo "banco de dados conectado com sucesso </br></br>";
}else{
  echo "Error: Falha ao conectar-se com o banco de dados MySQL.";
}

?>
