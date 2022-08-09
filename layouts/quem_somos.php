<!doctype html>
<html lang="pt-br">
  <?php
  session_start();
  if(isset($_SESSION['id_mae'])){
    $id_mae = $_SESSION['id_mae'];
    $id_profissional = 0;
    $id_adm = 0;
  }
  else if(isset($_SESSION['id_profissional'])){
    $id_profissional = $_SESSION['id_profissional'];
    $id_mae = 0;
    $id_adm = 0;
  }
  else if(isset($_SESSION['id_adm'])){
    $id_adm = $_SESSION['id_adm'];
    $id_profissional = 0;
    $id_mae = 0;
  }
  else{
    $id_adm=0;
    $id_profissional = 0;
    $id_mae = 0;
  }
  ?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Quem somos | Liame</title>

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
  <main>
    <?php
  include_once 'menu3.php';
  Menu($id_mae, $id_profissional, $id_adm);
  
  ?>
    
    <!--//navbar-->

    <main class="">
      <div class="container content shadow-lg mb-5">
        <h4 class="mb-4">Quem somos</h4>

        <p> Os desenvolvedores da plataforma Liame estavam cursando o último ano do ensino médio
          quando iniciaram o desenvolvimento da mesma, para a efetivação do Trabalho de Conclusão de
          Curso (TCC), do curso de Informática para a Internet na Etec Santa Isabel, localizada na
          cidade de Santa Isabel no estado de São Paulo, Brasil.</p>

        <p> O projeto surgiu após a análise de informações, pois segundo o levantamento de dados do
          IBGE que houve em 2018, 15% de todas as gravidezes daquele ano eram de jovens entre 15 e
          19 anos e em 2019 37,4% de todas as gravidezes no Brasil eram de mulheres acima de 30 anos.
          Sendo assim com a plataforma é possível levar conhecimento, auxílio e orientação de forma
          totalmente gratuita e acessível para as mães e gestantes, desta forma é possível que elas se
          familiarizem com os novos procedimentos que sugiram nos últimos anos devido ao avanço da
          tecnologia.</p>

        <p> A plataforma Liame tem como missão auxiliar mães e gestantes, principalmente acima dos 30 anos
          e adolescentes no dia a dia, além de disponibilizar um diário de bordo desde o início da gestação
          até o primeiro ano de vida da criança, pois assim a mãe e a criança podem ter esses registros como
          uma forma de recordação.</p>

        <p> Consequentemente é possível atingir mais um público além das gestantes, os especialistas dessa
          área como ginecologistas, obstetras, doulas, psicólogos, entre outros, que podem se cadastrar
          na plataforma possibilitando que eles tenham um espaço para a divulgação do seu trabalho, fazendo com que as gestantes e
          mães marquem consultas com os mesmos.</p>
       

        
    </div>
      
    </main>
    
    <div class="publicidade col-md-20">
      <center>
      <img id="publicidade" class="img-fluid" src="../assets/img/Propaganda_whats.png">
    </center>
  </div>
    <footer>
      <div id="rodape" class="container">
        <div class="conteudo py-5">
          <div class="row">
            <div class="logo col-md-2">
              <img id="logo" class="img-fluid" src="../assets/img/logo_liame.png" alt="">
            </div>
            <div class="py-lg-0 py-mb-5 col-md-8 d-flex justify-content-center align-self-center">
              <div class="px-lg-4 px-mb-1">
                <h5 class="text-uppercase">Mães</h5>
                <ul class="list-unstyled">
                  <li class=""><a href="../php/procura_profissional.php">Consultas</a></li>
                  <li class=""><a href="../php/diario_bordo.php">Diário de bordo</a></li>
                  <li class=""><a href="../php/carteirinha_vacinacao.php">Carteira de vacinação</a></li>
                </ul>
              </div>
              <div class="px-lg-4 px-mb-1">
                <h5 class="text-uppercase">Especialistas</h5>
                <ul class="list-unstyled">
                  <li class=""><a href="central_ajuda.php">Central de ajuda</a></li>
                  <li class=""><a href="termos_uso_profissional.php">Termos de uso de profissional</a></li>
                  <li class=""></li><a href="../index.php">Página Inicial</a>
                </ul>
              </div>
              <div class="px-lg-4 px-mb-1">
                <h5 class="text-uppercase">Serviços</h5>
                <ul class="list-unstyled">
                  <li class="list-item"><a href="quem_somos.php">Quem somos</a></li>
                  <li class=""><a href="Contatos.php">Contato</a></li>
                  <li class=""><a href="termos_condicoes_uso.php">Termos e condições de uso</a></li>
                </ul>
              </div>
            </div>
            <div class="social col-md-2">
              <ul>
                <li>
                  <a href="https://www.instagram.com/projeto_liame/">
                    <img src="../assets/img/instagram.svg" alt="Icone Instagram">
                  </a>
                </li>
                <li>
                  <a href="https://www.facebook.com/Liame-unindo-do-início-ao-fim-103264221864132">
                    <img src="../assets/img/facebook.svg" alt="Icone Facebook">
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous"
      referrerpolicy="no-referrer"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

</html>
