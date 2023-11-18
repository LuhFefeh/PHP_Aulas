<?php
    // Loops (Ciclos) em php
    # Do while
    # Diferente do loop WHILE
    # o codigo interno do laço do while sempre é executado
    # pelo menos uma vez.
    $x = 30;
    do{
        echo "Ciclo do while em execução ". $x;
        echo "<br>";
        $x++;
    } while ($x<10);
    echo "<hr>";
    // Também, vamos reduzir o codigo para uma expressão
    // Parte 1
    $x = 1;
    do{
        echo "Ciclo do while em execução ". $x++ . "<br>";
    } while ($x<10);
    echo "<hr>";
    // Parte 2
    $x = 1;
    do echo "Ciclo do while em execução ". $x++ . "<br>"; while ($x<10);
?>