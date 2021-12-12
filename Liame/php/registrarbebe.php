<!doctype html>
<html lang="pt-br">
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
  
  $id_profissional = 0;
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
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Dados da criança | Liame</title>

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
      </nav>
    </div>

  </div>

  <?php
	// verificar se o user esta logado
    
	?>
  <br><br><br><br>
  
  <div id="busca-container" class="d-flex">
      <div class="container justify-content-center align-self-center">
     
      <div class="">
        <form name="dadosdobebe" method="POST">
            
			<h1> Dados da criança </h1>
    <form name="dadosdobebe" method="POST">
    <h5 class="hero-title">
      Nome da criança: <input type="text" name ="nome_bebe" placeholder="Insira o nome da criança..."><br>
     </h5>
      </div>
  <div>

</div>
          

    <input type="submit" name = "registrar" value="Registrar">


      <?php
      include("conexao.php");
      //declarar variaveis
      if(isset ($_POST['registrar'])){
        $nomedobebe = $_POST['nome_bebe'];
       

        
      //inserir no banco de dados
        
        if($nomedobebe !=""){
          $id=$_SESSION['id_mae'];
          $query = 'INSERT INTO bebe (nome_bebe, id_mae) VALUES ("'.$nomedobebe.'", "'.$id_mae.'")';
          $resultado= mysqli_query($link, $query);
             if ($resultado){
                 echo "Registrado com sucesso";
             }else{
                 echo "Algo deu errado :(";
             }
        }else{
          echo "Preencha os campos corretamente!";
        }
      }
    
    ?>


     <a href="atividades.php"><button>Finalizar</button></a>
     </div>
</div>
</div>
        </div>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script src="../assets/js/owl.carousel.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>
<?php
}else{
  header('Location: ../index.php');
    
  }


?>

</html>
