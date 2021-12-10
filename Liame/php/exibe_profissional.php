<?php
    include ('conexao.php');
    $id_profissional = $_GET['id'];

    $query ="SELECT * FROM profissional WHERE id_profissional = '$id_profissional'";
    $dados = mysqli_query($link, $query);

    while($row = mysqli_fetch_array($dados)){
    echo "<table>";
    
    echo "<td>" . $row['nome_profissional'] . "</td>";
    echo "<td>" . $row['email_profissional'] . "</td>";
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