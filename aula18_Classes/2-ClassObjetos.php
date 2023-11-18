<?php
    // Classes - Objetos e Instancias
    # Para trabalhar com classes é necessario instanciar objetos desta classe

    # Para acessar as propriedades de uma classe, dentro dos metodos
    # da classe, é preciso utilizar a pseudo variavel "$this" mais o operador
    # seta "->"

    # Exemplo 1
    # A construção da classe antes ou depois do codigo principal,
    # não interfere em sua visibilidade ou sintaxe.
    class Humano{
        # Propriedade. Neste caso já preenchida.
        public $nome = 'Professor'; # 'public' modificador de acesso.
        public $codNome = 'Jonatas';

        # Métodos
        public function nomeCompleto(){
            return $this->nome . ' ' . $this->codNome;
            $nome = 'Teste';
        }
    }

    $homem = new Humano();

    echo $homem->nomeCompleto();

    echo '<hr>';
    // --- Referencias
    // 1. W3Schools
    //      https://www.w3schools.com/php/php_oop_constructor.asp
    //
    // CONSTRUCT
    # O construct é um metodo especial dentro de uma classe
    # que é executado automaticamente quando é criado um objeto apartir de uma classe
    # Este metodo é definido de uma forma especial com __
    # dois "underline"

    # Exemplo 3
    class Humano2{
        private $nome;  # 'Private' indica que esta propriedade é visivel apenas pelos
                        # metodos do interior da classe. Os objetos não sabem da existencia
                        # destas propriedades.
        private $codNome;

        # Esta função é executado de forma automatica quando se instancia
        # um objeto desta classe.
        function __construct($n, $c){
            $this->nome = $n;
            $this->codNome = $c;
        }
        public function funCodNome(){
            return $this->nome . ' ' . $this->codNome;
        }
    }

    $homem = new Humano2('Jonatas','Dias');
    echo $homem->funCodNome();
?>