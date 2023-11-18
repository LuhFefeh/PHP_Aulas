<?php
    /* ---- Tipos de Conexão de BD em PHP
    Referencias
    1. Documentação - W3Schools
        https://www.w3schools.com/php/php_mysql_connect.asp
    
    No PHP existem duas formas comuns de conexão a um banco de dados:
    a) extensão MySQLi (MySQL improved) - Utiliza um paradigma declarativo
        Esta extensão é uma opção recomendada para se conectar
        e interagir com o banco de dados MySQL usando PHP.
        
        Formas de conexão
        i) Estabelecer a conexão
            mysqli_connect() para conectar a um servidor MySQL
            especificando o HOST, NOME de usuario, SENHA e nome BANCO de dados
        ii) Executar consultas e manipular dados
            mysqli_query() para executar um comando SQL
            mysqli_prepare() para preparação de declarações
            mysqli_fetch_assoc() ou mysqli_fetch_object() para
            recuperar e manipular dados.
            mysqli_close() para fechar a conexão.

    b) extensão PDO (PHP Data Objects) - Utiliza um paradigma Orientado a Objetos.
        Para uma solução mais generica que suporte varios bancos de dados;
        como MySQL, PostgreSQL, SQLite, Oracle, entre outros; é mais adequado.
        O PDO oferece uma camada de abstração que permite a conexão com 
        diferentes SGBDs, oferecendo uma interface consistente para interagir
        com estes BDs.

        Formas de conexão
        i) Estabelecer a conexão
            Utiliza-se uma classe PDO (com delcaração new) para criar um
            objeto de conexão, passando a DSN (Data Source Name) que contém
            as informações do BD: DRIVER, HOST, Nome BD, USUARIO e a SENHA.
        ii) Executar consultas e manipular dados
            - Metodo query() do objeto PDO para executar a consulta SQL.
            - Metodo fetch() e fetchColumn() para recuperar resultados.
            - Atribuir NULL ao objeto PDO para fechar a conexão. Embora,
            o objeto PDO seja automaticamente destruido e a conexão fechada
            quando se deixa o escopo de execução do objeto
    */
?>