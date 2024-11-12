<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css">

</head>
<body>
    <form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $usuario = $_POST["nome"];
                $senha = $_POST["senha"];

                $usuario_correto = "Matheus Maciel";
                $senha_correta = "123";

                if ($usuario === $usuario_correto && $senha === $senha_correta) {
                    echo "<h1>BEM VINDO!!</h1> <br><br>"; 
                } 
                else {
                    echo "<h1>Usuário ou Senha incorretos</h1> <br><br>"; 
                }
                

            }
        ?>
        
            <a href="index.html"><input type="button" value="Voltar" id="button"></a>
    </form>

</body>
</html>