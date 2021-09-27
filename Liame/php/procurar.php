<?php
if (!isset($_GET['especialidade'])) {
	header("Location: paginadeprocura.php");
	exit;
}

$nome = "%".trim($_GET['especialidade'])."%";

$host = "localhost";
$user = "root";
$pass = "";
$db = "Liame";
$mysqli = new mysqli($host, $user, $pass, $db);



$sth = $mysqli->prepare('SELECT * FROM `especialidade` WHERE `nome` LIKE :nome');
$sth->bindParam(':nome', $nome, mysqli::PARAM_STR);
$sth->execute();

$resultados = $sth->fetchAll(mysqli::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Resultado da busca</title>
</head>
<body>
<h2>Resultado da busca</h2>
<?php
if (count($resultados)) {
	foreach($resultados as $Resultado) {
?>
<label><?php echo $Resultado['id']; ?> - <?php echo $Resultado['nome']; ?></label>
<br>
<?
} } else {
?>
<label>Não foram encontrados resultados pelo termo buscado.</label>
<?php
}
?>
</body>
</html>
