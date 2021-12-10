<?php
// ANOTAÇÃO PROCURA PROFISSIONAL SOARES
// PELO AMOR DE DEUS NÃO APAGA 😭😭🙏🏼  

    "red.id_profissional, youtube_profissional, whatsapp_profissional, telegram_profissional, facebook_profissional, linkedin_profissional, instagram_profissional
    
    inner join rede_social_profissional as red on red.id_ = pro.id_profissional";





    $sql_busca = ("select  res.id_diario_gestcao, texto_diario_gestacao, data_hora_diario_gestacao,
    dia.id_diario_gestacao, dia.id_mae, dia.id_bebe, 
    mae.id_mae, nome_mae, 
    beb.id_bebe, nome_bebe


    from registros_diario_gestacao as res 

    inner join registros_diario_gestacao as res on res.id_diario_gestacao = dia.id_diario_gestacao
    inner join diario_gestacao as dia on dia.id_mae = mae.id_mae 
    inner join diario_gestacao as dia on dia.id_bebe = beb.id_bebe
    WHERE (CONTINUA ESCREVENDO O CODIGO SQL NORMALMENTE)" );

    $consulta = mysqli_query($link, $sql_busca);
        if($consulta->num_rows > 0){
            while ($vetor = mysqli_fetch_array($consulta)){
              $nome_mae= $vetor['nome_mae'];
              $nome_bebe=$vetor['nome_bebe'];
              $texto_diario=$vetor['texto_diario_gestacao'];
            }
        }

?>