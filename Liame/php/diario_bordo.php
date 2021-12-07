
    <?php
   /* echo "página do diário de bordo";
    if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
        session_start();
      }
    
    //check do the person logged in
    if($_SESSION['email_mae']==NULL){
        //haven't log in
        echo "Você não está logado";
    }else{
        //Logged in
        echo "Bem-vindo " . $_SESSION['email_mae'];*/
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
        
        if(($id_mae != 0)){
         
        ?>


<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Diario de bordo | Liame</title>

  <!-- CSS -->
  <link rel="stylesheet" href="../assets/css/owl/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/css/owl/owl.theme.default.min.css">
  <link rel="stylesheet" href="../assets/css/main.css">

  <!--favicon-->
  <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-png">

  <!--unicons (icones que serão usados no site)-->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <!-- tinymce -->

   <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  
   <script>tinymce.init({selector:'textarea'});</script>

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
   
    <!--//navbar-->
<br><br><br><br><br>
<div id="cartilha" class="container-fluid block position-relative">
   <div class="container">

      <form action="diario_bordo.php" method="POST">

      <textarea rows= "20"  name="conteudo"></textarea>

     <style> tinyMCE.init{
      width : "100%" ;
      } 
      </style>   

      <input type="submit" name="enviar" value="Salvar">
   
        </form>
      </div>




<?php

if(isset($_POST['enviar'])){
   $data_hora = date('d/m/Y H:i');
   $texto_diario_gestacao=$_POST['conteudo'];
   echo $data_hora;
   $id_mae=$_SESSION['id_mae'];

   $salvar=('INSERT INTO registro_diario_gestacao (texto_diario_gestacao, data_hora_diario_gestacao) VALUES("'.$texto_diario_gestacao.'",now())');
   $diario=('INSERT INTO diario_bordo_gestacao (id_mae) VALUES ("'.$id_mae.'")');

   $id_diario=("SELECT * FROM diario_bordo_gestacao WHERE id_mae = '$id_mae'");
   $resultado = mysqli_query($link, $id_diario);
   $linhas = mysqli_num_rows($resultado);

      $r = $resultado->fetch_array();
      
      $id_diario_gestacao = $r['id_diario_gestacao'];
      $id_mae = $r['id_mae'];

   $update=("UPDATE registro_diario_gestacao SET id_diario_gestacao = '$id_diario_gestacao' WHERE id_mae = '$id_mae'");
     
   if (mysqli_query($link, $salvar)){
   echo "Salvo com sucesso";
   
   }else{
   echo "Erro ao salvar";
}
if (mysqli_query($link, $diario)){
   echo "Salvo com sucesso";
   
   }else{
   echo "Erro ao salvar";
}}

?>
   <!-- <h1 class="hero-title">
              As pessoas ao meu redor...
            </h1>
    <div class="">
        <form class="ps-lg-5 me-lg-5" method="post">
            <div class="mb-3">
               Quem foi a primeira pessoa a ficar sabendo da gravidez? <input type="text" name="" class="form-control input input-login">
            </div>
            <div class="mb-3">
                Como foi a sensação de contar aos familiares e amigos?<input type="text" name="" class="form-control input input-login" >
            </div>
            <div class="mb-3">
                Qual foi a reação das pessoas?<input type="text" name="" class="form-control input input-login" >
            </div>
            <div class="mb-3">
                Descreva a reação dos avós<input type="text" name="" class="form-control input input-login" >
            </div>
            
            <div class="mb-3">
                
                <input type="submit" name="submit" class="hero-button button-primary btn btn-primary" value="Salvar">
            </div>
        </form>
    </div>
<br><br>


<h1  class="hero-title">
              Quadro de evolução
            </h1>
    <div class="container">
        <form class="ps-lg-5 me-lg-5" method="post">
            <div class="row">
            <div class="col-6 mb-3">
               1° à 4° semana <input type="date" name="" class="form-control input input-login">
            </div>
            <div class="col-6 mb-3">
                à <input type="date" name="" class="form-control input input-login" >
            </div>
            <div class="col-6 mb-3">
               5° à 8° semana <input type="date" name="" class="form-control input input-login">
            </div>
            <div class="col-6 mb-3">
                 à<input type="date" name="" class="form-control input input-login" >
            </div>
            <div class="mb-3">
               Peso da mamãe <input type="text" name="" class="form-control input input-login">
            </div>
            <div class="mb-3">
               Circunferência da barriga<input type="text" name="" class="form-control input input-login" ><br><br>
            </div>
            <div class="col-6 mb-3">
               9° à 12° semana <input type="date" name="" class="form-control input input-login">
            </div>
            <div class="col-6 mb-3">
                 à<input type="date" name="" class="form-control input input-login" >
            </div>
            <div class="mb-3">
               Peso da mamãe <input type="text" name="" class="form-control input input-login">
            </div>
            <div class="mb-3">
               Circunferência da barriga<input type="text" name="" class="form-control input input-login" ><br><br>
            </div>
            <div class="col-6 mb-3">
               13° à 16° semana <input type="date" name="" class="form-control input input-login">
            </div>
            <div class="col-6 mb-3">
                 à<input type="date" name="" class="form-control input input-login" >
            </div>
            <div class="mb-3">
               Peso da mamãe <input type="text" name="" class="form-control input input-login">
            </div>
            <div class="mb-3">
               Circunferência da barriga<input type="text" name="" class="form-control input input-login" ><br><br>
            </div>
            <div class="col-6 mb-3">
               17° à 21° semana <input type="date" name="" class="form-control input input-login">
            </div>
            <div class="col-6 mb-3">
                 à<input type="date" name="" class="form-control input input-login" >
            </div>
            <div class="mb-3">
               Peso da mamãe <input type="text" name="" class="form-control input input-login">
            </div>
            <div class="mb-3">
               Circunferência da barriga<input type="text" name="" class="form-control input input-login" ><br><br>
            </div>
            <div class="col-6 mb-3">
               22° à 26° semana <input type="date" name="" class="form-control input input-login">
            </div>
            <div class="col-6 mb-3">
                 à<input type="date" name="" class="form-control input input-login" >
            </div>
            <div class="mb-3">
               Peso da mamãe <input type="text" name="" class="form-control input input-login">
            </div>
            <div class="mb-3">
               Circunferência da barriga<input type="text" name="" class="form-control input input-login" ><br><br>
            </div>
            <div class="col-6 mb-3">
               27° à 30° semana <input type="date" name="" class="form-control input input-login">
            </div>
            <div class="col-6 mb-3">
                 à<input type="date" name="" class="form-control input input-login" >
            </div>
            <div class="mb-3">
               Peso da mamãe <input type="text" name="" class="form-control input input-login">
            </div>
            <div class="mb-3">
               Circunferência da barriga<input type="text" name="" class="form-control input input-login" ><br><br>
            </div>
            <div class="col-6 mb-3">
               31° à 35° semana <input type="date" name="" class="form-control input input-login">
            </div>
            <div class="col-6 mb-3">
                 à<input type="date" name="" class="form-control input input-login" >
            </div>
            <div class="mb-3">
               Peso da mamãe <input type="text" name="" class="form-control input input-login">
            </div>
            <div class="mb-3">
               Circunferência da barriga<input type="text" name="" class="form-control input input-login" ><br><br>
            </div>
            <div class="col-6 mb-3">
               36° à 40° semana <input type="date" name="" class="form-control input input-login">
            </div>
            <div class="col-6 mb-3">
                 à<input type="date" name="" class="form-control input input-login" >
            </div>
            <div class="mb-3">
               Peso da mamãe <input type="text" name="" class="form-control input input-login">
            </div>
            <div class="mb-3">
               Circunferência da barriga<input type="text" name="" class="form-control input input-login" ><br><br>
            </div>

            <div class="mb-3">
                
                <input type="submit" name="submit" class="hero-button button-primary btn btn-primary" value="Salvar">
            <br><br><br>
            </div>



            <h1 class="hero-title">
              Registro semanal...
            </h1>
            <div class="mb-3">
               Descreva o que sentiu na 1° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_1_semana" accept="image/*"><br><br><br><br>
            </div>
        
            <div class="mb-3">
               Descreva o que sentiu na 2° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_2_semana" accept="image/*"><br><br><br><br>
            </div>

            <div class="mb-3">
               Descreva o que sentiu na 3° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_3_semana" accept="image/*"><br><br><br><br>
            </div>
        
            <div class="mb-3">
               Descreva o que sentiu na 4° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_4_semana" accept="image/*"><br><br><br><br>
            </div>

            <div class="mb-3">
               Descreva o que sentiu na 5° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_5_semana" accept="image/*"><br><br><br><br>
            </div>
        
            <div class="mb-3">
               Descreva o que sentiu na 6° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_6_semana" accept="image/*"><br><br><br><br>
            </div>

            <div class="mb-3">
               Descreva o que sentiu na 7° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_7_semana" accept="image/*"><br><br><br><br>
            </div>
        
            <div class="mb-3">
               Descreva o que sentiu na 8° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_8_semana" accept="image/*"><br><br><br><br>
            </div>

            <div class="mb-3">
               Descreva o que sentiu na 9° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_9_semana" accept="image/*"><br><br><br><br>
            </div>
        
            <div class="mb-3">
               Descreva o que sentiu na 10° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_10_semana" accept="image/*"><br><br><br><br>
            </div>

            <div class="mb-3">
               Descreva o que sentiu na 11° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_11_semana" accept="image/*"><br><br><br><br>
            </div>
        
            <div class="mb-3">
               Descreva o que sentiu na 12° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_12_semana" accept="image/*"><br><br><br><br>
            </div>

            <div class="mb-3">
               Descreva o que sentiu na 13° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_13_semana" accept="image/*"><br><br><br><br>
            </div>
        
            <div class="mb-3">
               Descreva o que sentiu na 14° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_14_semana" accept="image/*"><br><br><br><br>
            </div>

            <div class="mb-3">
               Descreva o que sentiu na 15° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_15_semana" accept="image/*"><br><br><br><br>
            </div>
        
            <div class="mb-3">
               Descreva o que sentiu na 16° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_16_semana" accept="image/*"><br><br><br><br>

                <div class="mb-3">
               Descreva o que sentiu na 17° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_17_semana" accept="image/*"><br><br><br><br>
            </div>
        
            <div class="mb-3">
               Descreva o que sentiu na 18° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_18_semana" accept="image/*"><br><br><br><br>
            </div>

            <div class="mb-3">
               Descreva o que sentiu na 19° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_19_semana" accept="image/*"><br><br><br><br>
            </div>
        
            <div class="mb-3">
               Descreva o que sentiu na 20° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_20_semana" accept="image/*"><br><br><br><br>
            </div>

            <div class="mb-3">
               Descreva o que sentiu na 21° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_21_semana" accept="image/*"><br><br><br><br>
            </div>
        
            <div class="mb-3">
               Descreva o que sentiu na 22° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_22_semana" accept="image/*"><br><br><br><br>
            </div>

            <div class="mb-3">
               Descreva o que sentiu na 23° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_23_semana" accept="image/*"><br><br><br><br>
            </div>
        
            <div class="mb-3">
               Descreva o que sentiu na 24° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_24_semana" accept="image/*"><br><br><br><br>
            </div>

            <div class="mb-3">
               Descreva o que sentiu na 25° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_25_semana" accept="image/*"><br><br><br><br>
            </div>

            <div class="mb-3">
               Descreva o que sentiu na 26° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_26_semana" accept="image/*"><br><br><br><br>
            </div>
        
            <div class="mb-3">
               Descreva o que sentiu na 27° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_27_semana" accept="image/*"><br><br><br><br>
            </div>

            <div class="mb-3">
               Descreva o que sentiu na 28° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_28_semana" accept="image/*"><br><br><br><br>
            </div>

            <div class="mb-3">
               Descreva o que sentiu na 29° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_29_semana" accept="image/*"><br><br><br><br>
            </div>
        
            <div class="mb-3">
               Descreva o que sentiu na 30° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_30_semana" accept="image/*"><br><br><br><br>
            </div>

            <div class="mb-3">
               Descreva o que sentiu na 31° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_31_semana" accept="image/*"><br><br><br><br>
            </div>

            <div class="mb-3">
               Descreva o que sentiu na 32° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_32_semana" accept="image/*"><br><br><br><br>
            </div>
        
            <div class="mb-3">
               Descreva o que sentiu na 33° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_33_semana" accept="image/*"><br><br><br><br>
            </div>

            <div class="mb-3">
               Descreva o que sentiu na 34° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_34_semana" accept="image/*"><br><br><br><br>
            </div>

            <div class="mb-3">
               Descreva o que sentiu na 35° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_35_semana" accept="image/*"><br><br><br><br>
            </div>
        
            <div class="mb-3">
               Descreva o que sentiu na 36° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_36_semana" accept="image/*"><br><br><br><br>
            </div>

            <div class="mb-3">
               Descreva o que sentiu na 37° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_37_semana" accept="image/*"><br><br><br><br>
            </div>

            <div class="mb-3">
               Descreva o que sentiu na 38° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_38_semana" accept="image/*"><br><br><br><br>
            </div>

            <div class="mb-3">
               Descreva o que sentiu na 39° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_39_semana" accept="image/*"><br><br><br><br>
            </div>
        
            <div class="mb-3">
               Descreva o que sentiu na 40° semana <input type="text" name="" class="form-control input input-login">
            </div>
            <div>
                <input type="file" name ="foto_40_semana" accept="image/*"><br><br><br><br>
            </div>
            </div>
        </div>
        </form>-->
    </div>
    </div>
    </div>
<?php
         }else if($id_profissional == 0){
            header('Location: login_mae.php');
         
     }
   ?>

<!--<footer>
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
      <script src="../assets/js/main.js"></script>-->
<BR>
</body>

</html>








<?php

      /*  
    }*/
?>