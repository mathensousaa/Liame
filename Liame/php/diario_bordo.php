<?php
    echo "página do diário de bordo";
    if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
        session_start();
      }
    
    //check do the person logged in
    if($_SESSION['email_profissional']==NULL){
        //haven't log in
        echo "Você não está logado";
    }else{
        //Logged in
        echo "Bem-vindo " . $_SESSION['email_profissional'];
        
    }
?>