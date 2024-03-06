<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>longin-SICA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700display=swap');
        .btn-gradiente{
            padding: 20px 25px;
            color: #fff;
            border: none;
            cursor: pointer; 
            background-image: linear-gradient(#fe9611, #ff5c00);

        }
        body{
            font-family:'Poppins',sans-serif; 
            background-image: linear-gradient(#14424b, #ff5c00);
        }

        h1{
            color: #14424b; 
            align-items: center;
            justify-content: center;
            display: flex;
            font-weight: 300;
            cursor: pointer;
        }

        .sica{
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
            display: flex;
        }
    </style> 
    
</head>
<body>
    <div class="sica">
          <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h1>Sistema de Cadastro </h1><br><br>
                            <form action="sica.php" method="post">
                                <label for="usuario">Usuário:</label>
                                <input type="text" name="usuario" placeholder="Digite o ID do usuário..." ><br><br>
                                <label for="senha">Senha:</label>
                                <input type="password" name="senha" placeholder="Digite a senha..." >
                                <button type="submit" class="btn-gradiente">ACESSAR</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
    
</body>
</html>