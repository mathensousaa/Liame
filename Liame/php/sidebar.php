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
			--first-color: #4723D9;
			--first-color-light: #AFA5D9;
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
			font-family: var(--body-font);
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
			color: var(--first-color);
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
			background-color: var(--first-color);
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
			color: var(--first-color-light);
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

	$strSQL = "SELECT titulo_diario_gestacao, texto_diario_gestacao, data_hora_diario_gestacao FROM registro_diario WHERE id_mae = '$id_mae' ORDER BY  data_hora_diario_gestacao DESC";
  $r = mysqli_query($link,$strSQL); 
  $e= $r->fetch_array();
  ?>
<body id="body-pd" class="px-0">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='uil uil-bars' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="../assets/img/logo-liame-branca.png" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> 
                <a href="#" class="nav_logo"> 
                    <img src="../assets/img/logo-liame-branca.png" alt=""> 
                    <span class="nav_logo-name">Liame</span> 
                </a>
                <div class="nav_list">
                    <a href="#" class="nav_link active">
                        <i class='uil uil-file-plus nav_icon'></i>
                        <span class="nav_name">Nova anotação</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='uil uil-diary nav_icon'></i>
                        <span class="nav_name">Minhas anotações</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='uil uil-syringe nav_icon'></i>
                        <span class="nav_name">Vacinas</span> 
                    </a> 
                    <a href="#" class="nav_link">
                        <i class='bx bx-bookmark nav_icon'></i>
                        <span class="nav_name">Meu Perfil</span>
                    </a> 
                    <a href="#" class="nav_link">
                        <i class='bx bx-folder nav_icon'></i>
                        <span class="nav_name">Files</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                        <span class="nav_name">Stats</span> 
                    </a>
                </div>
            </div> 
            <a href="#" class="nav_link"> 
                <i class='bx bx-log-out nav_icon'></i>
                <span class="nav_name">Sair</span>
            </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
		<main>
			<div class="container" id="titulos">
				<div class="row pb-2">
					<?php
					mysqli_data_seek($r, '0');
					while($row = mysqli_fetch_array($r)){
						?>
					<div class="col-lg-3 col-md-6 col-sm-12 pb-4">
						<div class="titulo-diario">
							<div class="text-container">
								<h6 class="pb-0">
									<!-- puxar titulo aqui -->
									<?php
									echo $row['titulo_diario_gestacao'] ;
									$titulo=$row['titulo_diario_gestacao'];
									?>
								</h6>
								<a href="exibe_diario2?titulo=<?php echo $titulo ?>" class="button button-primary btn btn-primary">
									Ver mais
								</a>
								<p class=data>
									<?php
									echo $row['data_hora_diario_gestacao'];
									?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
  				}
        	?>
		</main>		
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