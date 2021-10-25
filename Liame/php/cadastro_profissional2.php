<?php
    session_start();
    $_SESSION['nome_profissional'] = $_POST["nome_profissional"];
    $_SESSION['especialidade_profisisonal'] = $_POST["especialidade_profisisonal"];
    $_SESSION['numero_registro_profisisonal'] = $_POST["numero_registro_profisisonal"];
?>

<form action="cadastro_profissional3.php" method="post"/>

    CEP:<input name="cep_profissional" type="text"/></br>

    <label>Tipo de logradouro:</label>
    <select>
        <option selected disabled value="">Selecione</option>
        <option>Aeroporto</option>
        <option>Alameda</option>
        <option>Área</option> 
        <option>Avenida</option>
        <option>Campo</option>
        <option>Chácara</option>
        <option>Colônia</option>
        <option>Condomínio</option>
        <option>Conjunto</option>
        <option>Distrito</option>
        <option>Esplanada</option> 
        <option>Estação</option>
        <option>Estrada</option>
        <option>Favela</option>
        <option>Fazenda</option>
        <option>Feira</option> 
        <option>Jardim</option>
        <option>Ladeira</option>
        <option>Lago</option>
        <option>Lagoa</option>
        <option>Largo</option>
        <option>Loteamento</option>
        <option>Morro</option>
        <option>Núcleo</option> 
        <option>Parque</option>
        <option>Passarela</option>
        <option>Pátio</option>
        <option>Praça</option>
        <option>Quadra</option>
        <option>Recanto</option>
        <option>Ricidencial</option>
        <option>Rodovia</option> 
        <option>Rua</option>
        <option>Setor</option>
        <option>Sítio</option>
        <option>Travessa</option>
        <option>Trecho</option>
        <option>Trevo</option>
        <option>Vale</option>
        <option>Vereda</option> 
        <option>Via</option>
        <option>Viaduto</option>
        <option>Viela</option>
        <option>Vila</option> 
    </select></br>

    Nome do logradouro:<input name="nome_logradouro_profissional" type="text"/></br>

    Número:<input name="numero_endereco_profissional" type="text"/></br>

    Bairro:<input name="bairro_profissional" type="text"/></br>

    Cidade:<input name="cidade_profissional" type="text"/></br>

    <label>UF:</label>
    <select>
        <option selected disabled value="">Selecione</option>
        <option>AC</option>
        <option> AL</option>
        <option>AP</option> 
        <option>AM</option>
        <option>BA</option>
        <option>CE</option>
        <option>DF</option>
        <option>ES</option>
        <option>GO</option>
        <option>MA</option>
        <option>MG</option> 
        <option>MS</option>
        <option>MT</option>
        <option>PA</option>
        <option>PB</option>
        <option>PE</option> 
        <option>PI</option>
        <option>PR</option>
        <option>RJ</option>
        <option>RN</option>
        <option>RS</option>
        <option>RO</option>
        <option>RR</option>
        <option>SC</option> 
        <option>SP</option>
        <option>SE</option>
        <option>TO</option>
    </select></br>

    Complemento: <input name="complemento_endereco_profissional" type="text"/></br>

    <input type="submit" value="Avançar"/>
</form>