<?php
    // Funções em PHP
    // Parametros Opcionais
    
    # Exemplo 1
    function divisor($a, $b=2){
        # Parametro $a - Passa a ser obrigatorio
        # Parametro $b - É um opcional e deve ser o ultimo deles
        #   Caso não seja passado, ele assume o valor padrão.
        #   No caso o valor numerico 2 
        echo $a/$b;
    }

    divisor(10); # 5
    echo "<br>";
    divisor(20, 10); # 2
    
?>