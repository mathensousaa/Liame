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
        <h1>Login</h2>
      </div>
      <div class="estrutura">
      <form class="" action="conexao.php" method="POST">
        <div class="page col-12">
          <div class="pb-3">
            <h4>Informações básicas</h4>
          </div>
					<div class="form-group pb-2">
            <label for="email_mae">Email</label>
            <input type="text" name="email_mae" id="email_mae" class="form-control form-control-lg" required>
          </div>
					<div class="form-grou pb-2">
						<label for="senha_mae">Senha</label>
						<input type="password" name="senha " id="senha" class="form-control form-control-lg" placeholder="8 dígitos" required>
					</div>
          <div class="d-flex nextBtn">
            <input class="submit col-6 m-1 btn btn-1" type="submit" name="submit" value="Enviar">
          </div>
          <div class="text-center mt-3">
            <small>
              <div class="row justify-content-center">
                Não tem uma conta?
              </div>
              <div class="row">
                <div class="col">
              <button type="button" class="btn-small btn-1" data-bs-toggle="modal" data-bs-target="#loginModal">
                Criar
              </button>
              </div>
              </div>
						</small>

          </div>
				</div>
      </form>
    </div>
  </div>
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Quem você é?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
        </div>
        <div class="row modal-body justify-content-center align-">

          <div class="col-12 d-flex profissional-content justify-content-center">
            <div class="botao">
              <a href="cadastro_profissional1.php">
                <i class="uil uil-medkit"></i>
                <h4>Profissional</h4>
              </a>
            </div>
          </div>

          <div class="col-12 d-flex mae-content justify-content-center">
            <div class="botao">
              <a href="cadastro_mae1.php">
                <i class="uil uil-user"></i>
                <h4>Mãe</h4>
              </a>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-1" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!--implementação jquery, poppers.js e plugin bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  <script src="../assets/js/scripts.js"></script>

  <!--progressbar-->
  <script src="../assets/js/progressbar.min.js"></script>

  <!--biblioteca parallax-->
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

</html>

<?php
   include("conexao.php");

    if(!isset($_SESSION))

    $_SESSION['email'] = $mysqli->escape_string($_POST['email']);
    $_SESSION['senha'] =md5(md5($_POST['senha_func']));

    $sql_code ="SELECT senha, codigo FROM usuário WHERE email ='$_SESSION[email]'";
    $sql_query =$mysqli->query($sql_code) or die ($mysqli->error);
    $dado =$sql_query->fetch_assoc();
    $total=$sql_query->num_rows;

    if($total == 0){
      $erro[] = "Este email não pertence a nenhum usuário.";
    }else{
      if($dado['senha'] == $_SESSION['senha']){
        $_SESSION['usuário'] = $dado['codigo'];
      }else{
        $erro[] ="senha incorreta.";
    }
  }
  if(count($erro) == 0 || !isset($erro)){

  }
 ?>
