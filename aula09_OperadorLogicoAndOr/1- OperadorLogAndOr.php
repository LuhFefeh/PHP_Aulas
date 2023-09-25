<?php
    // Operadores logicos: AND; OR
    #                      && ; ||
    # Frequentemente são utilizados com os operadores de comparação.
    # Permitem ligar varias comparações gerando proposição.

    # Referencias: 
    # 1. W3Schools
    #   https://www.w3schools.com/php/php_operators.asp

    $a = 100;
    $b = 200;

    # Os valores armazenados em x são do tipo booleano
    $x = ($a < $b) && ($a < 1000);  #AND => True
    $x = (true && true);          

    $x = ($a > $b) || ($a > 1000);  #OR  => False
    $x = (false || false);          

    $x = ($a == 100) && ($b < $a);  #AND => False
    $x = (true && false );
    
    // --- Operador de negação "!"
    # Este operador inverte o valor booleano
    $a = false; # False
    $x = !$a; # True
?>