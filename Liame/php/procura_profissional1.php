<?php include 'conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Busca por Especialistas</title>
	</head>
	<body>
		<h2>Encontre agora um especialista:</h2>

		<form name="pesquisar" class="" action="procura_profissional2.php" method="POST">
				O que está procurando?
				<select name="profissional" >
					<option selected disabled>Selecione e especialidade </option>
					<?php
						$sql_especialidade = 'select id_especialidade, especialidade from especialidade;';
						$resul_especialidade = mysqli_query($link, $sql_especialidade);
						if($resul_especialidade->num_rows > 0){
							while($exibe = $resul_especialidade->fetch_array()){
					?>
						<option value="<?php echo $exibe['id_especialidade']; ?>"> <?php echo $exibe['especialidade']; ?></option>
					<?php
							}
						}
				?>
				</select>

				Em qual estado?
				<select name="estado" >
					<option selected disabled>Selecione o estado </option>
					<?php
						$sql_estado = 'select id_estado, estado from estado;';
						$resul_estado = mysqli_query($link, $sql_estado);
						if($resul_estado->num_rows > 0){
							while($exibe = $resul_estado->fetch_array()){
					?>
						<option value="<?php echo $exibe['id_estado']; ?>"> <?php echo $exibe['estado']; ?></option>
					<?php
							}
						}
				?>
				</select>
				<input type="submit" value="Buscar">
			</form>
	</body>
</html>
