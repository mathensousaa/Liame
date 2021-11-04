<!DOCTYPE html>
<html>
<head>
	<title>Busca por Especialistas</title>
</head>
<body>
	<h2>Encontre agora um especialista:</h2>

	<form name="pesquisar" class="" action="procura_profissional2.php" method="POST">
	        O que está procurando?
	        <input name="profissional" list= "profissional" size ="30" placeholder = "Escolha seu profissional...">
	        <datalist id="profissional">
			<?php
				$sql_especialidade = 'select * from especialidade;';
				$resul_especialidade = mysqli_query($link, $sql_especialidade);
				while($con = mysqli_fetch_array($resul_especialidade)){
			?>
	            <option value="<?php echo $con['especialidade']; ?>" />
			<?php
				}
			?>

			</datalist>
			Em qual estado?
	        <input name="estado" list= "estado" size ="30" placeholder = "Escolha seu estado...">
	        <datalist id="estado">
			<?php
				$sql_estado = 'select * from estados;';
				$resul_estado = mysqli_query($link, $sql_estado);
				while($con = mysqli_fetch_array($resul_estado)){
			?>
	            <option value="<?php echo $con['estado']; ?>" />
			<?php
				}
			?>

	        </datalist>

					<!-- Em que estado?
					<input name="estado" list= "estado" size ="30" placeholder = "Escolha o Estado...">
 				 <datalist id="estado">
 						 <option value="Acre" />
 						 <option value="Alagoas" />
 						 <option value="Amapá" />
 						 <option value="Amazonas" />
 						 <option value="Bahia" />
 						 <option value="Ceará" />
 						 <option value="Distrito Federal" />
 						 <option value="Espírito Santo" />
 						 <option value="Goiás" />
 						 <option value="Maranhão" />
 						 <option value="Mato Grosso" />
 						 <option value="Mato Grosso do Sul" />
 						 <option value="Minas Gerais" />
 						 <option value="Pará" />
						 <option value="Paraíba" />
 						 <option value="Paraná" />
 						 <option value="Pernambuco" />
 						 <option value="Piauí" />
 						 <option value="Rio de Janeiro" />
 						 <option value="Rio Grande do Norte" />
 						 <option value="Rio Grande do Sul" />
 						 <option value="Rondônia" />
						 <option value="Roraima" />
						 <option value="Santa Catarina" />
						 <option value="São Paulo" />
						 <option value="Sergipe" />
						 <option value="Tocantins" />
 				 </datalist> -->
					<input type="submit" value="Buscar">

	    </form>


</body>
</html>
