<h1>Todos os funcinários cadastrados:</h1>

<?php
    $sql = "SELECT id, nome, nascimento, cpf, rg, emissao, orgao, sexo,	mae, pai, endereco,	cep, contabanco, agencia, funcao, escolaridade, email FROM cadastro; "

    $resultado = $conexao->query($sql);

    $qtdLinhas = $resultado->num_rows;

    if ($qtdLinhas > 0) {
        while ($produto = $resultado->fetch_assoc()) {
           echo 
           "<div class='card'>
              <div class='card-body'>
                <h2>Nome: {$produto['nome']}</h2>
                <h4>ID: {$produto['id']}</h4>
                <p>Data de nascimento: {$produto['nascimento']}</p>
                <p>Cpf: {$produto['cpf']}</p>
                <p>Rg: {$produto['rg']}</p>
                <p>Data de emissão: {$produto['emissao']}</p>
                <p>orgão expedidor: {$produto['orgao']}</p>
                <p>Sexo: {$produto['sexo']}</p>
                <p>Nome da mãe: {$produto['mae']}</p>
                <p>Nome do pai: {$produto['pai']}</p>
                <p>Endereço: {$produto['endereco']}</p>
                <p>Cep: {$produto['cep']}</p>
                <p>Número da conta bancária: {$produto['contabanco']}</p>
                <p>Nome da agência: {$produto['agencia']}</p>
                <p>Função a ser exercida: {$produto['funcao']}</p>
                <p>Nivel de escolariadade: {$produto['escolaridade']}</p>
                <p>E-mail: {$produto[ 'email']}</p>

                 <button class=\"btn btn-success\" onclick=\"location.href='?page=edicao&id={$produto['id']}'\">Editar</button>
                 
                 <button class=\"btn btn-danger\"onclick=\"location.href='?page=exclusao&id={$produto['id']}'\">Deletar</button>

              </div>
           </div>";
        }
    }else {
        echo "<p class=\"alert alert-danger\">Não há nenhum funcionário cadastrado no sistema.</p>";
    }
?>