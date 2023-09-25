<?php
    /*  Elaborar um algoritmo de verificação de numero PAR  
        Referencias:
        1- W3Schools 
            https://www.w3schools.com/php/php_operators.asp
    */
    $numeroAleatorio = rand();
    if($numeroAleatorio % 2 == 0){
        echo "Numero par";
    } else{
        echo "Numero impar";
    }
    echo '<br>';
    echo "O numero é: $numeroAleatorio";
?>