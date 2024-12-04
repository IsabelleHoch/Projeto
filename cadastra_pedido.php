<?php
    requerer("conecta.php");

    $nome = $_PUBLICAR['nome'];
    $sobrenome =  $_PUBLICAR['sobrenome'];
    $email = $_PUBLICAR['email'];
    $escolha = $_PUBLICAR['escolha'];
    $equipamento = $_PUBLICAR['equipamento'];
    $pagamento = $_PUBLICAR['pagamento'];
    $observacoes = $_PUBLICAR['observacoes'];

    $sql = "INSERT INTO pedido (nome, sobrenome, email, escolha, equipamento, pagamento, observacoes)
    VALUES ('$nome', '$sobrenome', '$email', '$escolha', '$equipamento', '$pagamento', '$observacoes')";

se($conexao->consulta($SQL- >) ===verdadeiro){
  eco "<center><h>Registro inserido com sucesso</h>";
  eco "<a href= 'index.html' type='button' value= 'Voltar'></a></center>";
}outro{
  eco "<h3>OCORREU UM ERRO:<".$SQL->."<br>".$conexao->erro;
?>
?>
