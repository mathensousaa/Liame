<!doctype html>
<html lang="pt-br">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Procura por profissional | Liame</title>

	<!-- CSS -->
	<link rel="stylesheet" href="../assets/css/owl/owl.carousel.min.css">
	<link rel="stylesheet" href="../assets/css/owl/owl.theme.default.min.css">
	<link rel="stylesheet" href="../assets/css/main.css">

	<!--favicon-->
	<link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-png">

	<!--unicons (icones que serão usados no site)-->
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    <style>
		:root {
			--header-height: 3rem;
			--nav-width: 68px;
			--white-color: #F7F6FB;
			--normal-font-size: 1rem;
			--z-fixed: 100
		}

		*,
		::before,
		::after {
			box-sizing: border-box
		}

		body {
			position: relative;
			margin: var(--header-height) 0 0 0;
			padding: 0 1rem;
			font-size: var(--normal-font-size);
			transition: .5s
		}

		a {
			text-decoration: none
		}

		.header {
			width: 100%;
			height: var(--header-height);
			position: fixed;
			top: 0;
			left: 0;
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding: 0 1rem;
			background-color: var(--white-color);
			z-index: var(--z-fixed);
			transition: .5s
		}

		.header_toggle {
			color: var(--tertiary);
			font-size: 1.5rem;
			cursor: pointer
		}

		.header_img {
			width: 35px;
			height: 35px;
			display: flex;
			justify-content: center;
			border-radius: 50%;
			overflow: hidden
		}

		.header_img img {
			width: 40px
		}

		.l-navbar {
			position: fixed;
			top: 0;
			left: -30%;
			width: var(--nav-width);
			height: 100vh;
			background-color: var(--tertiary);
			padding: .5rem 1rem 0 0;
			transition: .5s;
			z-index: var(--z-fixed)
		}

        .nav_logo img {
            width: 1.5rem;;
        }

		.nav {
			height: 100%;
			display: flex;
			flex-direction: column;
			justify-content: space-between;
			overflow: hidden
		}

		.nav_logo,
		.nav_link {
			display: grid;
			grid-template-columns: max-content max-content;
			align-items: center;
			column-gap: 1rem;
			padding: .5rem 0 .5rem 1.5rem
		}

		.nav_logo {
			margin-bottom: 2rem
		}

		.nav_logo-icon {
			font-size: 1.25rem;
			color: var(--white-color)
		}

		.nav_logo-name {
			color: var(--white-color);
			font-weight: 700
		}

		.nav_link {
			position: relative;
			color: var(--tertiary-light);
			margin-bottom: 1.5rem;
			transition: .3s
		}

		.nav_link:hover {
			color: var(--white-color)
		}

		.nav_icon {
			font-size: 1.25rem
		}

		.show {
			left: 0
		}

		.body-pd {
			padding-left: calc(var(--nav-width) + 1rem)
		}

		.active {
			color: var(--white-color)
		}

		.active::before {
			content: '';
			position: absolute;
			left: 0;
			width: 2px;
			height: 32px;
			background-color: var(--white-color)
		}

		.height-100 {
			height: 100vh
		}

		@media screen and (min-width: 768px) {
			body {
				margin: calc(var(--header-height) + 1rem) 0 0 0;
				padding-left: calc(var(--nav-width) + 2rem)
			}

			.header {
				height: calc(var(--header-height) + 1rem);
				padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
			}

			.header_img {
				width: 40px;
				height: 40px
			}

			.header_img img {
				width: 45px
			}

			.l-navbar {
				left: 0;
				padding: 1rem 1rem 0 0
			}

			.show {
				width: calc(var(--nav-width) + 156px)
			}

			.body-pd {
				padding-left: calc(var(--nav-width) + 188px)
			}
		}
	</style>    
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
if(isset($_SESSION['id_adm'])){
  $id_adm = $_SESSION['id_adm'];

}else{
  $id_adm=0;
}

if(($id_mae != 0)){

?>


<body id="body-pd" class="px-0">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='uil uil-bars' id="header-toggle"></i> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> 
                <a href="../index.php" class="nav_logo"> 
                    <img src="../assets/img/logo-liame-branca.png" alt=""> 
                </a>
                <div class="nav_list">
                    <a href="diario_bordo.php" class="nav_link">
                        <i class='uil uil-file-plus nav_icon'></i>
                        <span class="nav_name">Nova anotação</span>
                    </a>
                    <a href="exibe_diario.php" class="nav_link">
                        <i class='uil uil-diary nav_icon'></i>
                        <span class="nav_name">Minhas anotações</span>
                    </a>
                    <a href="carteirinha_vacinacao.php" class="nav_link active">
                        <i class='uil uil-syringe nav_icon'></i>
                        <span class="nav_name">Vacinas</span> 
                    </a> 
                    <a href="perfil_mae.php" class="nav_link">
                        <i class='uil uil-user-circle nav_icon'></i>
                        <span class="nav_name">Meu Perfil</span>
                    </a> 
                </div>
            </div> 
            <a href="logout_mae.php" class="nav_link"> 
                <i class='uil uil-signout nav_icon'></i>
                <span class="nav_name">Sair</span>
            </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
        <main>

  <div id="cartilha" class="container-fluid block position-relative">
    
      <div class="container">
        <div class="row text-center mb-3">
          <h2 class="title">Cartilha de vacinação</h2>
        </div>
        <div class="row justify-content-center align-self-center">
          <div class="col-lg-3 col-md-6 col-sm-6 mb-4 mb-lg-0">
            <a id="link-crianca" href="#" class="destaque">
              <div class="img-container mb-3">
                <img class="img-fluid" src="../assets/img/crianca.svg" alt="vacinação">
              </div>
              <div class="text-container align-middle">
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
          <p class="text-vacina px-5">Para vacinar, basta levar a criança a um posto ou Unidade Básica de Saúde (UBS) com o cartão criança O ideal é que toda dose seja administrada na idade recomendada mas se perdeu o prazo vá à unidade de saúde e atualize as vacinas.</p>
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
    <div class="publicidade col-md-20">
        <center>
        <img id="publicidade" class="img-fluid" src="../assets/img/shopee.jpg">
      </center>
    </div>
  </main>
  <?php
  
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
  
</div>
    
    <!--Container Main end-->

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            const showNavbar = (toggleId, navId, bodyId, headerId) =>{
                const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

                // Validate that all variables exist
                if(toggle && nav && bodypd && headerpd){
                    toggle.addEventListener('click', ()=>{
                    // show navbar
                    nav.classList.toggle('show')
                    // change icon
                    toggle.classList.toggle('bx-x')
                    // add padding to body
                    bodypd.classList.toggle('body-pd')
                    // add padding to header
                    headerpd.classList.toggle('body-pd')
                    })
                }
            }

            showNavbar('header-toggle','nav-bar','body-pd','header')

            /*===== LINK ACTIVE =====*/
            const linkColor = document.querySelectorAll('.nav_link')

            function colorLink(){
            if(linkColor){
            linkColor.forEach(l=> l.classList.remove('active'))
            this.classList.add('active')
            }
            }
            linkColor.forEach(l=> l.addEventListener('click', colorLink))

            // Your code to run since DOM is loaded and ready
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="../assets/js/owl.carousel.min.js"></script>
	<script src="../assets/js/main.js"></script>
</body>
  <?php
  }else{
    header('Location: ../index.php');
      
    }

?>
</html>
