<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $Aluno = $_POST["Aluno"];
                $N°Chamada = $_POST["N°Chamada"];
                $Patrimonio = $_POST["Patrimonio"];
                $RM = $_POST["RM"];
                $Maquina = $_POST["Maquina"];

                $Aluno_correto = "Matheus Maciel";
                $N°Chamada_correta = "22";
                $Patrimonio_correta = "1492214";
                $RM_correta = "3800";
                $Maquina_correta = "22";

                if ($Aluno === $Aluno_correto && $N°Chamada === $N°Chamada_correta && $Patrimonio === $Patrimonio_correta && $RM === $RM_correta && $Maquina === $Maquina_correta) {
                    echo "<h1>CADASTRADO COM SUCESSO!!</h1> <br><br>"; 
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