<?php
session_start();
include("connection.php");

if(isset($_POST['email'])){
    include_once('connection.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha' ";
    $resultado = mysqli_query($conexao,$sql);

    if(mysqli_num_rows($resultado)>0){
        $linha = mysqli_fetch_assoc($resultado);

        $_SESSION['email'] = $linha['email'];
        $_SESSION['senha'] = $linha['senha'];
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Create e Read</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<div class="sla">
        <div class="produtos">
            
            <h1>Bem-vindo!</h1>
            
            <form method="POST">
                <button name="save_cookie" type="submit" id='cookie'>Salvar Cookie</button>
            </form><br>
            
            <h2 style= " color:deepskyblue">Cadastro de Produto</h2>
            <form action="insertionProduto.php" method="POST">
                <input type="hidden" name="form_type" value="produtos">
                <label for="nome1">Produto:</label><br>
                <input type="text" name="nome1" required><br>
                <label for="descricao">Descricao:</label><br>
                <input type="text" name="descricao" required><br>
                <label for="preco">Preco:</label><br>
                <input type="number" name="preco" required><br><br>
                <input type="submit" value="Enviar"><br><br>
            </form>
        </div>


    <div class="registros">
        <?php
        function exibirRegistros($conexao, $tabela, $campos) {
            $sql = "SELECT * FROM produtos";
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

        exibirRegistros($conexao, "produtos", ["id" => "ID", "nome1" => "Produto", "descricao" => "Descricao", "preco" => "Preco"]);
        ?>
    </div>
</div>
    <div class="sla2">
        <div class="usuarios">
            <form action="insertionCliente.php" method="POST">
            <h2 style= " color:deepskyblue">Cadastro de Cliente</h2>
                <label>Nome:</label><br>
                <input type='text' name='nome'><br>
                <label>Email:</label><br>
                <input type='text' name='email'><br>
                <label>Senha:</label><br>
                <input type="text" name='senha'><br><br>
                <input type='submit'>
                
            </form>
        </div>

        <div class="registrosC">
            <h2>Usuarios Registrados</h2>
            <?PHP
            $prd = "SELECT * FROM usuarios ORDER BY nome ASC";
            $resultadoClient = mysqli_query($conexao, $prd);

            $resultado = mysqli_query($conexao, $prd);
                // Verificar se há registros
                if ($resultadoClient && mysqli_num_rows($resultadoClient) > 0) {
                    while ($usuarios = mysqli_fetch_assoc($resultadoClient)) {
                    echo "ID: " . $usuarios['id'] . " - Nome: " . $usuarios['nome'] . "Email: ".$usuarios['email']."<br>";
                }
            }
            ?>
        </div>
    
   
        <form method="POST" action="logout.php">
            <button type="submit" id='logout' >Logout</button>
        </form>
    </div>
</body>
</html>