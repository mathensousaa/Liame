<?php
	include ('conexao.php');
 //resgata dados selecionados
	if( isset ($_POST['buscar'])){
  		$buscarprofissional = $_POST ['profissional'];
		$buscarestado = $_POST['estado'];
// procura no banco de dados
		$sql_busca = ("SELECT id_especialidade,estado FROM profissional, endereco WHERE id_especialidade like '%$buscarprofissional%' = estado like '%$buscarestado%'" );
  		$consulta = mysqli_query($link, $sql_busca);

// ver dados do profissional que bate com os dados selecionados 
		while ($vetor = mysqli_fetch_array($consulta)){
			$nome_profissional= $vetor['nome_profissional'];
			$email_profissional=$vetor['email_profissional'];
			$sobre_profissional=$vetor['sobre_mim_profissional'];
			$endereco_profissional=$vetor['descricao_endereco_profissional'];
			$tel_profissional=$vetor['telefone_profissional'];
			$insta_profissional=$vetor['instagram_profissional'];
			$face_profissional=$vetor['facebook_profissional'];
			$whats_profissional=$vetor['whatsapp_profissional'];
		
// exibir profissionais especializados da região
			echo "Nome: $nome_profissional<br>";
		  	echo "Email: $email_profissional<br>";
		  	echo "Sobre o Profissional: $sobre_profissional<br>";
		  	echo "endereço $endereco_profissional<br>";			
		 	echo "Telefone para contato: $tel_profissional<br>";
			echo "Instagram: $insta_profissional<br>";
			echo "Facebook: $face_profissional<br>";
			echo "Whatsapp: $whats_profissional<br>";
  		}
	}else{
// caso não tenha encontrado nehum profissinal 
		echo "Nenhum Profissional encontrado nessa área.";
	}
?>
