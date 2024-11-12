<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST">
        <label><h1>CALCULADORA</h1></label>
        <label for="Primeiro">Primeiro Valor: </label><br>
        <input type="number"  name="Primeiro" id="Primeiro" placeholder="1° Número" maxlength="4" required>
        <br><br>
        <label for="Segundo">Segundo valor: </label><br>
        <input type="number"  name="Segundo" id="Segundo" placeholder="2° Número" maxlength="4" required>
        <br><br>
        <label>Operação: </a><br>
            <select for="Operação" name="Operacao">
                <option >Escolha...</option>
                <option value="+" name="soma" >+</option>
                <option value="-" name="Subtração" >-</option>
                <option value="/" name="Divisão" >/</option>
                <option value="*" name="Multiplicação">*</option>
            </select>
        <br><br>

        <label><h3>RESULTADOS</h3></label>
        <?php
        if(isset($_POST['Primeiro'])){
            $Primeiro = $_POST['Primeiro'];
            $Segundo = $_POST['Segundo'];
            $Operação = $_POST['Operacao'];
            $Result = 0;

                if ($Operação == "+"){
                    $Result = $Primeiro + $Segundo;
                    echo $Result;
                }else if($Operação == "-"){
                    $Result = $Primeiro - $Segundo;
                    echo $Result;
                }else if($Operação == "*"){
                    $Result = $Primeiro * $Segundo;
                    echo $Result;
                }else if($Operação == "/"){
                    if ($Segundo != 0) {
                    $Result = $Primeiro / $Segundo;
                    echo $Result;
                    }
                    else{
                        echo"<div id='texto'>Divisão por zero não é permitida.</div>";
                    }
                };
        };

        ?>
        <br><br>
        <button type="submit" name="calcular" id="calcular">Calcular</button>    
        <button input type="reset" name="limpar" id="limpar" >Limpar</button>
    </form>

    

</body>
</html>