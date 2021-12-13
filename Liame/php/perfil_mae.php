<!doctype html>
<html lang="pt-br">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
<main>
<form name="confgconta" action="#" method="POST">
	<div class="container">
		<div class="pt-3">
		<div class="d-flex justify-content-center" id="avatar-container">
			
			<img class="imagem-mae" src="../assets/img/user.svg">
			<div class="botao-upload">
				<i class="uil uil-arrow-up" aria-hidden="true"></i>
			</div>
			<input type="file" accept=".png, .jpg, .jpeg" name="imagem-mae" id="avatar-input" class="avatar-input">
		</div>
		<h6 class="text-center">
		<?php
			echo $_SESSION['nome_mae'];
		?>
		</h6>
		</div>
	</div>
	<div class="container">
		<div class="pt-4" id="dados-pessoais">
			<div class="row text-center">
				<h2 class="">Dados Pessoais</h2>
			</div>
			<div class="row d-flex justify-content-center">
				<div class="col-4">
					<label for="nome-mae" class="form-label">Nome</label>
					<input type="text" class="form-control" name="nome-mae" id="nome-mae" placeholder="<?php echo $_SESSION['nome_mae']; ?> ">
				</div>
				<div class="col-4">
					<label for="email-mae" class="form-label">E-mail</label>
					<input type="text" class="form-control" name="email-mae" id="email-mae" placeholder="<?php echo $_SESSION['email_mae']; ?>">
				</div>
			</div>
			<div class="row">
				<div class="d-flex justify-content-center">
					<input class="btn btn-primary button button-primary" type="submit" name= "editar" value="Salvar">
				</div>
			</div>
		</div>
	</div>
</form>

<div class="container pt-3">
	<div class="row text-center">
		<h2 class="">Dados do bebê</h2>
	</div>
	<div class="row d-flex justify-content-center">
		<div class="col-4">
			<label for="nome-bebe" class="form-label">Nome do seu filho</label>
			<input type="text" class="form-control" name="nome-bebe" id="nome-bebe" placeholder="<?php /*echo $_SESSION['nome_bebe']; */?>" required>
		</div>
		<div class="col-4">
			
		</div>
	</div>
</div>

<?php
if(isset ($_POST['editar'])){
	
    $foto_perfil_mae = $_POST['imagem-mae'];
	$foto_perfil=$_SESSION['foto_perfil_mae'];
    $alterar_nome_mae = $_POST ['nome-mae'];
    $alterar_email_mae = $_POST['email-mae'];
	
    $query = ("UPDATE mae SET foto_perfil_mae ='$foto_perfil_mae', nome_mae='$alterar_nome_mae',email_mae='$alterar_email_mae' WHERE id_mae='$id_mae'");

//echo $sql;

	if(mysqli_query($link,$query)){
		echo "Atualizado com sucesso!";
	}else{
		echo "Erro ao gravar!";
	}
}
?>




<?php
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
                  $('.imagem-mae').attr('src', e.target.result);
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
								<li class=""><a href="../layouts/central_ajuda.php">Central de ajuda</a></li>
								<li class=""><a href="../layouts/termos_uso_profissional.php">Termos de uso de profissional</a></li>
								<li class=""></li><a href="../index.php">Página Inicial</a>
							</ul>
						</div>
						<div class="px-lg-4 px-mb-1">
							<h5 class="text-uppercase">Serviços</h5>
							<ul class="list-unstyled">
								<li class="list-item"><a href="../layouts/quem_somos.php">Quem somos</a></li>
								<li class=""><a href="../layouts/Contatos.php">Contato</a></li>
								<li class=""><a href="../layouts/termos_condicoes_uso.php">Termos e condições de uso</a></li>
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
}else{
  header('Location: login_mae.php');

  }

  ?>



</body>
		<script>
			bootstrapValidate('#nome-bebe' , 'required:Preencha este campo')
		</script>


</html>
