<?php

    include 'php/registro_mae.php';

?>

<!DOCTYPE html>
<html lang="pt-br">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Liame - Unindo do início ao fim.</title>

  <!--implementação bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!--css-->
  <link rel="stylesheet" href="assets/css/styles.css">

  <!--favicon-->
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-png">

  <!--unicons (icones que serão usados no site)-->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


</head>

<body class="fundo">

  <!--cabeçalho-->
  <header class="cabecalho cabecalho-2">
    <div class="container-fluid" id="nav-container">
      <nav class="navbar navbar-expand-lg navbar-light flex-md-row bd-navbar">

        <!--logo-->
        <a href="index.html" class="navbar-brand ml-5">
          <img class="logo" src="assets\img\logo-liame-branca.png" alt="Liame">
        </a>
        <!--botão para menu hamburguer mobile-->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target-"#linksnavbar" aria-controls="liksnavbar" aria-expanded="false" aria-label="toggle">
          <span class="uil uil-bars"></span>
        </button>
        <!--link cabeçalho-->
        <div class="collapse navbar-collapse" id="linksnavbar">
          <div class="navbar-nav navbar-collapse justify-content-center">
            <a class="nav-item nav-link" id="especialistas-menu" href="php/especialistas.php">Especialistas</a>
            <a class="nav-item nav-link" id="consultas-menu" href="php/consultas.php">Consultas</a>
            <a class="nav-item nav-link" id="diário-de-bordo-menu" href="php/diario-de-bordo.php">Diário de Bordo</a>
            <a class="nav-item nav-link" id="quem-somos-menu" href="php/especialistas.php">Quem Somos</a>
            <a class="nav-item nav-link" id="planos-menu" href="php/planos.php">Planos para Especialistas</a>
          </div>
          <!--entrar/cadastro-->
          <div id="login" class="nav navbar-nav mr-5">
            <div class="nav-item">
              <a class="nav-item nav-link" href="layouts/entrar.html">
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
      <form class="" action="php/registro_mae.php" method="POST">
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
            <small>Já tem uma conta?<a class="ml-1"href="php/login.php">Entrar</a></small>
          </div>
        </div>

        <div class="page col-12">
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
            <button class="col-6 m-1 btn btn-1">Voltar</button>
            <button class="col-6 m-1 btn btn-1">Próximo</button>
          </div>
        </div>

        <div class="page col-12">
          <div class="pb-3">
            <h4>Detalhes de login</h4>
          </div>
          <div class="form-group pb-2">
            <label for="email_mae">E-mail</label>
            <input type="email" name="email_mae" id="email_mae" class="form-control form-control-lg" required>
          </div>
          <div class="form-row">
            <div class="form-group col-6">
              <label for="senha_mae">Senha</label>
              <input type="password" name="senha_mae " id="senha_mae" class="form-control form-control-lg" placeholder="8 dígitos" required>
            </div>
            <div class="form-group pb-2 col-6">
              <label for="confirmarsenha_mae">Confirmar senha</label>
              <input type="password" name="confirmarsenha_mae " id="confirmarsenha_mae" class="form-control form-control-lg" required>
            </div>
          </div>

          <div class="d-flex">
            <button class="col-6 m-1 btn btn-1">Voltar</button>
            <input class="submit col-6 m-1 btn btn-1" type="submit" name="submit" value="Enviar">
          </div>
        </div>
      </form>
    </div>

  </div>

  <!--implementação jquery, poppers.js e plugin bootstrap-->
  <script src="assets/js/scripts.js"></script>

  <!--progressbar-->
  <script src="assets/js/progressbar.min.js"></script>

  <!--biblioteca parallax-->
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>




