<?php
include_once("connection.php");

$form_type = $_POST['form_type'];
$redirect_url = "Location: index.php?status=";

if ($form_type === 'cliente') {
    $table = "cliente";
    $columns = "nome, email";
    $values = "'" . $_POST['nome'] . "', '" . $_POST['email'] . "'";
} elseif ($form_type === 'produtos') {
    $table = "produtos";
    $columns = "nome1, valor, estoque";
    $values = "'" . $_POST['nome1'] . "', '" . $_POST['valor'] . "', '" . $_POST['estoque'] . "'";
} else {
    header($redirect_url . "error&message=Invalid+form+type");
    exit;
}

$sql = "INSERT INTO $table ($columns) VALUES ($values)";
if (mysqli_query($conexao, $sql)) {
    header($redirect_url . "success");
} else {
    header($redirect_url . "error&message=" . urlencode(mysqli_error($conexao)));
}
exit;
?>
