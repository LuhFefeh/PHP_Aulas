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

    // Exemplos
    $a = (2 == 3); # False

    $a = (100 == 100); # True

    $a = (50 == '50'); # True
    # Neste caso ocorre uma verificação de igualdade
    # sem a comaparação do tipo de variavel

    $a = (50 === '50'); # False

    // Atenção
    // Nós não conseguimos visualizar o resultado (True, False)
    // Mas, podemos verificar a sua existencia
    echo $a;

    // Como solução vamos testar e expressa sua existencia
    $a = (50 == '50');
    if ($a){
        echo 'True';
        echo '<br>';
    } else {
        echo 'False';
        echo '<br>';
    }

?>