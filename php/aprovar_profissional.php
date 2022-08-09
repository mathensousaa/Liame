<?php
//conexao com o banco de dados 
    include ('conexao.php');

//session para ver se o adm esta logado
    session_start();
    if(isset($_SESSION['id_mae'])){
      $id_mae = $_SESSION['id_mae'];
    }else{
      $id_mae = 0;
      
    }if(isset($_SESSION['id_profissional'])){
      $id_profissional = $_SESSION['id_profissional'];
    
    }else{
       $id_profissional = 0;
    }if(isset($_SESSION['id_adm'])){
      $id_adm = $_SESSION['id_adm'];
    
    }else{
      $id_adm=0;
    }if(($id_adm != 0)){

        
    //regatar id do profissional da url
    $id_profissional = $_GET['id'];
    
    if(!empty($id_profissional)){
    //aprovando o usuario mudando o status de 0 para 1
        $aprovar_profissional = 'UPDATE profissional SET status_validacao_profissional = 1 WHERE id_profissional =  "'.$id_profissional.'"';
        $resultado = mysqli_query($link,$aprovar_profissional);
        if(mysqli_affected_rows($link)){
            $_SESSION['msg'] = "<p> Profissional aprovado com sucesso</p>";
            header('location: validacao_profissional');
        }else{
    //erro ao aceitar usuario
            $_SESSION['msg'] = "<p> Erro aprovar profissional</p>";
            header('location: validacao_profissional');
        }
    }else{
    // caso a url não tiver id 
        $_SESSION['msg'] = "<p> É necessário selecionar um usuário</p>";
        header('location: validacao_profissional');
    }
    
//else da session caso não tiver logado com adm
    }else if($id_adm == 0){
        header('Location: ../index.php'); 
    }else{
        header("Location:../index.php");
    }
?>