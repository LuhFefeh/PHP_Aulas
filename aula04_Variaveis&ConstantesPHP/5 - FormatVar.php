<?php 
    /* Formatação de variáveis numericas */
    # Utilizando numberformat()
    echo "Formatação de variáveis numéricas <br>";

    # Definindo a variável
    $val = 1175.5; #float
    // 1 - Apresentando a variável SEM formatação 
    echo "1 - Apresentando a variável SEM formatação <br>";
    echo "Valor da variavel R$: $val";
    echo "<br>";


    // Verificando o tipo da variável 
    # Utilizando var_dump()

    echo "<br> Verificando o tipo de variável: ";
    echo var_dump($val);
    echo "<br>";

    // 2 - Apresentando a variável COM formatação
    echo "<br>";
    echo "2 - Apresentando a variavel COM formatação <br>";
    $valFormat = number_format($val, 2, ',', '.');
    echo "Valor da variavel R$: $valFormat";
    
     // Verificando o tipo da variável 
    # Utilizando var_dump()

    echo "<br> Verificando o tipo de variável: ";
    echo var_dump($valFormat);
    echo "<br>";

    /*  Referencias: 
        1 - W3Schools 
            https://www.w3schools.com/php/func_string_number_format.asp
    */ 
?>