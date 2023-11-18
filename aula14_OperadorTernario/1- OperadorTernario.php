<?php
    /* --- Operador Ternário
        É um operador condicional que pode substituir uma estrutura
        simples de um IF...ELSE

        Operator	Name	    Example	                    	
           ?:	    Ternário    $x = expr1 ? exprTRU : exprFALSE

        O operador ternário precisa de tres expressões:
        1.$x = expr1 - Expressão logica de avaliação
        2.exprTRU - É o codigo a ser executado quando o resultado
            da avaliação for verdadeira
        3.exprFALSE - É o codigo a ser executado quando o resultado
            da avaliação for falsa

        Referencias:
        1. W3Schools
            https://www.w3schools.com/php/php_operators.asp
    */

    # Sintaxe 1
    $opcao = 1;
    $nome = $opcao == 1 ? "Mari" : "Agda"; # 'Mari'
    echo $nome . '<br>';

    # Sintaxe 2
    $opcao == 0 ? $nome = "Mari" : $nome = "Agda"; # 'Agda'
    echo $nome . '<br>';
?>
<!--------------- Exemplos de uso no HTML e CSS ------------->
<!-- PHP com HTML -->
<!-- Construção similar a Sintaxe 1 construida com IF -->
<?php if($opcao == 1): ?>
    <h2>SIM-2</h2>
<?php else: ?>
    <h2>NÃO-2</h2>
<?php endif; ?>

<!-- Exemplo, para controlar CSS -->
<h2 style="color:<?=$opcao == 1 ? 'red' : 'blue'?>">
    Este texto tem cor definida pelo PHP </h2>