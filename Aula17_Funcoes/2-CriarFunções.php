<?php
    // Funções em PHP
    // PARAMETROS

    # Exemplo 1
    function adicao($a, $b){
        echo "Variavel recebida na função a= " . $a . "<br>";
        echo "Variavel recebida na função b= " . $b . "<br>";
    }
    # Chamada da função
    $y = 10;
    adicao($y, 20);
    echo "<hr>";
    # Exemplo 2
    $x = 10;
    adicionar($x, 20);
    echo "<br>Final do comando<hr>";

    function adicionar($a, $b){
        echo "$a + $b = ". ($a + $b);
        echo "Final da função<br>";
    }
    
    # Exemplo 3 - Array
    echo "<br>";
    $nomes = ['Mari', 'Agda', 'Lena'];
    foreach($nomes as $nome){
        saudacoes($nome);
    }

    function saudacoes($param){
        echo "Boa tarde Cinderela: $param <br>";
    }
?>