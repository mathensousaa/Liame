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
    //deletando o usuario do banco
        $recusar_profissional = 'DELETE from profissional WHERE id_profissional =  "'.$id_profissional.'"';
        $resultado = mysqli_query($link,$recusar_profissional);
        if(mysqli_affected_rows($link)){
            $_SESSION['msg'] = "<p> Usuário removido da lista de profissionais</p>";
            header('location: validacao_profissional');
        }else{
    //erro ao deletar usuario
            $_SESSION['msg'] = "<p> Erro ao remover usuário da lista de profissionais</p>";
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