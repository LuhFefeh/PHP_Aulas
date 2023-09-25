<?php
    /* --- Array Associativo
        Para este tipo de 'array' utilizamos um nome para indicar
        a posição de armazenamento do 'array'

        Referencias:
        1- W3Schools
            https://www.w3schools.com/php/php_ref_array.asp
    */

    // Exemplo 1
    $valores1 = [
        'A'         => 20,
        'Nome'      => 30,
        'Endereço'  => 'Praia Grande'
    ];
    echo $valores1['A'] . "<br>";
    echo $valores1['Nome'] . "<br>";
    echo $valores1['Endereço'] . "<br><hr>";

    // Exemplo 2 - Demonstrar a sobreposição
    $valores2 = [
        'A' => 20,
        'A' => 30
    ];
    echo $valores2['A'] . "<br>";
?>