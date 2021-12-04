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
session_start();
include ('conexao.php');
if(isset($_SESSION['id_mae'])){
  $id_mae = $_SESSION['id_mae'];
}
else{
  $id_mae = 0;

}
if(isset($_SESSION['id_profissional'])){
  $id_profissional = $_SESSION['id_profissional'];
}
else{
   $id_profissional = 0;
}

if(($id_mae != 0)){

?>


<body>
  <main>

  <div id="cartilha" class="container-fluid block position-relative">
      <div class="container">
        <div class="row text-center mb-5">
          <h2 class="title">Cartilha de vacinação</h2>
        </div>
        <div class="row justify-content-center align-self-center">
          <div class="col-lg-3 col-md-6 col-sm-6 mb-4 mb-lg-0">
            <a id="link-crianca" href="#" class="destaque">
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
            <a id="link-gestante" href="#" class="destaque">
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
    <div class="container">
      <div id="vacinas-crianca">
      <div class="container">
        <div class="row text-center mt-5 mb-5 ">
          <h2>Vacinas para crianças</h2>
          <p class="text-vacina">Para vacinar, basta levar a criança a um posto ou Unidade Básica de Saúde (UBS) com o cartão criança O ideal é que toda dose seja administrada na idade recomendada mas se perdeu o prazo vá à unidade de saúde e atualize as vacinas.</p>
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
          <p class="text-vacina">A vacina para mulheres grávidas é essencial para previnir doenças para sí e para o bebê. Elas não podem tomar as mesmas vacinas que qualquer adulto e, portanto, têm um esquema vacinal diferente.</p>
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
    </div>
  </main>
  <?php
  }else if($id_profissional == 0){
    header('Location: login_mae.php');
  }
  ?>
  <!--implementação jquery, poppers.js e plugin bootstrap-->
  <script>
  var btnCrianca = document.querySelector('#link-crianca');
  var containerCrianca = document.querySelector('#vacinas-crianca');
  var btnGestante = document.querySelector('#link-gestante');
  var containerGestante = document.querySelector('#vacinas-gestante');

  btnCrianca.addEventListener('click', function(){

    if (containerCrianca.style.display === 'none') {
      containerCrianca.style.display = 'flex';
      containerGestante.style.display = 'none';
    } else {
      containerGestante.style.display = 'none';
    }
  });

  btnGestante.addEventListener('click', function(){

    if (containerGestante.style.display === 'flex') {
      containerCrianca.style.display = 'none';
    } else {
      containerGestante.style.display = 'flex';
      containerCrianca.style.display = 'none';
    }
  });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="../assets/js/owl.carousel.min.js"></script>
  <script src="../assets/js/main.js"></script>


  </body>


</html>
