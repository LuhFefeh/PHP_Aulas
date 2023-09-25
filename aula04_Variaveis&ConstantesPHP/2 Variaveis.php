<?php
// Variaveis - Continuação
// ============================
// Definição de variáveis 
$nome = "João"; // String
$aula = 'PHP';  // String
$idade = 19;    // int
$peso = 90.5;   // float
$alt = 198.1;    // float

// Utilizando variáveis

echo "Utilizando variaveis";
echo "<br>";
echo "Meu nome: $nome <br>";
echo 'Minha idade $idade <br>';
// Concatenação de string com .  
echo 'Minha idade '.$idade;
echo '<br>';
// Informações sobre variaveis
echo '<br> Informações sobre variaveis <br>';
var_dump($nome);
echo '<br>';
var_dump($idade);
echo '<br>';
var_dump($peso);

?>