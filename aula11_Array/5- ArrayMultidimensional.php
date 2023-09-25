<?php
    /* --- Array Multidimensional
        São 'Arrays' numericos ou associativos, 
        cujos valores são outros 'Arrays'    
    */

    // Exemplo 1- Array multidimensional de indice numerico
    $dados = [
        [10, 20, 30],       # Elemento 1 de indice 0
        [100, 200, 300],    # Elemento 2 de indice 1
        [1000,              # Elemento 3 de indice 2, Subitem 1 de indice 0
        2000,               # Elemento 4 de indice 3, Subitem 2 de indice 1
        3000]
    ];

    // Como acessar os elementos deste tipo de 'array'
    echo $dados[2][2] . "<br><hr>";  # 3000

    // Exemplo 2- Array multidimensional de indice nomeado
    $dados2 = [
        'cliente01' => ['nome', 'endereco', 'fone_contato'],
        'estados' => ['Alagoas', 'Pará'],
        'frutas' => ['Banana', 'Maça']
    ];

    // Como acessar os elementos deste tipo de 'array'
    echo $dados2['cliente01'][0];

?>