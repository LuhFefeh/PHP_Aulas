<?php
// Variaveis
// ====================================
# Utilizadas para armazenar dados: 
# números, textos, etc. 
# podemos apresentar e modificar os valores contidos em seu interior
# São definidas com um sinal de $ e o nome da variavel como identificador
$variavel01;
#Foi apenas criado um espaço de memoria nomeado

$variavel02 = 100;

# Foi criado um espaço de memória com atribuição de valor

$variavel02 = "Teste";
# Conteudo da variavel alterado com valor e tipo de dado
# Na linguagem a variavel não é tipificada. 
# Para apresentar o conteúdo 
echo $variavel02;

// As variaveis são "case sensitive"
// Portanto, variações de caixa alta e baixa no nome da variável demonstram variáveis diferentes

$variavel02 = 150;
$Variavel02 = 150;

// Formas inadequadas de criar variáveis
/*
    $1var = 0;
    $!var = 0;
    $variavel(1) = 0;
    $variavel um = 0;
    $variavel-um = 0;

*/
// Formas adequadas de criar variáveis
$var1 = 0;
$var_um = 0;
$varUm = 0;
$_umUM = 0;
$_1var = 0;

/*  Não há uma forma mais correta de nomear uma variável
    Porém é recomendado que aw utilize o mesmo padrão, ou verificar se o cliente tem um padrao
    Exemplos sugeridos são as nomeações com o padrão Camel Case ou Snake Case. 
    Exemplo:
*/
$umaVariavel = 0; // Camel Case - Padrão muito utilizado
$uma_variavel = 0; // Snake Case - Com Underline 
$UmaVariavel = 0;  // Studly Case - Não é muito recomendado pois conflita com nomes de classes 
?>

