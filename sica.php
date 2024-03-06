<?php
    session_start();
    if (empty($_POST) or (empty($_POST["usuario"])) or (empty($_POST["senha"]))){
        echo 
        "<script>
        location.href='inicio.php'
        </script>";
    };

    include("config.php");

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuarios WHERE usuario='{$usuario}'
            AND senha='{$senha}'";

    $resultado = $conexao->query($sql);

    $linha = $resultado->fetch_object();

    $qtdLinhas = $resultado->num_rows;
    if ($qtdLinhas > 0) {
        $_SESSION["usuario"] = $usuario;
        $_SESSION["senha"] = $linha->senha;
        echo
        "<script>
        location.href='boasvindas.php'
        </script>";

    }else{
        echo "<script>
           alert('Usuário e/ou senha ivalido(s). Tente novamente!')
        </script>";
        echo
        "<script>
        location.href='inicio.php'
        </script>";
    }
?>
