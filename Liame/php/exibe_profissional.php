<?php 
    include 'conexao.php'; 
    $nome_profissional = "Milena Soares";
?>

<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title><?php echo $nome_profissional;?> | Liame</title>

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
    <!--navbar-->
    <div id="header" class="fixed-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
          <div class="container-fluid">
            <a href="../index.php" class="navbar-brand">
              <img class="img-fluid" id="logo" src="../assets/img/logo_liame.png" alt="Liame">
            </a>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" href="../index.php">Página Inicial</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../php/procura_profissional1.php">Buscar especialistas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../php/diario_bordo.php">Diário de Bordo</a>
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
                                <a href="../php/login_profissional.php" class="destaque">
                                  <div class="img-container mb-3">
                                    <img class="img-fluid" src="../assets/img/Medico_home.png" alt="">
                                  </div>
                                  <div class="text-container">
                                    <h5>Especialista</h5>
                                  </div>
                                </a>
                              </div>
                              <div class="col-lg-6 col-md-6 mb-4 mb-lg-0">
                                <a href="../php/login_mae.php" class="destaque">
                                  <div class="img-container mb-3">
                                    <img class="img-fluid" src="../assets/img/Vaccine.png" alt="">
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
	<br><br><br><br>
	<div id="busca-container" class="d-flex">
      <div class="container justify-content-center align-self-center">

	<br><br><br><br><br><br><br><br>

	
	<style>
		#img_exibe{
			width: 50%;
			padding-top:3%;
			margin:2%;
		}
		.texto{
			padding-top:1%;
		}
		.row{
			margin-top: 2%;
		}
		.card-footer{
			background-color: white;
		}
	</style>
	<body>
  		<div class="container">
		  <div class="row">

		 
<?php
	include ('conexao.php');
 	//resgata dados selecionados
	if(isset($_POST)){
  	$buscarprofissional = $_POST ['profissional'];
		$buscarestado = $_POST['estado'];
// procura no banco de dados
		$sql_busca = ("select esp.id_especialidade, especialidade, est.id_estado, estado, uf, pro.id_profissional as id, nome_profissional, 
						email_profissional, foto_perfil_profissional, descricao_endereco,
						ddd_telefone_profissional, numero_telefone_profissional, logradouro, numero_endereco, cep, cidade, estado, bairro  
						from especialidade as es 
						inner join especialidade_profissional as esp on esp.id_especialidade = es.id_especialidade 
						inner join profissional as pro on pro.id_profissional = esp.id_profissional 
						inner join endereco_profissional as ende on ende.id_endereco = pro.id_endereco 
						inner join estado as est on ende.id_estado = est.id_estado 
						inner join cidade as cid on ende.id_cidade = cid.id_cidade 
						inner join telefone_profissional as tel on tel.id_telefone = pro.id_telefone 
						WHERE esp.id_especialidade = '$buscarprofissional' AND est.id_estado = '$buscarestado'" );
  		
		$consulta = mysqli_query($link, $sql_busca);
		if($consulta->num_rows > 0){
			while ($vetor = mysqli_fetch_array($consulta)){
				$nome_profissional= $vetor['nome_profissional'];
				$especialidade_profissional=$vetor['especialidade'];
				$estado_profissional=$vetor['estado'];
				$cidade_profissional=$vetor['cidade'];
				$cep_profissional=$vetor['cep'];
				$foto_profissional=$vetor['foto_perfil_profissional'];
				//$telefone_profissional= '('.$vetor['ddd_telefone_profissional'].') '.$vetor['numero_telefone_profissional'];
				?>
		 		
					<div class="col-sm-3">
						<div class="card">
							<div class="card-img-top text-center">
									<?php
										if ($foto_profissional != ""){
											?><img id="img_exibe" class="img-fluid" src="../assets/img/icone-especialista.png" alt=""><?php
										}else{
											?><img id="img_exibe" class="img-fluid" src="../assets/img/icone-especialista.png" alt=""><?php
										}
									?>
							</div>
							<hr>
							<div class="card-body">
								<?php
									echo utf8_encode ('Nome: ' .$nome_profissional.'<br>');
									echo utf8_encode ('Especialidade: ' .$especialidade_profissional.'<br>');	
									echo utf8_encode ('Estado: ' .$estado_profissional.'<br>');		
									echo utf8_encode ('Cidade: ' .$cidade_profissional.'<br>');
									echo utf8_encode ('CEP: ' .$cep_profissional.'<br>');	
								?>
							</div>
							<div class="card-footer text-center">
								<a href="exibe_profissional?id=<?php echo $vetor['id']; ?>" class="btn btn-primary btn-sm">Ver mais</a>
							</div>
						</div>
					</div>
				<br>
				<?php
			}
		}
	}else{
// caso não tenha encontrado nehum profissinal 
		echo "Nenhum profissional encontrado nessa área.";
	}
?>
	</div>
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
              <li class=""><a href="../php/procura_profissional1.php">Consultas</a></li>
              <li class=""><a href="../php/diario_bordo.php">Diário de bordo</a></li>
              <li class=""><a href="../php/carteirinha_vacinacao.php">Carteira de vacinação</a></li>
            </ul>
          </div>
          <div class="px-lg-4 px-mb-1">
            <h5 class="text-uppercase">Especialistas</h5>
            <ul class="list-unstyled">
              <li class=""><a href="../layouts/central_ajuda.html">Central de ajuda</a></li>
              <li class=""><a href="../git push origin mainlayouts/termos_uso_profissional.html">Termos de uso de profissional</a></li>
            </ul>
          </div>
          <div class="px-lg-4 px-mb-1">
            <h5 class="text-uppercase">Serviços</h5>
            <ul class="list-unstyled">
              <li class="list-item"><a href="../layouts/quem_somos.html">Quem somos</a></li>
              <li class=""><a href="../layouts/Contatos.html">Contato</a></li>
              <li class=""><a href="../layouts/termos_condicoes_uso.html">Termos e condições de uso</a></li>
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