<?php
    include ('conexao.php');
    $status = 0;
    $documentacao = "";
    $consulta = "SELECT * from profissionais 
                  WHERE status_validacao_profissional = '$status' 
                  AND domumentacao_validacao_profissional != '$documentacao'";
                
                $resultado = $mysqli->query($link, $consulta) or die ($myslqi->error);
?>
                <table>
                  <td>
                    <tr>Nome</tr>
                    <tr>Email</tr>
                    <tr>Documentacao</tr>
                    <tr></tr>
                  </td>
                  <td>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                    <tr></tr>
                  </td>
                </table>
<?php

                if($consulta->num_rows > 0){
                  while ($vetor = mysqli_fetch_array($consulta)){
                    $nome_profissional= $vetor['nome_profissional'];
                    $especialidade_profissional=$vetor['especialidade'];
                    $email_profissional=$vetor['email_profissional'];
                    $documentacao_profissional=$vetor['documentacao_validacao_profissional'];
                    $status_profissional=$vetor['status_profissional'];
?>
                        <div class="col-sm-3">
                          <div class="card">
                            <div class="card-body">
                              <?php
                                echo utf8_encode ('<b>Nome: </b>' .$nome_profissional.'<br>');
                                echo utf8_encode ('<b>Especialidade: </b>' .$especialidade_profissional.'<br>');	
                                echo utf8_encode ('<b>Documentaçao: </b>' .$documentacao_profissional.'<br>');	
                              ?>
                            </div>                    
                          </div>
                        </div>
                      <br>
<?php
                  }
              }else{
                echo "Nenhum profissional para ser avaliado.";
              }
?>