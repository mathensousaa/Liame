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

$strSQL = "SELECT texto_diario_gestacao, data_hora_diario_gestacao FROM registro_diario WHERE id_diario_gestacao = '$id_diario_gestacao' ORDER BY  data_hora_diario_gestacao DESC  ";
$r = mysqli_query($link,$strSQL); 

while($row = mysqli_fetch_array($r)){
    echo $row['texto_diario_gestacao'] ;
    echo $row['data_hora_diario_gestacao'];
}
}else if($id_mae == 0){
  header('Location: login_mae.php');
    
  }

  
?>