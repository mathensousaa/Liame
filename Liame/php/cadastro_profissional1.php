<?php
    session_start();
    include ('conexao.php');
?>

<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cadastro - Profissional | Liame</title>
  <!-- CSS -->
  <link rel="stylesheet" href="../assets/css/owl/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/css/owl/owl.theme.default.min.css">
  <link rel="stylesheet" href="../assets/css/main.css">
  <!--favicon-->
  <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-png">
  <!--unicons (icones que serão usados no site)-->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
  <!--navbar-->
  <div id="header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
        <div class="container-fluid">
          <a href="../index.php" class="navbar-brand">
            <img class="img-fluid" id="logo" src="../assets/img/logo_liame.png" alt="Liame">
          </a>
        </div>
      </nav>
    </div>
  </div>
  <!--//navbar-->
  <main>
    <div id="login-container" class="d-flex">
      <div class="container justify-content-center align-self-center">
        <div class="row">
          <div class="col-md-6 align-center text-center">
            <img id="icone" class="img-fluid" src="../assets/img/icone-especialista.png" alt="">
            <h1 class="hero-title">
              Cadastro
            </h1>
            <h6 class="mb-5 subtitle">Bem-vindo! Faça seu cadastro para começar.</h6>
            <div class="">
              <form class="ps-lg-5 me-lg-5" action="cadastro_profissional1.php" method="post">
                <div class="mb-3">
                  <input name="nome_profissional" type="text" class="form-control input input-login" id="nome-profissional" placeholder="Nome" required>
                </div>
                <div class="mb-3">
                  <input name="email_profissional" type="email" class="form-control input input-login" id="email-profissional" aria-describedby="emailHelp" placeholder="Email" required>
                </div>
                <div class="mb-3">
                  <input name="senha_profissional" type="password" class="form-control input input-login" id="senha-profissional" placeholder="Senha" required>
                </div>
                <div class="mb-3">
                  <input name="confirmarsenha_profissional" type="password" class="form-control input input-login" id="senha-confirmar" placeholder="Confirmar senha" required>
                </div>
                <?php
                    if(!empty($_POST)){

                  
                    $nome_profissional = $_POST["nome_profissional"];
                    $email_profissional = $_POST['email_profissional'];
                    $senha_profissional = $_POST['senha_profissional'];
                    $confirmarsenha_profissional = $_POST['confirmarsenha_profissional'];
                    // validacao da senha
                    if($confirmarsenha_profissional == $senha_profissional){

                      //checando se o email ja existe
                      $user_check_query = "SELECT * FROM profissional WHERE email_profissional = '$email_profissional'";
                      $resultado = mysqli_query($link, $user_check_query);
                      $conta = mysqli_num_rows($resultado);

                      if($conta >= 1){

                      ?>
                      <div class="container text-center">
                        <h6>Este email já esta cadastrado</h6>
                      </div>
                      <?php
                      }else{
                          //criptografar senha
                          $senha_criptografada_profissional = md5($senha_profissional);

                          //inserir no banco de dados
                          $query = 'INSERT INTO profissional (nome_profissional, email_profissional, senha_profissional, documentacao_validacao_profissional, status_validacao_profissional) 
                          VALUES ("'.$nome_profissional.'", "'.$email_profissional.'", "'.$senha_criptografada_profissional.'", "", "0")';
                        }
                  }
                  }
                  ?>
                <div class="form-check mx-4">
                  <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                  <label>
                    Você deve concordar com os <a href="../layouts/termos_condicoes_uso.html"><u>termos de condições de uso</u></a>
                  </label>
                      </div>
                    </div>
                  <br>
                <div class="mb-3">
                  <input type="submit" class="hero-button button-primary btn btn-primary" value="Confirmar">
                </div>
                <ul class="list-unstyled">
                  <li class="list-item"><a href="login_profissional.php">Faça seu login</a></li>
              </ul>
              </form>
            </div>
          </div>

          </div>
        </div>
      </div>
    </div>


    <!--implementação jquery, poppers.js e plugin bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/bootstrap-validate.js"></script>
    <script src="../assets/js/main.js"></script>

    <script>
      bootstrapValidate('#email-profissional' , 'email:Insira um e-mail válido')
      bootstrapValidate('#senha-confirmar' , 'matches:#senha-profissional:As senhas devem ser iguais')
      bootstrapValidate('#nome-profissional' , 'required:Preencha este campo')
    </script>
</body>
</html>