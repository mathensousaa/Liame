

<?php
session_start();
include('conexao.php');

if(!empty($_POST) && empty($_POST['email_adm']) || empty($_POST['senha_adm'])){
    /*echo('<script>window.alert("preencha os campos para continuar")</script>');
    echo('<script>window.location = "index.php"</script>');
    exit;*/
}

$email_adm = $_POST['email_adm'];
$senha_adm = sha1(trim($_POST['senha_adm']));

$query = "SELECT * FROM adm WHERE email_adm = '" . $email . "' AND senha_adm = '" . $senha . "';";
$result = mysqli_query($connection, $query);
if(!$result){
    echo('Erro: ' . mysqli_error($connection));
    exit;
}

if(mysqli_num_rows($result)){
    $adm = mysqli_fetch_assoc($result);
    $nome_adm = $adm['nome_adm'];
    $id_adm = $adm['id_adm'];

    $_SESSION['adm'] = $nome_adm;
    $_SESSION['id_adm'] = $id_adm;
    header('location: painel.php');
}else{
    echo('<script>window.alert("Os dados inseridos estão incorretos")</script>');
    echo('<script>window.location = "index.php"</script>');
}


?>