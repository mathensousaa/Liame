<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cadastro - Administradores | Liame</title>
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
            
            <h1 class="hero-title">
              Cadastro
            </h1>
            <h6 class="mb-5 subtitle">Bem-vindo! Faça seu cadastro para começar.</h6>
            <div class="">
              <form class="ps-lg-5 me-lg-5" action="cadastro_adm2.php" method="post">
                <div class="mb-3">
                  <input name="nome_adm" type="text" class="form-control input input-login" id="exampleInputPassword1" placeholder="Nome" required>
                </div>
                <div class="mb-3">
                  <input name="email_adm" type="email" class="form-control input input-login" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
                </div>
                <div class="mb-3">
                  <input name="senha_adm" type="password" class="form-control input input-login" id="exampleInputPassword1" placeholder="Senha" required>
                </div>
                <div class="mb-3">
                  <input name="confirmarsenha_adm" type="password" class="form-control input input-login" id="exampleInputPassword1" placeholder="Confirmar senha" required>
                </div>
                <div class="mb-3">
                  <input type="submit" class="hero-button button-primary btn btn-primary" value="Confirmar">
                </div>
                <ul class="list-unstyled">
                  <li class="list-item"><a href="login_adm.php">Faça seu login</a></li>
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
    <script src="../assets/js/main.js"></script>
</body>

</html>
