<h1>Página de Edição:</h1>

<?php
  $id = $_GET["id"];
  $sql = "SELECT * FROM cadastro WHERE id={$id}";
  $resultado = $conexao->query($sql);
  $produto = $resultado->fetch_object();


  $nomeProduto = $produto->nome;
  $nascimentoProduto = $produto->nascimento;
  $cpfProduto = $produto->cpf;
  $rgProduto = $produto->rg;
  $emissaoProduto = $produto->emissao;
  $orgaoProduto = $produto->orgao;
  $sexoProduto = $produto->sexo;
  $maeProduto = $produto->mae;
  $paiProduto = $produto->pai;
  $enderecoProduto = $produto->endereco;
  $cepProduto = $produto->cep;
  $contabancoProduto = $produto->contabanco;
  $agenciaProduto = $produto->agencia;
  $funcaoProduto = $produto->funcao;
  $escolaridadeProduto = $produto->escolaridade;
  $emailProduto = $produto->email;
 
?>
<form action="?page=atuarNoBanco" method="post" class="mt-4">
       
       <input type="hidden" name="acao" value="editar">
       <input type="hidden" name="id" value="<?php echo $id ?>">
       
       <label for="nome">Nome do funcionário:</label>
       <input type="text" name="nome" placeholder="Digite o nome do funcionário..." class="form-control mt-2 mb-3" value="<?php echo $nomeProduto;?>" >
       
       <label for="nascimento">Data de nascimento do funcionário:</label>
       <input type="text" name="nascimento" placeholder="Digite o sebrenome do funcionário..." class="form-control mt-2 mb-3" value="<?php echo $nascimentoProduto?>">
       
       <label for="cpf">Cpf do funcionário:</label>
       <input type="text" name="cpf" placeholder="Digite a data de nascimento do funcionário..." class="form-control mt-2 mb-3" value="<?php echo $cpfProduto?>">
       
       <label for="rg">rg do funcionário:</label>
       <input type="text" name="rg" placeholder="Digite o rg do funcionário..." class="form-control mt-2 mb-3" value="<?php echo $rgProduto?>">
       
       <label for="emissao">emissao do funcionário:</label>
       <input type="text" name="emissao" placeholder="Digite o rg do funcionário..." class="form-control mt-2 mb-3" value="<?php echo $emissaoProduto?>">

       <label for="orgao">orgao do funcionário:</label>
       <input type="text" name="orgao" placeholder="Digite o rg do funcionário..." class="form-control mt-2 mb-3" value="<?php echo $orgaoProduto?>">
        
       <label for="sexo">sexo do funcionário:</label>
       <input type="text" name="sexo" placeholder="Digite o rg do funcionário..." class="form-control mt-2 mb-3" value="<?php echo $sexoProduto?>">

       <label for="mae">mae do funcionário:</label>
       <input type="text" name="mae" placeholder="Digite o rg do funcionário..." class="form-control mt-2 mb-3" value="<?php echo $maeProduto?>">

       <label for="pai">pai do funcionário:</label>
       <input type="text" name="pai" placeholder="Digite o rg do funcionário..." class="form-control mt-2 mb-3" value="<?php echo $paiProduto?>">

       <label for="endereco">endereco do funcionário:</label>
       <input type="text" name="endereco" placeholder="Digite o rg do funcionário..." class="form-control mt-2 mb-3" value="<?php echo $enderecoProduto?>">

       <label for="cep">cep do funcionário:</label>
       <input type="text" name="cep" placeholder="Digite o rg do funcionário..." class="form-control mt-2 mb-3" value="<?php echo $cepProduto?>">

       <label for="contabanco">contabanco do funcionário:</label>
       <input type="text" name="contabanco" placeholder="Digite o rg do funcionário..." class="form-control mt-2 mb-3" value="<?php echo $contabancoProduto?>">

       <label for="agencia">agencia do funcionário:</label>
       <input type="text" name="agencia" placeholder="Digite o rg do funcionário..." class="form-control mt-2 mb-3" value="<?php echo $agenciaProduto?>">

       <label for="funcao">funcao do funcionário:</label>
       <input type="text" name="funcao" placeholder="Digite o rg do funcionário..." class="form-control mt-2 mb-3" value="<?php echo $funcaoProduto?>">

       <label for="email">E-mail do funcionário:</label>
       <input type="text" name="email" placeholder="Digite o e-mail do funcionário..." class="form-control mt-2 mb-3" value="<?php echo $emailProduto?>">
       
       <label for="senha">Senha do funcionário:</label>
       <input type="password" name="senha" placeholder="Redefinir senha do funcionário..." class="form-control mt-2 mb-3">

       <button type="submit" class="btn btn-success">Editar</button>
</form>