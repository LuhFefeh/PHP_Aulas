<?php
    /* --- Array - Numerico
        Para este tipo de array sempre que desejarmos manipular o conteudo
        utilizamos o indice
        
        Referencias:
        1- W3Schools
            https://www.w3schools.com/php/php_ref_array.asp
    */

    // Alterando o valor de um item do array
    $valores = [10, 20, 30];    # 10, 20, 30
    $valores[1] = 200;          # 10, 200, 30

    // Podemos ignorar o indice na inclusão de um elemento
    $valores[] = 300;   # 10, 200, 30, 300

    // Podemos utilizar funções de manipulação
    array_push($valores, 500); # 10, 200, 30, 300, 500

    // Apresentação de valores
    echo "O valor do 'Array' na primeira posição = " . $valores[0];
?>