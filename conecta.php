<?php
     $nome do servidor= "host local";
    $banco de dados = "projeto";
    $nome de usuario = "raiz";
    $senha= "";


    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Conexão falhou. Erro: " . mysqli_connect_error());
    }
?>
