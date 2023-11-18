<?php
    /*  ---- Declarações e instruções condicionais
    Switch - É uma alternativa ao encadeamento do IF...ELSEIF

    Referencias:
    1. w3schools
        https://www.w3schools.com/php/php_if_else.asp
    */
    $nome =  "mari";
    Switch($nome){
        case 'Joana':
            // Execução do codigo
            echo 'Instruções do primeiro bloco de codigo';
            echo '<br>';
            break;
        case 'Agda':
            // Execução do codigo
            echo 'Instruções do primeiro bloco de codigo';
            echo '<br>';
            break;
        default:
            // Execução do caso nenhuma das opções anteriores sejam satisfeitas
            echo 'Instruções do primeiro bloco alternativa';
            echo '<br>';
            break;
    }
?>