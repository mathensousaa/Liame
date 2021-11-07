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

/*session_start ()  or die('A sessão não pode ser iniciada');

  if(function_exists("protect")){
   
    function protect(){

      if(isset($session)){
          session_start();
          echo "eee";
          
          }

      if(!isset($_session['email_mae']) || !is_numeric($_session['email_mae'])){
        header("Location: login.php");

      
      }
    }
  }*/
  //start session
  if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
    session_start();
  }

//check do the person logged in
if($_SESSION['email_mae']==NULL){
    //haven't log in
    echo "Você não está logado";
}else{
    //Logged in
    echo "Logado com sucesso!";
}


  

 ?>
