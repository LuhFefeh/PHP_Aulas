<?php
    // Funções - Parâmetros
    // Parâmetros adicionais
    // Situação em que a função tem UM parâmetro como certo,
    // Porém na chamada da função, são passados um numero maior de argumentos.

    # Exemplo
    function divisor($a){
        # Parâmetro $a é obrigatorio
        # Porém, podem haver mais parâmetros
        $qtdArgum = func_num_args();

        # Avaliar quantos argumentos foram passados
        // Neste codigo vamos nos limitar ao maximo de 3 parâmetros
        switch($qtdArgum){
            case 2:
                $x = func_get_arg(0);
                $y = func_get_arg(1);
                echo "<br> A função recebeu DOIS argumentos <br>";
                echo "Apenas DIVISÃO <br>";
                echo ($x / $y) . "<br>";
                break;

            case 3:
                $x = func_get_arg(0);
                $y = func_get_arg(1);
                $z = func_get_arg(2);
                echo "<br> A função recebeu Três argumentos <br>";
                echo "Fazer DIVISÃO e SOMA <br>";
                echo ($x / $y)+$z . "<br>";
                break;

            default:
                echo "<br> A função deve receber no maximo TRÊS argumentos <br>";
                echo "Ou pelo menos DOIS para ser executada <br>";
                break;
        }
    }

    echo "Teste de função com UM parametro";
    divisor(10);
    echo '<hr>';

    echo "Teste de função com DOIS parametros";
    divisor(20, 10);
    echo '<hr>';

    echo "Teste de função com TRÊS parametros";
    divisor(20, 10 , 30);
    echo '<hr>';

    // Verificação de varios parâmetros
    function nova_funcao(...$argumentos){
        foreach($argumentos as $x){
            echo "$x <br>";
        }
    }
    nova_funcao(10,20,30,40,50);
    
?>