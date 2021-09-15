


<!DOCTYPE html>
<html lang="pt-br">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="Cache-Control" content="no-cache" />

  <title>Liame - Unindo do início ao fim.</title>

  <!--implementação bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


  <!--css-->
  <link rel="stylesheet" href="../assets/css/styles.css">

  <!--favicon-->
  <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-png">

  <!--unicons (icones que serão usados no site)-->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


</head>

<body class="fundo">

  <!--cabeçalho-->
  <header class="cabecalho cabecalho-2">
    <div class="container-fluid" id="nav-container">
      <nav class="navbar navbar-expand-lg navbar-light flex-md-row bd-navbar">

        <!--logo-->
        <a href="../index.php" class="navbar-brand ms-5">
          <img class="logo" src="../assets/img/logo-liame-branca.png" alt="Liame">
        </a>
        <!--botão para menu hamburguer mobile-->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target-"#linksnavbar" aria-controls="liksnavbar" aria-expanded="false" aria-label="toggle">
          <span class="uil uil-bars"></span>
        </button>
        <!--link cabeçalho-->
        <div class="collapse navbar-collapse" id="linksnavbar">
          <div class="navbar-nav navbar-collapse justify-content-center">
            <a class="nav-item nav-link" id="consultas-menu" href="esqpecialistas.php">Consultas</a>
            <a class="nav-item nav-link" id="diário-de-bordo-menu" href="diario_bordo.php">Diário de Bordo</a>
            <a class="nav-item nav-link" id="quem-somos-menu" href="../layouts/quem_somos.html">Quem Somos</a>
            <a class="nav-item nav-link" id="planos-menu" href="planos.php">Planos para Especialistas</a>
          </div>
          <!--entrar/cadastro-->
          <div id="login" class="nav navbar-nav mr-5">
            <div class="nav-item">
              <a class="nav-item nav-link" href="login.php">
                <i class="uil uil-user"></i>
                Entrar
              </a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>


  <div class="container formulario">
      <div class="registro text-center p-5">
        <h1>Criar conta</h2>
      </div>
      <div class="barra-progresso pb-5 text-center">
        <div class="row">
          <div class="step col-4">
            <p>Nome</p>
            <div class="bullet text-center">
              <span>1</span>
            </div>
            <div class="check">
              <i class="uil uil-check"></i>
            </div>
          </div>
          <div class="step col-4">
            <p>Usuário</p>
            <div class="bullet">
              <span>2</span>
            </div>
            <div class="check">
              <i class="uil uil-check"></i>
            </div>
          </div>
          <div class="step col-4">
            <p>Login</p>
            <div class="bullet">
              <span>3</span>
            </div>
            <div class="check">
              <i class="uil uil-check"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="estrutura">
      <form class="" action="cadastro_mae.php" method="POST">
        <div class="page slidepage col-12">
          <div class="pb-3">
            <h4>Informações básicas</h4>
          </div>
          <div class="form-group pb-2">
            <label for="nome_mae">Nome</label>
            <input type="text" name="nome_mae " id="nome_mae" class="form-control form-control-lg" required>
          </div>
          <div class=" form-group pb-2">
            <label for="sobrenome_mae">Sobrenome</label>
            <input type="text" name="sobrenome_mae " id="sobrenome_mae" class="form-control form-control-lg" required>
          </div>
          <div class="d-flex nextBtn">
            <button class="btn btn-1">Próximo</button>
          </div>
          <div class="text-center mt-3">
            <small>Já tem uma conta?<a class="ms-1"href="login.php">Entrar</a></small>
          </div>
        </div>

        <div class="page slidepage col-12">
          <div class="pb-3">
            <h4>Detalhes de usuário</h4>
          </div>
          <div class="form-group pb-2">
            <label for="apelido_mae">Nome de usuário</label>
            <input type="text" name="nome_usuario" id="nome_usuario" class="form-control form-control-lg" required>
          </div>
          <div class="form-group pb-2">
            <label for="foto_perfil_mae">Foto de perfil</label>
            <input type="file" name="foto_perfil_mae" id="foto_perfil_mae" class="form-control-file foto_perfil_mae" required>
          </div>
          <div class="d-flex">
            <button class="prev-1 col-6 m-1 btn btn-1">Voltar</button>
            <button class="next-1 col-6 m-1 btn btn-1">Próximo</button>
          </div>
        </div>

        <div class="page slidepage col-12">
          <div class="pb-3">
            <h4>Detalhes de login</h4>
          </div>
          <div class="form-group pb-2">
            <label for="email_mae">E-mail</label>
            <input type="email" name="email_mae" id="email_mae" class="form-control form-control-lg">
          </div>
          <div class="form-row">
            <div class="form-group col-6">
              <label for="senha_mae">Senha</label>
              <input type="password" name="senha_mae " id="senha_mae" class="form-control form-control-lg" placeholder="8 dígitos">
            </div>
            <div class="form-group pb-2 col-6">
              <label for="confirmarsenha_mae">Confirmar senha</label>
              <input type="password" name="confirmarsenha_mae " id="confirmarsenha_mae" class="form-control form-control-lg">
            </div>
          </div>

          <div class="d-flex">
            <button class="prev-2 col-6 m-1 btn btn-1">Voltar</button>
            <input class="submit col-6 m-1 btn btn-1" type="submit" name="submit" value="Enviar">
          </div>
        </div>
      </form>
    </div>
  </div>

  <!--implementação jquery, poppers.js e plugin bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  <script src=""></script>

  <!--progressbar-->
  <script src="../assets/js/progressbar.min.js"></script>

  <!--biblioteca parallax-->
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

</html>


<?php

// iniciando as variaveis e conectando ao banco

  session_start();

  $nome_usuario = "";
  $email_mae = "";
  $senha_mae ="";
  $confirmarsenha_mae = "";
  $nome_mae = "";
  $sobrenome_mae = "";
  $foto_perfil = "";

  $erro = array();

include 'conexao.php';

  // registrando

  if(isset($_POST['submit'])){

  $nome_mae = mysqli_real_escape_string($link, $_POST['nome_mae']);
  $nome_usuario = mysqli_real_escape_string($link, $_POST['nome_usuario']);
  $sobrenome_mae = mysqli_real_escape_string($link, $_POST['sobrenome_mae']);
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
    $query = 'INSERT INTO mae (nome_mae, apelido_mae, email_mae, senha_mae, foto_perfil_mae) VALUES ("'.$nome_mae.'", "'.$nome_usuario.'", "'.$email_mae.'", "'.$senha.'", "'.$foto_perfil.'");';

    mysqli_query($link, $query);

    $_SESSION['apelido_mae'] = $nome_usuario;
    $_SESSION['success'] = "Cadastro realizado com sucesso";



   }


  ?>