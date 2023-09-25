<?php
    /*  Tipos de Dados
        As variáveis podem ser de diferentes tipos de dados
        A mesma variável pode ter tipos diferentes de dados
        Caracteristica denominada de 'Tipagem Fraca' ou 'Tipagem Dinamica'

        Referencia
        1. W3schools - Tipos de dado
            https://www.w3schools.com/php/php_datatypes.asp
    */
    # Atribuição de valores diferentes na mesma variável 
    # tornam esta mesma variável com o tipo diferente 
    $variavel = 100;
    $variavel = "cem";
    # Apesar das variáveis serem de tipo implícito 
    # é importante conhecermos os tipos existentes
    $inteiro = 100; # São valores inteiro sem casa decimal
    $float = 10.5;  # São valores seguidos de casas decimais
    $bool = true;   # Assume valores falso ou verdadeiro
    $string = "Ola" # Cadeia de caracteres 
    $array = [1,2]; # Coleção de valores 
    $nulo = null;   # Variavel com valor nulo

 ?>