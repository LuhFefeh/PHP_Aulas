<?php
    // Loops (ciclos) em php
    # Laço for 
    # Permite executar um bloco de codigo em um determinado numero de vezes
    # É constituido de tres parametros:
    # 1. Valor inicial numerico - É utilizado para controlar o numero de "Loops"
    # 2. Condição = avalia o contador para o encerramento do "loop"
    # 3. Incremento ou decremento - altera o valor do contador

    # note que a variavel é criada e inicializada dentro do laço
    # Exemplo 1
    for($x = 1; $x < 10; $x++){
        echo "Exemplo 1 - valor de x = " . $x . "<br>";
    }
    echo "<hr>";
    # Exemplo 2 - Redução do codigo, apenas se tiver uma unica instrução
    for($x = 1; $x < 10; $x++) echo "Exemplo 2 - valor de x = " . $x . "<br>";
    echo "<hr>";
    # Exemplo 3
    // Existem Assinaturas diferenciadas do laço FOR.
    // Veremos uma delas
    $z = 1;
    for(; $z< 10;){
        $z++;
        echo "Exemplo 3 - valor de z = " . $z . "<br>";
    }
    echo "<hr>";
    # Exemplo 4
    # Array
    $nomes=['Mari', 'Agda', 'Lena'];
    for($i = 0; $i < sizeof($nomes);$i++){
        echo "Exemplo 4 - Nome " . $nomes[$i] . "<br>";
    }
?>