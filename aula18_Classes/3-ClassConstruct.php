<?php
    // Classes - CONSTRUCT
    # Apenas a para o caso de funções Construct sem parametros
    # Poderão alterar a forma de instancia do objeto

    class Humano2
    {
        function __construct()
        {
            // Codigo
        }
    }

    $homem = new Humano2; # Esta forma funciona apenas quando não há parametros.

    $homem = new Humano2();
?>