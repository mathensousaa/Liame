<!doctype html>
<html lang="pt-br">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php
session_start();
include ('conexao.php');
if(isset($_SESSION['id_mae'])){
  $id_mae = $_SESSION['id_mae'];
}else{
  $id_mae = 0;
}if(isset($_SESSION['id_profissional'])){
  $id_profissional = $_SESSION['id_profissional'];
  
  $id_profissional = 0;
}else{
   $id_profissional = 0;
}if(isset($_SESSION['id_adm'])){
  $id_adm = $_SESSION['id_adm'];

}else{
  $id_adm=0;
}

if(($id_mae != 0)){
?>
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
		<div id="header" class="">
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
									<a class="nav-link" href="../php/procura_profissional.php">Buscar especialistas</a>
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
					</div>
				</nav>
			</div>
		</div>
			

<body>
<main>
<div class="container text-center">
      <div class="d-flex justify-content-center" id="avatar-container">
        <img class="imagem-perfil" src="../assets/img/user.svg">
        <div class="botao-upload">
          <i class="uil uil-arrow-up" aria-hidden="true"></i>
        </div>
        <input type="file" accept=".png, .jpg, .jpeg" name="avatar" id="avatar-input" class="avatar-input">
      </div>
      <h6>
      <?php
        echo $_SESSION['nome_mae'];
      ?>
      </h6>
</div>
<form name="confgconta" action="#" method="POST"> 
	<h1>Informações da Mãe </h1>

    <?php
    echo $_SESSION['nome_mae'];
    $foto_perfil_mae = null;
    ?> 
    

    <br>
       <!-- Nome:                   
    <input type="text" name ="nome_profissional" placeholder="Nome do usuario..."><br>
        Email:
         <input type="text" name ="email_profissional" placeholder="Email do usuario..."><br>-->

        Foto de Perfil:
        <input type="file" name ="foto_perfil_mae" accept="image/*"><br>
        <input type="submit" name= "submit" value="Atualizar">

			<h1> Informações do Bebê</h1>
        	Nome do Bebê
        	<input type="text" name ="nome_bebe" placeholder="Insira o nome do seu filho(a) ..."><br>
        
    <input type="submit" name= "submit2" value="Salvar">



<?php
echo $foto_perfil_mae;
$id=$_SESSION['id_mae'];
if(isset($_POST['submit'])){

    echo $id;

$foto_perfil_mae = $_POST['foto_perfil_mae'];

$query1 = ("UPDATE mae SET foto_perfil_mae = '$foto_perfil_mae' WHERE id_mae = '$id'");

//echo $sql;

if(mysqli_query($link,$query1)){
    echo "Gravado com sucesso!";
}else{
    echo "Erro ao gravar!";
}
}

if(isset($_POST['submit2'])){

$nome_bebe = $_POST['nome_bebe'];
$query2 = 'INSERT into bebe (nome_bebe, id_mae) values("'.$nome_bebe.'", "'.$id.'")';


if(mysqli_query($link,$query2)){
    echo "Gravado com sucesso!";
}else{
    echo "Erro ao gravar!";
}
}

$query ="SELECT id_bebe, nome_bebe FROM bebe WHERE id_mae = '$id'";
$dados = mysqli_query($link, $query);
/*$linha = mysqli_fetch_assoc($dados);
$total = mysqli_num_rows($dados);
echo $total;*/

?>
<input type= "submit" name="exibir" value="Exibir bebês cadastrados">

    <?php
if (isset($_POST['exibir'])){

    while($row = mysqli_fetch_array($dados)){
    echo "<table>";
    
    echo "<td>" . $row['nome_bebe'] . "</td>";
    
    ?>
    <input type="submit" name="editar" value ="Editar">
    <input type="submit" name="excluir" value ="Excluir"></td>
   <?php
    }

    echo "</table>";
  
if (isset($_POST['excluir'])){
    $row=mysqli_fetch_array($dados);
    $id_bebe= $row['id_bebe'];
    echo $id_bebe;
    $excluir= "DELETE FROM bebe WHERE id_bebe = '.$id_bebe.'";
    echo "oooo";
    if(mysqli_query($link,$excluir)){
        echo "Excluido com sucesso!";
    }else{
        echo "Erro ao excluir!";
    }
}
}


    ?>
    <button><a href="edicaodedados.php">Editar Conta</a></button>
    <?php
  

    ?>



  </div>
</main>


  <!--implementação jquery, poppers.js e plugin bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/main.js"></script>
  
  <script>
      $(document).ready(function() {
	
        var readURL = function(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function (e) {
                  $('.imagem-perfil').attr('src', e.target.result);
              }
      
              reader.readAsDataURL(input.files[0]);
          }
        }
    
        $(".avatar-input").on('change', function(){
            readURL(this);
        });
        
        $(".botao-upload").on('click', function() {
          $(".avatar-input").click();
        });
    });
  </script>

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
								<li class=""><a href="../php/cadastro_mae1.php">Carteira de vacinação</a></li>
							</ul>
						</div>
						<div class="px-lg-4 px-mb-1">
							<h5 class="text-uppercase">Especialistas</h5>
							<ul class="list-unstyled">
								<li class=""><a href="../layouts/central_ajuda.html">Central de ajuda</a></li>
								<li class=""><a href="../layouts/termos_uso_profissional.html">Termos de uso de profissional</a></li>
								<li class=""></li><a href="../index.php">Página Inicial</a>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="../assets/js/owl.carousel.min.js"></script>
	<script src="../assets/js/main.js"></script>
<?php
}else if($id_mae == 0){
  header('Location: login_mae.php');
    
  }

  ?>
</body>

</html>


</body>

</html>