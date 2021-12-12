<?php
    include('conexao.php');
   
    $titulo=$_GET['titulo'];
    $puxar_texto = "SELECT texto_diario_gestacao FROM registro_diario WHERE titulo_diario_gestacao = '$titulo'";
    $resultado = mysqli_query($link, $puxar_texto);
    $r = $resultado->fetch_array();
 
    echo $r['texto_diario_gestacao'];
  



?>