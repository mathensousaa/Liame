<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cartilha de vacinação</title>
  <!-- CSS -->
  <link rel="stylesheet" href="../assets/css/owl/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/css/owl/owl.theme.default.min.css">
  <link rel="stylesheet" href="../assets/css/main.css">
  <!--favicon-->
  <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-png">
  <!--unicons (icones que serão usados no site)-->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>


<?php
  /*session_start();
  if((!isset ($_SESSION['email_mae']) == true) and (!isset ($_SESSION['nome_mae']) == true)){
    unset($_SESSION['email_mae']);
    unset($_SESSION['nome_mae']);
    echo "Bem vindo $logado";
  }
  echo "uauuu";
  $logado = $_SESSION['nome_mae'];
?>*/

/*session_start ()  or die('A sessão não pode ser iniciada');

  if(function_exists("protect")){

    function protect(){

      if(isset($session)){
          session_start();
          echo "eee";

          }

      if(!isset($_session['email_mae']) || !is_numeric($_session['email_mae'])){
        header("Location: login.php");


      }
    }
  }*/
  //start session
  if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
    session_start();
  }

//check do the person logged in
if($_SESSION['email_mae']==NULL){
    //haven't log in

}else{
  ?>

  <body>
    <div id="cartilha" class="container-fluid block position-relative">
      <div class="container">
        <div class="row text-center mb-5">
          <h2 class="title">Cartilha de vacinação</h2>
        </div>
        <div class="row justify-content-center align-self-center">

          <div class="col-lg-3 col-md-6 col-sm-6 mb-4 mb-lg-0">
            <a href="#" class="destaque">
              <div class="img-container mb-3">
                <img class="img-fluid" src="../assets/img/crianca.svg" alt="vacinação">
              </div>
              <div class="text-container">
                <h5 class="text">Criança</h5>
                <p class="mb-0 subtitle">Entre 0 e 10 anos</p>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 mb-4 mb-lg-0">
            <a href="#" class="destaque">
              <div class="img-container mb-3">
                <img class="img-fluid" src="../assets/img/gestante.svg" alt="">
              </div>
              <div class="text-container">
                <h5 class="text">Gestante</h5>
                <p class="mb-0 subtitle">Período gestacional</p>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div id="nuvem-container" class="vector-container">
        <img id="nuvem-vector" src="../assets/img/nuvem2.svg" class="vector">
      </div>
      <div id="nuvem2-container" class="vector-container">
        <img id="nuvem2-vector" src="../assets/img/nuvem1.svg" class="vector">
      </div>
    </div>

    <div id="vacinas-crianca">
      <div class="container">
        <div class="row text-center mt-5 mb-5 ">
          <h2>Vacinas Criança</h2>
          <p>Para vacinar, basta levar a criança a um posto ou Unidade Básica de Saúde (UBS) com o cartão criança O ideal é que toda dose seja administrada na idade recomendada mas se perdeu o prazo vá à unidade de saúde e atualize as vacinas.</p>
        </div>
        <div class="row justify-content-center align-self-center">
          <div class="col-lg-8 col-md-8 col-sm-12 mb-lg-0">
            <div class="vacina">
              <img src="../assets/img/vacina.svg" alt="">
              <div class="vacina-texto ps-3">
                <h5 class="text">BCG (Bacilo calmette-Guerin)</h5>
                <p class="subtitle mb-1">Previne as formas graves de tuberculose, principalmente miliar e meníngea</p>
                <p class="dose">
                  <span>Dose unica</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 mb-lg-0">
            <div class="vacina">
              <img src="../assets/img/vacina.svg" alt="">
              <div class="vacina-texto ps-3">
                <h5 class="text">Hepatite B</h5>
                <p class="subtitle mb-1">Previne a hepatite do tipo B</p>
                <p class="dose">
                  <span>Dose unica</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 mb-lg-0">
            <div class="vacina">
              <img src="../assets/img/vacina.svg" alt="">
              <div class="vacina-texto ps-3">
                <h5 class="text">Pentavalente (DTP/HB/Hib)</h5>
                <p class="subtitle mb-1">Previne difteria, tétano, coqueluche, hepatite B e meningite e infecções por HiB</p>
                <p class="dose">
                  <span>1ª dose</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 mb-lg-0">
            <div class="vacina">
              <img src="../assets/img/vacina.svg" alt="">
              <div class="vacina-texto ps-3">
                <h5 class="text">VIP (Poliomielite inativada)</h5>
                <p class="subtitle mb-1">Previne poliomielite ou paralisia infantil</p>
                <p class="dose">
                  <span>1ª dose</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //Cartilha -->
    <!--implementação jquery, poppers.js e plugin bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/main.js"></script>
  <?php
}
  ?>
  </body>
</html>
