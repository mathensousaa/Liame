<?php
session_start();
?>
<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Liame - unindo do início ao fim.</title>
  <!-- CSS -->
  <link rel="stylesheet" href="../assets/css/owl/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/css/owl/owl.theme.default.min.css">
  <link rel="stylesheet" href="../assets/css/main.css">
  <!--favicon-->
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-png">
  <!--unicons (icones que serão usados no site)-->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
  <!--navbar-->
  <div id="header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
        <div class="container-fluid">
          <a href="index.php" class="navbar-brand">
            <img class="img-fluid" id="logo" src="../assets/img/logo_liame.png" alt="Liame">
          </a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="../index.html">Página Inicial</a> 
              </li>
              <li class="nav-item">
                <a class="nav-link" href="php/especialistas.php">Buscar especialistas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="php/diario_bordo.php">Diário de Bordo</a>
              </li>
            </ul>
            <!--entrar/cadastro-->
            <div id="login" class="nav navbar-nav">
              <div class="nav-item">
                <a href="php/login.php">
                  <button type="button" class="button button-primary btn btn-outline-primarynav-item " data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Entrar
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <!--//navbar-->
  <main>
    <div id="login-container" class="d-flex">
      <div class="container justify-content-center align-self-center">
        <div class="row">
          <div class="col-md-6 d-flexalign-center text-center">
            <h1 class="hero-title">
              Login
            </h1>
            <h5 class="mb-5 subtitle">Bem-vindo!</h5>
            <div class="">
              <form class="ps-lg-5 me-lg-5" action="login_mae.php" method="post">
                <div class="mb-3">
                  <input type="email" name= "email_mae" class="form-control input input-login" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="mb-3">
                  <input type="password" name = "senha_mae" class="form-control input input-login" id="exampleInputPassword1" placeholder="Senha">
                </div>
                <div class="mb-3">
                  <input type="submit" name="enviar" class="hero-button button-primary btn btn-primary" value="Confirmar">
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6 align-self-center">
          </div>
        </div>
      </div>
    </div>
    <!--implementação jquery, poppers.js e plugin bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/main.js"></script>

    <a href = "carteirinha_vacinacao">
</body>

</html>

<?php
 /*include("conexao.php");

 
  if(isset($_POST['enviar'])){
  
 $email_mae = $_POST['email_mae'];
 $senha_mae = $_POST['senha_mae'];
  
 $query = "SELECT * FROM mae WHERE email_mae = '$email_mae' AND senha_mae = '$senha_mae'";
  echo $query;
 $result = mysqli_query($link, $query);
  
 $row = mysqli_num_rows($result);
 echo $row;
  
 if($row == 0) {
  $_SESSION['nao_autenticado'] = true;
  echo "eror";
 } else {
  $_SESSION['email_mae'] = $email_mae;
   header('Location: liame/php/perfil_mae.php');
   echo "h=uau";
 }
  }*/

  include("conexao.php");
    if(isset($_POST['enviar'])){
    
    $email_mae = $_POST['email_mae'];
    $senha_mae = MD5($_POST['senha_mae']);
   
    
    

    
      $query ="SELECT * FROM mae WHERE email_mae = '$email_mae' AND senha_mae = '$senha_mae'";
      
      $resultado = mysqli_query($link, $query);
      $linhas = mysqli_num_rows($resultado);
      
        if ($linhas<=0){
          echo "inexistente";
        }else{
          $_SESSION['email_mae'] = $email_mae;
         
          echo "Login feito com sucesso";
          
          
          //setcookie("email_mae",$email_mae);
          
        }
        
    }
 ?>
