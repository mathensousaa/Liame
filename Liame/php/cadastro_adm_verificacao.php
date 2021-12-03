<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="cadastro_adm_verificacao.php" method="post">
            <p>Código de acesso: <input type="password" name="codigo" /></p>
            <p><input type="submit" /></p>
        </form>
        <?php
            if(!empty($_POST)){
                $codigo_digitado = $_POST['codigo'];
                $codigo_verificado = "liame";

                if ($codigo_digitado != $codigo_verificado){
                    echo "Código errado";
                }else{
                    header('Location: cadastro_adm1.php');
                }
            }
        ?>
    </body>
</html>