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

<body>

<?php
    include ('conexao.php');
    $id_profissional = $_GET['id'];

    $query ="SELECT * FROM profissional WHERE id_profissional = '$id_profissional'";
    $dados = mysqli_query($link, $query);

    while($row = mysqli_fetch_array($dados)){
    echo "<table>";
    
    echo "<td>" . $row['nome_profissional'] . "</td>";
    echo "<td>" . $row['email_profissional'] . "</td>";
    ?>

    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="col-6">
              <img src="" alt="">
          </div>
          <div class="col-6">
              <h5>
                <?php
                  $row['nome_profissional'];
                ?>
              </h5>
          </div>
        </div>
        <div class="col-6">

        </div>
        
      </div>
    </div>
    <?php
    }
    ?>


    <!-- $sql_busca = "select * from profissional where id_profissioanal = '.$id_profissional.';";

    $result = mysqli_query($link, $sql_busca);

    $linhas = mysqli_fetch_array($result);

    echo($linhas['nome_profissional']);

    if ($linhas > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<b>Nome: </b>" . $row["nome_profissional"]. " - <b>email_profissional: </br>" . $row["email_profissional"]. "<br>";
      }
    } else {
      echo "Nenhum profissional encontrado";
    }
    $link->close(); -->