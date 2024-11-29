<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

    $mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_cookie'])) {
    setcookie("username", $_SESSION['username'], time() + (86400 * 30), "/");
    $mensagem = "Salvo!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="sla">
    <?php echo $mensagem; ?>
        <h1>Bem-vindo!</h1>
        <form method="POST">
            <button name="save_cookie" type="submit">Salvar Cookie</button>
        </form><br><br>
        <form method="GET" action="logout.php">
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
</html>