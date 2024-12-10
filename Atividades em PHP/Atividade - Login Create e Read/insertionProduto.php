<?php
include_once("connection.php");

$form_type = $_POST['form_type'];
$redirect_url = "Location: index.php?status=";

if ($form_type === 'cliente') {
    $tabela = "cliente";
    $columns = "nome, email, senha";
    $values = "'" . $_POST['nome'] . "', '" . $_POST['email'] . "', '" . $_POST['senha']. "'";
} elseif ($form_type === 'produtos') {
    $tabela = "produtos";
    $columns = "nome1, descricao, preco";
    $values = "'" . $_POST['nome1'] . "', '" . $_POST['descricao'] . "', '" . $_POST['preco'] . "'";
} else {
    header($redirect_url . "error&message=Invalid+form+type");
    exit;
}

$sql = "INSERT INTO $tabela ($columns) VALUES ($values)";
if (mysqli_query($conexao, $sql)) {
    header($redirect_url . "success");
} else {
    header($redirect_url . "error&message=" . urlencode(mysqli_error($conexao)));
}
exit;
?>