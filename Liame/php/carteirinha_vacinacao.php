<?php
  /*session_start(); 
  if((!isset ($_SESSION['email_mae']) == true) and (!isset ($_SESSION['nome_mae']) == true)){ 
    unset($_SESSION['email_mae']);
    unset($_SESSION['nome_mae']);
    echo "Bem vindo $logado";    
  } 
  echo "uauuu";
  $logado = $_SESSION['nome_mae'];
?>*/


  if(!function_exists("protect")){

    function protect(){

      if(!isset($session))
          session_start();

      if(!isset($_session['usuario']) || !is_numeric($_sessiom['usuario'])){
        header("Location: login.php");
      }
    }
  }

 ?>
