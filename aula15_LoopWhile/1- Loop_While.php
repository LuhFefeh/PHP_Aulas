<?php
    /* --- Loops (ciclos ou laços) em PHP
        Existem 4 ciclos em PHP e são utilizados para executar
        um codigo (ou bloco de codigo) repetidas vezes

        # Loop WHILE

        Referencias:
        1.W3schools
            https://www.w3schools.com/php/php_looping_while.asp
    */

    # Neste tipo de laço o codigo interno pode nunca ser executado
    # a menos que a condição seja verdadeira
    $x = 1;
    while($x <= 10){
        echo "Ciclo while em execução" . $x;
        echo '<br>';
        $x++;
    }
    echo '<hr>';

    // Demonstrar o uso quando tivermos apenas uma instrução
    // no bloco While 
    // Passo 1
    $x = 1;
    while($x <= 10) echo "Ciclo while em execução" . $x++ . '<br>';
        
    echo '<hr>';

?>