<?php
    // Funções em PHP
    # São blocos de codigo identificados por um nome e assinatura
    # Permite reutilizar o codigo
    # Estes blocos de codigos são executados apenas quando solicitados
    # Uma função é definida com o uso da palavra "function"
    # Seguida de um nome e um conjunto de parenteses e um bloco de codigo.

    # Exemplo 1 - Criando função
    Function nomeDaFuncao(){
        // Codigo da função
        echo 'Codigo dentro de uma função';
        echo '<br>';
    }
    # As funções podem ser criadas antes ou depois do codigo principal
    # Codigo principal

    # Exemplo de chamada da função
    nomeDaFuncao();
    // Notar que os nomes das funções são "Case-Insensitive"
    # Ou seja, nomeDaFuncao é o mesmo que NOMEDAFUNCAO
    NOMEDAFUNCAO();

    # Não há um padrão de nomeclatura exigido pela linguagem.
    # Porém, é recomendado que se siga um padrão.
    # Exemplos: 
    Function camelCase(){

    }
    function snake_case(){
        
    }
?>