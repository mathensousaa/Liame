<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Liame - unindo do início ao fim.</title>

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/owl/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/main.css">

  <!--favicon-->
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-png">

  <!--unicons (icones que serão usados no site)-->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>

<body>
  <main>
    <!--navbar-->
    <div id="header" class="fixed-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
          <div class="container-fluid">
            <a href="index.php" class="navbar-brand">
              <img class="img-fluid" id="logo" src="assets/img/logo_liame.png" alt="Liame">
            </a>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" href="index.php">Página Inicial</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="php/procura_profissional1.php">Buscar especialistas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="php/diario_bordo.php">Diário de Bordo</a>
                </li>
              </ul>
              <!--entrar/cadastro-->
              <div id="login" class="nav navbar-nav">
                <div class="nav-item">
                  <button type="button" class="button button-primary btn btn-outline-primarynav-item " data-bs-toggle="modal" data-bs-target="#modal-login">
                    Entrar
                  </button>
                  </a>
                  <!-- Modal -->
                  <div class="modal fade" id="modal-login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Quem você é?</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body container-fluid block">
                          <div class="container my-4">
                            <div class="row">
                              <div class="col-lg-6 col-md-6 mb-4 mb-lg-0">
                                <a href="php/login-profissional.php" class="destaque">
                                  <div class="img-container mb-3">
                                    <img class="img-fluid" src="assets/img/Medico_home.png" alt="">
                                  </div>
                                  <div class="text-container">
                                    <h5>Especialista</h5>
                                  </div>
                                </a>
                              </div>
                              <div class="col-lg-6 col-md-6 mb-4 mb-lg-0">
                                <a href="php/login.php" class="destaque">
                                  <div class="img-container mb-3">
                                    <img class="img-fluid" src="assets/img/Vaccine.png" alt="">
                                  </div>
                                  <div class="text-container">
                                    <h5>Mãe</h5>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </nav>
      </div>

    </div>
    <!--//navbar-->

    <!-- Hero -->
    <div id="hero" class="d-flex">
      <div class="container justify-content-center align-self-center">
        <div class="row">
          <div class="col-md-6 align-center">
            <h1 class="hero-title mb-3">
              <span class="highlight">
                Sua gestação
              </span>
              é muito melhor com a gente!
            </h1>
            <h5 class="mb-5 subtitle">Juntos podemos fazer o melhor para o seu bebê e você, com acesso a um diário de bordo e profissionais à sua disposição.</h5>
            <div class="btn-container">
              <a href="#" class="hero-button button-primary btn btn-primary">Comece já</a>
            </div>
          </div>
          <div class="col-md-6 align-self-center">

          </div>
        </div>
      </div>
    </div>
    <!-- //Hero -->

    <!-- Serviços -->
    <div id="servicos" class="container-fluid block position-relative">
      <div class="container">
        <div class="row text-center mb-5">
          <h2 class="title">Nossos serviços</h2>
          <h5 class="subtitle">Que vão desde o início da gravidez até um ano de seu filho.</h5>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <a href="#" class="destaque">
              <div class="img-container mb-3">
                <img class="img-fluid" src="assets/img/icon_especialistas.svg" alt="">
              </div>
              <div class="text-container">
                <h5 class="text-uppercase">Consultas</h5>
                <p class="mb-0 subtitle">Marque consultas com profissionais de diversas especialidades próximos a você.</p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <a href="#" class="destaque">
              <div class="img-container mb-3">
                <img class="img-fluid" src="assets/img/icon_vacina.svg" alt="">
              </div>
              <div class="text-container">
                <h5 class="text-uppercase">Carteirinha</h5>
                <p class="mb-0 subtitle">Tenha uma carteirinha digital para acompanhar o calendário de vacinação de seu filho.</p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <a href="#" class="destaque">
              <div class="img-container mb-3">
                <img class="img-fluid" src="assets/img/Diario_de_bordo.png" alt="">
              </div>
              <div class="text-container">
                <h5 class="text-uppercase">Diário de bordo</h5>
                <p class="mb-0 subtitle">Registre os momentos mais importantes da sua maternidade em um diário de bordo.</p>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div id="nuvem-container" class="vector-container">
        <img id="nuvem-vector" src="assets/img/nuvem2.svg" class="vector">
      </div>
      <div id="nuvem2-container" class="vector-container">
        <img id="nuvem2-vector" src="assets/img/nuvem1.svg" class="vector">
      </div>
    </div>
    <!-- //Serviços -->

    <!-- Busca -->
    <div id="busca" class="container-fluid block position-relative">
      <div class="container">
        <div id="linha1-busca" class="row text-center">
          <h2 class="title">
            Busque por
            <span class="highlight-2">
              especialistas
            </span>
          </h2>
          <h5 class="subtitle-2">
            Marque consultas com diversos especialistas. Doulas, obstetras ginecologistas e psicólogos à sua disposição.
          </h5>

          <div class="input-group my-5">
            <select id="select-busca" class="form-select" aria-label="Seleção de especialista">
              <option selected>Selecione o especialista que deseja</option>
              <option value="1">Anestesista</option>
              <option value="2">Dermatologista</option>
              <option value="3">Doula</option>
              <option value="4">Enfermeira Obstétra</option>
              <option value="5">Fisioterapeuta</option>
              <option value="6">Ginecologista</option>
              <option value="7">Imunologista</option>
              <option value="8">Mastologista</option>
              <option value="9">Médico fetal</option>
              <option value="10">Nutricionista</option>
              <option value="11">Obstétra</option>
              <option value="12">Pediatra</option>
              <option value="13">Psicólogo</option>
              <option value="14">Psiquiatra</option>
            </select>
            <div class="btn-container">
              <a href="#" class="button button-tertiary btn btn-primary">Buscar</a>
            </div>
          </div>
        </div>
      </div>

      <div id="especialidades" class="mt-5 container-fluid block position-relative">
        <div class="container">
          <h2 class="title"></h2>
          <h4 class="subtitle"></h4>

          <div class="owl-carousel owl-theme owl-loaded">
            <div class="item">
              <a href="#" class="carrossel">
                <div class="card">
                  <img src="assets/img/pre-natal.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title text-center">Pré-natal</h5>
                  </div>
                </div>
              </a>
            </div>
            <div class="item">
              <a href="#" class="carrossel">
                <div class="card">
                  <img src="assets/img/doppler.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Ultrassom</h5>
                  </div>
                </div>
              </a>
            </div>
            <div class="item">
              <a href="#" class="carrossel">
                <div class="card">
                  <img src="assets/img/ultrassom.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Ultrassom morfológico</h5>
                  </div>
                </div>
              </a>
            </div>
            <div class="item">
              <a href="#" class="carrossel">
                <div class="card">
                  <img src="assets/img/pre-natal.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Pré-natal</h5>
                  </div>
                </div>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </main>

  <div id="pre-footer" class="pre-footer">

  </div>
  <footer>
    <div id="rodape" class="container">
      <div class="conteudo py-5">
        <div class="row">
          <div class="logo col-md-2">
            <img id="logo" class="img-fluid" src="assets/img/logo_liame.png" alt="">
          </div>
          <div class="col-md-8 d-flex justify-content-center align-self-center">
            <div class="px-4">
              <h5 class="text-uppercase">Mães</h5>
              <ul class="list-unstyled">
                <li class=""><a href="php/especialistas.php">Consultas</a></li>
                <li class=""><a href="php/diario_bordo.php">Diário de bordo</a></li>
                <li class=""><a href="php/carteirinha_vacinacao.php">Carteira de vacinação</a></li>
              </ul>
            </div>
            <div class="px-4">
              <h5 class="text-uppercase">Especialistas</h5>
              <ul class="list-unstyled">
                <li class=""><a href="layouts/central_ajuda.html">Central de ajuda</a></li>
                <li class=""><a href="layouts/termos_uso_profissional.html">Termos de uso de profissional</a></li>
              </ul>
            </div>
            <div class="px-4">
              <h5 class="text-uppercase">Serviços</h5>
              <ul class="list-unstyled">
                <li class="list-item"><a href="layouts/quem_somos.html">Quem somos</a></li>
                <li class=""><a href="php/contato.php">Contato</a></li>
                <li class=""><a href="layouts/privacidade_cookies.html">Privacidade e cookies</a></li>
                <li class=""><a href="layouts/termos_condicoes_uso.html">Termos e condições de uso</a></li>
              </ul>
            </div>
          </div>
          <div class="social col-md-2">
            <ul>
              <li>
                <a href="https://www.instagram.com/projeto_liame/">
                <img src="assets/img/instagram.svg" alt="Icone Instagram">
                </a>
              </li>
              <li>
                <a href="https://www.facebook.com/Liame-unindo-do-início-ao-fim-103264221864132">
                <img src="assets/img/facebook.svg" alt="Icone Facebook">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- rodape -->
  <!--<footer class="footer-home">
    <div class="container">
      <div class="row">
        <div class="col">
          <a href="index.php"><img src="assets/img/logo.png" class="img-fluid logo-footer" alt="logo liame"></a>
        </div>
        <div class="col">
          <h5 class="text-uppercase">Mães</h5>
          <ul class="list-unstyled">
            <li class=""><a href="php/especialistas.php">Consultas</a></li>
            <li class=""><a href="php/diario_bordo.php">Diário de bordo</a></li>
            <li class=""><a href="php/carteirinha_vacinacao.php">Carteira de vacinação</a></li>
          </ul>
        </div>
        <div class="col">
          <h5 class="text-uppercase">Especialistas</h5>
          <ul class="list-unstyled">
            <li class=""><a href="php/planos.php">Planos para especialistas</a></li>
            <li class=""><a href="layouts/central_ajuda.html">Central de ajuda</a></li>
            <li class=""><a href="layouts/termos_uso_profissional.html">Termos de uso de profissional</a></li>
          </ul>
        </div>
        <div class="col">
          <h5 class="text-uppercase">Serviços</h5>
          <ul class="list-unstyled">
            <li class="list-item"><a href="layouts/quem_somos.html">Quem somos</a></li>
            <li class=""><a href="php/contato.php">Contato</a></li>
            <li class=""><a href="layouts/privacidade_cookies.html">Privacidade e cookies</a></li>
            <li class=""><a href="layouts/termos_condicoes_uso.html">Termos e condições de uso</a></li>
          </ul>
        </div>
        <div class="col">
          <div class="social-links">
            <a class="nav-item nav-link" href="https://www.instagram.com/projeto_liame/">
              <i class="uil uil-instagram"></i>
            </a>
            <a class="nav-item nav-link" href="https://www.facebook.com/Liame-unindo-do-início-ao-fim-103264221864132">
              <i class="uil uil-facebook"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>-->

  <!--implementação jquery, poppers.js e plugin bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/main.js"></script>




</body>

</html>
