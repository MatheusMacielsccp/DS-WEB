<?php

    $frutas = array ("Maçã", "Banana", "Laranja", "Manga", "Uva");

    
    $frutasDesc = array ('Banana' => "Banana". '<br>'. 
                                     "Preço: R$ 2.30".'<br>'.
                                     "Estoque: 50".'<br>',

                          'Maça' => "Maça". '<br>'. 
                                     "Preço: R$ 3.50".'<br>'.
                                     "Estoque: 30".'<br>',

                          'Laranja' => "Laranja". '<br>'.
                                     "preço R$ 1.80".'<br>'.
                                     "Estoque: 40".'<br>',

                          'Manga' => "Manga". '<br>'.
                                     "preço R$ 4.00".'<br>'.
                                     "Estoque: 20".'<br>',

                          'Uva' => "Uva". '<br>'.
                                     "preço R$ 5.00".'<br>'.
                                     "Estoque: 15".'<br>',
                        );

    $frutasAtua = array ('Banana' => "Banana". '<br>'. 
                                     "Preço: R$ 5.30".'<br>'.
                                     "Estoque: 50".'<br>',

                          'Maça' => "Maça". '<br>'. 
                                     "Preço: R$ 8.50".'<br>'.
                                     "Estoque: 30".'<br>',

                          'Laranja' => "Laranja". '<br>'.
                                     "preço R$ 4.80".'<br>'.
                                     "Estoque: 40".'<br>',

                          'Manga' => "Manga". '<br>'.
                                     "preço R$ 7.00".'<br>'.
                                     "Estoque: 20".'<br>',

                          'Uva' => "Uva". '<br>'.
                                     "preço R$ 10.00".'<br>'.
                                     "Estoque: 15".'<br>',
                        );

    $precos = array (5.30, 8.50, 4.80, 7.00, 10.00);

    $frutapreco = array_combine($frutas, $precos);

    $cores = array ("vermelho", "azul", "verde", "amarelo", "preto")


?>