<?php
    // Classes anonimas
    # Disponivel a partir de versão 7
    # Assim como em outras linguagens só faz sentido uma
    # existir uma classe anonima

    # Exemplo 1 - Tradicional
    class classObjetos{
        // Criar aqui as propriedades e os metodos
        function teste(){
            echo 'Teste - 1 Classe Tradicional';
        }
    }
    // Instanciacao
    $objeto1 = new classObjetos();
    $objeto1->teste();
    echo '<br>';

    # Exemplo 2 - Classe anonima
    $classAnon = new class{
        function teste2(){
            echo 'Teste - 2 Classe Anonima';
        }
    }; // IMPORTANTE: Ter o ponto e virgula

    // Instanciação
    $classAnon->Teste2();
?>