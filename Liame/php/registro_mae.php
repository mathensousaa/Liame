<?php

// iniciando as variaveis e conectando ao banco

  session_start();

  $nome_usuario = "";
  $email_mae = "";
  $senha_mae ="";
  $confirmarsenha_mae = "";
  $nome_mae = "";
  $sobrenome_mae = "";

  $erro = array();

  include 'conexao.php';

  // registrando

  if(isset($_POST['submit'])){

  $nome_mae = mysqli_real_escape_string($link, $_POST['nome_mae']);
  $sobrenome_mae = mysqli_real_escape_string($link, $_POST['sobrenome_mae']);
  $nome_usuario = mysqli_real_escape_string($link, $_POST['nome_usuario']);
  $foto_perfil = mysqli_real_escape_string($link,$_POST['foto_perfil_mae']);
  $email_mae = mysqli_real_escape_string($link, $_POST['email_mae']);
  $senha_mae = mysqli_real_escape_string($link, $_POST['senha_mae']);
  $confirmarsenha_mae = mysqli_real_escape_string($link, $_POST['confirmarsenha_mae']);

  }

  // validacao do formulario



  if($confirmarsenha_mae!= $senha_mae){

    array_push($erro, "Senhas precisam ser iguais");
    
   }

   //checando se o usuario e a senha ja existem

   $user_check_query = "SELECT * FROM mae WHERE apelido_mae = '$nome_usuario' and email_mae = '$email_mae' LIMIT 1";
   $resultado = mysqli_query($link, $user_check_query);

   $user = mysqli_fetch_assoc($resultado);

   if($user){

      if($user['apelido_mae'] === $nome_usuario){

        array_push($erro, "Usuário já existente");

      }

          if($user['email_mae'] === $email_mae){
    
            array_push($erro, "Esse email já está em uso");
            
          }
  

   }

   //registra se nao tiver erro

   if(count($erro) == 0){

    $senha = md5($senha_mae);
    $query = "INSERT INTO mae (nome_mae, sobrenome_mae, apelido_mae, email_mae, senha_mae, foto_perfil_mae) VALUES ('$nome_mae', '$sobrenome_mae','$nome_usuario', '$email_mae', '$senha', '$foto_perfil')";

    mysqli_query($link, $query);

    $_SESSION['apelido_mae'] = $nome_usuario;
    $_SESSION['success'] = "Cadastro realizado com sucesso";

    header('location: index.php');
    
   }


  ?>
