<?php
/* Manipulação de variável
   Referencias:  
   1 - W3Schools - PHP Variables
   https://www.w3schools.com/php/php_variables.asp
   2- W3Schools - PHP Variables Scope
   https://www.w3schools.com/php/php_variables_scope.asp

*/
# Uma variável 
$a = "Olá";

#Variável variável
$$a = "Word";

echo "$a <br>";
echo "$($a) <br>";
echo "Variável $a e variavel variavel $($a)";
/* Algumas finalidades
   1. Gerenciamento dinâmico de nomes de variáveis 
         Isto é útil para o caso de possuir muitos nomes de variáveis semelhantes.
   2. Manipulação de campos de formulário
         Utilizado para processar campos do formulário 
         com nomes dinâmicos
   
         
      

*/






?>