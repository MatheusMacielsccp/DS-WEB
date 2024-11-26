<?php

    include_once('array.php');

    echo "<h1>Nome e Preço dos Produtos:</h1>";

        foreach ($produtos as $produto) {
            echo '<br>Nome: ' . $produto['nome'] . '<br> Preço: '.$produto['preco'] .' R$ '. '<br>';
        }

    echo "<h1>Valor total: </h1>";

        foreach ($produtos as $produto) {
            echo "<br>Valor Total em Estoque ".$produto['nome']. ": R$ ".$valorTotalEstoque += $produto['preco'] * $produto['estoque'];
        }

    echo "<h1> Notas Alunos: </h1>";

        foreach ($alunos as $aluno) {
            $media = ($aluno ['matematica'] + $aluno ['portugues'])/2;
            echo "<br>Notas Aluno,  ". $aluno['nome']. ": matematica - ". $aluno['matematica'] . ", portugues - ". $aluno ['portugues']. ", média: ". $media. '<br>';

        }
    

?>