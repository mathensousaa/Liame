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

  $strSQL = "SELECT titulo_diario_gestacao, texto_diario_gestacao, data_hora_diario_gestacao FROM registro_diario WHERE id_mae = '$id_mae' ORDER BY  data_hora_diario_gestacao DESC";
  $r = mysqli_query($link,$strSQL); 
  $e= $r->fetch_array();
  $titulo_exibir = $e['titulo_diario_gestacao'];
  /*
  
  while($row = mysqli_fetch_array($r)){
    ?>
    
      <?php
  
    echo $row['titulo_diario_gestacao'] . "<br>";?>
   
  
  
    <?php
  
  $exibir= "SELECT texto_diario_gestacao FROM registro_diario WHERE titulo_diario_gestacao = '$titulo_exibir'";
  $query= mysqli_query($link,$exibir);
  $texto = mysqli_fetch_assoc($query);
  
  print_r( $texto);
  
  }
  
  
  
    
  
  
  /*while($row = mysqli_fetch_array($r)){
      echo $row['texto_diario_gestacao'] ;
      echo $row['data_hora_diario_gestacao'];
  }*/
  

  
?>

<main>
  <?php
  while($row = mysqli_fetch_array($r)){
    
    ?>
    <div class="container" id="titulos">
      <div class="row pb-2">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-4">
          <a class="titulo-diario">
            <div class="text-container">
              <h6 class="pb-0">
                <!-- puxar titulo aqui -->
                <?php
  
                  echo $row['titulo_diario_gestacao'] ;
                  $titulo=$row['titulo_diario_gestacao'];
                  ?>
   
                
              </h6>
              <p class="preview">
                Ontem o enzo estava na sala brincando com seus
                ...
              </p>
              
              <a href="exibe_diario2?titulo=<?php echo $titulo ?>" class="button button-tertiary btn btn-primary">Ver mais</a>
          
              <p class=data>
                <?php
               echo $row['data_hora_diario_gestacao'];
               ?>
              </p>
            </div>
          </a>
        </div>
        <?php
  }
        ?>
  <!--
        <div class="col-lg-3 col-md-6 col-sm-12 pb-4">
          <a class="titulo-diario">
            <div class="text-container">
              <h6 class="pb-0">
                
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
    </div>-->
  </main>
  <?php
}else{
  header('Location: ../index.php');
    
}
?>
</body>

</html>