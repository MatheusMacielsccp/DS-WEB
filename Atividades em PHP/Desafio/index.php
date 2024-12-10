<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
include_once("connection.php");

// Exibir mensagens de feedback
if (!empty($_GET['status'])) {
    $message = $_GET['status'] === 'success' ? "Dados enviados com sucesso!" : "Erro: " . htmlspecialchars($_GET['message']);
    echo "<h3>{$message}</h3>";
}
?>

<div class="horizintal">
    <div class="cliente">
        <h2>Cadastro de Cliente</h2>
        <form action="insertion.php" method="POST">
            <input type="hidden" name="form_type" value="cliente">
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" required><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" required><br><br>
            <input type="submit" value="Enviar"><br>
        </form>
    </div>

    <div class="produtos">
        <h2>Cadastro de Produto</h2>
        <form action="insertion.php" method="POST">
            <input type="hidden" name="form_type" value="produtos">
            <label for="nome1">Produto:</label><br>
            <input type="text" name="nome1" required><br>
            <label for="valor">Valor:</label><br>
            <input type="number" step="0.01" name="valor" required><br>
            <label for="estoque">Estoque:</label><br>
            <input type="number" name="estoque" required><br><br>
            <input type="submit" value="Enviar"><br>
        </form>
    </div>
</div>

<div class="registros">
    <?php
    function exibirRegistros($conexao, $tabela, $campos) {
        $sql = "SELECT * FROM $tabela";
        $resultado = mysqli_query($conexao, $sql);

        echo "<h2>" . ucfirst($tabela) . " Registrados</h2>";
        if ($resultado && mysqli_num_rows($resultado) > 0) {
            while ($registro = mysqli_fetch_assoc($resultado)) {
                foreach ($campos as $campo => $rotulo) {
                    echo "<strong>{$rotulo}:</strong> " . htmlspecialchars($registro[$campo]) . " ";
                }
                echo "<br>";
            }
        } else {
            echo "Nenhum registro encontrado.<br>";
        }
    }

    exibirRegistros($conexao, "cliente", ["id" => "ID", "nome" => "Nome", "email" => "Email"]);
    exibirRegistros($conexao, "produtos", ["id" => "ID", "nome1" => "Produto", "valor" => "Valor", "estoque" => "Estoque"]);
    ?>
</div>

</body>
</html>
