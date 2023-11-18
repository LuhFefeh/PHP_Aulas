<?php
    //  Classes somente com propriedades
    //      Somente com metodos
    //
    // Podemos contruir classes sem qualquer tipo de metodo.
    // Ou ainda, classes sem qualquer tipo de propriedade.

    # Exemplo 1
    class Pessoa1{
        #Classe apenas com propriedades
        public $nome;
        public $codnome;
    }

    class Pessoa2{
        # Classe apenas com metodos
        public function msg(){
            // Metodo acessivel fora da classe 
        }

        private function andar(){
            // Método acessivel apenas dentro da classe
        }
        # Os objetos não sabem da existencia deste metodo
        public function movimento(){
            $this->andar();
        }
    }

    // A classe "Pessoal" permite acesso extrerno de duas propriedades.
    // Pois, o modificador de acesso é "public".
    $humano1 = new Pessoa1();
    $humano1->nome='Mari';
    $humano1->codNome='Acessora';

    $humano2 = new Pessoa2();
    $humano2->andar();
    # Esta instrução gera erro porque o metodo o "private";
    # O correto é chamar4 o metodo externo "movimento"
    $humano2->movimento();
?>