<?php

// iniciando as variaveis e conectando ao banco

  session_start();

  $nome_profissional = "";
  $sobrenome_profissional = "";
  $telefone_profissional = "";
  $cep_profissional = "";
  $endereco_profissional = "";
  $numero_endereco_profissional = "";
  $bairro_profissional = "";
  $cidade_profissional = "";
  $estado_profissional = "";
  $servico_profissional = "";
  $numero_registro_profissional = "";
  $email_profissional = "";
  $foto_perfil_profissional = "";
  $senha_profissional = "";
  $confirmarsenha_profissional = "";

  $erro = array();

  $link = mysqli_connect("localhost:3306", "root", "", "Liame");

  include 'conexao.php';

  // registrando

  if(isset($_POST['submit'])){

  $nome_profissional = mysqli_real_escape_string($link, $_POST['nome_profissional']);
  $sobrenome_profissional = mysqli_real_escape_string($link, $_POST['sobrenome_profissional']);
  $telefone_profissional = mysqli_real_escape_string($link, $_POST['telefone_profissional']);
  $cep_profissional = mysqli_real_escape_string($link,$_POST['cep_profissional']);
  $endereco_profissional = mysqli_real_escape_string($link, $_POST['endereco_profissional']);
  $numero_endereco_profissional = mysqli_real_escape_string($link, $_POST['numero_endereco_profissional']);
  $bairro_profissional = mysqli_real_escape_string($link, $_POST['bairro_profissional']);
  $cidade_profissional = mysqli_real_escape_string($link, $_POST['cidade_profissional']);
  $estado_profissional = mysqli_real_escape_string($link, $_POST['estado_profissional']);
  $servico_profissional = mysqli_real_escape_string($link, $_POST['servico_profissional']);
  $numero_registro_profissional = mysqli_real_escape_string($link, $_POST['numero_registro_profissional']);
  $email_profissional = mysqli_real_escape_string($link, $_POST['email_profissional']);
  $foto_perfil_profissional = mysqli_real_escape_string($link, $_POST['foto_perfil_profissional']);
  $senha_profissional = mysqli_real_escape_string($link, $_POST['senha_profissional']);
  $confirmarsenha_profissional = mysqli_real_escape_string($link, $_POST['confirmarsenha_profissional']);
  }

  // validacao do formulario



  if($confirmarsenha_profissional != $confirmarsenha_profissional){

    array_push($erro, "Senhas precisam ser iguais");
    
   }

   //checando se o usuario e a senha ja existem

   $user_check_query = "SELECT * FROM profissional WHERE email_profissional = '$email_profissional' AND numero_registro_profissional = '$numero_registro_profissional' LIMIT 1";
   $resultado = mysqli_query($link, $user_check_query);

   $user = mysqli_fetch_assoc($resultado);

   if($user){

          if($user['email_profissional'] === $email_profissional){
    
            array_push($erro, "Esse email já está em uso");
            
          }

          if($user['numero_registro_profissional'] === $numero_registro_profissional){
    
            array_push($erro, "Esse número de registro pertence a outra conta");
            
          }
  

   }

   //registra se nao tiver erro

   if(count($erro) == 0){

    $senha = md5($senha_profissional);
    $query = "INSERT INTO profissional (nome_profissional, sobrenome_profissional, email_profissional, senha_profissional, foto_perfil_profissional, numero_registro_profissional, servico_profissional, numero_endereco_profissional, bairro_profissional, cidade_profissional, estado_profissional, cep_profissional, telefone_profissional ) VALUES ('$nome_profissional', '$sobrenome_profissional', '$email_profissional', '$senha_profissional', '$foto_perfil_profissional', '$numero_registro_profissional', '$servico_profissional', '$numero_endereco_profissional', '$bairro_profissional', '$cidade_profissional', '$estado_profissional', '$cep_profissional', '$telefone_profissional')";

    mysqli_query($link, $query);

    $_SESSION['nome_profissional'] = $nome_profissional;
    $_SESSION['success'] = "Cadastro realizado com sucesso";

    
   }


  ?>
