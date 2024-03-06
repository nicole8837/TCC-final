<?php
   $acaoASerFeita = $_POST["acao"];

   switch ($acaoASerFeita) {
    case "cadastro":
        $nome = $_POST["nome"];
        $nascimento  = $_POST["nascimento"];
        $cpf  = $_POST["cpf"];
        $rg  = $_POST["rg"];
        $emissao  = $_POST["emissao"];
        $orgao = $_POST["orgao"];
        $sexo = $_POST["sexo"];
        $mae = $_POST["mae"];
        $pai = $_POST["pai"];
        $endereco = $_POST["endereco"];
        $cep = $_POST["cep"];
        $contabanco = $_POST["contabamco"];
        $agencia = $_POST["agencia"];
        $funcao = $_POST["funcao"];
        $escolaridade = $_POST["escolaridade"];
        $email  = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = "INSERT INTO cadastro(id, nome, nascimento, cpf, rg, emissao, orgao, sexo, mae, pai, endereco, cep, contabanco, agencia, funcao, escolaridade, email, senha )
         VALUES('DEFAULT', '{$nome}', '{$nascimento}', '{$cpf}', '{$rg}','{$emissao}', '{$orgao}', '{$sexo}', '{$mae}', '{$pai}', '{$endereco}', '{$cep}', '{$contabanco}', '{$agencia}', '{$funcao}', '{$escolaridade}','{$email}','{$senha}' );";
       
       $resultado = $conexao->query($sql);

       if ($resultado) {
            echo "<script>
                   alert('Funcionário cadastrado com secesso!')      
                </script>";

            echo "<script>
                   location.href='?page=verfuncionario'
            </script>";
       }else {
        echo "<script>
        alert('Houve um erro ao cadastrar este funcionário. Tente novamente!')      
             </script>";

        echo "<script>
        location.href='cadastro.php'
            </script>";
       }
       break;

       case "editar":
          $nome = $_POST["nome"];
        $nascimento  = $_POST["nascimento"];
        $cpf  = $_POST["cpf"];
        $rg  = $_POST["rg"];
        $emissao  = $_POST["emissao"];
        $orgao = $_POST["orgao"];
        $sexo = $_POST["sexo"];
        $mae = $_POST["mae"];
        $pai = $_POST["pai"];
        $endereco = $_POST["endereco"];
        $cep = $_POST["cep"];
        $contabanco = $_POST["contabamco"];
        $agencia = $_POST["agencia"];
        $funcao = $_POST["funcao"];
        $escolaridade = $_POST["escolaridade"];
        $email  = $_POST["email"];
        $senha = $_POST["senha"];

  
          $sql = "UPDATE cadastro
                  SET nome='{$nome}',
                      nascimento='{$nascimento}',
                      cpf='{$cpf}',
                      rg='{$rg}',
                      emissao='{$emissao}',
                      orgao='{$orgao}',
                      sexo='{$sexo}',
                      mae='{$mae}',
                      pai='{$pai}',
                      endereco='{$endereco}',
                      cep='{$cep}',
                      contabanco='{$contabanco}',
                      agencia='{$agencia}',
                      funcao='{$funcao}',
                      escolaridade='{$escolaridade}',                    
                      email='{$email}',
                      senha='{$senha}'
                  WHERE id={$id}";
  
          $resultado = $conexao->query($sql);
  
          if($resultado) {
              echo 
              "<script>
                  alert(\"Cadastro editado com sucesso!\")
              </script>";
              echo
              "<script>
                   location.href='?page=verfuncionario'
              </script>";
          }else {
              echo 
              "<script>
                  alert(\"Houve um erro na edição. Tente novamente!\")
              </script>";
              echo
              "<script>
                   location.href='?page=verfuncionario'
              </script>";
          }
          break;


          case "deletar":
               $id = $_POST["id"];
               $sql = "DELETE FROM cadastro WHERE id={$id}";
       
               $resultado = $conexao->query($sql);
       
               if ($resultado) {
                   echo "<script>
                   alert(\"Cadastro deletado com secesso! \")
                    </script>";
                    echo
                    "<script>
                      location.href=\"?page=verfuncionario\";
                    </script>";
               }else {
                   echo "<script>
                   alert(\"Ação cancelada!\")
                    </script>";
                    echo
                    "<script>
                      location.href=\"?page=verfuncionario\";
                    </script>";
               }
               break;
           
}
?>