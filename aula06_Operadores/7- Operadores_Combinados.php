<?php
    /*  Operadores de Atribuição combinados
        Exemplos: "+="; "-+"; "*=";

        Permitem que alteremos o valor de uma variavel
        A partir do valor original 

        Referencias:
        1- W3Schools 
            https://www.w3schools.com/php/php_operators.asp
    */

    // Exemplo de calculo SEM os operadores combinados
    $x = 10;
    
    $x = $x + 10; # 20
    echo $x;
    echo '<br>';

    $x = $x - 7; # 13
    echo $x;
    echo '<br>';

    $x = $x * 2; # 26
    echo $x;
    echo '<br>';

    $x = $x / 2; # 13
    echo $x;
    echo '<br>';
    echo '<hr>';

    // Exemplo de calculo COM os operadores combinados
    $x = 10; # Reinicializando a variavel

    $x += 10; # 20
    echo $x;
    echo '<br>';

    $x -= 7; # 13
    echo $x;
    echo '<br>';

    $x *= 2; # 26
    echo $x;
    echo '<br>';

    $x /= 2; # 13
    echo $x;
    echo '<br>';

?>