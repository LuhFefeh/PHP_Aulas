<?php
    // Loops (Ciclos) em PHP
    # ForEach
    # Permite executar um bloco de codigo a partir de um "array"

    # Exemplo 1
    echo "Exemplo 1" . "<br>";
    $nomes = ['Mari', 'Agda', 'Lena'];
    foreach($nomes as $nome){
        echo $nome . "<br>";
    }
    # Notar que não a necessidade de uma variavel incremental
    # Automaticamente cada elemento do "Array" é transferida para
    # a variavel logo após a declaração "as"

    # Exemplo 2
    # Outra assinatura do laço FOREACH
    # "Array" Associativo
    echo "<hr>Exemplo 2 <br>";
    $EstadoCapital = [
        'Acre'      =>  'Rio Branco',
        'Amapa'     =>  'Macapa',
        'Alagoas'   =>  'Maceio',
        'Ceará'     =>  'Fortaleza'
    ];
    foreach($EstadoCapital as $chave => $value){
       echo "Para o estado $chave a capital é $value <br>"; 
    }
?>