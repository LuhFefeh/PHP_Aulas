<?php
    /* --- Array o que são
        É uma matriz, uma coleção de valores
        
        Referencias:
        1- W3Schools
            https://www.w3schools.com/php/php_arrays.asp
    */

    // - - Array de indice numerico
    # Exemplo forma mais antiga no PHP
    $valores = array(1,2,3,4); # Array numerico
    $nomes = array("Mari", "Agda", "Lena"); # Array de texto

    // Exemplo mais atual
    $valores2 = [1,2,3,4];
    $nomes2 = ["Mari","Agda", "Lena"];

    echo $valores2[0]; # 1
    echo '<br>';
    echo $nomes2[2]; # Lena
    echo '<br>';

    # Operador de atribuição com "array" =>
    $dados = [
        10 => 1000,
        20 => 2000,
        40 => 3000
    ];

    echo $dados[10];
    echo '<br>';
?>