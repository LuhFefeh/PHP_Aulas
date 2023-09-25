<?php
    /*  Operador SpaceShip
        Este operador retorna 3 valores possiveis {0, 1, -1}
        O nome é atribuido a espaçonave "TIE Fighter" de Guerra nas estrelas.

        Referencias:
        1. W3Schools
            https://www.w3schools.com/php/php_operators.asp
    */

    $x = 1 <=> 1; # Retorna 0   => Quando os valores são iguais 
    $x = 3 <=> 2; # Retorna 1   => Quando o valor da esquerda for maior que o da direita
    $x = 1 <=> 2; # Retorna -1  => QUando o valor da esquerda for menor que o da direita
?>