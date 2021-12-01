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
if($_SESSION['id_mae']==NULL){
    //haven't log in

}else{
  ?>

    <!--Container Main end-->
  <body>
    <div class="header" id="header-secondary">
      <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
        <div class="container-fluid">
            <div class="header-toggle" id="header-toggle">
              <i class='uil uil-bars' id="header-toggle"></i>
            </div>
            <div class="header-img">
              <img src="https://i.imgur.com/hczKIze.jpg" alt="">
            </div>
        </div>
      </nav>
    </div>
      <div class="l-navbar" id="lateral-navbar">
        <nav class="nav">
            <div>
              <a href="index.php" class="navbar-brand">
                <img class="nav-logo img-fluid" id="logo" src="../assets/img/logo_liame.png" alt="Liame">
                 <span class="nav_logo-name">
                   Home
                 </span>
               </a>
               <div class="nav_list">
                 <a href="#" class="nav_link active">
                   <i class='uil uil-diary nav_icon'></i>
                   <span class="nav_name">Diário de bordo</span>
                 </a>
                 <a href="#" class="nav_link">
                   <i class='uil uil-syringe nav_icon'></i>
                   <span class="nav_name">Cartilha de vacinação</span>
                 </a>
                 <a href="#" class="nav_link">
                   <i class='uil uil-user nav_icon'></i>
                   <span class="nav_name">Perfil</span>
                 </a>
                 <a href="#" class="nav_link">
                     <i class='uil uil-medkit nav_icon'></i>
                     <span class="nav_name">Consultas</span>
                   </a>
                 </div>
            </div>
            <a href="#" class="nav_link">
              <i class='uil uil-signout nav_icon'></i>
              <span class="nav_name">Deslogar</span>
            </a>
        </nav>
    </div>

    <div class="height-100 bg-light">
        <h4>Main Components</h4>
    </div>


  <!--  <div id="cartilha" class="container-fluid block position-relative">
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
          <h2>Vacinas para crianças</h2>
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
                  <span>Dose única</span>
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
                  <span>Dose única</span>
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
          <div class="col-lg-8 col-md-8 col-sm-12 mb-lg-0">
            <div class="vacina">
              <img src="../assets/img/vacina.svg" alt="">
              <div class="vacina-texto ps-3">
                <h5 class="text">Pneumocócica 10V</h5>
                <p class="subtitle mb-1">Previne pneumonia. otite, meningite e outras doenças causadas pelo Pneumococo</p>
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
                <h5 class="text">Rotavírus humano G1P1</h5>
                <p class="subtitle mb-1">Previne diarréia por rotavirus</p>
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
                <h5 class="text">Meningocócica C conjulgada</h5>
                <p class="subtitle mb-1">Previne Meningocócica C</p>
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
                <h5 class="text">Pentavalente (DTP/HB/Hib)</h5>
                <p class="subtitle mb-1">Previne difteria, tétano, coqueluche, hepatite B e meningite e infecções por Haemóphilus influenza e tipo B</p>
                <p class="dose">
                  <span>2ª dose</span>
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
                  <span>2ª dose</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 mb-lg-0">
            <div class="vacina">
              <img src="../assets/img/vacina.svg" alt="">
              <div class="vacina-texto ps-3">
                <h5 class="text">Pneumocócica 10V</h5>
                <p class="subtitle mb-1">Previne pneumonia. otite, meningite e outras doenças causadas pelo Pneumococo</p>
                <p class="dose">
                  <span>2ª dose</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 mb-lg-0">
            <div class="vacina">
              <img src="../assets/img/vacina.svg" alt="">
              <div class="vacina-texto ps-3">
                <h5 class="text">Rotavírus humano G1P1</h5>
                <p class="subtitle mb-1">Previne diarréia por rotavirus</p>
                <p class="dose">
                  <span>2ª dose</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 mb-lg-0">
            <div class="vacina">
              <img src="../assets/img/vacina.svg" alt="">
              <div class="vacina-texto ps-3">
                <h5 class="text">Meningocócica C conjulgada</h5>
                <p class="subtitle mb-1">Previne Meningocócica C</p>
                <p class="dose">
                  <span>2ª dose</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 mb-lg-0">
            <div class="vacina">
              <img src="../assets/img/vacina.svg" alt="">
              <div class="vacina-texto ps-3">
                <h5 class="text">Pentavalente (DTP/HB/Hib)</h5>
                <p class="subtitle mb-1">Previne difteria, tétano, coqueluche, hepatite B e meningite e infecções por Haemóphilus influenza e tipo B</p>
                <p class="dose">
                  <span>3ª dose</span>
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
                  <span>3ª dose</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 mb-lg-0">
            <div class="vacina">
              <img src="../assets/img/vacina.svg" alt="">
              <div class="vacina-texto ps-3">
                <h5 class="text">Febre amarela</h5>
                <p class="subtitle mb-1">Previne a febre amarela</p>
                <p class="dose">
                  <span>3ª dose</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 mb-lg-0">
            <div class="vacina">
              <img src="../assets/img/vacina.svg" alt="">
              <div class="vacina-texto ps-3">
                <h5 class="text">Pneumocócica 10 Valente</h5>
                <p class="subtitle mb-1">Previne pneumonia. otite, meningite e outras doenças causadas pelo Pneumococo</p>
                <p class="dose">
                  <span>Reforço</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 mb-lg-0">
            <div class="vacina">
              <img src="../assets/img/vacina.svg" alt="">
              <div class="vacina-texto ps-3">
                <h5 class="text">Tríplice Viral</h5>
                <p class="subtitle mb-1">Previne sarampo, caxumba e rubéola</p>
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
                <h5 class="text">Hepatite A</h5>
                <p class="subtitle mb-1">Previne a Hepatite A</p>
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
                <h5 class="text">Poliomielite oral VOP</h5>
                <p class="subtitle mb-1">Previne poliomielite ou paralisia infantil</p>
                <p class="dose">
                  <span>1º reforço</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 mb-lg-0">
            <div class="vacina">
              <img src="../assets/img/vacina.svg" alt="">
              <div class="vacina-texto ps-3">
                <h5 class="text">DTP</h5>
                <p class="subtitle mb-1">Previne difteria, tétano e coqueluche</p>
                <p class="dose">
                  <span>1º reforço</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 mb-lg-0">
            <div class="vacina">
              <img src="../assets/img/vacina.svg" alt="">
              <div class="vacina-texto ps-3">
                <h5 class="text">Tetra viral ou tríplice viral + varicela</h5>
                <p class="subtitle mb-1">Previne sarampo, rubéola, caxumba e catapora</p>
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
                <h5 class="text">DTP</h5>
                <p class="subtitle mb-1">Previne difteria, tétano e coqueluche</p>
                <p class="dose">
                  <span>2º reforço</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 mb-lg-0">
            <div class="vacina">
              <img src="../assets/img/vacina.svg" alt="">
              <div class="vacina-texto ps-3">
                <h5 class="text">Poliomielite oral VOP</h5>
                <p class="subtitle mb-1">Previne poliomielite ou paralisia infantil</p>
                <p class="dose">
                  <span>2º reforço</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 mb-lg-0">
            <div class="vacina">
              <img src="../assets/img/vacina.svg" alt="">
              <div class="vacina-texto ps-3">
                <h5 class="text">Varicela atenuada</h5>
                <p class="subtitle mb-1">Previne a varicela/catapora</p>
                <p class="dose">
                  <span>1º reforço</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div id="vacinas-gestante">
      <div class="container">
        <div class="row text-center mt-5 mb-5 ">
          <h2>Vacinas para gestantes</h2>
          <p>A vacina para mulheres grávidas é essencial para previnir doenças para sí e para o bebê. Elas não podem tomar as mesmas vacinas que qualquer adulto e, portanto, têm um esquema vacinal diferente.</p>
        </div>
        <div class="row justify-content-center align-self-center">
          <div class="col-lg-8 col-md-8 col-sm-12 mb-lg-0">
            <div class="vacina">
              <img src="../assets/img/vacina.svg" alt="">
              <div class="vacina-texto ps-3">
                <h5 class="text">Hepatite B</h5>
                <p class="subtitle mb-1">Previne a hepatite B</p>
                <p class="dose">
                  <span>3 doses a depender da situação vacinal</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 mb-lg-0">
            <div class="vacina">
              <img src="../assets/img/vacina.svg" alt="">
              <div class="vacina-texto ps-3">
                <h5 class="text">Dupla adulto (DT)</h5>
                <p class="subtitle mb-1">Previne difteria e tétano</p>
                <p class="dose">
                  <span>3 doses a depender da situação vacinal</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 mb-lg-0">
            <div class="vacina">
              <img src="../assets/img/vacina.svg" alt="">
              <div class="vacina-texto ps-3">
                <h5 class="text">dTPa (Trípice bacteriana acelular do tipo adulto)</h5>
                <p class="subtitle mb-1">Previne difteria, tétano e coqueluche</p>
                <p class="dose">
                  <span>Uma dose a cada gestação a partir da 20ª semana de gestação ou no puerpério (até 45 dias após o parto)</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



  <?php
}
  ?>

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
                <li class=""><a href="../php/procura_profissional1.php">Consultas</a></li>
                <li class=""><a href="../php/diario_bordo.php">Diário de bordo</a></li>
                <li class=""><a href="../php/carteirinha_vacinacao.php">Carteira de vacinação</a></li>
              </ul>
            </div>
            <div class="px-lg-4 px-mb-1">
              <h5 class="text-uppercase">Especialistas</h5>
              <ul class="list-unstyled">
                <li class=""><a href="central_ajuda.html">Central de ajuda</a></li>
                <li class=""><a href="termos_uso_profissional.html">Termos de uso de profissional</a></li>
              </ul>
            </div>
            <div class="px-lg-4 px-mb-1">
              <h5 class="text-uppercase">Serviços</h5>
              <ul class="list-unstyled">
                <li class="list-item"><a href="quem_somos.html">Quem somos</a></li>
                <li class=""><a href="Contatos.html">Contato</a></li>
                <li class=""><a href="termos_condicoes_uso.html">Termos e condições de uso</a></li>
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
  </footer>-->

  <!--implementação jquery, poppers.js e plugin bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="../assets/js/owl.carousel.min.js"></script>
  <script src="../assets/js/main.js"></script>
  </body>


</html>
