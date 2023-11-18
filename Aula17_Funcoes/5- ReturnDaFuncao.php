<?php
    // Funções - RETURN
    // A declaração RETURN provoca o fim da execução do codigo de uma função
    // Retornando o controle de execução para o codigo que chamou a funçõa

    # Exemplo 1
    function apresentar_texto(){
        echo "Este texto é apresentado na tela";
        return;
        echo "Este texto NÃO é apresentado na tela";
    }

    apresentar_texto();
    echo '<hr>';
    # Exemplo 2
    function adicionar($a, $b){
        $resultado = $a + $b;
        return $resultado;
        
        # Segunda forma
        return ($a + $b);
        if($resultado > 10){
            return true;
        } else{
            return false;
        }
    }
    $a = 10;
    $b = 20;
    $retorno = adicionar($a, $b);
    echo "Faz a operação de soma <br>";
    echo "$a + $b = ". $retorno;
    echo '<hr>';

    # Exemplo 3 - retorno NULL
    # Uma função sem qualquer valor de retorno, devolvera sempre um valor NULL.
    function avaliar(){
        // Código

    }

    if(avaliar() == null){
        echo "Função chamada retornou valor null";
    } else{
        echo "Função retornou um valor";
    }
    
?>