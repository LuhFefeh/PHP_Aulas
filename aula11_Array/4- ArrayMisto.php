<?php
    /* --- Arrays mistos (Combinação de 'Arrays' numericos e associativos)
        Podemos criar um array que combine indices numericos ou normais.
        Embora não seja utilizados com frequencia, devido a dificuldade
        de gerenciar os dados neste tipo de 'array'.  
    */

    $dados =[
        0           => 10,
        'nome'      => 'Mari',
        'sobrenome' => 'Dias',
        10 => 100
    ];
    // Para apresentar o conteudo 
    echo $dados[0]. "<br>";
    echo $dados['nome']. "<br>";

?>