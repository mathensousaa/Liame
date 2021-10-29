<?php
  session_start(); 
  if((!isset ($_SESSION['email_mae']) == true) and (!isset ($_SESSION['nome_mae']) == true)){ 
    unset($_SESSION['email_mae']);
    unset($_SESSION['nome_mae']);
    echo "Bem vindo $logado";    
  } 
  echo "uauuu";
  $logado = $_SESSION['nome_mae'];
?>