<?php
    include ('conexao.php');
    $id_profissional= 4;
    //$id_profissional= intval ($_GET['id']);
    $sql_busca = "SELECT * from profissional WHERE id_profissioanal = '$id_profissional'";

    $result = mysqli_query($link, $sql_busca);

    $linhas = mysqli_num_rows($result);

    if ($linhas > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<b>Nome: </b>" . $row["nome_profissional"]. " - <b>email_profissional: </br>" . $row["email_profissional"]. "<br>";
      }
    } else {
      echo "Nenhum profissional encontrado";
    }
    $link->close();


    // $sql_query = $link->query($consulta);
    // while($linha = mysqli_fetch_assoc($result))
    // {
    //     echo "<tr>";
    //     echo "<td>".$vetor['id']."</td>";
    // }

    // $nome_profissional= $linha['nome_profissional'];
	// $especialidade_profissional=$linha['especialidade'];
	// $estado_profissional=$linha['estado'] . ' - '. $linha['uf'];
	// $cidade_profissional=$linha['cidade'];
	// $cep_profissional=$linha['cep'];
	// $foto_profissional=$linha['foto_perfil_profissional'];
	// $bairro_profissional=$linha['bairro'];
	// $descricao_endereco_profissional=$linha['descricao_endereco'];
	// $numero_endereco_profissional=$linha['numero_endereco'];
	// $endereco_profissional= $linha['tipo_logradouro'].': ' . $linha['logradouro'];
	// $telefone_profissional= '('.$linha['ddd_telefone_profissional'].') '.$linha['numero_telefone_profissional'];
?>