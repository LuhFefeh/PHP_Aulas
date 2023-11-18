<?php
    /* Declrações / Instruções condicionais
    São instruções de controle de fluxo do programa de acordo com condição logica.
    Esta condição logica é construida com operadores de 
    comparação (<, > etc) e de logica (and e or)

    Referencias:
    1. w3schools
        https://www.w3schools.com/php/php_if_else.asp
    */

    // Exemplo 1 - Teste com variavel "String"
    // IF
    $nome = 'jogo';
    if($nome == 'jogo'){
        echo '<br>';
        echo 'Exemplo 1 - Teste com variavel "String" <br>';
        echo 'IF';
    }
    // Exemplo 2 - Teste com variavel numerica
    // IF ... ELSE
    echo '<hr>';
    $idade = 30;
    if($idade <= 18){
        echo '<br>';
        echo 'Exemplo 2 - Teste com variavel numerica <br>';
        echo 'IF...ELSE <br>';
        echo 'Menor ou igual a 18 anos';
    } else {
        echo '<br>';
        echo 'Exemplo 2 - Teste com variavel numerica <br>';
        echo 'IF...ELSE <br>';
        echo 'Maior que 18 anos'; 
    }
    // Exemplo 3 - Teste com variavel numerica / Média do Sr. Leandro
    // IF ... ELSEIF...ELSE
    // O teste logico pode verificar mais de uma verificação de verdadeiro;
    echo '<hr>';
    $media = 6.5;
    if($media <= 3){
        echo '<br> Exemplo 3 - Teste com variavel numerica / Média do Sr. Leandro <br>';
        echo 'Reprovado';
    } else if($media <= 6){
        echo '<br> Exemplo 3 - Teste com variavel numerica / Média do Sr. Leandro <br>';
        echo 'Necessario fazer Exame <br>';
    } else if($media <= 7){
        echo '<br> Exemplo 3 - Teste com variavel numerica / Média do Sr. Leandro <br>';
        echo 'Necessário fazer Recuperação';
    } else {
        echo '<br> Exemplo 3 - Teste com variavel numerica / Média do Sr. Leandro <br>';
        echo 'Aprovado';
    }

    // Exemplo 4 - Podemos deixar de utilizar Chaves quando
    // Existir uma unica instrução no bloco do IF
    echo '<hr>';
    $nota = 6.5;
    if($nota <= 3) echo '<br> Ex.4 - Sem uso de "Chaves" no bloco IF, nota <= 3 <br>';
    else if($nota <= 6) echo '<br> Ex.4 - Sem uso de "Chaves" no bloco IF, nota <= 6 <br>';
    else if($nota <= 7) echo '<br> Ex.4 - Sem uso de "Chaves" no bloco IF, nota <= 7 <br>';
    else echo '<br> Ex.4 - Sem uso de "Chaves" no bloco IF, nota > 7 <br>';

    // Exemplo 5 - Podemos deixar de utilizar Chaves quando
    // Existir uma unica instrução no bloco do IF
    echo '<hr>';
    if($nota <= 3) echo '<br> Ex.5 - Sem uso de "Chaves" no bloco IF, nota <= 3 <br>';
    else if($nota <= 6) echo '<br> Ex.5 - Sem uso de "Chaves" no bloco IF, nota <= 6 <br>';
    else if($nota <= 7){
        echo '<br> Exemplo 5 - Teste com variavel numerica / Média do Sr. Leandro <br>';
        echo 'Necessário fazer Recuperação';
    } else {
        echo '<br> Exemplo 5 - Teste com variavel numerica / Média do Sr. Leandro <br>';
        echo 'Aprovado';
    }
?>