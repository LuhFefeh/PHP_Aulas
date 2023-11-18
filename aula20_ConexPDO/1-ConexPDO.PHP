<?php
    // Fazer rapidamente uma conexão e leitura de dados do BD
    $gestor = new PDO("mysql:host=localhost; dbname=bancoteste; charset=utf8", "root", "");
    # DSN = Data Source Name (Servidor MySQL)
            # mysqli:host=localhost;
            # dbname    = Base de dados (bancoteste)
            # charset   = opções não obrigatorias
    # Usuario   = "root"
    # Password  = null,
    # $options = null,

    # Uma variavel para conter os dados da tabela
    $dados = $gestor->query("SELECT * FROM fornecedores");

    # Um metodo FETCH do PDO de busca de todos os dados armazenados
    # Associado a um ARRAY.
    $fornecedores = $dados->fetchALL(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($fornecedores);
?>