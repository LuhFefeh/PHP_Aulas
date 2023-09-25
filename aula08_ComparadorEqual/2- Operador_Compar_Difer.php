<?php
    /*  Operadores de comparação
        Permite a comparação entre valores.
        Verificam igualdade e diferença, maior, menor ou se a variavel é do mesmo tipo.
        Resultado da comparação será sempre um "Booleano" False ou True

        Referencias:
        1. W3Schools
            https://www.w3schools.com/php/php_operators.asp

        2. Manual de PHP referencias de linguagem de operadores
            https://www.php.net/manual/pt_BR/language.operators.comparison.php
    */

    // Comparador da diferença
    // Exemplos
    $a = (2 != 3); # True
    // Forma alternativa, embora menos utilizada
    $a = (100 <> 100); # False

    $a = (50 != 50); # False
    $a = (50 != '50'); # False
    // Neste caso, tambem, é avaliado apenas o sgnificado dos dados e não os tipos dos dados.

    $a = (50 !== '50'); # True
    // Neste caso, é avaliado o sgnificado e os tipos dos dados.

?>