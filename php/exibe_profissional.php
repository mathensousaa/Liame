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

    $query_dados ="SELECT * FROM profissional WHERE id_profissional = '$id_profissional'";
    $query_tel = "SELECT * FROM telefone_profissional WHERE id_profissional = '$id_profissional'";
    $qurey_end = "SELECT * FROM endereco_profissional WHERE id_profissional = '$id_profissional'";
    $qurey_red = "SELECT * FROM rede_social_profissional WHERE id_profissional = '$id_profissional'";

    $dados = mysqli_query($link, $query_dados);
    while($row = mysqli_fetch_array($dados)){
    echo "<table>";
    echo "<tr>Nome: " . $row['nome_profissional'] . "</tr><br>";
    echo "<tr> Email: " . $row['email_profissional'] . "</tr><br>";
    }

  //   $tel = mysqli_query($link, $query_tel);
  //   while($row = mysqli_fetch_array($tel)){
  //   echo "<table>";
  //   echo "<tr>Telefone para contato: (" . $row['ddd_telefone_profissional'] . ") ".$row['numero_telefone_profissional']."</tr><br>";
    
  // }
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