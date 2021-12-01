<?php include 'conexao.php'; ?>
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

</head>
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
//faezr comparação dos id da especialidade e estado escolhido com os id da especialidade e estado do profissional
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
				$especialidade_profissional=$vetor['estado'];
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
								<a href="#?id=<?php echo $vetor['id']; ?>" class="btn btn-primary btn-sm">Ver mais</a>
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
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
 	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  	<script src="../assets/js/owl.carousel.min.js"></script>
  	<script src="../assets/js/main.js"></script>
	</body>
</html>
