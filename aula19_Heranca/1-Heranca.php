<?php
    // HERANÇA - é uma classe base que a partir delas outras serão criadas.
    # Uso da declaração "extends"
    #
    # Todas as classes geradas a partir da classe base, são denominadas
    # classe derivado.

    class baseMamifero{
        public $especie;
        public $peso;

        function grupoEspec(){
            return "Este animal é do grupo {$this->especie}";
            // As chaves {} são necessarias para fazermos
            // A concatenação de propriedade
        }
    }
    $grupoAnimal = new baseMamifero();
    $grupoAnimal->especie = "Marsupiais";

    echo $grupoAnimal->grupoEspec();

    // Classe DERIVADA
    class Euterios extends baseMamifero{
        // Não é necessario definir novamente as propriedades e metodos
        # pois estes já existem na classe base.
        # Porém, podemos acrescentar outras propriedades e metodos
        public $qtdPernas;
        public $peloSimOuNao;

        function qtdPernasTem(){
            return "O animal possui {$this->qtdPernas} pernas";
        }
    }

    $animal = new Euterios();
    // Metodo da classe
    $animal->qtdPernas = 4;
    echo 'Metodo da classe derivada';
    echo '<br>';
    echo $animal->qtdPernasTem();
    echo '<br>';

    // Metodo da classe base
    $animal->especie = 'Euterio';
    echo '<br>';
    echo 'Metodo da classe base';
    echo '<br>';
    echo $animal->grupoEspec();
?>