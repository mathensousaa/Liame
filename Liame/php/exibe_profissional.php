<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title><?php echo $nome_profissional;?> | Liame</title>
  </head>
    <body>
      <?php 
        session_start();
        include 'conexao.php'; 
        // procura no banco de dados
          $sql_busca = ("select esp.id_especialidade, especialidade, est.id_estado, estado, uf, pro.id_profissional as id, nome_profissional, 
                  email_profissional, foto_perfil_profissional, descricao_endereco,
                  ddd_telefone_profissional, numero_telefone_profissional, logradouro, numero_endereco, cep, cidade, estado, bairro  
                  from especialidade as es 
                  inner join especialidade_profissional as esp on esp.id_especialidade = es.id_especialidade 
                  inner join profissional as pro on pro.id_profissional = esp.id_profissional 
                  inner join endereco_profissional as ende on ende.id_endereco = pro.id_endereco 
                  inner join estado as est on ende.id_estado = est.id_estado 
                  inner join cidade as cid on ende.id_cidade = cid.id_cidade 
                  inner join telefone_profissional as tel on tel.id_telefone = pro.id_telefone" );
            
          $consulta = mysqli_query($link, $sql_busca);
          if($consulta->num_rows > 0){
            while ($vetor = mysqli_fetch_array($consulta)){
              $nome_profissional= $vetor['nome_profissional'];
              $especialidade_profissional=$vetor['especialidade'];
              $estado_profissional=$vetor['estado'];
              $cidade_profissional=$vetor['cidade'];
              $cep_profissional=$vetor['cep'];
              $foto_profissional=$vetor['foto_perfil_profissional'];
              $telefone_profissional= '('.$vetor['ddd_telefone_profissional'].') '.$vetor['numero_telefone_profissional'];
   
                        
              if ($foto_profissional != ""){
                ?><img id="img_exibe" class="img-fluid" src="../assets/img/icone-especialista.png" alt=""><?php
              }else{
                ?><img id="img_exibe" class="img-fluid" src="../assets/img/icone-especialista.png" alt=""><?php
              }
              ?><br><?php   
              echo utf8_encode ('Especialidade: ' .$especialidade_profissional.'<br>');	
              echo utf8_encode ('Estado: ' .$estado_profissional.'<br>');		
              echo utf8_encode ('Cidade: ' .$cidade_profissional.'<br>');
              echo utf8_encode ('CEP: ' .$cep_profissional.'<br>');	
              echo utf8_encode ('Nome: ' .$nome_profissional.'<br>');
              echo utf8_encode ('Telefone: ' .$telefone_profissional.'<br>');
                      
            }
        }else{
        // caso não tenha encontrado nehum profissinal 
          echo "Nenhum profissional encontrado nessa área.";
        }
      ?>
  </body>
</html>