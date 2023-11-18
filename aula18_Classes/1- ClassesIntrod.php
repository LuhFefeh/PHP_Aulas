<?php
    // Classes
    // Referencias
    // 1.W3Schools
    //  https://www.w3schools.com/php/php_oop_classes_objects.asp
    // 2.PSR-1
    //  https://www.php-fig.org/psr/psr-1/
    
    # Introdução Prog. Orient. Objt. {POO}
    # 
    # Uma classe é definida pela declaração "class" Seguido de um nome da classe. 
    # Possui chaves de inicialização de construção do codigo.
    #
    # Por convenção do PSR-1 o corpo da classe deve ser definido da seguinte forma:

        # Exemplo 1- Definição de classes
        class AnimaisMamiferos # Primeira letra Capital
        {
            // Propriedades e metodos desta classe.
        }

        class Humano
        {
            // Propriedades e metodos desta classe. 
        }
        /* O corpo de uma classe contém PROPRIEDADES e METODOS
        PROPRIEDADES -  São variaveis em php que armazenam as caracteristicas do objeto.
                        Também são conhecidos como campos "fields" ou atributos de uma classe.
                        Precisam ter um nivel de acesso especificados (publica, reservada, etc).
        METODOS - São funções que definem o que o objeto pode fazer.
        */

        # Exemplo 2
        class FiguraGeometrica
        {
            # Definição dos campos/atributos
            public $largura, $altura;
            public $x;
            public $y;

            # Definição de metodo (é uma função)
            function metCalArea($a, $b)
            {
                return $a * $b;
            }
        }
?>