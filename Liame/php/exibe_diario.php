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

$strSQL = "SELECT texto_diario_gestacao, data_hora_diario_gestacao FROM registro_diario WHERE id_diario_gestacao = '$id_diario_gestacao' ORDER BY  data_hora_diario_gestacao DESC  ";
$r = mysqli_query($link,$strSQL); 

while($row = mysqli_fetch_array($r)){
    echo $row['texto_diario_gestacao'] ;
    echo $row['data_hora_diario_gestacao'];
?>







<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="../assets/js/owl.carousel.min.js"></script>
	<script src="../assets/js/main.js"></script>
<?php
}
}else if($id_mae == 0){
  header('Location: login_mae.php');
    
  }

  
?>

<main>
    <div class="container" id="titulos">
      <div class="row pb-2">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-4">
          <a class="titulo-diario">
            <div class="text-container">
              <h6 class="pb-0">
                <!-- puxar titulo aqui -->
                Primeiros passos do Enzo
              </h6>
              <p class="preview">
                Ontem o enzo estava na sala brincando com seus
                ...
              </p>
              <form action="">
                <input type="submit" name="ver mais" value="Ver mais" class="btn btn-primary button button-primary">
              </form>
              <p class=data>
                Sexta-feira, 03 de dezembro de 2021
              </p>
            </div>
          </a>
        </div>
        
        <div class="col-lg-3 col-md-6 col-sm-12 pb-4">
          <a class="titulo-diario">
            <div class="text-container">
              <h6 class="pb-0">
                <!-- puxar titulo aqui -->
                Primeiros passos do Enzo
              </h6>
              <p class="preview">
                Ontem o enzo estava na sala brincando com seus
                ...
              </p>
              <form action="">
                <input type="submit" name="ver mais" value="Ver mais" class="btn btn-primary button button-primary">
              </form>
              <p class=data>
                Sexta-feira, 03 de dezembro de 2021
              </p>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 pb-4">
          <a class="titulo-diario">
            <div class="text-container">
              <h6 class="pb-0">
                <!-- puxar titulo aqui -->
                Primeiros passos do Enzo
              </h6>
              <p class="preview">
                Ontem o enzo estava na sala brincando com seus
                ...
              </p>
              <form action="">
                <input type="submit" name="ver mais" value="Ver mais" class="btn btn-primary button button-primary">
              </form>
              <p class=data>
                Sexta-feira, 03 de dezembro de 2021
              </p>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 pb-4">
          <a class="titulo-diario">
            <div class="text-container">
              <h6 class="pb-0">
                <!-- puxar titulo aqui -->
                Primeiros passos do Enzo
              </h6>
              <p class="preview">
                Ontem o enzo estava na sala brincando com seus
                ...
              </p>
              <form action="">
                <input type="submit" name="ver mais" value="Ver mais" class="btn btn-primary button button-primary">
              </form>
              <p class=data>
                Sexta-feira, 03 de dezembro de 2021
              </p>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 pb-4">
          <a class="titulo-diario">
            <div class="text-container">
              <h6 class="pb-0">
                <!-- puxar titulo aqui -->
                Primeiros passos do Enzo
              </h6>
              <p class="preview">
                Ontem o enzo estava na sala brincando com seus
                ...
              </p>
              <form action="">
                <input type="submit" name="ver mais" value="Ver mais" class="btn btn-primary button button-primary">
              </form>
              <p class=data>
                Sexta-feira, 03 de dezembro de 2021
              </p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </main>
</body>