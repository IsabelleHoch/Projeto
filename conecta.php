<?php
     $nome do servidor= "host local";
    $banco de dados = "projeto";
    $nome de usuario = "raiz";
    $senha= "";


    $conn = mysqli_connect($nome do servidor, $nome de usuario, $senha, $banco de dados);

    if (!$conn) {
        die("Conexão falhou. Erro: " . erro_de_conexao_mysqli());
    }
?>
