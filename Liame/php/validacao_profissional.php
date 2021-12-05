<?php
    include ('conexao.php');
    $status= 0;
    $documentacao="";
    $sql_busca = ("select esp.id_especialidade, especialidade, 
                pro.id_profissional as id, nome_profissional, email_profissional, status_validacao_profissional, documentacao_validacao_profissional

                from profissional as pro     

                inner join especialidade_profissional as esp on esp.id_especialidade = es.id_especialidade 
                inner join profissional as pro on pro.id_profissional = esp.id_profissional 
                WHERE status_validacao_profissional = '$status' AND comumentacao_validacao_profissional != '$documentacao'" );
    
                $consulta = mysqli_query($link, $sql_busca);
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
                                    echo utf8_encode ('<b>Email: </b>' . $email_profissional);
                                    echo utf8_encode ('<b>Documentaçao: </b>' .$documentacao_profissional.'<br>');	
                                ?>
                            </div>
                        </div>
                    </div>
                    <br>
                    <?php
                  }
              }else{
            // caso não tenha encontrado nehum profissinal 
                echo "Nenhum profissional para ser avaliado.";
              }
            ?>
            </div>
          </div>
                  </div>
                </div>
              </div>
            </div>
          </div>