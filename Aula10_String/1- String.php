<?php
    /*  String
        "String" é um conjunto concatenado de caracteres armazenados em uma variavel.
        Podemos definir uma "string" com um conjunto de letras e simbolos designados por texto.

        podem ser delimitadas por
        aspas simples ''
        aspas duplas ""
        Podemos usar uma ou outra, apenas devemos seguir um padrão.

        Referencias:
        1- W3Schools
            https://www.w3schools.com/php/php_string.asp
    */
    // Exemplo de 'String' 
    $a = "Esta é uma 'string'";
    $b = 'Temos outra "string"';
    echo $a . "<br>";
    echo $b . "<br>";

    // Concatenação de 'string'
    echo $a . " Concatenada com  " . $b . "<br>";

    // Manipulando String
    # Observe que a variavel que contém a 'string' funciona como um 'array'
    echo $a[2] . "<br>";

    // Comparação de String
    # Exemplo 1
    $c = ($a == $b); # False
    $d = ($a != $b); # True

    # Exemplo 2 - Funções nativas
    $texto = 'Frase com x Caracteres = 27';
    # Retornar o numero de caracteres
    $num_caracteres = strlen($texto);
    echo $num_caracteres . "<br>";

    # Exemplo 3 - Retorna letras a partir de uma posição
    $parte_texto = substr($texto, 0, 4);
    echo $parte_texto . "<br>";

    # Exemplo 4 - retornar letras maiusculas
    $texto_maiuscula = strtoupper($texto);
    echo $texto_maiuscula . "<br>";

    # Exemplo 5 - Substituir uma letra por outra no texto
    $subst_texto = str_replace('a','x',$texto);
    echo $subst_texto . "<br>";
?>