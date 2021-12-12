<?php
session_start();
include ('conexao.php');
if(isset($_SESSION['id_mae'])){
  $id_mae = $_SESSION['id_mae'];
} 
else{
  $id_mae = 0;
  
} 
if(isset($_SESSION['id_profissional'])){
  $id_profissional = $_SESSION['id_profissional'];

}
else{
   $id_profissional = 0;
}
if(isset($_SESSION['id_adm'])){
  $id_adm = $_SESSION['id_adm'];

}else{
  $id_adm=0;
}
if(($id_mae != 0)){

  $strSQL = "SELECT titulo_diario_gestacao, texto_diario_gestacao, data_hora_diario_gestacao FROM registro_diario WHERE id_mae = '$id_mae' ORDER BY  data_hora_diario_gestacao DESC";
  $r = mysqli_query($link,$strSQL); 
  $e= $r->fetch_array();
  $titulo_exibir = $e['titulo_diario_gestacao'];
  
  
  while($row = mysqli_fetch_array($r)){
    ?>
    
      <?php
  
    echo $row['titulo_diario_gestacao'] . "<br>";?>
   
  
  
    <?php
  
  $exibir= "SELECT texto_diario_gestacao FROM registro_diario WHERE titulo_diario_gestacao = '$titulo_exibir'";
  $query= mysqli_query($link,$exibir);
  $texto = mysqli_fetch_assoc($query);
  
  print_r( $texto);
  
  }
  
  
  
    
  
  
  /*while($row = mysqli_fetch_array($r)){
      echo $row['texto_diario_gestacao'] ;
      echo $row['data_hora_diario_gestacao'];
  }*/
  
}else{
  header('Location: ../index.php');
    
}

  
?>