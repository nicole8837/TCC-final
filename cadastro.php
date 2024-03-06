
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro</title>

    <style>
       @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700display=swap');
       *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family:'Poppins',sans-serif;
            }
      body{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #14424b;
      }
      .title{
            color:#fff;
            background-color: orange;
            
      }
          
      .form{ 
         width: 50%;
         display: flex;
         justify-items: center;
         align-items: center;
         flex-direction: column;
         background-color: #a1a1a1;
         padding: 3rem;
      
      }
      

      .form-header{
            margin-bottom: 3rem;
            display: flex;
            justify-content: space-between;
      }
      .btn-cadastrar{
            width: 100%;
            margin-top: 2.5rem;
            border: none;
            background-color: #ff7c37;
            padding: 0.62rem;
            border-radius: 5px;
            cursor: pointer;
            
             }
      
      
      .input-group{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 1rem 0;
      }
      .input-box{
            display: flex;
            flex-direction: column;
            margin-bottom: 1,1rem;
      }
      .input-box input{
            margin: 0%;
            padding: 0.2rem 0.2rem;
            border: none;
            border-radius: 10px;
            box-shadow: 1px 1px 6px #14424b;
      }
      .input-box label,
      title{
            font-size: 0.95rem;
            font-weight: 600;
            color: #fff;
      }

      
    </style>
</head>
<body>
    

    <form action="?page=atuarnoBanco" method="post" class="mt-4">
    <input type="hidden" name="acao" value="cadastro">

    <div class="container">
    

    <div class="form-header">
      <div class="title">
            <h1>Informe os dados do funcionário:</h1>
      </div>
    </div>

    <div class="input-group">
      <div class="input-box">
        <label for="nome" >Nome do funcionário:</label>
        <input type="text" name="nome" class="form-control" placeholder="Digite o nome do funcionário..." required>
    </div> 
      
    

    <div class="input-box">
          <label for="nascimento" class="mb-2">Data de nascimento:</label>
          <input type="text" name="nascimento" class="form-control" placeholder="Digite data do nascimento do funcionário..." required>
    </div>
    <div class="input-box">
    <label for="nascimento" class="mb-2">Cpf:</label>
          <input type="text" name="nascimento" class="form-control" placeholder="Digite o CPF do funcionário..." required>
    </div>
    <div class="input-box">
    <label for="rg" class="mb-2">Rg:</label>
          <input type="text" name="rg" class="form-control" placeholder="Digite o rg do funcionário..."required>
    </div>
</div>

    <div class="input-box">
    <label for="emissao" class="mb-2">Data de emissão:</label>
          <input type="text" name="emissao" class="form-control" placeholder="Digite o a data de emissão..."required>
    </div>

    <div class="input-box">
    <label for="orgao" class="mb-2">Orgão expedidor:</label>
          <input type="text" name="orgao" class="form-control" placeholder="Digite o orgão expedidor..."required>
    </div>

    <div class="input-box">
    <label for="sexo" class="mb-2">Sexo:</label>
          <input type="text" name="sexo" class="form-control" placeholder="Digite o sexo do funcionário..."required>
    </div>

    <div class="input-box">
    <label for="mae" class="mb-2">Nome da mãe:</label>
          <input type="text" name="mae" class="form-control" placeholder="Digite o nome da mãe do funcionário..."required>
    </div>

    <div class="input-box">
    <label for="pai" class="mb-2">Nome do pai:</label>
          <input type="text" name="pai" class="form-control" placeholder="Digite nome do pai do funcionário..."required>
    </div>

    <div class="input-box">
    <label for="endereco" class="mb-2">Endereço:</label>
          <input type="text" name="endereco" class="form-control" placeholder="Digite o endereço do funcionário..."required>
    </div>

    <div class="input-box">
    <label for="cep" class="mb-2">CEP:</label>
          <input type="text" name="cep" class="form-control" placeholder="Digite o cep do funcionário..."required>
    </div>

    <div class="input-box">
    <label for="contabanco" class="mb-2">Número da conta bancária:</label>
          <input type="text" name="contabanco" class="form-control" placeholder="Digite conta bancária do funcionário..."required>
    </div>

    <div class="input-box">
    <label for="agencia" class="mb-2">Nome da agência:</label>
          <input type="text" name="agencia" class="form-control" placeholder="Digite a agência do funcionário..."required>
    </div>

    <div class="input-box">
    <label for="funcao" class="mb-2">Função que irá exercer:</label>
          <input type="text" name="funcao" class="form-control" placeholder="Digite o função do funcionário..."required>
    </div>

    <div class="input-box">
    <label for="escolaridade" class="mb-2">Escolaridade:</label>
          <input type="text" name="escolaridade" class="form-control" placeholder="Digite o escolaridade do funcionário..."required>
    </div>
    
    
    <div class="input-box">
    <label for="email" class="mb-2">E-mail institucional:</label>
          <input type="email" name="email" class="form-control" placeholder="Digite o e-mail do funcionário..."required>
    </div>
    <div class="input-box">
    <label for="senha" class="mb-2">Senha do funcionário:</label>
          <input type="passaword" name="senha" class="form-control" placeholder="Digite a senha do funcionário..."required>
    </div>


    <button type="submit" class="btn-cadastrar">Cadastrar</button>
</form>

</body>
</html>