<?php

    include_once('arrays.php');

    echo '<h1> frutas: </h1>';

        sort($frutas);//ordem alfabetica

        foreach($frutas as $fruta){
            echo 'fruta: ' .$fruta. '<br>';
        }

    echo '<h1>frutas adicionais: </h1>';

        array_push($frutas, 'Abacaxi');//adicionar para a lista $frutas

        sort($frutas);//ordem alfabetica

        foreach($frutas as $fruta){
            echo 'fruta: ' .$fruta. '<br>';
        }

    echo '<h1>preço e estoque: </h1>';

        foreach ($frutasDesc as $descricao){
            echo 'Nome: ' .$descricao. '<br>';
            echo '=========================='. '<br>';
        }

    echo '<h1>preço e estoque atualização: </h1>';

        foreach ($frutasAtua as $descricao){
            echo 'Nome: ' .$descricao. '<br>';
            echo '=========================='. '<br>';
        }

    echo '<h1>quantidade total: </h1>';

        echo 'Maçã: R$ 105 <br>
        Banana:  R$ 115 <br>
        Laranja:  R$ 72 <br>
        Manga:  R$ 80 <br>
        Uva:  R$ 75 <br>';

    echo '<h1>preço do produto: </h1>';
        foreach($frutapreco as $fruta => $preco){
            echo $fruta.': R$'. $preco. '<br>';
        }

    echo '<h1>cores: </h1>';

    if(array_search("verde", $cores)){
        echo "cor disponivel  :)<br><br>";
    }else{
        echo "cor indisponivel  :(<br><br>";
    }

?>