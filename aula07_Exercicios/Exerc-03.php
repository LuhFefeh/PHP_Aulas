<?php
    /*  Exercicio 03
        Apresentar a area de diferentes forma geometrica
        Medidas em cm.
        
        a. Quadrado com lado 4cm

        b. Triangulo "Base = 3"
                     "Altura = 2"

        c. Trapézio "Base Maior = 4"
                    "Base Menor = 2"
                    "Altura = 3"
    */
    
    // Exercicio A - Quadrado
    $areaQuadrado = 4 * 4;
    echo "Area do quadrado de 4cm: $areaQuadrado";
    echo '<br>';
    echo '<hr>';

    // Exercicio B - Triangulo
    $areaTriangulo = (3 * 2) / 2;
    echo "Area do triangulo é: $areaTriangulo";
    echo '<br>';
    echo '<hr>';

    // Exercicio C - Trapézio
    $areaTrapezio = ((4 + 2)*3) / 2;
    echo "Area do trapézio é: $areaTrapezio";
    echo '<br>';
?>