<?php
session_start();


if (isset($_SESSION['username']) and isset($_SESSION['senha'])) {
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include_once('connection.php');
        ?>
    <form action="dashboard.php" method="POST">
        <h1>Login</h1>
            <label>Usuário:</label>
            <br>
            <input type="text" name="nome" placeholder="digite seu nome" >
            <br><br>
            <label>E-mail:</label>
            <br>
            <input type="email" name="email" placeholder="digite seu email">
            <br><br>
            <label>Senha:</label>
            <br>
            <input type="password" name="senha" placeholder="digite sua senha">
            <br><br>
            <button type="submit">Entrar</button>
    
    </form>
</body>
</html>