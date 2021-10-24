<?php
    session_start();
    $_SESSION['nome_profissional'] = $_POST["nome_profissional"];
    $_SESSION['foto_perfil_profisisonal'] = $_POST["foto_perfil_profissional"];
?>

<form action="cadastro_profissional3.php" method="post"/>
    Telefone:<input name="telefone_profissional" type="text"/></br>

    CEP:<input name="cep_profissional" type="text"/></br>

    Tipo de logradouro:<input name="tipo_logradouro_profissional" type="radio" value="aeroporto"/>Aeroporto
    <input name="tipo_logradouro_profissional" type="radio" value="alameda"/>Alameda
    <input name="tipo_logradouro_profissional" type="radio" value="area"/>Área
    <input name="tipo_logradouro_profissional" type="radio" value="avenida"/>Avenida
    <input name="tipo_logradouro_profissional" type="radio" value="campo"/>Campo
    <input name="tipo_logradouro_profissional" type="radio" value="chacara"/>Chácara
    <input name="tipo_logradouro_profissional" type="radio" value="colonia"/>Colônia
    <input name="tipo_logradouro_profissional" type="radio" value="condominio"/>Condomínio
    <input name="tipo_logradouro_profissional" type="radio" value="conjunto"/>Conjunto
    <input name="tipo_logradouro_profissional" type="radio" value="distrito"/>Distrito
    <input name="tipo_logradouro_profissional" type="radio" value="esplanada"/>Esplanada
    <input name="tipo_logradouro_profissional" type="radio" value="estacao"/>Estação
    <input name="tipo_logradouro_profissional" type="radio" value="estrada"/>Estrada
    <input name="tipo_logradouro_profissional" type="radio" value="favela"/>Favela
    <input name="tipo_logradouro_profissional" type="radio" value="fazenda"/>Fazenda
    <input name="tipo_logradouro_profissional" type="radio" value="feira"/>Feira
    <input name="tipo_logradouro_profissional" type="radio" value="jardim"/>Jardim
    https://www.significados.com.br/logradouro/
    <input name="tipo_logradouro_profissional" type="radio" value="alameda"/>Alameda
    <input name="tipo_logradouro_profissional" type="radio" value="area"/>Área
    <input name="tipo_logradouro_profissional" type="radio" value="avenida"/>Avenida
    <input name="tipo_logradouro_profissional" type="radio" value="campo"/>Campo
    <input name="tipo_logradouro_profissional" type="radio" value="chacara"/>Chácara
    <input name="tipo_logradouro_profissional" type="radio" value="colonia"/>Colônia
    <input name="tipo_logradouro_profissional" type="radio" value="condominio"/>Condomínio
    <input name="tipo_logradouro_profissional" type="radio" value="conjunto"/>Conjunto
    <input name="tipo_logradouro_profissional" type="radio" value="distrito"/>Distrito
    <input name="tipo_logradouro_profissional" type="radio" value="esplanada"/>Esplanada
    <input name="tipo_logradouro_profissional" type="radio" value="estacao"/>Estação
    <input name="tipo_logradouro_profissional" type="radio" value="estrada"/>Estrada
    <input name="tipo_logradouro_profissional" type="radio" value="favela"/>Favela
    <input name="tipo_logradouro_profissional" type="radio" value="fazenda"/>Fazenda
    <input name="tipo_logradouro_profissional" type="radio" value="feira"/>Feira
    <input name="tipo_logradouro_profissional" type="radio" value="jardim"/>Jardim
    
    Nome do logradouro:<input name="nome_logradouro_profissional" type="text"/></br>
    Número:<input name="numero_endereco_profissional" type="text"/></br>
    Bairro:<input name="bairro_profissional" type="text"/></br>
    Cidade:<input name="cidade_profissional" type="text"/></br>
    UF:<input name="UF_profissional" type="text"/></br>
    <input type="submit" value="Avançar"/>
</form>